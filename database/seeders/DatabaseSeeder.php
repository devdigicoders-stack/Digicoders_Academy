<?php

namespace Database\Seeders;

use App\Models\Admission;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with exact website courses, home settings and data.
     */
    public function run(): void
    {
        // 1. Admin User in admins table
        Admin::firstOrCreate(
            ['email' => 'admin@digicoders.in'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        // 2. All 6 CMS Pages Dynamic Settings Seed
        $cmsSettings = [
            // Home Page
            'home_hero_badge' => 'Admissions Open 2026',
            'home_hero_title' => 'Build Skills That Build Careers.',
            'home_hero_subtitle' => 'Join DigiCoders Academy for industry-focused diploma programmes with practical learning, experienced trainers and recognised certification.',
            'home_stat_students' => '10,000+',
            'home_stat_placement' => '100%',
            'home_stat_trainers' => '50+',
            'home_stat_projects' => '100+',
            'home_about_title' => 'Empowering Next-Gen Tech Leaders & Software Engineers',
            'home_about_desc' => "DigiCoders Academy, a unit of DigiCoders Technologies Pvt Ltd, is Lucknow's premier IT training institute offering job-oriented diploma programs.",
            'home_phone' => '+91 9198483820',
            'home_whatsapp' => '+91 9198483820',

            // About Us Page
            'about_hero_title' => "Lucknow's Premier IT Training Institute",
            'about_hero_subtitle' => 'Pioneering practical software engineering education, live project exposure, and 100% placement support.',
            'about_vision' => 'To bridge the gap between academic education and industry software engineering demands.',
            'about_mission' => 'Empower students from all backgrounds with real-world coding skills, production projects, and direct job opportunities.',
            'about_gopal_bio' => 'Director & Founder with 10+ years of IT software development & mentoring experience.',
            'about_himanshu_bio' => 'Co-Founder & Lead Tech Architect driving student placement and technology innovations.',
            'about_founded_year' => '2019',

            // Admissions Page
            'admissions_hero_title' => 'Begin Your Software Career Journey Today',
            'admissions_hero_subtitle' => 'Simple 3-step admission process with scholarship options and zero-cost EMI fee facilities.',
            'admissions_next_batch' => '15th August 2026',
            'admissions_guidelines' => 'Open for B.Tech, BCA, MCA, Diploma, B.Sc, B.Com, and 12th pass students.',
            'admissions_seat_fee' => '₹1,000 (Refundable / Adjustable in Tuition Fee)',

            // Placements Page
            'placements_hero_title' => '100% Guaranteed Job Placement Record',
            'placements_highest_package' => '₹12.5 LPA',
            'placements_avg_package' => '₹4.2 LPA',
            'placements_hiring_partners_count' => '250+ IT Companies',
            'placements_notice' => 'Our dedicated placement cell conducts weekly mock interviews and direct HR recruitment drives.',

            // Contact Us Page
            'contact_office_address' => 'DigiCoders Technologies, Near PolyTechnic Crossing, Indira Nagar, Lucknow, Uttar Pradesh 226016',
            'contact_phone_primary' => '+91 9198483820',
            'contact_phone_secondary' => '+91 6394296293',
            'contact_whatsapp' => '+91 9198483820',
            'contact_email' => 'info@digicoders.in',
            'contact_office_timing' => 'Mon - Sat: 9:00 AM - 7:00 PM',
            'contact_map_url' => 'https://maps.google.com/maps?q=DigiCoders+Lucknow&t=&z=13&ie=UTF8&iwloc=&output=embed',

            // Student Life Page
            'student_life_hero_title' => 'State-of-the-Art Learning Environment',
            'student_life_hero_subtitle' => 'Experience high-tech AC labs, ultra-fast fiber internet, coding hackathons, and collaborative tech community.',
            'student_life_labs_info' => '100+ High-Performance i5/i7 Workstations with Dual Monitor Setup.',
            'student_life_hackathons_info' => 'Monthly Codeathons with Trophy Awards and Cash Prizes.',
        ];

        foreach ($cmsSettings as $key => $value) {
            Setting::setKey($key, $value);
        }

        // 3. Exact Website Courses Seed
        $courses = [
            [
                'title' => 'DCA (Diploma in Computer Applications)',
                'slug' => 'dca',
                'code' => 'DCA-6M',
                'category' => '6 Month Diploma',
                'duration' => '6 Months',
                'fee' => 12500,
                'badge' => 'Short-Term',
                'students_count' => 85,
                'rating' => 4.9,
                'is_featured' => true,
            ],
            [
                'title' => 'Advanced Excel & MIS (Data Analytics)',
                'slug' => 'excel-mis',
                'code' => 'MIS-6M',
                'category' => '6 Month Diploma',
                'duration' => '6 Months',
                'fee' => 15000,
                'badge' => 'High Demand',
                'students_count' => 62,
                'rating' => 4.8,
                'is_featured' => true,
            ],
            [
                'title' => 'Web Designing (Frontend UI/UX)',
                'slug' => 'web-designing',
                'code' => 'WD-6M',
                'category' => '6 Month Diploma',
                'duration' => '6 Months',
                'fee' => 18000,
                'badge' => 'Trending',
                'students_count' => 74,
                'rating' => 4.9,
                'is_featured' => true,
            ],
            [
                'title' => 'ADCA (Advanced Diploma in Computer Applications)',
                'slug' => 'adca',
                'code' => 'ADCA-1Y',
                'category' => '1 Year Diploma',
                'duration' => '12 Months',
                'fee' => 25000,
                'badge' => 'Master Diploma',
                'students_count' => 120,
                'rating' => 5.0,
                'is_featured' => true,
            ],
            [
                'title' => 'ADWD (Advanced Diploma in Web Development Full Stack)',
                'slug' => 'adwd',
                'code' => 'ADWD-1Y',
                'category' => '1 Year Diploma',
                'duration' => '12 Months',
                'fee' => 35000,
                'badge' => '100% Placement',
                'students_count' => 140,
                'rating' => 5.0,
                'is_featured' => true,
            ],
            [
                'title' => 'ADDM (Advanced Diploma in Digital Marketing Specialist)',
                'slug' => 'addm',
                'code' => 'ADDM-1Y',
                'category' => '1 Year Diploma',
                'duration' => '12 Months',
                'fee' => 30000,
                'badge' => 'Career Track',
                'students_count' => 96,
                'rating' => 4.9,
                'is_featured' => true,
            ],
        ];

        foreach ($courses as $c) {
            Course::updateOrCreate(['slug' => $c['slug']], $c);
        }

        // 3.5 Blog Categories & Tags Seed
        $blogCategories = [
            ['name' => 'Web Development', 'slug' => 'web-development', 'description' => 'Frontend, Backend, Laravel, React, Node.js, and Full-Stack technology guides.'],
            ['name' => 'DCA & Computer Basics', 'slug' => 'dca-computer-basics', 'description' => 'Fundamentals of computer applications, OS, office tools, and networking.'],
            ['name' => 'Advanced Excel & MIS', 'slug' => 'advanced-excel-mis', 'description' => 'Corporate Excel formulas, Power Query, dashboards, and data analytics.'],
            ['name' => 'Digital Marketing', 'slug' => 'digital-marketing', 'description' => 'SEO, PPC ads, social media strategies, and content marketing tips.'],
            ['name' => 'Artificial Intelligence', 'slug' => 'artificial-intelligence', 'description' => 'AI tools, Machine Learning, ChatGPT prompts, and future tech trends.'],
            ['name' => 'Mobile App Dev', 'slug' => 'mobile-app-dev', 'description' => 'Android, iOS, Flutter, and React Native mobile application development.'],
            ['name' => 'Career Guidance', 'slug' => 'career-guidance', 'description' => 'Resume building, IT interview preparation, and placement roadmaps.'],
        ];

        foreach ($blogCategories as $cat) {
            BlogCategory::updateOrCreate(['slug' => $cat['slug']], $cat);
        }

        $blogTags = [
            ['name' => 'WebDev', 'slug' => 'webdev'],
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'PHP', 'slug' => 'php'],
            ['name' => 'React', 'slug' => 'react'],
            ['name' => 'Python', 'slug' => 'python'],
            ['name' => 'ExcelFormula', 'slug' => 'excelformula'],
            ['name' => 'SEO2026', 'slug' => 'seo2026'],
            ['name' => 'ResumeTips', 'slug' => 'resumetips'],
            ['name' => 'Flutter', 'slug' => 'flutter'],
            ['name' => 'AI', 'slug' => 'ai'],
        ];

        foreach ($blogTags as $tag) {
            BlogTag::updateOrCreate(['slug' => $tag['slug']], $tag);
        }

        // 4. Blogs Seed
        $blogs = [
            ['title' => 'Web Development Roadmap 2026: From Zero to Full Stack Pro', 'slug' => 'web-development-roadmap-2026', 'category' => 'Web Development', 'summary' => 'Comprehensive guide to mastering HTML, CSS, JavaScript, Laravel 12, and React in 2026.', 'views_count' => 1420, 'comments_count' => 18, 'status' => 'published'],
            ['title' => 'How AI is Transforming Software Engineering in 2026', 'slug' => 'ai-transforming-software-engineering', 'category' => 'Artificial Intelligence', 'summary' => 'Explore how AI pair programmers are increasing productivity for full stack developers.', 'views_count' => 980, 'comments_count' => 12, 'status' => 'published'],
            ['title' => 'Flutter vs React Native: Which Mobile Framework to Choose?', 'slug' => 'flutter-vs-react-native-2026', 'category' => 'Mobile App Dev', 'summary' => 'In-depth comparison of cross-platform mobile development performance in 2026.', 'views_count' => 2140, 'comments_count' => 34, 'status' => 'published'],
        ];

        foreach ($blogs as $b) {
            $blogObj = Blog::updateOrCreate(['slug' => $b['slug']], $b);
            // Attach default tags
            $tagIds = BlogTag::pluck('id')->take(3)->toArray();
            $blogObj->tags()->sync($tagIds);
        }

        // 5. Enquiries Seed
        $enquiries = [
            ['name' => 'Rahul Sharma', 'email' => 'rahul.sharma@example.com', 'phone' => '+91 98765 43210', 'course_name' => 'ADWD (Full Stack Web Dev)', 'source' => 'Website Form', 'status' => 'new'],
            ['name' => 'Priya Verma', 'email' => 'priya.v@example.com', 'phone' => '+91 91234 56789', 'course_name' => 'ADCA (Advanced Computer App)', 'source' => 'WhatsApp', 'status' => 'contacted'],
            ['name' => 'Aman Kumar', 'email' => 'aman.k@example.com', 'phone' => '+91 99887 76655', 'course_name' => 'ADDM (Digital Marketing)', 'source' => 'Admissions Page', 'status' => 'follow_up'],
            ['name' => 'Sneha Patel', 'email' => 'sneha.p@example.com', 'phone' => '+91 94567 12345', 'course_name' => 'Web Designing', 'source' => 'Brochure Download', 'status' => 'new'],
            ['name' => 'Vikash Singh', 'email' => 'vikash.s@example.com', 'phone' => '+91 97766 55443', 'course_name' => 'Advanced Excel & MIS', 'source' => 'Course Page', 'status' => 'enrolled'],
        ];

        foreach ($enquiries as $e) {
            Admission::updateOrCreate(['email' => $e['email']], $e);
        }

        // 6. Testimonials Seed
        $testimonials = [
            [
                'student_name' => 'Vikram Singh',
                'company' => 'TCS',
                'role' => 'Software Engineer',
                'course_name' => 'ADWD (Full Stack Web Dev)',
                'rating' => 5.0,
                'review' => 'DigiCoders Academy gave me hands-on project experience that helped me crack my TCS interview on the first attempt!',
                'avatar' => 'images/gopal-singh-director.png',
                'is_placed' => true,
                'is_featured' => true,
                'status' => true,
            ],
            [
                'student_name' => 'Ananya Roy',
                'company' => 'Wipro',
                'role' => 'MIS Analyst',
                'course_name' => 'Advanced Excel & MIS',
                'rating' => 5.0,
                'review' => 'The Advanced Excel & MIS diploma covered real corporate data sets, Power Query automation, and executive dashboards.',
                'avatar' => 'images/himanshu-kashyap-co-founder.png',
                'is_placed' => true,
                'is_featured' => true,
                'status' => true,
            ],
            [
                'student_name' => 'Rohan Gupta',
                'company' => 'Tech Mahindra',
                'role' => 'UI/UX Designer',
                'course_name' => 'Web Designing UI/UX',
                'rating' => 4.9,
                'review' => 'Best institute in Lucknow for practical software engineering training and 100% placement support.',
                'avatar' => 'images/gopal-singh-director1.jpg',
                'is_placed' => true,
                'is_featured' => true,
                'status' => true,
            ],
            [
                'student_name' => 'Kavita Rastogi',
                'company' => 'HCL Technologies',
                'role' => 'Software Tester',
                'course_name' => 'ADCA (Advanced Computer App)',
                'rating' => 5.0,
                'review' => 'I loved the industrial visits and mock interviews. The mentors guided me step-by-step through technical round preparation.',
                'avatar' => 'images/himanshu-kashyap-co-founder1.png',
                'is_placed' => true,
                'is_featured' => false,
                'status' => true,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['student_name' => $t['student_name']], $t);
        }

        // 7. Gallery Seed
        $galleries = [
            [
                'title' => 'ADWD Full Stack Batch Placement Drive',
                'album' => 'Placement',
                'description' => 'Celebrating high package selection of ADWD full stack web developers in reputed IT MNCs.',
                'alt_text' => 'DigiCoders ADWD Full Stack Batch Placement Celebration in Lucknow',
                'image_path' => 'images/students.png',
                'status' => true,
            ],
            [
                'title' => 'ADCA Live Practical Lab Session',
                'album' => 'Computer Labs',
                'description' => 'Students working on live desktop and office automation software projects with 1-on-1 mentor assistance.',
                'alt_text' => 'High-tech computer lab with students learning ADCA course',
                'image_path' => 'images/cta-student.png',
                'status' => true,
            ],
            [
                'title' => 'DigiCoders Annual 24-Hour Hackathon',
                'album' => 'Events',
                'description' => 'Annual coding sprint where tech students built real-world software products and won cash trophies.',
                'alt_text' => 'DigiCoders Academy 24-Hour Code Hackathon event in Indiranagar Lucknow',
                'image_path' => 'images/hero-bg.png',
                'status' => true,
            ],
            [
                'title' => 'Director Keynote on Software Industry Trends',
                'album' => 'Workshops',
                'description' => 'Inspiring address by Gopal Singh (Director) on modern web frameworks, AI tools, and career roadmaps.',
                'alt_text' => 'Gopal Singh Director Keynote Speech on IT Trends',
                'image_path' => 'images/himanshu-kashyap-co-founder1.png',
                'status' => true,
            ],
            [
                'title' => 'React & Node.js Masterclass Bootcamp',
                'album' => 'Workshops',
                'description' => 'Hands-on weekend bootcamp focused on building scalable REST APIs and modern JavaScript frontend applications.',
                'alt_text' => 'Full stack web development React bootcamp workshop at DigiCoders Academy',
                'image_path' => 'images/gopal-singh-director.png',
                'status' => true,
            ],
            [
                'title' => 'Industrial Visit to TCS Lucknow IT Park',
                'album' => 'Industrial Visits',
                'description' => 'Students visited Tata Consultancy Services campus to learn about corporate software engineering & Agile pipelines.',
                'alt_text' => 'DigiCoders Academy students industrial visit to TCS Lucknow',
                'image_path' => 'images/himanshu-kashyap-co-founder.png',
                'status' => true,
            ],
        ];

        foreach ($galleries as $g) {
            Gallery::updateOrCreate(['title' => $g['title']], $g);
        }

        // 8. FAQ Seed
        $faqs = [
            [
                'question' => 'What are the eligibility criteria for joining diploma courses at DigiCoders Academy?',
                'answer' => 'Students from 10th pass, 12th pass, B.Tech, BCA, MCA, BA, B.Com, B.Sc or diploma backgrounds can join our software engineering programs.',
                'category' => 'Admissions',
                'page_slug' => 'all',
                'sort_order' => 1,
                'is_featured' => true,
                'status' => true,
            ],
            [
                'question' => 'Is job placement 100% guaranteed for diploma students?',
                'answer' => 'Yes! We provide 100% placement support including weekly mock technical interviews, resume building sessions, and direct recruitment drives with IT companies.',
                'category' => 'Placements',
                'page_slug' => 'all',
                'sort_order' => 2,
                'is_featured' => true,
                'status' => true,
            ],
            [
                'question' => 'Can I pay course tuition fees in easy monthly installments?',
                'answer' => 'Yes, DigiCoders Academy offers zero-cost flexible monthly fee installment facilities for all 6-month and 1-year diploma programs.',
                'category' => 'Fees & Installments',
                'page_slug' => 'all',
                'sort_order' => 3,
                'is_featured' => true,
                'status' => true,
            ],
            [
                'question' => 'What is the daily batch timing structure at Lucknow campus?',
                'answer' => 'Multiple flexible batches are conducted between 8:00 AM to 7:00 PM (Morning, Afternoon & Evening sessions available).',
                'category' => 'Courses & Syllabus',
                'page_slug' => 'faq',
                'sort_order' => 4,
                'is_featured' => false,
                'status' => true,
            ],
            [
                'question' => 'Are DigiCoders certificates recognized for government & corporate jobs?',
                'answer' => 'Yes, DigiCoders Academy certificates are ISO 9001:2015 certified and valid across private MNCs and government job applications.',
                'category' => 'Certificates',
                'page_slug' => 'faq',
                'sort_order' => 5,
                'is_featured' => false,
                'status' => true,
            ],
            [
                'question' => 'What happens if I miss a live practical lab session?',
                'answer' => '1-on-1 backup classes and mentor assistance are provided so that you never fall behind in any topic.',
                'category' => 'Courses & Syllabus',
                'page_slug' => 'faq',
                'sort_order' => 6,
                'is_featured' => false,
                'status' => true,
            ],
        ];

        foreach ($faqs as $f) {
            Faq::updateOrCreate(['question' => $f['question']], $f);
        }
    }
}
