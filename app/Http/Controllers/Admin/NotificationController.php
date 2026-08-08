<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NotificationController extends Controller
{
    /**
     * Display a listing of notifications with search & filter.
     */
    public function index(Request $request): View
    {
        $query = Notification::query()->latest();

        // Search filter
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('message', 'like', "%{$search}%");
            });
        }

        // Status / Date Filter
        $filter = $request->input('filter', 'all');
        match ($filter) {
            'unread' => $query->unread(),
            'read' => $query->read(),
            'today' => $query->today(),
            'yesterday' => $query->yesterday(),
            'this_week' => $query->thisWeek(),
            default => null,
        };

        $notifications = $query->paginate(15)->withQueryString();
        $unreadCount = Notification::unread()->count();
        $totalCount = Notification::count();

        return view('admin.notifications.index', compact('notifications', 'unreadCount', 'totalCount', 'filter', 'search'));
    }

    /**
     * Get recent notifications JSON for topbar dropdown & AJAX polling.
     */
    public function recent(): JsonResponse
    {
        $unreadCount = Notification::unread()->count();
        $notifications = Notification::latest()
            ->take(8)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'message' => $item->message,
                    'type' => $item->type,
                    'icon' => $item->icon ?? 'fa-solid fa-circle-info',
                    'url' => $item->url ?? route('admin.notifications.index'),
                    'is_read' => $item->is_read,
                    'created_at_human' => $item->created_at ? $item->created_at->diffForHumans() : 'Just now',
                ];
            });

        return response()->json([
            'unread_count' => $unreadCount,
            'notifications' => $notifications,
        ]);
    }

    /**
     * Get live unread count JSON.
     */
    public function unreadCount(): JsonResponse
    {
        return response()->json([
            'unread_count' => Notification::unread()->count(),
        ]);
    }

    /**
     * Mark single notification as read.
     */
    public function markAsRead(Notification $notification, Request $request): JsonResponse|RedirectResponse
    {
        $notification->update(['is_read' => true]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Notification marked as read.',
                'unread_count' => Notification::unread()->count(),
            ]);
        }

        return redirect()->back()->with('success', 'Notification marked as read.');
    }

    /**
     * Mark all notifications as read.
     */
    public function markAllAsRead(Request $request): JsonResponse|RedirectResponse
    {
        Notification::unread()->update(['is_read' => true]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'All notifications marked as read.',
                'unread_count' => 0,
            ]);
        }

        return redirect()->back()->with('success', 'All notifications marked as read.');
    }

    /**
     * Delete a single notification.
     */
    public function destroy(Notification $notification, Request $request): JsonResponse|RedirectResponse
    {
        $notification->delete();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Notification deleted successfully.',
                'unread_count' => Notification::unread()->count(),
            ]);
        }

        return redirect()->back()->with('success', 'Notification deleted successfully.');
    }

    /**
     * Bulk delete selected notifications.
     */
    public function bulkDelete(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:notifications,id',
        ]);

        Notification::whereIn('id', $validated['ids'])->delete();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Selected notifications deleted successfully.',
                'unread_count' => Notification::unread()->count(),
            ]);
        }

        return redirect()->back()->with('success', 'Selected notifications deleted successfully.');
    }
}
