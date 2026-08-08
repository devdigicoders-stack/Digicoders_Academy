<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMaintenanceMode
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Allow access to admin panel and login endpoints during maintenance
        if ($request->is('admin*') || $request->is('login*')) {
            return $next($request);
        }

        // Check if maintenance mode is enabled in database settings
        $isMaintenance = Setting::getByKey('maintenance_mode', '0') == '1';

        if ($isMaintenance) {
            $settings = Setting::all()->pluck('value', 'key')->toArray();

            return response()->view('errors.maintenance', compact('settings'), 503);
        }

        return $next($request);
    }
}
