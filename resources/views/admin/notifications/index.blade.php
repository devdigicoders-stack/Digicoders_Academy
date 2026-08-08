@extends('layouts.admin')

@section('title', 'Notification Center')

@section('content')
<div class="dc-container">

    <!-- Page Header & Action Bar -->
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 24px;">
        <div>
            <h1 style="font-size: 20px; font-weight: 600; color: var(--dc-dark); margin-bottom: 4px; display: flex; align-items: center; gap: 10px;">
                <i class="fa-regular fa-bell" style="color: var(--dc-green);"></i>
                <span>Notification Center</span>
                <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i>
            </h1>
            <p style="color: var(--dc-light-gray); font-size: 13px; margin: 0;">Manage, filter, and track system notifications and activity alerts in real time.</p>
        </div>

        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <form action="{{ route('admin.notifications.markAllAsRead') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="dc-btn dc-btn-outline" style="padding: 8px 14px; font-size: 12.5px; background: var(--dc-white);">
                    <i class="fa-solid fa-check-double" style="color: var(--dc-green);"></i>
                    <span>Mark All as Read</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Filter Tabs & Real-Time Search Bar -->
    <div class="dc-card" style="padding: 16px 20px; margin-bottom: 24px;">
        <form action="{{ route('admin.notifications.index') }}" method="GET" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <!-- Filter Tabs -->
            <div style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center;">
                <a href="{{ route('admin.notifications.index', ['filter' => 'all', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter', 'all') === 'all' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 6px; text-decoration: none; box-sizing: border-box;">
                    All ({{ $totalCount }})
                </a>
                <a href="{{ route('admin.notifications.index', ['filter' => 'unread', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'unread' ? 'dc-badge-green' : 'dc-badge-orange' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 6px; text-decoration: none; box-sizing: border-box;">
                    Unread ({{ $unreadCount }})
                </a>
                <a href="{{ route('admin.notifications.index', ['filter' => 'read', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'read' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 6px; text-decoration: none; box-sizing: border-box;">
                    Read
                </a>
                <a href="{{ route('admin.notifications.index', ['filter' => 'today', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'today' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 6px; text-decoration: none; box-sizing: border-box;">
                    Today
                </a>
                <a href="{{ route('admin.notifications.index', ['filter' => 'yesterday', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'yesterday' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 6px; text-decoration: none; box-sizing: border-box;">
                    Yesterday
                </a>
                <a href="{{ route('admin.notifications.index', ['filter' => 'this_week', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'this_week' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 6px; text-decoration: none; box-sizing: border-box;">
                    This Week
                </a>
            </div>

            <!-- Search Field -->
            <div style="display: flex; gap: 8px; align-items: center; width: 100%; max-width: 320px;">
                <input type="hidden" name="filter" value="{{ request('filter', 'all') }}">
                <div style="position: relative; width: 100%;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: var(--dc-light-gray); font-size: 13px;"></i>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search title or message..." style="width: 100%; height: 38px; padding: 0 14px 0 36px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 6px; font-size: 13px; outline: none;">
                </div>
                <button type="submit" class="dc-btn dc-btn-green" style="padding: 0 18px; height: 38px; font-size: 13px; font-weight: 600; border-radius: 6px;">Search</button>
            </div>
        </form>
    </div>

    <!-- Bulk Action Form & Notification Items List -->
    <form id="bulkForm" action="{{ route('admin.notifications.bulkDelete') }}" method="POST">
        @csrf
        
        <!-- Bulk Action Bar -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px; padding: 0 4px;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <input type="checkbox" id="selectAllCheckbox" style="width: 16px; height: 16px; cursor: pointer; accent-color: var(--dc-green);">
                <label for="selectAllCheckbox" style="font-size: 12.5px; font-weight: 600; cursor: pointer; color: var(--dc-dark-muted);">Select All</label>
            </div>

            <button type="submit" id="bulkDeleteBtn" class="dc-btn" style="padding: 6px 12px; font-size: 12px; background: rgba(239, 68, 68, 0.1); color: #ef4444; border: 1px solid rgba(239, 68, 68, 0.2); opacity: 0.5; cursor: not-allowed;" disabled onclick="return confirm('Are you sure you want to delete selected notifications?')">
                <i class="fa-solid fa-trash"></i>
                <span>Delete Selected</span>
            </button>
        </div>

        <!-- Notifications Card Stack -->
        <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px;">
            @forelse($notifications as $item)
                @php
                    $bg = $item->is_read ? 'var(--dc-white)' : 'rgba(0, 166, 81, 0.03)';
                    $borderColor = $item->is_read ? 'var(--dc-border)' : 'var(--dc-green-border)';
                    $badgeClass = match($item->type) {
                        'success' => 'dc-badge-green',
                        'warning' => 'dc-badge-orange',
                        'error' => 'dc-badge-orange',
                        'primary' => 'dc-badge-blue',
                        default => 'dc-badge-blue'
                    };
                    $iconColor = match($item->type) {
                        'success' => 'var(--dc-green)',
                        'warning' => 'var(--dc-orange)',
                        'error' => '#ef4444',
                        'primary' => '#3b82f6',
                        default => 'var(--dc-blue)'
                    };
                @endphp
                <div style="background: {{ $bg }}; border: 1px solid {{ $borderColor }}; border-radius: 12px; padding: 16px; display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; transition: var(--transition-fast);">
                    
                    <div style="display: flex; gap: 14px; align-items: flex-start; flex: 1;">
                        <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="item-checkbox" style="width: 16px; height: 16px; margin-top: 8px; cursor: pointer; accent-color: var(--dc-green);">
                        
                        <!-- Icon Circle -->
                        <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(0, 166, 81, 0.08); color: {{ $iconColor }}; display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0;">
                            <i class="{{ $item->icon ?? 'fa-solid fa-circle-info' }}"></i>
                        </div>

                        <!-- Details -->
                        <div style="flex: 1;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 4px; flex-wrap: wrap;">
                                <strong style="font-size: 14px; color: var(--dc-dark);">{{ $item->title }}</strong>
                                <span class="dc-badge-pill {{ $badgeClass }}">{{ ucfirst($item->type) }}</span>
                                @if(!$item->is_read)
                                    <span style="background: var(--dc-green); color: #fff; font-size: 10px; font-weight: 700; padding: 2px 6px; border-radius: 4px;">UNREAD</span>
                                @endif
                            </div>
                            <p style="color: var(--dc-dark-muted); font-size: 13px; margin: 0 0 8px 0; line-height: 1.4;">{{ $item->message }}</p>
                            <div style="display: flex; align-items: center; gap: 16px; font-size: 11.5px; color: var(--dc-light-gray);">
                                <span><i class="fa-regular fa-clock"></i> {{ $item->created_at ? $item->created_at->diffForHumans() : 'Just now' }}</span>
                                <span><i class="fa-regular fa-calendar"></i> {{ $item->created_at ? $item->created_at->format('d M Y, h:i A') : '' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div style="display: flex; align-items: center; gap: 8px; flex-shrink: 0;">
                        @if($item->url)
                            <a href="{{ $item->url }}" class="dc-action-btn dc-action-view" title="View Related Item">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        @endif

                        @if(!$item->is_read)
                            <button type="button" onclick="document.getElementById('readForm-{{ $item->id }}').submit();" class="dc-action-btn dc-action-edit" title="Mark as Read">
                                <i class="fa-solid fa-check"></i>
                            </button>
                        @endif

                        <button type="button" onclick="if(confirm('Delete this notification?')) document.getElementById('deleteForm-{{ $item->id }}').submit();" class="dc-action-btn dc-action-delete" title="Delete Notification">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            @empty
                <!-- Empty State Illustration -->
                <div class="dc-card" style="padding: 48px 24px; text-align: center;">
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: var(--dc-green-light); color: var(--dc-green); display: inline-flex; align-items: center; justify-content: center; font-size: 28px; margin-bottom: 14px;">
                        <i class="fa-regular fa-bell-slash"></i>
                    </div>
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dc-dark); margin-bottom: 6px;">No Notifications Found</h3>
                    <p style="color: var(--dc-light-gray); font-size: 13px; max-width: 360px; margin: 0 auto 16px auto;">You have no notifications matching the selected filter criteria right now.</p>
                    <a href="{{ route('admin.notifications.index') }}" class="dc-btn dc-btn-outline" style="padding: 8px 16px; font-size: 12px; background: var(--dc-white);">Clear Filters</a>
                </div>
            @endforelse
        </div>
    </form>

    <!-- Hidden Individual Action Forms -->
    @foreach($notifications as $item)
        @if(!$item->is_read)
            <form id="readForm-{{ $item->id }}" action="{{ route('admin.notifications.markAsRead', $item->id) }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endif
        <form id="deleteForm-{{ $item->id }}" action="{{ route('admin.notifications.destroy', $item->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach

    <!-- Standardized Pagination Footer -->
    @if(method_exists($notifications, 'hasPages') && $notifications->hasPages())
        <div class="dc-card" style="padding: 14px 20px; margin-top: 20px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 12.5px; color: var(--dc-dark-muted); font-weight: 500;">
                Showing <strong>{{ $notifications->firstItem() ?? 0 }}</strong> to <strong>{{ $notifications->lastItem() ?? 0 }}</strong> of <strong>{{ $notifications->total() }}</strong> notifications
            </div>
            <div class="dc-pagination-wrapper">
                {{ $notifications->links() }}
            </div>
        </div>
    @endif

</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const selectAll = document.getElementById("selectAllCheckbox");
        const itemCheckboxes = document.querySelectorAll(".item-checkbox");
        const bulkDeleteBtn = document.getElementById("bulkDeleteBtn");

        function updateBulkButton() {
            const checkedCount = document.querySelectorAll(".item-checkbox:checked").length;
            if (bulkDeleteBtn) {
                if (checkedCount > 0) {
                    bulkDeleteBtn.disabled = false;
                    bulkDeleteBtn.style.opacity = "1";
                    bulkDeleteBtn.style.cursor = "pointer";
                } else {
                    bulkDeleteBtn.disabled = true;
                    bulkDeleteBtn.style.opacity = "0.5";
                    bulkDeleteBtn.style.cursor = "not-allowed";
                }
            }
        }

        if (selectAll) {
            selectAll.addEventListener("change", function() {
                itemCheckboxes.forEach(cb => cb.checked = selectAll.checked);
                updateBulkButton();
            });
        }

        itemCheckboxes.forEach(cb => {
            cb.addEventListener("change", function() {
                updateBulkButton();
            });
        });
    });
</script>
@endpush
@endsection
