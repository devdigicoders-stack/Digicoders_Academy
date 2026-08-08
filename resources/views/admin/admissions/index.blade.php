@extends('layouts.admin')

@section('title', 'Admissions CRM & Student Management')

@section('content')
    <div class="dc-container">
        <!-- Header Banner -->
        <div class="dc-welcome-banner"
            style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
            <div class="dc-welcome-title">
                <h1 style="display: flex; align-items: center; gap: 10px; font-weight: 600;">
                    <span>Admissions CRM & Student Applications</span>
                    <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i>
                </h1>
                <p>Full CRUD control: Manage student applications, search by date, mobile, mode & track enrollment status.
                </p>
            </div>
            <div>
                <button onclick="openModal('createModal')" class="dc-btn dc-btn-primary"
                    style="display: inline-flex; align-items: center; gap: 8px; font-weight: 700; padding: 10px 18px; cursor: pointer;">
                    <i class="fa-solid fa-user-plus"></i>
                    <span>Add New Admission</span>
                </button>
            </div>
        </div>

        <!-- Statistics & Mode Pipeline Overview -->
        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 24px;">
            <!-- Total -->
            <div class="dc-card" style="padding: 16px; border-left: 4px solid var(--dc-green); margin-bottom: 0;">
                <span
                    style="font-size: 11px; font-weight: 700; color: var(--dc-green); text-transform: uppercase; letter-spacing: 0.5px;">Total
                    Applications</span>
                <div
                    style="font-family: var(--font-heading); font-size: 26px; font-weight: 800; margin-top: 4px; color: var(--dc-black);">
                    {{ number_format($stats['total']) }}</div>
                <span style="font-size: 11px; color: var(--dc-light-gray);">All Records</span>
            </div>

            <!-- New Applications -->
            <div class="dc-card" style="padding: 16px; border-left: 4px solid var(--dc-blue); margin-bottom: 0;">
                <span
                    style="font-size: 11px; font-weight: 700; color: var(--dc-blue); text-transform: uppercase; letter-spacing: 0.5px;">New
                    Applications</span>
                <div
                    style="font-family: var(--font-heading); font-size: 26px; font-weight: 800; margin-top: 4px; color: var(--dc-black);">
                    {{ number_format($stats['new']) }}</div>
                <span style="font-size: 11px; color: var(--dc-light-gray);">Pending Followup</span>
            </div>

            <!-- Contacted / Follow Up -->
            <div class="dc-card" style="padding: 16px; border-left: 4px solid var(--dc-orange); margin-bottom: 0;">
                <span
                    style="font-size: 11px; font-weight: 700; color: var(--dc-orange); text-transform: uppercase; letter-spacing: 0.5px;">In
                    Contact / Follow Up</span>
                <div
                    style="font-family: var(--font-heading); font-size: 26px; font-weight: 800; margin-top: 4px; color: var(--dc-black);">
                    {{ number_format($stats['contacted'] + $stats['follow_up']) }}</div>
                <span style="font-size: 11px; color: var(--dc-light-gray);">Active Counseling</span>
            </div>

            <!-- Enrolled -->
            <div class="dc-card" style="padding: 16px; border-left: 4px solid #10b981; margin-bottom: 0;">
                <span
                    style="font-size: 11px; font-weight: 700; color: #10b981; text-transform: uppercase; letter-spacing: 0.5px;">Enrolled
                    Students</span>
                <div
                    style="font-family: var(--font-heading); font-size: 26px; font-weight: 800; margin-top: 4px; color: var(--dc-black);">
                    {{ number_format($stats['enrolled']) }}</div>
                <span style="font-size: 11px; color: var(--dc-light-gray);">Confirmed Batch Seats</span>
            </div>
        </div>

        <!-- Mode Distribution Quick Badges -->
        <div class="dc-card"
            style="padding: 16px 20px; margin-bottom: 24px; display: flex; align-items: center; gap: 12px; flex-wrap: wrap; border-radius: 10px;">
            <span style="font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Campus / Mode Count:</span>
            <span class="dc-badge-pill dc-badge-green" style="font-size: 11.5px; height: 36px; padding: 0 16px; border-radius: 6px !important; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">🌐 Online: {{ $stats['online'] }}</span>
            <span class="dc-badge-pill dc-badge-orange" style="font-size: 11.5px; height: 36px; padding: 0 16px; border-radius: 6px !important; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">🏛️ Lucknow: {{ $stats['lucknow'] }}</span>
            <span class="dc-badge-pill dc-badge-blue" style="font-size: 11.5px; height: 36px; padding: 0 16px; border-radius: 6px !important; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">🏢 Kanpur: {{ $stats['kanpur'] }}</span>
            <span class="dc-badge-pill dc-badge-purple" style="font-size: 11.5px; height: 36px; padding: 0 16px; border-radius: 6px !important; font-weight: 600; background: #ede9fe; color: #6b21a8; display: inline-flex; align-items: center; gap: 6px;">🏫 Gorakhpur: {{ $stats['gorakhpur'] }}</span>
        </div>

        <!-- Filter & Search Bar Section -->
        <div class="dc-card"
            style="margin-bottom: 24px; padding: 20px; border-radius: 16px; border: 1px solid var(--dc-border); background: var(--dc-white); box-shadow: var(--dc-shadow-sm);">
            <div
                style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                <h3
                    style="font-size: 14px; font-weight: 800; font-family: var(--font-heading); margin: 0; display: flex; align-items: center; gap: 8px;">
                    <span
                        style="width: 28px; height: 28px; border-radius: 8px; background: rgba(0, 166, 81, 0.12); color: var(--dc-green); display: flex; align-items: center; justify-content: center; font-size: 13px;">
                        <i class="fa-solid fa-sliders"></i>
                    </span>
                    <span>Filter & Search Admission Records</span>
                </h3>
                @if(request()->anyFilled(['search', 'mobile', 'mode', 'status', 'date_from', 'date_to']))
                    <span
                        style="font-size: 11px; background: rgba(245, 130, 32, 0.12); color: var(--dc-orange); border: 1px solid var(--dc-orange-border); padding: 4px 10px; border-radius: 20px; font-weight: 700; display: inline-flex; align-items: center; gap: 5px;">
                        <i class="fa-solid fa-circle-notch fa-spin"></i> Active Filters Applied
                    </span>
                @endif
            </div>

            <form method="GET" action="{{ route('admin.admissions.index') }}">
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(170px, 1fr)); gap: 12px; align-items: end;">

                    <!-- Keyword Search -->
                    <div>
                        <label style="font-size: 11.5px; font-weight: 700; display: block; margin-bottom: 5px;">
                            <i class="fa-solid fa-magnifying-glass"
                                style="color: var(--dc-green); font-size: 11px; margin-right: 3px;"></i> Search Keyword
                        </label>
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Name, Email, Aadhaar, College..." class="dc-form-control"
                            oninput="debouncedLiveSubmit(this.form)"
                            style="height: 38px; font-size: 12px; padding: 0 12px; border-radius: 6px; width: 100%;">
                    </div>

                    <!-- Mobile Filter -->
                    <div>
                        <label style="font-size: 11.5px; font-weight: 700; display: block; margin-bottom: 5px;">
                            <i class="fa-solid fa-phone"
                                style="color: var(--dc-green); font-size: 11px; margin-right: 3px;"></i> Mobile / WhatsApp
                        </label>
                        <input type="text" name="mobile" value="{{ request('mobile') }}"
                            placeholder="Enter mobile number..." class="dc-form-control"
                            oninput="debouncedLiveSubmit(this.form)"
                            style="height: 38px; font-size: 12px; padding: 0 12px; border-radius: 6px; width: 100%;">
                    </div>

                    <!-- Mode Select -->
                    <div>
                        <label style="font-size: 11.5px; font-weight: 700; display: block; margin-bottom: 5px;">
                            <i class="fa-solid fa-building-columns"
                                style="color: var(--dc-blue); font-size: 11px; margin-right: 3px;"></i> Admission Mode
                        </label>
                        <select name="mode" class="dc-form-control" onchange="this.form.submit()"
                            style="height: 38px; font-size: 12px; padding: 0 12px; border-radius: 6px; width: 100%;">
                            <option value="">All Modes</option>
                            <option value="Online" {{ request('mode') == 'Online' ? 'selected' : '' }}>Online</option>
                            <option value="Lucknow" {{ request('mode') == 'Lucknow' ? 'selected' : '' }}>Lucknow</option>
                            <option value="Kanpur" {{ request('mode') == 'Kanpur' ? 'selected' : '' }}>Kanpur</option>
                            <option value="Gorakhpur" {{ request('mode') == 'Gorakhpur' ? 'selected' : '' }}>Gorakhpur
                            </option>
                        </select>
                    </div>

                    <!-- Status Select -->
                    <div>
                        <label style="font-size: 11.5px; font-weight: 700; display: block; margin-bottom: 5px;">
                            <i class="fa-solid fa-chart-line"
                                style="color: var(--dc-orange); font-size: 11px; margin-right: 3px;"></i> Status
                        </label>
                        <select name="status" class="dc-form-control" onchange="this.form.submit()"
                            style="height: 38px; font-size: 12px; padding: 0 12px; border-radius: 6px; width: 100%;">
                            <option value="">All Statuses</option>
                            <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                            <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Contacted
                            </option>
                            <option value="follow_up" {{ request('status') == 'follow_up' ? 'selected' : '' }}>Follow Up
                            </option>
                            <option value="enrolled" {{ request('status') == 'enrolled' ? 'selected' : '' }}>Enrolled</option>
                            <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>

                    <!-- Date From -->
                    <div>
                        <label style="font-size: 11.5px; font-weight: 700; display: block; margin-bottom: 5px;">
                            <i class="fa-regular fa-calendar"
                                style="color: var(--dc-blue); font-size: 11px; margin-right: 3px;"></i> Date From
                        </label>
                        <input type="date" name="date_from" value="{{ request('date_from') }}" class="dc-form-control"
                            onchange="this.form.submit()"
                            style="height: 38px; font-size: 12px; padding: 0 12px; border-radius: 6px; width: 100%;">
                    </div>

                    <!-- Date To -->
                    <div>
                        <label style="font-size: 11.5px; font-weight: 700; display: block; margin-bottom: 5px;">
                            <i class="fa-regular fa-calendar-check"
                                style="color: var(--dc-blue); font-size: 11px; margin-right: 3px;"></i> Date To
                        </label>
                        <input type="date" name="date_to" value="{{ request('date_to') }}" class="dc-form-control"
                            onchange="this.form.submit()"
                            style="height: 38px; font-size: 12px; padding: 0 12px; border-radius: 6px; width: 100%;">
                    </div>

                    <!-- Submit & Reset Buttons -->
                    <div style="display: flex; gap: 8px; width: 100%;">
                        <button type="submit" class="dc-btn dc-btn-primary"
                            style="flex: 1; height: 38px; border-radius: 6px; font-size: 12px; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; gap: 6px; cursor: pointer;">
                            <i class="fa-solid fa-filter"></i> Apply Filters
                        </button>
                        <a href="{{ route('admin.admissions.index') }}" class="dc-btn"
                            style="height: 38px; border-radius: 6px; background: var(--dc-bg); border: 1px solid var(--dc-border); color: var(--dc-dark-muted); padding: 0 12px; font-size: 12px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 4px;">
                            <i class="fa-solid fa-rotate-left"></i> Reset
                        </a>
                    </div>

                </div>
            </form>
        </div>

        <!-- Admissions Main Table -->
        <div class="dc-card">
            <div class="dc-card-title-wrap"
                style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                <h2 class="dc-card-title">
                    Students List ({{ $admissions->total() }} Admissions Found)
                </h2>
                <span style="font-size: 12px; color: var(--dc-light-gray);">Showing Page {{ $admissions->currentPage() }} of
                    {{ $admissions->lastPage() }}</span>
            </div>

            <div class="dc-table-responsive">
                <table class="dc-table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">#</th>
                            <th>Student Details</th>
                            <th>Contact Info</th>
                            <th>Academic & College</th>
                            <th>Course & Mode</th>
                            <th>Guardian Details</th>
                            <th>Status</th>
                            <th>Applied Date</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($admissions as $index => $admission)
                            <tr>
                                <td style="font-weight: bold; color: #64748b;">
                                    {{ $admissions->firstItem() + $index }}
                                </td>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        @if($admission->student_photo && file_exists(public_path($admission->student_photo)))
                                            <img src="{{ asset($admission->student_photo) }}" alt="Photo"
                                                style="width: 40px; h-40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid var(--dc-green); shrink: 0;">
                                        @else
                                            <div
                                                style="width: 40px; height: 40px; border-radius: 50%; background: #e2e8f0; color: #475569; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; shrink: 0;">
                                                {{ strtoupper(substr($admission->name, 0, 1)) }}
                                            </div>
                                        @endif
                                        <div>
                                            <strong
                                                style="display: block; font-size: 13px; color: #0f172a;">{{ $admission->name }}</strong>
                                            <span style="font-size: 11px; color: #64748b;">
                                                {{ $admission->gender ?? 'N/A' }} | DOB:
                                                {{ $admission->dob ? \Carbon\Carbon::parse($admission->dob)->format('d M Y') : 'N/A' }}
                                            </span>
                                            <div style="font-size: 11px; font-weight: 700; color: #0284c7; margin-top: 1px;">
                                                💳 Aadhaar: {{ $admission->aadhaar_number ?? 'N/A' }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="tel:{{ $admission->phone }}"
                                            style="color: #059669; font-weight: 700; font-size: 12px; text-decoration: none;"
                                            title="Call Student">
                                            <i class="fa-solid fa-phone" style="font-size: 11px;"></i> {{ $admission->phone }}
                                        </a>
                                    </div>
                                    @if($admission->whatsapp_number)
                                        <div>
                                            <a href="https://wa.me/91{{ $admission->whatsapp_number }}" target="_blank"
                                                style="color: #16a34a; font-size: 11px; text-decoration: none;"
                                                title="Open WhatsApp Chat">
                                                <i class="fa-brands fa-whatsapp" style="font-size: 11px;"></i>
                                                {{ $admission->whatsapp_number }}
                                            </a>
                                        </div>
                                    @endif
                                    <span
                                        style="font-size: 11px; color: #64748b; display: block; max-width: 160px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                        {{ $admission->email ?: 'No Email' }}
                                    </span>
                                </td>
                                <td>
                                    <strong
                                        style="display: block; font-size: 12px; color: #1e293b;">{{ $admission->school_college_name ?? 'N/A' }}</strong>
                                    <span style="font-size: 11px; color: #64748b;">Qual:
                                        {{ $admission->qualification ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    <strong
                                        style="display: block; font-size: 12px; color: #0f172a;">{{ $admission->course_name }}</strong>
                                    <div style="margin-top: 3px;">
                                        @if($admission->mode === 'Online')
                                            <span class="dc-badge-pill dc-badge-green" style="font-size: 10px;">🌐 Online</span>
                                        @elseif($admission->mode === 'Lucknow')
                                            <span class="dc-badge-pill dc-badge-orange" style="font-size: 10px;">🏛️ Lucknow</span>
                                        @elseif($admission->mode === 'Kanpur')
                                            <span class="dc-badge-pill dc-badge-blue" style="font-size: 10px;">🏢 Kanpur</span>
                                        @else
                                            <span class="dc-badge-pill dc-badge-purple"
                                                style="font-size: 10px; background: #ede9fe; color: #6b21a8;">🏫 Gorakhpur</span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <strong
                                        style="display: block; font-size: 12px; color: #334155;">{{ $admission->father_name ?? 'N/A' }}</strong>
                                    <span style="font-size: 11px; color: #64748b;">
                                        <i class="fa-solid fa-phone-volume" style="font-size: 10px;"></i>
                                        {{ $admission->guardian_mobile ?? 'N/A' }}
                                    </span>
                                </td>
                                <td>
                                    <!-- Status Dropdown Quick Change -->
                                    <form action="{{ route('admin.admissions.updateStatus', $admission->id) }}" method="POST"
                                        class="status-form">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()" style="font-size: 11px; font-weight: 700; padding: 4px 8px; border-radius: 4px; border: 1px solid #cbd5e1; cursor: pointer;
                                            @if($admission->status === 'new') background: #dcfce7; color: #15803d;
                                            @elseif($admission->status === 'contacted') background: #e0f2fe; color: #0369a1;
                                            @elseif($admission->status === 'follow_up') background: #fef3c7; color: #b45309;
                                            @elseif($admission->status === 'enrolled') background: #bbf7d0; color: #047857;
                                            @else background: #fee2e2; color: #b91c1c; @endif">
                                            <option value="new" {{ $admission->status === 'new' ? 'selected' : '' }}>🟢 New
                                            </option>
                                            <option value="contacted" {{ $admission->status === 'contacted' ? 'selected' : '' }}>
                                                🔵 Contacted</option>
                                            <option value="follow_up" {{ $admission->status === 'follow_up' ? 'selected' : '' }}>
                                                🟡 Follow Up</option>
                                            <option value="enrolled" {{ $admission->status === 'enrolled' ? 'selected' : '' }}>✅
                                                Enrolled</option>
                                            <option value="rejected" {{ $admission->status === 'rejected' ? 'selected' : '' }}>🔴
                                                Rejected</option>
                                        </select>
                                    </form>
                                </td>
                                <td style="font-size: 11px; color: #64748b; white-space: nowrap;">
                                    {{ $admission->created_at ? $admission->created_at->format('d M Y, h:i A') : 'N/A' }}
                                </td>
                                <td style="text-align: right;">
                                    <div class="dc-action-group" style="justify-content: flex-end; gap: 6px;">
                                        <!-- View Button -->
                                        <button type="button" onclick="viewAdmission({{ json_encode($admission) }})"
                                            class="dc-action-btn dc-action-view" title="View Full Details">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>

                                        <!-- Edit Button -->
                                        <button type="button" onclick="editAdmission({{ json_encode($admission) }})"
                                            class="dc-action-btn dc-action-edit"
                                            title="Edit Student Record">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <!-- Delete Button -->
                                        <form action="{{ route('admin.admissions.destroy', $admission->id) }}" method="POST"
                                            class="delete-form" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Record">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" style="text-align: center; color: var(--dc-light-gray); padding: 30px;">
                                    <div style="font-size: 36px; margin-bottom: 8px;">🔍</div>
                                    <strong style="font-size: 14px; color: #334155;">No admission records found matching your
                                        filters.</strong>
                                    <p style="font-size: 12px; color: #64748b; margin-top: 4px;">Try clearing filters or
                                        searching with a different term.</p>
                                    <a href="{{ route('admin.admissions.index') }}" class="dc-btn dc-btn-primary"
                                        style="margin-top: 10px; font-size: 12px; display: inline-block;">Reset All Filters</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination Links -->
            <div
                style="padding: 16px 20px; border-top: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: space-between;">
                <div>
                    Showing {{ $admissions->firstItem() ?? 0 }} to {{ $admissions->lastItem() ?? 0 }} of
                    {{ $admissions->total() }} results
                </div>
                <div class="dc-pagination-wrapper">
                    {{ $admissions->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL 1: VIEW ADMISSION DETAILS
    =========================================== -->
    <div id="viewModal" class="modal-overlay"
        style="display: none; position: fixed; inset: 0; background: rgba(15, 23, 42, 0.6); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
        <div
            style="background: white; border-radius: 8px; width: 95%; max-width: 700px; max-height: 90vh; overflow-y: auto; padding: 24px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); position: relative;">
            <button onclick="closeModal('viewModal')"
                style="position: absolute; top: 16px; right: 16px; background: none; border: none; font-size: 20px; color: #64748b; cursor: pointer;">&times;</button>

            <div
                style="border-bottom: 2px solid #00A651; padding-bottom: 12px; margin-bottom: 20px; display: flex; align-items: center; gap: 14px;">
                <div id="v_photo_container">
                    <div id="v_avatar"
                        style="width: 60px; height: 60px; border-radius: 50%; background: #00A651; color: white; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800;">
                    </div>
                </div>
                <div>
                    <h2 id="v_name"
                        style="font-size: 20px; font-weight: 800; font-family: var(--font-heading); color: #0f172a; margin: 0;">
                    </h2>
                    <span id="v_mode" class="dc-badge-pill dc-badge-orange"
                        style="margin-top: 4px; display: inline-block;"></span>
                    <span id="v_status" class="dc-badge-pill dc-badge-green"
                        style="margin-top: 4px; display: inline-block;"></span>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; font-size: 13px; color: #334155;">
                <div style="background: #f8fafc; padding: 12px; border-radius: 6px;">
                    <strong
                        style="color: #0f172a; display: block; margin-bottom: 4px; font-size: 11px; text-transform: uppercase;">📱
                        Personal & Contact</strong>
                    <p><strong>Mobile:</strong> <span id="v_phone"></span></p>
                    <p><strong>WhatsApp:</strong> <span id="v_whatsapp"></span></p>
                    <p><strong>Email:</strong> <span id="v_email"></span></p>
                    <p><strong>Gender / DOB:</strong> <span id="v_dob_gender"></span></p>
                    <p><strong>Aadhaar Number:</strong> <span id="v_aadhaar"
                            style="font-weight: 800; color: #0284c7;"></span></p>
                </div>

                <div style="background: #f8fafc; padding: 12px; border-radius: 6px;">
                    <strong
                        style="color: #0f172a; display: block; margin-bottom: 4px; font-size: 11px; text-transform: uppercase;">🎓
                        Academic Details</strong>
                    <p><strong>Selected Course:</strong> <span id="v_course"
                            style="font-weight: 800; color: #00A651;"></span></p>
                    <p><strong>Qualification:</strong> <span id="v_qualification"></span></p>
                    <p><strong>School / College:</strong> <span id="v_college"></span></p>
                </div>

                <div style="background: #f8fafc; padding: 12px; border-radius: 6px;">
                    <strong
                        style="color: #0f172a; display: block; margin-bottom: 4px; font-size: 11px; text-transform: uppercase;">👨‍👩‍👦
                        Father / Guardian</strong>
                    <p><strong>Father/Guardian Name:</strong> <span id="v_father"></span></p>
                    <p><strong>Guardian Mobile:</strong> <span id="v_guardian_mobile"></span></p>
                </div>

                <div style="background: #f8fafc; padding: 12px; border-radius: 6px;">
                    <strong
                        style="color: #0f172a; display: block; margin-bottom: 4px; font-size: 11px; text-transform: uppercase;">🏠
                        Address & System Info</strong>
                    <p><strong>Address:</strong> <span id="v_address"></span></p>
                    <p><strong>Application Date:</strong> <span id="v_created_at"></span></p>
                </div>
            </div>

            <div style="margin-top: 20px; text-align: right;">
                <button type="button" onclick="closeModal('viewModal')" class="dc-btn"
                    style="background: #e2e8f0; color: #334155; padding: 8px 16px; font-weight: 700; cursor: pointer;">Close</button>
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL 2: CREATE ADMISSION
    =========================================== -->
    <div id="createModal" class="modal-overlay"
        style="display: none; position: fixed; inset: 0; background: rgba(15, 23, 42, 0.6); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
        <div
            style="background: white; border-radius: 8px; width: 95%; max-width: 750px; max-height: 90vh; overflow-y: auto; padding: 24px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); position: relative;">
            <button onclick="closeModal('createModal')"
                style="position: absolute; top: 16px; right: 16px; background: none; border: none; font-size: 20px; color: #64748b; cursor: pointer;">&times;</button>

            <h2
                style="font-size: 18px; font-weight: 800; font-family: var(--font-heading); color: #0f172a; margin-top: 0; margin-bottom: 16px; border-bottom: 2px solid #00A651; padding-bottom: 8px;">
                <i class="fa-solid fa-user-plus" style="color: #00A651;"></i> Add New Student Admission
            </h2>

            <form action="{{ route('admin.admissions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Student Name *</label>
                        <input type="text" name="name" required placeholder="Full Name" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Mobile Number *</label>
                        <input type="tel" name="phone" required pattern="[6-9][0-9]{9}" maxlength="10"
                            placeholder="10-digit mobile" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">WhatsApp Number *</label>
                        <input type="tel" name="whatsapp_number" required pattern="[6-9][0-9]{9}" maxlength="10"
                            placeholder="10-digit whatsapp" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Email Address</label>
                        <input type="email" name="email" placeholder="student@example.com" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Date of Birth *</label>
                        <input type="date" name="dob" required class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Gender *</label>
                        <select name="gender" required class="dc-form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Aadhaar Card Number * (12
                            Digits)</label>
                        <input type="text" name="aadhaar_number" required pattern="\d{12}" maxlength="12"
                            placeholder="12 digit Aadhaar" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Admission Mode / Branch *</label>
                        <select name="mode" required class="dc-form-control">
                            <option value="Online">Online</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Kanpur">Kanpur</option>
                            <option value="Gorakhpur">Gorakhpur</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Highest Qualification *</label>
                        <select name="qualification" required class="dc-form-control">
                            <option value="10th Pass">10th Pass</option>
                            <option value="12th Pass">12th Pass</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Post Graduation">Post Graduation</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">School / College Name *</label>
                        <input type="text" name="school_college_name" required placeholder="College or School name"
                            class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Selected Course *</label>
                        <select name="course_name" required class="dc-form-control">
                            <option value="DCA – Diploma in Computer Applications (6 Months)">DCA (6 Months)</option>
                            <option value="ADCA – Advanced Computer Diploma (1 Year)">ADCA (1 Year)</option>
                            <option value="ADWD – Full Stack Web Development (1 Year)">ADWD Web Dev (1 Year)</option>
                            <option value="ADDM – Digital Marketing Specialist (1 Year)">ADDM Digital Marketing (1 Year)
                            </option>
                            <option value="Advanced Excel & MIS Reporting (6 Months)">Adv. Excel & MIS (6 Months)</option>
                            <option value="Web Designing UI/UX (6 Months)">Web Designing (6 Months)</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Father / Guardian Name *</label>
                        <input type="text" name="father_name" required placeholder="Father or Guardian Name"
                            class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Guardian Mobile *</label>
                        <input type="tel" name="guardian_mobile" required pattern="[6-9][0-9]{9}" maxlength="10"
                            placeholder="Guardian 10-digit mobile" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Student Photo (Optional)</label>
                        <input type="file" name="student_photo" accept="image/*" class="dc-form-control">
                    </div>

                    <div style="grid-column: span 2;">
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Full Address *</label>
                        <textarea name="address" required rows="2" placeholder="Full residential address..."
                            class="dc-form-control"></textarea>
                    </div>

                </div>

                <div style="margin-top: 20px; text-align: right; display: flex; justify-content: flex-end; gap: 10px;">
                    <button type="button" onclick="closeModal('createModal')" class="dc-btn"
                        style="background: #e2e8f0; color: #334155; font-weight: 700;">Cancel</button>
                    <button type="submit" class="dc-btn dc-btn-primary" style="font-weight: 700;"><i
                            class="fa-solid fa-check"></i> Save Admission</button>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         MODAL 3: EDIT ADMISSION
    =========================================== -->
    <div id="editModal" class="modal-overlay"
        style="display: none; position: fixed; inset: 0; background: rgba(15, 23, 42, 0.6); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
        <div
            style="background: white; border-radius: 8px; width: 95%; max-width: 750px; max-height: 90vh; overflow-y: auto; padding: 24px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); position: relative;">
            <button onclick="closeModal('editModal')"
                style="position: absolute; top: 16px; right: 16px; background: none; border: none; font-size: 20px; color: #64748b; cursor: pointer;">&times;</button>

            <h2
                style="font-size: 18px; font-weight: 800; font-family: var(--font-heading); color: #0f172a; margin-top: 0; margin-bottom: 16px; border-bottom: 2px solid var(--dc-blue); padding-bottom: 8px;">
                <i class="fa-solid fa-pen-to-square" style="color: var(--dc-blue);"></i> Edit Student Admission Record
            </h2>

            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Student Name *</label>
                        <input type="text" id="e_name" name="name" required class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Mobile Number *</label>
                        <input type="tel" id="e_phone" name="phone" required pattern="[6-9][0-9]{9}" maxlength="10"
                            class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">WhatsApp Number *</label>
                        <input type="tel" id="e_whatsapp" name="whatsapp_number" required pattern="[6-9][0-9]{9}"
                            maxlength="10" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Email Address</label>
                        <input type="email" id="e_email" name="email" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Date of Birth *</label>
                        <input type="date" id="e_dob" name="dob" required class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Gender *</label>
                        <select id="e_gender" name="gender" required class="dc-form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Aadhaar Card Number * (12
                            Digits)</label>
                        <input type="text" id="e_aadhaar" name="aadhaar_number" required pattern="\d{12}" maxlength="12"
                            class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Admission Mode / Branch *</label>
                        <select id="e_mode" name="mode" required class="dc-form-control">
                            <option value="Online">Online</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Kanpur">Kanpur</option>
                            <option value="Gorakhpur">Gorakhpur</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Highest Qualification *</label>
                        <select id="e_qualification" name="qualification" required class="dc-form-control">
                            <option value="10th Pass">10th Pass</option>
                            <option value="12th Pass">12th Pass</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Post Graduation">Post Graduation</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">School / College Name *</label>
                        <input type="text" id="e_college" name="school_college_name" required class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Selected Course *</label>
                        <select id="e_course" name="course_name" required class="dc-form-control">
                            <option value="DCA – Diploma in Computer Applications (6 Months)">DCA (6 Months)</option>
                            <option value="ADCA – Advanced Computer Diploma (1 Year)">ADCA (1 Year)</option>
                            <option value="ADWD – Full Stack Web Development (1 Year)">ADWD Web Dev (1 Year)</option>
                            <option value="ADDM – Digital Marketing Specialist (1 Year)">ADDM Digital Marketing (1 Year)
                            </option>
                            <option value="Advanced Excel & MIS Reporting (6 Months)">Adv. Excel & MIS (6 Months)</option>
                            <option value="Web Designing UI/UX (6 Months)">Web Designing (6 Months)</option>
                        </select>
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Father / Guardian Name *</label>
                        <input type="text" id="e_father" name="father_name" required class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Guardian Mobile *</label>
                        <input type="tel" id="e_guardian_mobile" name="guardian_mobile" required pattern="[6-9][0-9]{9}"
                            maxlength="10" class="dc-form-control">
                    </div>

                    <div>
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Status *</label>
                        <select id="e_status" name="status" required class="dc-form-control">
                            <option value="new">🟢 New</option>
                            <option value="contacted">🔵 Contacted</option>
                            <option value="follow_up">🟡 Follow Up</option>
                            <option value="enrolled">✅ Enrolled</option>
                            <option value="rejected">🔴 Rejected</option>
                        </select>
                    </div>

                    <div style="grid-column: span 2;">
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Change Student Photo
                            (Optional)</label>
                        <input type="file" name="student_photo" accept="image/*" class="dc-form-control">
                    </div>

                    <div style="grid-column: span 2;">
                        <label style="font-size: 12px; font-weight: 700; color: #334155;">Full Address *</label>
                        <textarea id="e_address" name="address" required rows="2" class="dc-form-control"></textarea>
                    </div>

                </div>

                <div style="margin-top: 20px; text-align: right; display: flex; justify-content: flex-end; gap: 10px;">
                    <button type="button" onclick="closeModal('editModal')" class="dc-btn"
                        style="background: #e2e8f0; color: #334155; font-weight: 700;">Cancel</button>
                    <button type="submit" class="dc-btn dc-btn-primary"
                        style="font-weight: 700; background: var(--dc-blue);"><i class="fa-solid fa-save"></i> Update
                        Record</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            function openModal(id) {
                const modal = document.getElementById(id);
                if (modal) {
                    modal.style.display = 'flex';
                }
            }

            function closeModal(id) {
                const modal = document.getElementById(id);
                if (modal) {
                    modal.style.display = 'none';
                }
            }

            // View Admission details function
            function viewAdmission(admission) {
                document.getElementById('v_name').textContent = admission.name || 'N/A';
                document.getElementById('v_phone').textContent = admission.phone || 'N/A';
                document.getElementById('v_whatsapp').textContent = admission.whatsapp_number || 'N/A';
                document.getElementById('v_email').textContent = admission.email || 'N/A';
                document.getElementById('v_dob_gender').textContent = (admission.gender || '') + ' (' + (admission.dob || 'N/A') + ')';
                document.getElementById('v_aadhaar').textContent = admission.aadhaar_number || 'N/A';
                document.getElementById('v_course').textContent = admission.course_name || 'N/A';
                document.getElementById('v_qualification').textContent = admission.qualification || 'N/A';
                document.getElementById('v_college').textContent = admission.school_college_name || 'N/A';
                document.getElementById('v_father').textContent = admission.father_name || 'N/A';
                document.getElementById('v_guardian_mobile').textContent = admission.guardian_mobile || 'N/A';
                document.getElementById('v_address').textContent = admission.address || 'N/A';
                document.getElementById('v_mode').textContent = 'Mode: ' + (admission.mode || 'N/A');
                document.getElementById('v_status').textContent = 'Status: ' + (admission.status || 'N/A').toUpperCase();
                document.getElementById('v_created_at').textContent = admission.created_at ? new Date(admission.created_at).toLocaleString() : 'N/A';

                const photoContainer = document.getElementById('v_photo_container');
                if (admission.student_photo) {
                    photoContainer.innerHTML = `<img src="/${admission.student_photo}" style="width:60px; height:60px; border-radius:50%; object-fit:cover; border:2px solid #00A651;">`;
                } else {
                    const initial = (admission.name || 'S').charAt(0).toUpperCase();
                    photoContainer.innerHTML = `<div style="width: 60px; height: 60px; border-radius: 50%; background: #00A651; color: white; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800;">${initial}</div>`;
                }

                openModal('viewModal');
            }

            // Edit Admission function
            function editAdmission(admission) {
                document.getElementById('editForm').action = `/admin/admissions/${admission.id}`;
                document.getElementById('e_name').value = admission.name || '';
                document.getElementById('e_phone').value = admission.phone || '';
                document.getElementById('e_whatsapp').value = admission.whatsapp_number || '';
                document.getElementById('e_email').value = admission.email || '';
                document.getElementById('e_dob').value = admission.dob || '';
                document.getElementById('e_gender').value = admission.gender || 'Male';
                document.getElementById('e_aadhaar').value = admission.aadhaar_number || '';
                document.getElementById('e_mode').value = admission.mode || 'Online';
                document.getElementById('e_qualification').value = admission.qualification || '10th Pass';
                document.getElementById('e_college').value = admission.school_college_name || '';
                document.getElementById('e_course').value = admission.course_name || '';
                document.getElementById('e_father').value = admission.father_name || '';
                document.getElementById('e_guardian_mobile').value = admission.guardian_mobile || '';
                document.getElementById('e_status').value = admission.status || 'new';
                document.getElementById('e_address').value = admission.address || '';

                openModal('editModal');
            }

            // Close modal when clicking outside box
            window.onclick = function (event) {
                ['viewModal', 'createModal', 'editModal'].forEach(id => {
                    const modal = document.getElementById(id);
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            }

            // Live Filter Auto Submit on Typing with Focus Preservation
            let liveTimer = null;
            function debouncedLiveSubmit(form) {
                clearTimeout(liveTimer);
                liveTimer = setTimeout(() => {
                    const activeEl = document.activeElement;
                    if (activeEl && activeEl.name) {
                        sessionStorage.setItem('admActiveField', activeEl.name);
                        sessionStorage.setItem('admActivePos', activeEl.selectionStart || activeEl.value.length);
                    }
                    form.submit();
                }, 400);
            }

            document.addEventListener('DOMContentLoaded', () => {
                const fieldName = sessionStorage.getItem('admActiveField');
                const pos = sessionStorage.getItem('admActivePos');
                if (fieldName) {
                    sessionStorage.removeItem('admActiveField');
                    sessionStorage.removeItem('admActivePos');
                    const input = document.querySelector(`input[name="${fieldName}"]`);
                    if (input) {
                        input.focus();
                        if (pos !== null) {
                            input.setSelectionRange(pos, pos);
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection