<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;

use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ActivityLogController extends Controller
{
    /**
     * Display dynamic Activity Logs audit dashboard.
     */
    public function index(Request $request): View
    {
        $query = ActivityLog::query()->latest();

        // Search Filter
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('description', 'like', "%{$search}%")
                    ->orWhere('admin_email', 'like', "%{$search}%")
                    ->orWhere('admin_name', 'like', "%{$search}%")
                    ->orWhere('ip_address', 'like', "%{$search}%")
                    ->orWhere('browser', 'like', "%{$search}%")
                    ->orWhere('location_address', 'like', "%{$search}%");
            });
        }

        // Event Type Filter
        $filter = $request->input('filter', 'all');
        match ($filter) {
            'logins' => $query->where('event_type', 'login'),
            'logout' => $query->where('event_type', 'logout'),
            'password_changes' => $query->where('event_type', 'password_change'),
            'profile_updates' => $query->where('event_type', 'profile_update'),
            'system_actions' => $query->whereNotIn('event_type', ['login', 'logout', 'password_change', 'profile_update']),
            default => null,
        };

        $logs = $query->paginate(15)->withQueryString();

        // Aggregate Metrics for Admin Audit Stats Cards
        $currentAdmin = Auth::user();
        $adminId = $currentAdmin ? $currentAdmin->id : null;

        $passwordChangeCount = ActivityLog::where('event_type', 'password_change')->count();
        $lastPasswordChange = ActivityLog::where('event_type', 'password_change')->latest()->value('created_at');

        $profileUpdateCount = ActivityLog::where('event_type', 'profile_update')->count();
        $lastProfileUpdate = ActivityLog::where('event_type', 'profile_update')->latest()->value('created_at');

        $totalLogins = ActivityLog::where('event_type', 'login')->count();
        $uniqueLocationsCount = ActivityLog::whereNotNull('ip_address')->distinct('ip_address')->count('ip_address');

        return view('admin.activity.index', compact(
            'logs',
            'passwordChangeCount',
            'lastPasswordChange',
            'profileUpdateCount',
            'lastProfileUpdate',
            'totalLogins',
            'uniqueLocationsCount',
            'filter',
            'search'
        ));
    }

    /**
     * Background Heartbeat Pulse to continuously update active session duration.
     */
    public function pulse(Request $request): JsonResponse
    {
        $logId = session('active_login_log_id');

        if ($logId) {
            $log = ActivityLog::find($logId);
            if ($log && $log->login_at) {
                $now = Carbon::now();
                $diffInSeconds = $log->login_at->diffInSeconds($now);

                $hours = floor($diffInSeconds / 3600);
                $minutes = floor(($diffInSeconds % 3600) / 60);
                $seconds = $diffInSeconds % 60;

                $durationText = sprintf('%02dh %02dm %02ds', $hours, $minutes, $seconds);

                $log->update([
                    'logout_at' => $now,
                    'session_duration' => $durationText,
                ]);

                return response()->json([
                    'success' => true,
                    'session_duration' => $durationText,
                ]);
            }
        }

        return response()->json(['success' => false]);
    }

    /**
     * Export Activity Audit Logs to CSV file download.
     */
    public function export(): StreamedResponse
    {
        $fileName = 'activity_audit_logs_'.date('Y-m-d_H-i-s').'.csv';
        $logs = ActivityLog::latest()->get();

        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => "attachment; filename={$fileName}",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $columns = ['ID', 'Admin Name', 'Admin Email', 'Event Type', 'Description', 'Login At', 'Logout At', 'Session Duration', 'IP Address', 'Browser', 'Device OS', 'Location Address', 'Created At'];

        $callback = function () use ($logs, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($logs as $log) {
                fputcsv($file, [
                    $log->id,
                    $log->admin_name ?? 'N/A',
                    $log->admin_email ?? 'N/A',
                    strtoupper($log->event_type),
                    $log->description,
                    $log->login_at ? $log->login_at->format('Y-m-d H:i:s') : 'N/A',
                    $log->logout_at ? $log->logout_at->format('Y-m-d H:i:s') : 'N/A',
                    $log->session_duration ?? 'N/A',
                    $log->ip_address ?? 'N/A',
                    $log->browser ?? 'N/A',
                    $log->device_os ?? 'N/A',
                    $log->location_address ?? 'N/A',
                    $log->created_at ? $log->created_at->format('Y-m-d H:i:s') : 'N/A',
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
