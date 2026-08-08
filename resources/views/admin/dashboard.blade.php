@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="dc-container">

        <!-- 1. WELCOME BANNER SECTION -->
        <div class="dc-welcome-banner"
            style="background: linear-gradient(135deg, rgba(0, 166, 81, 0.08) 0%, rgba(245, 130, 32, 0.05) 50%, rgba(0, 119, 200, 0.06) 100%); border: 1px solid var(--dc-border); border-radius: 16px; padding: 24px; position: relative; overflow: hidden; backdrop-filter: blur(16px); margin-bottom: 24px;">
            <div class="dc-welcome-title">
                <h1 style="font-size: 20px; font-weight: 600; margin-bottom: 6px;">Good Morning, Admin <i
                        class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i>
                </h1>
                <p style="color: var(--dc-dark-muted); font-size: 13.5px; margin-bottom: 14px;">Welcome back to DigiCoders
                    Academy CMS. Here is your real-time performance overview for today.</p>

                <!-- Today Summary Metrics Chips -->
                <div style="display: flex; gap: 10px; flex-wrap: wrap; align-items: center;">
                    <span
                        style="background: rgba(0, 166, 81, 0.12); color: var(--dc-green); border: 1px solid var(--dc-green-border); padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="fa-solid fa-user-check"></i> {{ number_format($totalAdmissions) }} Total Admissions
                    </span>
                    <span
                        style="background: rgba(245, 130, 32, 0.12); color: var(--dc-orange); border: 1px solid var(--dc-orange-border); padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="fa-solid fa-clock"></i> {{ number_format($pendingEnquiries) }} Pending Leads
                    </span>
                    <span
                        style="background: rgba(0, 119, 200, 0.12); color: var(--dc-blue); border: 1px solid var(--dc-blue-border); padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="fa-solid fa-file-pdf"></i> {{ number_format($brochureCount) }} Brochure Downloads
                    </span>
                </div>
            </div>
        </div>

        <!-- 2. 8 PREMIUM GLASS STATISTICS CARDS -->
        <div class="dc-stats-grid">
            <!-- Card 1: Total Courses -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">Total Courses</span>
                    <div class="dc-stat-icon green">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($totalCourses) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.courses.index') }}"
                        style="color: var(--dc-green); font-weight: 600; font-size: 12px;">Manage Courses &rarr;</a>
                </div>
            </div>

            <!-- Card 2: Total Admissions -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">Total Admissions</span>
                    <div class="dc-stat-icon blue">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($totalAdmissions) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.admissions.index') }}"
                        style="color: var(--dc-blue); font-weight: 600; font-size: 12px;">View Admissions &rarr;</a>
                </div>
            </div>

            <!-- Card 3: Contact Enquiries -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">Contact Enquiries</span>
                    <div class="dc-stat-icon orange">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($contactEnquiriesCount) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.contact-enquiries.index') }}"
                        style="color: var(--dc-orange); font-weight: 600; font-size: 12px;">View Messages &rarr;</a>
                </div>
            </div>

            <!-- Card 4: Brochure Requests -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">Brochure Downloads</span>
                    <div class="dc-stat-icon green">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($brochureCount) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.brochure-requests.index') }}"
                        style="color: var(--dc-green); font-weight: 600; font-size: 12px;">View Requests &rarr;</a>
                </div>
            </div>

            <!-- Card 5: Total Blogs -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">Total Blogs</span>
                    <div class="dc-stat-icon orange">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($totalBlogs) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.blogs.index') }}"
                        style="color: var(--dc-orange); font-weight: 600; font-size: 12px;">Manage Articles &rarr;</a>
                </div>
            </div>

            <!-- Card 6: Gallery Images -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">Gallery Photos</span>
                    <div class="dc-stat-icon purple">
                        <i class="fa-solid fa-images"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($galleryImages) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.gallery.index') }}"
                        style="color: #8b5cf6; font-weight: 600; font-size: 12px;">View Gallery &rarr;</a>
                </div>
            </div>

            <!-- Card 7: Testimonials -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">Testimonials</span>
                    <div class="dc-stat-icon blue">
                        <i class="fa-solid fa-quote-right"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($testimonialsCount) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.testimonials.index') }}"
                        style="color: var(--dc-blue); font-weight: 600; font-size: 12px;">View Feedback &rarr;</a>
                </div>
            </div>

            <!-- Card 8: FAQs Management -->
            <div class="dc-stat-card">
                <div class="dc-stat-header">
                    <span class="dc-stat-title">FAQs Questions</span>
                    <div class="dc-stat-icon blue">
                        <i class="fa-solid fa-circle-question"></i>
                    </div>
                </div>
                <div class="dc-stat-number">{{ number_format($faqsCount ?? 0) }}</div>
                <div class="dc-stat-footer">
                    <a href="{{ route('admin.faqs.index') }}"
                        style="color: var(--dc-blue); font-weight: 600; font-size: 12px;">Manage FAQs &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 3. ANALYTICS SECTION (DYNAMIC APEXCHARTS) -->
        <div class="dc-analytics-grid">
            <!-- Admissions & Enquiries Line Chart (12 Months) -->
            <div class="dc-card">
                <div class="dc-card-title-wrap">
                    <div>
                        <h2 class="dc-card-title">Monthly Enquiries & Admissions Trend</h2>
                        <span style="font-size: 12px; color: var(--dc-light-gray);">Real-time monthly comparison from
                            database</span>
                    </div>
                </div>
                <div id="admissionsChart" style="min-height: 320px;"></div>
            </div>

            <!-- Enquiry Sources Donut Chart -->
            <div class="dc-card">
                <div class="dc-card-title-wrap">
                    <div>
                        <h2 class="dc-card-title">Lead Channels Distribution</h2>
                        <span style="font-size: 12px; color: var(--dc-light-gray);">Breakdown of website lead sources</span>
                    </div>
                </div>
                <div id="enquirySourcesChart"
                    style="min-height: 280px; display: flex; align-items: center; justify-content: center;"></div>
            </div>
        </div>

        <!-- Additional Charts Row: Admissions Bar & Brochure Area Chart -->
        <div class="dc-analytics-grid" style="grid-template-columns: 6fr 6fr;">
            <!-- Monthly Admissions Bar Chart -->
            <div class="dc-card">
                <div class="dc-card-title-wrap">
                    <h2 class="dc-card-title">Recent Monthly Admissions</h2>
                    <span class="dc-badge-pill dc-badge-green">Last 6 Months</span>
                </div>
                <div id="monthlyVisitorsChart" style="min-height: 260px;"></div>
            </div>

            <!-- Brochure Downloads Area Chart -->
            <div class="dc-card">
                <div class="dc-card-title-wrap">
                    <h2 class="dc-card-title">Brochure Downloads Trend</h2>
                    <span class="dc-badge-pill dc-badge-blue">Prospectus Interest</span>
                </div>
                <div id="studentGrowthChart" style="min-height: 260px;"></div>
            </div>
        </div>

        <!-- 4. QUICK ACTIONS CARD GRID -->
        <div style="margin-bottom: 28px;">
            <div class="dc-card-title-wrap">
                <h2 class="dc-card-title">Quick Action Hub</h2>
                <span style="font-size: 12px; color: var(--dc-light-gray);">Fast one-click content creation &
                    management</span>
            </div>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;">
                <a href="{{ route('admin.courses.create') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon green"><i class="fa-solid fa-book-open"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Add
                            Course</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">Create new curriculum</span>
                    </div>
                </a>
                <a href="{{ route('admin.blogs.create') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon orange"><i class="fa-solid fa-pen"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Add
                            Blog</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">Publish article</span>
                    </div>
                </a>
                <a href="{{ route('admin.gallery.create') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon purple"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Upload
                            Gallery</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">Add photos/videos</span>
                    </div>
                </a>
                <a href="{{ route('admin.testimonials.create') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon green"><i class="fa-solid fa-quote-left"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Add
                            Testimonial</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">Student feedback</span>
                    </div>
                </a>
                <a href="{{ route('admin.faqs.create') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon blue"><i class="fa-solid fa-circle-question"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Create
                            FAQ</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">Add common answers</span>
                    </div>
                </a>
                <a href="{{ route('admin.brochure-requests.index') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon green"><i class="fa-solid fa-file-pdf"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Brochure
                            Leads</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">View PDF requests</span>
                    </div>
                </a>
                <a href="{{ route('admin.contact-enquiries.index') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon orange"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Contact
                            Leads</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">View website enquiries</span>
                    </div>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="dc-card"
                    style="padding: 16px; display: flex; align-items: center; gap: 14px; text-decoration: none;">
                    <div class="dc-stat-icon blue"><i class="fa-solid fa-gears"></i></div>
                    <div>
                        <strong
                            style="display: block; font-family: var(--font-heading); color: var(--dc-dark); font-size: 13.5px;">Website
                            Settings</strong>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray);">General configuration</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- 5. RECENT ADMISSIONS & BROCHURE REQUESTS TABLES (100% DYNAMIC FROM DATABASE) -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 28px;">

            <!-- Recent Admissions Applications -->
            <div class="dc-card">
                <div class="dc-card-title-wrap">
                    <h2 class="dc-card-title">Recent Admissions Applications</h2>
                    <a href="{{ route('admin.admissions.index') }}" class="dc-btn dc-btn-outline"
                        style="height: 32px; font-size: 12px;">View All</a>
                </div>

                <div class="dc-table-responsive">
                    <table class="dc-table">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentAdmissions as $enquiry)
                                <tr>
                                    <td>
                                        <div class="dc-user-cell">
                                            <div
                                                style="width: 32px; height: 32px; border-radius: var(--radius-std); background: var(--dc-green-light); color: var(--dc-green); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px;">
                                                {{ strtoupper(substr($enquiry->name, 0, 1)) }}
                                            </div>
                                            <div>
                                                <strong style="display: block; font-size: 13px;">{{ $enquiry->name }}</strong>
                                                <span
                                                    style="font-size: 11px; color: var(--dc-light-gray);">{{ $enquiry->email ?? 'N/A' }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="tel:{{ $enquiry->phone }}"
                                            style="color: inherit; text-decoration: none; font-weight: 600;">{{ $enquiry->phone }}</a>
                                    </td>
                                    <td><span
                                            style="font-size: 12px; font-weight: 600; color: var(--dc-orange);">{{ $enquiry->course_name ?? 'General' }}</span>
                                    </td>
                                    <td>
                                        @if($enquiry->status === 'new' || $enquiry->status === 'pending')
                                            <span class="dc-badge-pill dc-badge-blue">New</span>
                                        @elseif($enquiry->status === 'contacted')
                                            <span class="dc-badge-pill dc-badge-orange">Contacted</span>
                                        @else
                                            <span class="dc-badge-pill dc-badge-green">Enrolled</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center; color: var(--dc-light-gray); padding: 20px;">No
                                        recent admission applications found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Brochure Download Requests -->
            <div class="dc-card">
                <div class="dc-card-title-wrap">
                    <h2 class="dc-card-title">Recent Prospectus Downloads</h2>
                    <a href="{{ route('admin.brochure-requests.index') }}" class="dc-btn dc-btn-outline"
                        style="height: 32px; font-size: 12px;">View All</a>
                </div>

                <div class="dc-table-responsive">
                    <table class="dc-table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>WhatsApp</th>
                                <th>Course</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentBrochureRequests as $brochure)
                                <tr>
                                    <td>
                                        <div class="dc-user-cell">
                                            <div
                                                style="width: 32px; height: 32px; border-radius: var(--radius-std); background: rgba(37,211,102,0.1); color: #25D366; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px;">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </div>
                                            <div>
                                                <strong style="display: block; font-size: 13px;">{{ $brochure->name }}</strong>
                                                <span
                                                    style="font-size: 11px; color: var(--dc-light-gray);">{{ $brochure->created_at ? $brochure->created_at->diffForHumans() : 'Just now' }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="https://wa.me/91{{ $brochure->phone }}" target="_blank"
                                            style="color: inherit; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 4px;">
                                            <i class="fa-brands fa-whatsapp" style="color: #25D366;"></i> {{ $brochure->phone }}
                                        </a>
                                    </td>
                                    <td><span
                                            style="font-size: 12px; font-weight: 600; color: var(--dc-green);">{{ $brochure->course ?? 'General Prospectus' }}</span>
                                    </td>
                                    <td>
                                        @if($brochure->status === 'new')
                                            <span class="dc-badge-pill dc-badge-blue">New</span>
                                        @elseif($brochure->status === 'contacted')
                                            <span class="dc-badge-pill dc-badge-orange">Contacted</span>
                                        @else
                                            <span class="dc-badge-pill dc-badge-green">Resolved</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center; color: var(--dc-light-gray); padding: 20px;">No
                                        recent brochure download requests found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let chartInstances = [];

            function renderDashboardCharts() {
                chartInstances.forEach(chart => { try { chart.destroy(); } catch (e) { } });
                chartInstances = [];

                const isDark = document.body.classList.contains("dark-mode") || localStorage.getItem("dc_theme") === "dark";
                const foreColor = isDark ? '#E2E8F0' : '#64748B';
                const gridColor = isDark ? 'rgba(255, 255, 255, 0.12)' : 'rgba(17, 17, 17, 0.06)';

                // Dynamic Chart Data from Controller
                const admissionsMonthly = @json($admissionsMonthly);
                const contactMonthly = @json($contactMonthly);
                const sourcesSeries = @json(array_values($enquirySourcesData));
                const sourcesLabels = @json(array_keys($enquirySourcesData));
                const last6Labels = @json($last6MonthsLabels);
                const last6Admissions = @json($last6MonthsAdmissions);
                const last6Brochures = @json($last6MonthsBrochures);

                // 1. Monthly Enquiries & Admissions Trend Line Chart
                var admissionsOptions = {
                    series: [{
                        name: 'Admissions Applications',
                        data: admissionsMonthly
                    }, {
                        name: 'Contact Enquiries',
                        data: contactMonthly
                    }],
                    chart: {
                        type: 'line',
                        height: 320,
                        toolbar: { show: false },
                        fontFamily: 'Poppins, sans-serif',
                        foreColor: foreColor
                    },
                    colors: ['#00A651', '#0077C8'],
                    stroke: { curve: 'smooth', width: 3 },
                    markers: { size: 4, hover: { size: 6 } },
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        labels: { style: { colors: foreColor } }
                    },
                    yaxis: {
                        labels: { style: { colors: foreColor } }
                    },
                    legend: {
                        labels: { colors: foreColor }
                    },
                    grid: { borderColor: gridColor }
                };
                var chart1 = new ApexCharts(document.querySelector("#admissionsChart"), admissionsOptions);
                chart1.render();
                chartInstances.push(chart1);

                // 2. Lead Channels Distribution Donut Chart
                var enquirySourcesOptions = {
                    series: sourcesSeries,
                    labels: sourcesLabels,
                    chart: {
                        type: 'donut',
                        height: 280,
                        fontFamily: 'Poppins, sans-serif',
                        foreColor: foreColor
                    },
                    colors: ['#00A651', '#0077C8', '#F58220', '#8b5cf6'],
                    legend: {
                        position: 'bottom',
                        labels: { colors: foreColor }
                    },
                    dataLabels: { enabled: false }
                };
                var chart2 = new ApexCharts(document.querySelector("#enquirySourcesChart"), enquirySourcesOptions);
                chart2.render();
                chartInstances.push(chart2);

                // 3. Recent Monthly Admissions Bar Chart (Last 6 Months)
                var monthlyVisitorsOptions = {
                    series: [{
                        name: 'Admissions',
                        data: last6Admissions
                    }],
                    chart: {
                        type: 'bar',
                        height: 240,
                        toolbar: { show: false },
                        fontFamily: 'Poppins, sans-serif',
                        foreColor: foreColor
                    },
                    colors: ['#00A651'],
                    plotOptions: { bar: { borderRadius: 4, columnWidth: '45%' } },
                    xaxis: {
                        categories: last6Labels,
                        labels: { style: { colors: foreColor } }
                    },
                    yaxis: {
                        labels: { style: { colors: foreColor } }
                    },
                    grid: { borderColor: gridColor }
                };
                var chart3 = new ApexCharts(document.querySelector("#monthlyVisitorsChart"), monthlyVisitorsOptions);
                chart3.render();
                chartInstances.push(chart3);

                // 4. Brochure Downloads Trend Area Chart (Last 6 Months)
                var studentGrowthOptions = {
                    series: [{
                        name: 'Brochure Downloads',
                        data: last6Brochures
                    }],
                    chart: {
                        type: 'area',
                        height: 240,
                        toolbar: { show: false },
                        fontFamily: 'Poppins, sans-serif',
                        foreColor: foreColor
                    },
                    colors: ['#0077C8'],
                    fill: { type: 'gradient', gradient: { opacityFrom: 0.4, opacityTo: 0.05 } },
                    stroke: { curve: 'smooth', width: 2 },
                    xaxis: {
                        categories: last6Labels,
                        labels: { style: { colors: foreColor } }
                    },
                    yaxis: {
                        labels: { style: { colors: foreColor } }
                    },
                    grid: { borderColor: gridColor }
                };
                var chart4 = new ApexCharts(document.querySelector("#studentGrowthChart"), studentGrowthOptions);
                chart4.render();
                chartInstances.push(chart4);
            }

            renderDashboardCharts();

            // Listen to Theme Toggle button click to dynamically update chart text colors
            const themeBtn = document.getElementById("themeToggleBtn");
            if (themeBtn) {
                themeBtn.addEventListener("click", function () {
                    setTimeout(renderDashboardCharts, 50);
                });
            }
        });
    </script>
@endpush