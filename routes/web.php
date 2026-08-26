<?php

use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogTagController;
use App\Http\Controllers\Admin\BrochureEnquiryController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\ContactEnquiryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;

// 1. Home & Main Frontend Routes (100% Dynamic from Database)
Route::get('/', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $featuredCourses = Course::where('is_featured', true)->get();
    $latestBlogs = Blog::where('status', 'published')->latest()->take(6)->get();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['home', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('welcome', compact('settings', 'featuredCourses', 'latestBlogs', 'faqs'));
})->name('home');

Route::get('/about', function () {
    $settings = Setting::pluck('value', 'key')->toArray();

    return view('about', compact('settings'));
})->name('about');

Route::get('/admissions', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['admissions', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('admissions', compact('settings', 'faqs'));
})->name('admissions');

Route::post('/admissions/store', [AdmissionController::class, 'store'])->name('admissions.store');

Route::get('/placements', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['placements', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('placements', compact('settings', 'faqs'));
})->name('placements');

Route::get('/student-life', function () {
    $settings = Setting::pluck('value', 'key')->toArray();

    return view('student-life', compact('settings'));
})->name('student-life');

Route::get('/gallery', [GalleryController::class, 'frontendIndex'])->name('gallery');

Route::get('/blogs', [BlogController::class, 'frontendIndex'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'frontendShow'])->name('blogs.show');

Route::get('/contact', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['contact', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('contact', compact('settings', 'faqs'));
})->name('contact');

Route::post('/contact/submit', [ContactEnquiryController::class, 'store'])->name('contact.submit');
Route::post('/brochure/store', [BrochureEnquiryController::class, 'store'])->name('brochure.store');

Route::get('/faq', [FaqController::class, 'frontendIndex'])->name('faq');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/refund-policy', function () {
    return view('refund-policy');
})->name('refund-policy');

Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');

Route::get('/sitemap.xml', function () {
    $baseUrl = config('app.url', 'https://digicodersacademy.com');
    $routes = [
        '/',
        '/about',
        '/courses',
        '/admissions',
        '/placements',
        '/student-life',
        '/gallery',
        '/blogs',
        '/contact',
        '/faq',
        '/privacy-policy',
        '/terms',
        '/refund-policy',
        '/courses/dca',
        '/courses/adca',
        '/courses/web-designing',
        '/courses/advanced-excel-mis',
        '/courses/adwd',
        '/courses/addm',
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach ($routes as $route) {
        $xml .= '<url>';
        $xml .= '<loc>'.rtrim($baseUrl, '/').$route.'</loc>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>'.($route === '/' ? '1.0' : '0.8').'</priority>';
        $xml .= '</url>';
    }

    try {
        $blogs = Blog::where('status', 'published')->get();
        foreach ($blogs as $blog) {
            $xml .= '<url>';
            $xml .= '<loc>'.rtrim($baseUrl, '/').'/blogs/'.$blog->slug.'</loc>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.6</priority>';
            $xml .= '</url>';
        }
    } catch (Throwable $e) {
        // Silently skip blogs if table is not migrated yet
    }

    $xml .= '</urlset>';

    return response($xml, 200, ['Content-Type' => 'application/xml']);
});

// 1.5 Admin Panel Routes

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/send-otp', [LoginController::class, 'sendOtp'])->name('admin.sendOtp');
Route::post('/admin/verify-otp', [LoginController::class, 'verifyOtp'])->name('admin.verifyOtp');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Admin Profile & Security Routes
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::post('/admin/profile/update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
    Route::post('/admin/profile/password', [ProfileController::class, 'updatePassword'])->name('admin.profile.password');

    // CMS Page Update Routes (All 6 Pages)
    Route::get('/admin/cms', [CmsController::class, 'index'])->name('admin.cms.index');
    Route::post('/admin/cms/update-home', [CmsController::class, 'updateHome'])->name('admin.cms.updateHome');
    Route::post('/admin/cms/update-about', [CmsController::class, 'updateAbout'])->name('admin.cms.updateAbout');
    Route::post('/admin/cms/update-admissions', [CmsController::class, 'updateAdmissions'])->name('admin.cms.updateAdmissions');
    Route::post('/admin/cms/update-placements', [CmsController::class, 'updatePlacements'])->name('admin.cms.updatePlacements');
    Route::post('/admin/cms/update-contact', [CmsController::class, 'updateContact'])->name('admin.cms.updateContact');
    Route::post('/admin/cms/update-student-life', [CmsController::class, 'updateStudentLife'])->name('admin.cms.updateStudentLife');

    // Custom Dynamic Pages CRUD Routes
    Route::get('/admin/pages', [PageController::class, 'index'])->name('admin.pages.index');
    Route::get('/admin/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
    Route::post('/admin/pages', [PageController::class, 'store'])->name('admin.pages.store');
    Route::get('/admin/pages/{page}/edit', [PageController::class, 'edit'])->name('admin.pages.edit');
    Route::put('/admin/pages/{page}', [PageController::class, 'update'])->name('admin.pages.update');
    Route::delete('/admin/pages/{page}', [PageController::class, 'destroy'])->name('admin.pages.destroy');

    // Course Management Full CRUD Routes
    Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::get('/admin/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
    Route::post('/admin/courses', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/admin/courses/{course}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/admin/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/admin/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

    // Blog Management CRUD Routes
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::post('/admin/blogs/upload-editor-image', [BlogController::class, 'uploadEditorImage'])->name('admin.blogs.uploadEditorImage');
    Route::get('/admin/blogs/{blog}/views-data', [BlogController::class, 'getViewsData'])->name('admin.blogs.viewsData');
    Route::get('/admin/blogs/{blog}', [BlogController::class, 'show'])->name('admin.blogs.show');
    Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/admin/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');

    // Blog Category & Tag Management Routes
    Route::get('/admin/blog-categories', [BlogCategoryController::class, 'index'])->name('admin.blog-categories.index');
    Route::post('/admin/blog-categories', [BlogCategoryController::class, 'store'])->name('admin.blog-categories.store');
    Route::put('/admin/blog-categories/{category}', [BlogCategoryController::class, 'update'])->name('admin.blog-categories.update');
    Route::delete('/admin/blog-categories/{category}', [BlogCategoryController::class, 'destroy'])->name('admin.blog-categories.destroy');

    Route::get('/admin/blog-tags', [BlogTagController::class, 'index'])->name('admin.blog-tags.index');
    Route::post('/admin/blog-tags', [BlogTagController::class, 'store'])->name('admin.blog-tags.store');
    Route::put('/admin/blog-tags/{tag}', [BlogTagController::class, 'update'])->name('admin.blog-tags.update');
    Route::delete('/admin/blog-tags/{tag}', [BlogTagController::class, 'destroy'])->name('admin.blog-tags.destroy');

    // Gallery Management CRUD Routes
    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::get('/admin/gallery/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('/admin/gallery', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('/admin/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::put('/admin/gallery/{gallery}', [GalleryController::class, 'update'])->name('admin.gallery.update');
    Route::delete('/admin/gallery/{gallery}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');

    // Testimonials Management CRUD Routes
    Route::get('/admin/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::get('/admin/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/admin/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/admin/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('/admin/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/admin/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');

    // FAQs Management CRUD Routes
    Route::get('/admin/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::get('/admin/faqs/create', [FaqController::class, 'create'])->name('admin.faqs.create');
    Route::post('/admin/faqs', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::get('/admin/faqs/{faq}/edit', [FaqController::class, 'edit'])->name('admin.faqs.edit');
    Route::put('/admin/faqs/{faq}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('/admin/faqs/{faq}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');

    // Admissions Routes (Full CRUD)
    Route::get('/admin/admissions', [AdmissionController::class, 'index'])->name('admin.admissions.index');
    Route::post('/admin/admissions', [AdmissionController::class, 'adminStore'])->name('admin.admissions.store');
    Route::get('/admin/admissions/{admission}', [AdmissionController::class, 'show'])->name('admin.admissions.show');
    Route::put('/admin/admissions/{admission}', [AdmissionController::class, 'update'])->name('admin.admissions.update');
    Route::post('/admin/admissions/{admission}/status', [AdmissionController::class, 'updateStatus'])->name('admin.admissions.updateStatus');
    Route::delete('/admin/admissions/{admission}', [AdmissionController::class, 'destroy'])->name('admin.admissions.destroy');

    // Website & System Settings Routes
    Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::post('/admin/settings', [SettingController::class, 'update'])->name('admin.settings.update');
    Route::post('/admin/settings/clear-cache', [SettingController::class, 'clearCache'])->name('admin.settings.clearCache');

    // Activity Logs Audit System Routes
    Route::get('/admin/activity', [ActivityLogController::class, 'index'])->name('admin.activity.index');
    Route::post('/admin/activity/pulse', [ActivityLogController::class, 'pulse'])->name('admin.activity.pulse');
    Route::get('/admin/activity/export', [ActivityLogController::class, 'export'])->name('admin.activity.export');

    // Contact Enquiries Routes (Admin)
    Route::get('/admin/contact-enquiries', [ContactEnquiryController::class, 'index'])->name('admin.contact-enquiries.index');
    Route::post('/admin/contact-enquiries/{contactEnquiry}/read', [ContactEnquiryController::class, 'markAsRead'])->name('admin.contact-enquiries.markAsRead');
    Route::post('/admin/contact-enquiries/{contactEnquiry}/status', [ContactEnquiryController::class, 'updateStatus'])->name('admin.contact-enquiries.updateStatus');
    Route::delete('/admin/contact-enquiries/{contactEnquiry}', [ContactEnquiryController::class, 'destroy'])->name('admin.contact-enquiries.destroy');
    Route::post('/admin/contact-enquiries/bulk-delete', [ContactEnquiryController::class, 'bulkDelete'])->name('admin.contact-enquiries.bulkDelete');

    // Brochure Requests Routes (Admin)
    Route::get('/admin/brochure-requests', [BrochureEnquiryController::class, 'index'])->name('admin.brochure-requests.index');
    Route::post('/admin/brochure-requests/{brochureEnquiry}/read', [BrochureEnquiryController::class, 'markAsRead'])->name('admin.brochure-requests.markAsRead');
    Route::post('/admin/brochure-requests/{brochureEnquiry}/status', [BrochureEnquiryController::class, 'updateStatus'])->name('admin.brochure-requests.updateStatus');
    Route::delete('/admin/brochure-requests/{brochureEnquiry}', [BrochureEnquiryController::class, 'destroy'])->name('admin.brochure-requests.destroy');
    Route::post('/admin/brochure-requests/bulk-delete', [BrochureEnquiryController::class, 'bulkDelete'])->name('admin.brochure-requests.bulkDelete');

    // Notification Module Routes
    Route::get('/admin/notifications/recent', [NotificationController::class, 'recent'])->name('admin.notifications.recent');
    Route::get('/admin/notifications/unread-count', [NotificationController::class, 'unreadCount'])->name('admin.notifications.unreadCount');
    Route::get('/admin/notifications', [NotificationController::class, 'index'])->name('admin.notifications.index');
    Route::post('/admin/notifications/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('admin.notifications.markAllAsRead');
    Route::post('/admin/notifications/bulk-delete', [NotificationController::class, 'bulkDelete'])->name('admin.notifications.bulkDelete');
    Route::post('/admin/notifications/{notification}/read', [NotificationController::class, 'markAsRead'])->name('admin.notifications.markAsRead');
    Route::delete('/admin/notifications/{notification}', [NotificationController::class, 'destroy'])->name('admin.notifications.destroy');
});

// 2. Courses Overview Page
Route::get('/courses', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['courses', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('courses.index', compact('settings', 'faqs'));
})->name('courses.index');

// 3. 6 Month Diploma Courses
Route::get('/courses/dca', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['courses', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('courses.dca', compact('settings', 'faqs'));
})->name('courses.dca');

Route::get('/courses/advanced-excel-mis', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['courses', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('courses.excel-mis', compact('settings', 'faqs'));
})->name('courses.excel-mis');

Route::get('/courses/web-designing', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['courses', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('courses.web-designing', compact('settings', 'faqs'));
})->name('courses.web-designing');

// 4. 1 Year Diploma Courses
Route::get('/courses/adca', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['courses', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('courses.adca', compact('settings', 'faqs'));
})->name('courses.adca');

Route::get('/courses/adwd', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['courses', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('courses.adwd', compact('settings', 'faqs'));
})->name('courses.adwd');

Route::get('/courses/addm', function () {
    $settings = Setting::pluck('value', 'key')->toArray();
    $faqs = Faq::where('status', true)->whereIn('page_slug', ['courses', 'all'])->orderBy('sort_order', 'asc')->get();

    return view('courses.addm', compact('settings', 'faqs'));
})->name('courses.addm');
