<?php

use App\Models\Notification;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('notification service creates database notification record', function () {
    $notification = NotificationService::notify(
        '🎓 New Student Registered',
        'Rahul Kumar enrolled in ADWD program.',
        'success',
        'fa-solid fa-graduation-cap'
    );

    expect($notification)->toBeInstanceOf(Notification::class);
    $this->assertDatabaseHas('notifications', [
        'title' => '🎓 New Student Registered',
        'type' => 'success',
        'is_read' => false,
    ]);
});

test('authenticated admin can view notifications index page', function () {
    $admin = User::factory()->create();

    NotificationService::notify('Test Notification', 'Sample body text', 'info');

    $response = $this->actingAs($admin)->get(route('admin.notifications.index'));

    $response->assertStatus(200);
    $response->assertSee('Notification Center');
    $response->assertSee('Test Notification');
});

test('authenticated admin can fetch recent notifications json for topbar dropdown', function () {
    $admin = User::factory()->create();

    NotificationService::notify('Recent Alert', 'Quick summary text', 'warning');

    $response = $this->actingAs($admin)->getJson(route('admin.notifications.recent'));

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'unread_count',
        'notifications',
    ]);
    $response->assertJsonFragment([
        'title' => 'Recent Alert',
    ]);
});

test('admin can mark single notification as read', function () {
    $admin = User::factory()->create();
    $notif = NotificationService::notify('Unread Alert', 'Body text', 'error');

    expect($notif->is_read)->toBeFalse();

    $response = $this->actingAs($admin)->postJson(route('admin.notifications.markAsRead', $notif->id));

    $response->assertStatus(200);
    expect($notif->fresh()->is_read)->toBeTrue();
});

test('admin can mark all notifications as read', function () {
    $admin = User::factory()->create();
    NotificationService::notify('Alert 1', 'Text 1', 'info');
    NotificationService::notify('Alert 2', 'Text 2', 'warning');

    expect(Notification::unread()->count())->toBe(2);

    $response = $this->actingAs($admin)->postJson(route('admin.notifications.markAllAsRead'));

    $response->assertStatus(200);
    expect(Notification::unread()->count())->toBe(0);
});

test('admin can delete a notification', function () {
    $admin = User::factory()->create();
    $notif = NotificationService::notify('Delete Me', 'To be removed', 'info');

    $response = $this->actingAs($admin)->deleteJson(route('admin.notifications.destroy', $notif->id));

    $response->assertStatus(200);
    $this->assertDatabaseMissing('notifications', [
        'id' => $notif->id,
    ]);
});

test('admin can bulk delete selected notifications', function () {
    $admin = User::factory()->create();
    $n1 = NotificationService::notify('Bulk 1', 'Text', 'info');
    $n2 = NotificationService::notify('Bulk 2', 'Text', 'info');

    $response = $this->actingAs($admin)->postJson(route('admin.notifications.bulkDelete'), [
        'ids' => [$n1->id, $n2->id],
    ]);

    $response->assertStatus(200);
    expect(Notification::count())->toBe(0);
});
