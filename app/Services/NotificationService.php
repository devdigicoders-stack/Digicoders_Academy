<?php

namespace App\Services;

use App\Models\Notification;

class NotificationService
{
    /**
     * Dispatch a new notification record.
     */
    public static function notify(
        string $title,
        string $message,
        string $type = 'info',
        ?string $icon = null,
        ?string $url = null
    ): Notification {
        // Fallback default icons per type
        if (! $icon) {
            $icon = match ($type) {
                'success' => 'fa-solid fa-circle-check',
                'warning' => 'fa-solid fa-triangle-exclamation',
                'error' => 'fa-solid fa-circle-xmark',
                'primary' => 'fa-solid fa-star',
                default => 'fa-solid fa-circle-info',
            };
        }

        return Notification::create([
            'title' => $title,
            'message' => $message,
            'type' => $type,
            'icon' => $icon,
            'url' => $url,
            'is_read' => false,
        ]);
    }

    /**
     * Dispatch New Admission notification.
     */
    public static function notifyAdmission(string $name, string $courseName, ?string $url = null): Notification
    {
        return static::notify(
            '🎓 New Admission Inquiry',
            "{$name} applied for {$courseName} course.",
            'success',
            'fa-solid fa-user-graduate',
            $url ?? route('admin.admissions.index')
        );
    }

    /**
     * Dispatch Contact Form Enquiry notification.
     */
    public static function notifyContact(string $name, string $subject, ?string $url = null): Notification
    {
        return static::notify(
            '📩 New Contact Enquiry',
            "{$name} submitted a contact form: {$subject}",
            'info',
            'fa-solid fa-envelope',
            $url ?? route('admin.contact-enquiries.index')
        );
    }

    /**
     * Dispatch Blog Published notification.
     */
    public static function notifyBlog(string $blogTitle, ?string $url = null): Notification
    {
        return static::notify(
            '📰 Blog Published',
            "New article '{$blogTitle}' has been published.",
            'primary',
            'fa-solid fa-newspaper',
            $url ?? route('admin.blogs.index')
        );
    }

    /**
     * Dispatch Gallery Upload notification.
     */
    public static function notifyGallery(string $title, ?string $url = null): Notification
    {
        return static::notify(
            '🖼 Gallery Updated',
            "New media '{$title}' uploaded to photo gallery.",
            'info',
            'fa-solid fa-images',
            $url ?? route('admin.gallery.index')
        );
    }

    /**
     * Dispatch Testimonial Added notification.
     */
    public static function notifyTestimonial(string $studentName, ?string $company = null, ?string $url = null): Notification
    {
        $companyText = $company ? " ({$company})" : '';

        return static::notify(
            '⭐ New Testimonial',
            "Student testimonial added for {$studentName}{$companyText}.",
            'success',
            'fa-solid fa-quote-right',
            $url ?? route('admin.testimonials.index')
        );
    }

    /**
     * Dispatch Newsletter Subscriber notification.
     */
    public static function notifySubscriber(string $email, ?string $url = null): Notification
    {
        return static::notify(
            '📧 New Newsletter Subscriber',
            "{$email} subscribed to academy updates.",
            'info',
            'fa-solid fa-paper-plane',
            $url ?? route('admin.subscribers.index')
        );
    }

    /**
     * Dispatch Website Settings Updated notification.
     */
    public static function notifySettings(string $section = 'General', ?string $url = null): Notification
    {
        return static::notify(
            '⚙ Website Settings Updated',
            "Website {$section} configuration was modified.",
            'warning',
            'fa-solid fa-sliders',
            $url ?? route('admin.settings.index')
        );
    }

    /**
     * Dispatch Admin Login notification.
     */
    public static function notifyAdminLogin(string $email): Notification
    {
        return static::notify(
            '🔐 Admin Login',
            "Admin user {$email} logged into CMS dashboard.",
            'primary',
            'fa-solid fa-key',
            route('admin.dashboard')
        );
    }
}
