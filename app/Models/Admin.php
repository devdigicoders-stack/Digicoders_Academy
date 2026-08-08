<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relationship with activity logs.
     */
    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class, 'admin_id');
    }

    /**
     * Password change count.
     */
    public function getPasswordChangeCountAttribute(): int
    {
        return ActivityLog::where('admin_id', $this->id)
            ->where('event_type', 'password_change')
            ->count();
    }

    /**
     * Last password change date.
     */
    public function getLastPasswordChangedAtAttribute(): ?string
    {
        return ActivityLog::where('admin_id', $this->id)
            ->where('event_type', 'password_change')
            ->latest()
            ->value('created_at');
    }

    /**
     * Profile update count.
     */
    public function getProfileUpdateCountAttribute(): int
    {
        return ActivityLog::where('admin_id', $this->id)
            ->where('event_type', 'profile_update')
            ->count();
    }

    /**
     * Last profile update date.
     */
    public function getLastProfileUpdatedAtAttribute(): ?string
    {
        return ActivityLog::where('admin_id', $this->id)
            ->where('event_type', 'profile_update')
            ->latest()
            ->value('created_at');
    }

    /**
     * Get profile image URL or UI-Avatars API with initial letter of admin name.
     */
    public function getProfileImageAttribute(): string
    {
        if ($this->image && file_exists(public_path('uploads/admins/'.$this->image))) {
            return asset('uploads/admins/'.$this->image);
        }

        $name = urlencode($this->name ?: 'Admin User');

        return "https://ui-avatars.com/api/?name={$name}&background=00A651&color=ffffff&bold=true";
    }
}

