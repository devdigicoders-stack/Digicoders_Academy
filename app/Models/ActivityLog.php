<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'admin_email',
        'admin_name',
        'event_type',
        'description',
        'login_at',
        'logout_at',
        'session_duration',
        'ip_address',
        'user_agent',
        'browser',
        'device_os',
        'latitude',
        'longitude',
        'location_address',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'login_at' => 'datetime',
            'logout_at' => 'datetime',
        ];
    }

    /**
     * Relationship to Admin.
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    /**
     * Get Google Maps URL for the logged location.
     */
    public function getGoogleMapsUrlAttribute(): ?string
    {
        if ($this->latitude && $this->longitude) {
            return "https://www.google.com/maps?q={$this->latitude},{$this->longitude}";
        }

        if ($this->location_address) {
            return 'https://www.google.com/maps/search/?api=1&query='.urlencode($this->location_address);
        }

        return null;
    }
}

