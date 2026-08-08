<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Blog;
use App\Models\BrochureEnquiry;
use App\Models\ContactEnquiry;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    /**
     * Display the Admin Dashboard with dynamic database content & ApexCharts data.
     */
    public function index()
    {
        // Real-time Database Counts
        $totalCourses          = Schema::hasTable('courses') ? Course::count() : 0;
        $totalAdmissions       = Schema::hasTable('admissions') ? Admission::count() : 0;
        $totalBlogs            = Schema::hasTable('blogs') ? Blog::count() : 0;
        $galleryImages         = Schema::hasTable('galleries') ? Gallery::count() : (Schema::hasTable('gallery_images') ? DB::table('gallery_images')->count() : 0);
        $testimonialsCount     = Schema::hasTable('testimonials') ? Testimonial::count() : 0;
        $faqsCount             = Schema::hasTable('faqs') ? Faq::count() : 0;
        $contactEnquiriesCount = Schema::hasTable('contact_enquiries') ? ContactEnquiry::count() : 0;
        $brochureCount         = Schema::hasTable('brochure_enquiries') ? BrochureEnquiry::count() : 0;

        $pendingEnquiries = (Schema::hasTable('contact_enquiries') ? ContactEnquiry::where('status', 'new')->count() : 0)
                          + (Schema::hasTable('brochure_enquiries') ? BrochureEnquiry::where('status', 'new')->count() : 0)
                          + (Schema::hasTable('admissions') ? Admission::whereIn('status', ['new', 'pending'])->count() : 0);

        // 12 Months Admissions & Enquiries Trend Data for ApexLineChart
        $currentYear = date('Y');
        $admissionsMonthly = [];
        $contactMonthly = [];

        for ($month = 1; $month <= 12; $month++) {
            $admissionsMonthly[] = Schema::hasTable('admissions')
                ? Admission::whereYear('created_at', $currentYear)->whereMonth('created_at', $month)->count()
                : 0;

            $contactMonthly[] = Schema::hasTable('contact_enquiries')
                ? ContactEnquiry::whereYear('created_at', $currentYear)->whereMonth('created_at', $month)->count()
                : 0;
        }

        // Enquiry Sources Distribution (Donut Chart)
        $enquirySourcesData = [
            'Admissions'        => $totalAdmissions,
            'Contact Enquiries' => $contactEnquiriesCount,
            'Brochure Downloads' => $brochureCount,
            'Courses Published' => $totalCourses,
        ];

        // Last 6 Months Labels and Data for Bar & Area Charts
        $last6MonthsLabels = [];
        $last6MonthsAdmissions = [];
        $last6MonthsBrochures = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $last6MonthsLabels[] = $date->format('M Y');

            $last6MonthsAdmissions[] = Schema::hasTable('admissions')
                ? Admission::whereYear('created_at', $date->year)->whereMonth('created_at', $date->month)->count()
                : 0;

            $last6MonthsBrochures[] = Schema::hasTable('brochure_enquiries')
                ? BrochureEnquiry::whereYear('created_at', $date->year)->whereMonth('created_at', $date->month)->count()
                : 0;
        }

        // Fetch Recent Admissions & Brochure Requests from Database
        $recentAdmissions = Schema::hasTable('admissions') ? Admission::latest()->take(5)->get() : collect();
        $recentBrochureRequests = Schema::hasTable('brochure_enquiries') ? BrochureEnquiry::latest()->take(5)->get() : collect();
        $recentContactEnquiries = Schema::hasTable('contact_enquiries') ? ContactEnquiry::latest()->take(5)->get() : collect();

        return view('admin.dashboard', compact(
            'totalCourses',
            'totalAdmissions',
            'totalBlogs',
            'galleryImages',
            'testimonialsCount',
            'faqsCount',
            'contactEnquiriesCount',
            'brochureCount',
            'pendingEnquiries',
            'admissionsMonthly',
            'contactMonthly',
            'enquirySourcesData',
            'last6MonthsLabels',
            'last6MonthsAdmissions',
            'last6MonthsBrochures',
            'recentAdmissions',
            'recentBrochureRequests',
            'recentContactEnquiries'
        ));
    }
}
