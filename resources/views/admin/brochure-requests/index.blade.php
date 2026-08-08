@extends('layouts.admin')

@section('title', 'Brochure & Prospectus Requests')

@section('content')
<div class="dc-container">

    {{-- Page Header --}}
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 24px;">
        <div>
            <h1 style="font-size: 20px; font-weight: 600; color: var(--dc-dark); margin-bottom: 4px; display: flex; align-items: center; gap: 10px;">
                <i class="fa-solid fa-file-pdf" style="color: var(--dc-green);"></i>
                <span>Brochure & Prospectus Requests</span>
            </h1>
            <p style="color: var(--dc-light-gray); font-size: 13px; margin: 0;">View and manage all student PDF prospectus download requests from your website.</p>
        </div>
    </div>

    {{-- Stats Summary Badges --}}
    <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 14px; margin-bottom: 24px;">
        {{-- Total --}}
        <div class="dc-card" style="padding: 18px 20px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(0,166,81,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-file-arrow-down" style="color: var(--dc-green); font-size: 17px;"></i>
            </div>
            <div>
                <div style="font-size: 22px; font-weight: 800; color: var(--dc-dark); line-height: 1;">{{ $stats['total'] }}</div>
                <div style="font-size: 11.5px; color: var(--dc-light-gray); font-weight: 600; margin-top: 3px;">Total Downloads</div>
            </div>
        </div>
        {{-- New --}}
        <div class="dc-card" style="padding: 18px 20px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(59,130,246,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-circle-dot" style="color: #3b82f6; font-size: 17px;"></i>
            </div>
            <div>
                <div style="font-size: 22px; font-weight: 800; color: var(--dc-dark); line-height: 1;">{{ $stats['new'] }}</div>
                <div style="font-size: 11.5px; color: var(--dc-light-gray); font-weight: 600; margin-top: 3px;">New Requests</div>
            </div>
        </div>
        {{-- Contacted --}}
        <div class="dc-card" style="padding: 18px 20px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(245,130,32,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-phone-volume" style="color: var(--dc-orange); font-size: 17px;"></i>
            </div>
            <div>
                <div style="font-size: 22px; font-weight: 800; color: var(--dc-dark); line-height: 1;">{{ $stats['contacted'] }}</div>
                <div style="font-size: 11.5px; color: var(--dc-light-gray); font-weight: 600; margin-top: 3px;">Contacted</div>
            </div>
        </div>
        {{-- Resolved --}}
        <div class="dc-card" style="padding: 18px 20px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(0,166,81,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-circle-check" style="color: var(--dc-green); font-size: 17px;"></i>
            </div>
            <div>
                <div style="font-size: 22px; font-weight: 800; color: var(--dc-dark); line-height: 1;">{{ $stats['resolved'] }}</div>
                <div style="font-size: 11.5px; color: var(--dc-light-gray); font-weight: 600; margin-top: 3px;">Resolved</div>
            </div>
        </div>
        {{-- Unread --}}
        <div class="dc-card" style="padding: 18px 20px; display: flex; align-items: center; gap: 14px; {{ $stats['unread'] > 0 ? 'border: 1px solid rgba(239,68,68,0.25);' : '' }}">
            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(239,68,68,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-envelope" style="color: {{ $stats['unread'] > 0 ? '#ef4444' : 'var(--dc-light-gray)' }}; font-size: 17px;"></i>
            </div>
            <div>
                <div style="font-size: 22px; font-weight: 800; color: {{ $stats['unread'] > 0 ? '#ef4444' : 'var(--dc-dark)' }}; line-height: 1;">{{ $stats['unread'] }}</div>
                <div style="font-size: 11.5px; color: var(--dc-light-gray); font-weight: 600; margin-top: 3px;">Unread</div>
            </div>
        </div>
    </div>

    {{-- Search & Filter Bar --}}
    <div class="dc-card" style="padding: 16px 20px; margin-bottom: 24px;">
        <form action="{{ route('admin.brochure-requests.index') }}" method="GET" style="display: flex; flex-wrap: wrap; gap: 12px; align-items: flex-end;">
            {{-- Search --}}
            <div style="flex: 1; min-width: 220px; position: relative;">
                <label style="font-size: 11.5px; font-weight: 600; color: var(--dc-dark-muted); display: block; margin-bottom: 5px;">Search</label>
                <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 12px; bottom: 10px; color: var(--dc-light-gray); font-size: 12px;"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Name, WhatsApp phone, email, course..."
                    style="width: 100%; height: 38px; padding: 0 12px 0 34px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 6px; font-size: 13px; outline: none; box-sizing: border-box;">
            </div>

            {{-- Status Filter --}}
            <div style="min-width: 150px;">
                <label style="font-size: 11.5px; font-weight: 600; color: var(--dc-dark-muted); display: block; margin-bottom: 5px;">Status</label>
                <select name="status" style="height: 38px; padding: 0 12px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 6px; font-size: 13px; outline: none; width: 100%;">
                    <option value="">All Status</option>
                    <option value="new" {{ request('status') === 'new' ? 'selected' : '' }}>New</option>
                    <option value="contacted" {{ request('status') === 'contacted' ? 'selected' : '' }}>Contacted</option>
                    <option value="resolved" {{ request('status') === 'resolved' ? 'selected' : '' }}>Resolved</option>
                </select>
            </div>

            {{-- Date From --}}
            <div style="min-width: 150px;">
                <label style="font-size: 11.5px; font-weight: 600; color: var(--dc-dark-muted); display: block; margin-bottom: 5px;">From Date</label>
                <input type="date" name="date_from" value="{{ request('date_from') }}"
                    style="height: 38px; padding: 0 10px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 6px; font-size: 13px; outline: none; width: 100%; box-sizing: border-box;">
            </div>

            {{-- Date To --}}
            <div style="min-width: 150px;">
                <label style="font-size: 11.5px; font-weight: 600; color: var(--dc-dark-muted); display: block; margin-bottom: 5px;">To Date</label>
                <input type="date" name="date_to" value="{{ request('date_to') }}"
                    style="height: 38px; padding: 0 10px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 6px; font-size: 13px; outline: none; width: 100%; box-sizing: border-box;">
            </div>

            {{-- Buttons --}}
            <div style="display: flex; gap: 8px; align-items: flex-end;">
                <button type="submit" class="dc-btn dc-btn-green" style="height: 38px; padding: 0 20px; font-size: 13px; font-weight: 600; border-radius: 6px;">
                    <i class="fa-solid fa-filter"></i> Filter
                </button>
                <a href="{{ route('admin.brochure-requests.index') }}" class="dc-btn dc-btn-outline" style="height: 38px; padding: 0 16px; font-size: 13px; font-weight: 600; border-radius: 6px; background: var(--dc-white); text-decoration: none; display: inline-flex; align-items: center;">
                    <i class="fa-solid fa-rotate-left"></i> Reset
                </a>
            </div>
        </form>
    </div>

    {{-- Bulk Delete Form & Enquiry Cards --}}
    <form id="bulkForm" action="{{ route('admin.brochure-requests.bulkDelete') }}" method="POST">
        @csrf

        {{-- Bulk Action Bar --}}
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px; padding: 0 4px;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <input type="checkbox" id="selectAllCheckbox" style="width: 16px; height: 16px; cursor: pointer; accent-color: var(--dc-green);">
                <label for="selectAllCheckbox" style="font-size: 12.5px; font-weight: 600; cursor: pointer; color: var(--dc-dark-muted);">Select All</label>
            </div>

            <button type="button" id="bulkDeleteBtn" class="dc-btn" style="padding: 6px 12px; font-size: 12px; background: rgba(239,68,68,0.1); color: #ef4444; border: 1px solid rgba(239,68,68,0.2); opacity: 0.5; cursor: not-allowed;" disabled>
                <i class="fa-solid fa-trash"></i>
                <span>Delete Selected</span>
            </button>
        </div>

        {{-- Brochure Request Cards --}}
        <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px;">
            @forelse($enquiries as $item)
                @php
                    $statusColor = match($item->status) {
                        'contacted' => 'dc-badge-orange',
                        'resolved'  => 'dc-badge-green',
                        default     => 'dc-badge-blue',
                    };
                    $bg          = $item->is_read ? 'var(--dc-white)' : 'rgba(0,166,81,0.03)';
                    $borderColor = $item->is_read ? 'var(--dc-border)' : 'var(--dc-green-border)';
                @endphp

                <div style="background: {{ $bg }}; border: 1px solid {{ $borderColor }}; border-radius: 12px; padding: 16px 20px; display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; transition: var(--transition-fast);">

                    <div style="display: flex; gap: 14px; align-items: flex-start; flex: 1; min-width: 0;">
                        <input type="checkbox" name="ids[]" value="{{ $item->id }}" class="item-checkbox"
                            style="width: 16px; height: 16px; margin-top: 6px; cursor: pointer; accent-color: var(--dc-green); flex-shrink: 0;">

                        {{-- Icon --}}
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(0,166,81,0.08); color: var(--dc-green); display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0;">
                            <i class="fa-solid fa-file-pdf"></i>
                        </div>

                        {{-- Details --}}
                        <div style="flex: 1; min-width: 0;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px; flex-wrap: wrap;">
                                <strong style="font-size: 14px; color: var(--dc-dark);">{{ $item->name }}</strong>
                                <span class="dc-badge-pill {{ $statusColor }}">{{ ucfirst($item->status) }}</span>
                                @if(!$item->is_read)
                                    <span style="background: var(--dc-green); color: #fff; font-size: 10px; font-weight: 700; padding: 2px 6px; border-radius: 4px;">NEW</span>
                                @endif
                            </div>

                            <div style="display: flex; gap: 16px; flex-wrap: wrap; font-size: 12.5px; margin-bottom: 6px;">
                                <span style="color: var(--dc-dark-muted); display: flex; align-items: center; gap: 5px;">
                                    <i class="fa-brands fa-whatsapp" style="color: #25D366; font-size: 13px;"></i>
                                    <a href="https://wa.me/91{{ $item->phone }}" target="_blank" style="color: inherit; text-decoration: none; font-weight: 600;">{{ $item->phone }}</a>
                                </span>
                                @if($item->email)
                                <span style="color: var(--dc-dark-muted); display: flex; align-items: center; gap: 5px;">
                                    <i class="fa-solid fa-envelope" style="color: var(--dc-green); font-size: 11px;"></i>
                                    {{ $item->email }}
                                </span>
                                @endif
                                @if($item->course)
                                <span style="color: var(--dc-dark-muted); display: flex; align-items: center; gap: 5px;">
                                    <i class="fa-solid fa-graduation-cap" style="color: var(--dc-orange); font-size: 11px;"></i>
                                    <span>Requested: <strong>{{ $item->course }}</strong></span>
                                </span>
                                @endif
                            </div>

                            <div style="display: flex; align-items: center; gap: 16px; font-size: 11.5px; color: var(--dc-light-gray);">
                                <span><i class="fa-regular fa-clock"></i> {{ $item->created_at->diffForHumans() }}</span>
                                <span><i class="fa-regular fa-calendar"></i> {{ $item->created_at->format('d M Y, h:i A') }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div style="display: flex; flex-direction: column; align-items: flex-end; gap: 8px; flex-shrink: 0;">
                        {{-- Status Dropdown --}}
                        <select onchange="submitStatusForm('{{ $item->id }}', this.value)"
                            style="height: 30px; padding: 0 8px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 6px; font-size: 11.5px; outline: none; font-weight: 600; cursor: pointer;">
                            <option value="new"       {{ $item->status === 'new'       ? 'selected' : '' }}>New</option>
                            <option value="contacted" {{ $item->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                            <option value="resolved"  {{ $item->status === 'resolved'  ? 'selected' : '' }}>Resolved</option>
                        </select>

                        <div style="display: flex; gap: 6px;">
                            {{-- Direct WhatsApp Chat Button --}}
                            <a href="https://wa.me/91{{ $item->phone }}?text=Hello%20{{ urlencode($item->name) }},%20thank%20you%20for%20downloading%20the%20DigiCoders%20Academy%20Prospectus!%20How%20can%20we%20help%20you%20with%20course%20admissions?" target="_blank"
                                class="dc-action-btn" style="background: rgba(37, 211, 102, 0.1); color: #25D366;" title="Chat on WhatsApp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>

                            {{-- Direct Call Button --}}
                            <a href="tel:{{ $item->phone }}" class="dc-action-btn dc-action-view" title="Call Mobile">
                                <i class="fa-solid fa-phone"></i>
                            </a>

                            {{-- Mark as Read --}}
                            @if(!$item->is_read)
                                <button type="button" onclick="document.getElementById('readForm-{{ $item->id }}').submit();"
                                    class="dc-action-btn dc-action-edit" title="Mark as Read">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                            @endif

                            {{-- Delete --}}
                            <button type="button"
                                onclick="confirmDeleteEnquiry('{{ $item->id }}')"
                                class="dc-action-btn dc-action-delete" title="Delete Request">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="dc-card" style="padding: 48px 24px; text-align: center;">
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: var(--dc-green-light); color: var(--dc-green); display: inline-flex; align-items: center; justify-content: center; font-size: 28px; margin-bottom: 14px;">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <h3 style="font-size: 16px; font-weight: 700; color: var(--dc-dark); margin-bottom: 6px;">No Brochure Requests Found</h3>
                    <p style="color: var(--dc-light-gray); font-size: 13px; max-width: 360px; margin: 0 auto 16px auto;">No prospectus download submissions match your filter criteria.</p>
                    <a href="{{ route('admin.brochure-requests.index') }}" class="dc-btn dc-btn-outline" style="padding: 8px 16px; font-size: 12px; background: var(--dc-white);">Clear Filters</a>
                </div>
            @endforelse
        </div>
    </form>

    {{-- Hidden Individual Action Forms --}}
    @foreach($enquiries as $item)
        <form id="statusForm-{{ $item->id }}" action="{{ route('admin.brochure-requests.updateStatus', $item->id) }}" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="status" id="statusInput-{{ $item->id }}">
        </form>
        <form id="readForm-{{ $item->id }}" action="{{ route('admin.brochure-requests.markAsRead', $item->id) }}" method="POST" style="display: none;">
            @csrf
        </form>
        <form id="deleteForm-{{ $item->id }}" action="{{ route('admin.brochure-requests.destroy', $item->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach

    {{-- Standardized Pagination Footer --}}
    @if(method_exists($enquiries, 'hasPages') && $enquiries->hasPages())
        <div class="dc-card" style="padding: 14px 20px; margin-top: 20px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 12.5px; color: var(--dc-dark-muted); font-weight: 500;">
                Showing <strong>{{ $enquiries->firstItem() ?? 0 }}</strong> to <strong>{{ $enquiries->lastItem() ?? 0 }}</strong> of <strong>{{ $enquiries->total() }}</strong> brochure requests
            </div>
            <div class="dc-pagination-wrapper">
                {{ $enquiries->links() }}
            </div>
        </div>
    @endif

</div>

@push('scripts')
<script>
    function submitStatusForm(id, val) {
        const input = document.getElementById('statusInput-' + id);
        const form  = document.getElementById('statusForm-' + id);
        if (input && form) {
            input.value = val;
            form.submit();
        }
    }

    function confirmDeleteEnquiry(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this brochure request deletion!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm-' + id).submit();
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        const selectAll      = document.getElementById("selectAllCheckbox");
        const itemCheckboxes = document.querySelectorAll(".item-checkbox");
        const bulkDeleteBtn  = document.getElementById("bulkDeleteBtn");
        const bulkForm       = document.getElementById("bulkForm");

        function updateBulkButton() {
            const checkedCount = document.querySelectorAll(".item-checkbox:checked").length;
            if (bulkDeleteBtn) {
                if (checkedCount > 0) {
                    bulkDeleteBtn.disabled      = false;
                    bulkDeleteBtn.style.opacity = "1";
                    bulkDeleteBtn.style.cursor  = "pointer";
                } else {
                    bulkDeleteBtn.disabled      = true;
                    bulkDeleteBtn.style.opacity = "0.5";
                    bulkDeleteBtn.style.cursor  = "not-allowed";
                }
            }
        }

        if (selectAll) {
            selectAll.addEventListener("change", function () {
                itemCheckboxes.forEach(cb => cb.checked = selectAll.checked);
                updateBulkButton();
            });
        }

        itemCheckboxes.forEach(cb => {
            cb.addEventListener("change", updateBulkButton);
        });

        if (bulkDeleteBtn && bulkForm) {
            bulkDeleteBtn.addEventListener("click", function (e) {
                e.preventDefault();
                if (bulkDeleteBtn.disabled) return;

                const count = document.querySelectorAll(".item-checkbox:checked").length;
                Swal.fire({
                    title: 'Delete Selected Requests?',
                    text: `Are you sure you want to delete ${count} selected brochure request(s)?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444',
                    cancelButtonColor: '#64748b',
                    confirmButtonText: 'Yes, delete all!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        bulkForm.submit();
                    }
                });
            });
        }
    });
</script>
@endpush
@endsection
