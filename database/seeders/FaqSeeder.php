<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate faqs table to start fresh with clean dynamic data
        Faq::truncate();

        $faqs = [
            // --- HOME PAGE FAQS (page_slug: 'home') ---
            [
                'question'   => 'What are the eligibility criteria for admission?',
                'answer'     => 'Eligibility ranges from 10th pass for basic DCA diploma courses to 12th pass / Graduation for advanced web development and digital marketing diplomas.',
                'category'   => 'Admissions',
                'page_slug'  => 'home',
                'sort_order' => 1,
                'status'     => true,
            ],
            [
                'question'   => 'What documents are required for admission?',
                'answer'     => 'You need your marksheets (10th/12th/Graduation), Aadhar Card copy, and 2 passport-size photographs.',
                'category'   => 'Admissions',
                'page_slug'  => 'home',
                'sort_order' => 2,
                'status'     => true,
            ],
            [
                'question'   => 'Do you provide placement assistance?',
                'answer'     => 'Yes, we offer 100% placement support with resume building, mock technical interviews, and direct campus hiring drives.',
                'category'   => 'Placements',
                'page_slug'  => 'home',
                'sort_order' => 3,
                'status'     => true,
            ],
            [
                'question'   => 'Are the courses 100% practical?',
                'answer'     => 'Yes! 80%+ time is spent inside high-tech computer labs working directly on live client projects.',
                'category'   => 'Courses & Syllabus',
                'page_slug'  => 'home',
                'sort_order' => 4,
                'status'     => true,
            ],
            [
                'question'   => 'Can I pay fees in installments?',
                'answer'     => 'Yes, easy monthly installment options are available for all diploma courses without interest.',
                'category'   => 'Fees & Installments',
                'page_slug'  => 'home',
                'sort_order' => 5,
                'status'     => true,
            ],
            [
                'question'   => 'Will I receive a recognized diploma certificate?',
                'answer'     => 'Yes! Every student receives an official ISO-certified diploma certificate recognized by top software companies & IT firms across India.',
                'category'   => 'Certificates',
                'page_slug'  => 'home',
                'sort_order' => 6,
                'status'     => true,
            ],
            [
                'question'   => 'What are the batch timings and lab facilities?',
                'answer'     => 'We offer flexible Morning, Afternoon, and Evening batches with full access to high-speed computer labs and individual workstations.',
                'category'   => 'General',
                'page_slug'  => 'home',
                'sort_order' => 7,
                'status'     => true,
            ],

            // --- ADMISSIONS PAGE FAQS (page_slug: 'admissions') ---
            [
                'question'   => 'What is the admission procedure at DigiCoders Academy?',
                'answer'     => 'The admission procedure is simple: 1) Fill out our online form or visit our campus. 2) Attend a free 1-on-1 career counselling session with senior trainers. 3) Select your desired course. 4) Submit your Aadhaar card and educational marksheets. 5) Pay the registration fee to confirm your seat.',
                'category'   => 'Admissions',
                'page_slug'  => 'admissions',
                'sort_order' => 1,
                'status'     => true,
            ],
            [
                'question'   => 'Can I pay the course fee in monthly installments?',
                'answer'     => 'Yes! DigiCoders Academy offers zero-interest flexible monthly installment plans so that students can focus on learning without financial burden.',
                'category'   => 'Fees & Installments',
                'page_slug'  => 'admissions',
                'sort_order' => 2,
                'status'     => true,
            ],
            [
                'question'   => 'Are certificates provided after course completion recognized everywhere?',
                'answer'     => 'Yes, all diploma certificates issued by DigiCoders Academy are ISO 9001:2015 certified, government-recognized, and widely accepted across corporate companies, IT firms, and government jobs.',
                'category'   => 'Certificates',
                'page_slug'  => 'admissions',
                'sort_order' => 3,
                'status'     => true,
            ],
            [
                'question'   => 'What is the minimum eligibility to join a diploma course?',
                'answer'     => 'For 6-month courses (DCA, Web Designing, Excel MIS), minimum qualification is 10th Pass. For 1-year diploma programs (ADCA, ADWD, ADDM), 12th Pass or above is required.',
                'category'   => 'Admissions',
                'page_slug'  => 'admissions',
                'sort_order' => 4,
                'status'     => true,
            ],
            [
                'question'   => 'Is 100% job placement assistance provided?',
                'answer'     => 'Absolutely! We have a dedicated placement cell that conducts mock interviews, resume building workshops, and arranges campus placement drives with top IT & corporate companies.',
                'category'   => 'Placements',
                'page_slug'  => 'admissions',
                'sort_order' => 5,
                'status'     => true,
            ],
            [
                'question'   => 'Can I attend a free demo class before taking admission?',
                'answer'     => 'Yes, we encourage all prospective students to attend 2 days of free live demo classes at our Lucknow campus to experience our practical teaching methodology.',
                'category'   => 'Admissions',
                'page_slug'  => 'admissions',
                'sort_order' => 6,
                'status'     => true,
            ],
            [
                'question'   => 'Are there weekend batches available for working professionals?',
                'answer'     => 'Yes! We offer special Saturday & Sunday weekend batches (10:00 AM – 2:00 PM) specifically designed for working professionals and college students.',
                'category'   => 'General',
                'page_slug'  => 'admissions',
                'sort_order' => 7,
                'status'     => true,
            ],
            [
                'question'   => 'What documents do I need to bring at the time of admission?',
                'answer'     => 'You need to bring: 1) Photocopy of 10th/12th/Graduation marksheet. 2) Photocopy of Aadhaar Card. 3) Two recent passport-size colored photographs.',
                'category'   => 'Admissions',
                'page_slug'  => 'admissions',
                'sort_order' => 8,
                'status'     => true,
            ],
            [
                'question'   => 'Does DigiCoders Academy offer merit-based scholarships?',
                'answer'     => 'Yes, students scoring 85%+ in their previous academic board exams are eligible for up to 30% merit scholarship on total tuition fee.',
                'category'   => 'Fees & Installments',
                'page_slug'  => 'admissions',
                'sort_order' => 9,
                'status'     => true,
            ],
            [
                'question'   => 'How can I schedule a campus visit or talk to an admission counsellor?',
                'answer'     => 'You can call us directly at +91 9140967607, WhatsApp us, or fill out the Online Admission Form above. Our team will schedule your visit immediately.',
                'category'   => 'Admissions',
                'page_slug'  => 'admissions',
                'sort_order' => 10,
                'status'     => true,
            ],

            // --- PLACEMENTS PAGE FAQS (page_slug: 'placements') ---
            [
                'question'   => 'How does DigiCoders Academy assist in job placement?',
                'answer'     => 'We have an active placement cell that organizes campus drives, refers student resumes to top IT companies, conducts 1-on-1 mock interviews, and provides resume & LinkedIn optimization.',
                'category'   => 'Placements',
                'page_slug'  => 'placements',
                'sort_order' => 1,
                'status'     => true,
            ],
            [
                'question'   => 'Are internships included in the diploma programs?',
                'answer'     => 'Yes! All 1-year diploma programs (ADCA, ADWD, ADDM) include a mandatory 2-month live project internship with project completion certificates.',
                'category'   => 'Placements',
                'page_slug'  => 'placements',
                'sort_order' => 2,
                'status'     => true,
            ],
            [
                'question'   => 'What average salary package can freshers expect?',
                'answer'     => 'Fresher packages range between ₹3.0 LPA to ₹6.5 LPA depending on the chosen diploma program, technical skills, and interview performance.',
                'category'   => 'Placements',
                'page_slug'  => 'placements',
                'sort_order' => 3,
                'status'     => true,
            ],
            [
                'question'   => 'Is placement support available for non-IT background students?',
                'answer'     => 'Yes, our training starts from absolute scratch. Many of our placed students come from BA, B.Com, or 12th Pass backgrounds and successfully land IT jobs.',
                'category'   => 'Placements',
                'page_slug'  => 'placements',
                'sort_order' => 4,
                'status'     => true,
            ],
            [
                'question'   => 'Is placement support available after course completion?',
                'answer'     => 'Yes! Alumni receive ongoing placement drive alerts and job referrals even after completing their course.',
                'category'   => 'Placements',
                'page_slug'  => 'placements',
                'sort_order' => 5,
                'status'     => true,
            ],

            // --- CONTACT PAGE FAQS (page_slug: 'contact') ---
            [
                'question'   => 'How can I reach DigiCoders Academy by metro or bus?',
                'answer'     => 'We are located right near Polytechnic Chauraha, Indiranagar, Lucknow. You can take the Lucknow Metro to Polytechnic Chauraha Metro Station — our campus is just a 2-minute walk from the station.',
                'category'   => 'General',
                'page_slug'  => 'contact',
                'sort_order' => 1,
                'status'     => true,
            ],
            [
                'question'   => 'Can I visit the campus without a prior appointment?',
                'answer'     => 'Yes, walk-ins are always welcome during our office hours (Monday to Saturday, 8:00 AM to 7:00 PM). Our counsellors will immediately assist you.',
                'category'   => 'General',
                'page_slug'  => 'contact',
                'sort_order' => 2,
                'status'     => true,
            ],
            [
                'question'   => 'How quickly does the team respond to online form submissions?',
                'answer'     => 'Our counselling team calls back within 1 to 2 working hours of form submission to answer your questions and arrange demo classes.',
                'category'   => 'General',
                'page_slug'  => 'contact',
                'sort_order' => 3,
                'status'     => true,
            ],

            // --- COURSES PAGE FAQS (page_slug: 'courses') ---
            [
                'question'   => 'What diploma courses are offered at DigiCoders Academy?',
                'answer'     => 'We offer 6-month diploma courses (DCA, Web Designing, Advanced Excel & MIS) and 1-year master diploma programs (ADCA, ADWD Web Development, ADDM Digital Marketing).',
                'category'   => 'Courses & Syllabus',
                'page_slug'  => 'courses',
                'sort_order' => 1,
                'status'     => true,
            ],
            [
                'question'   => 'Are live client projects included in course training?',
                'answer'     => 'Yes! All students work on live industry projects in software development, web development, graphic design, and digital marketing ad campaigns.',
                'category'   => 'Courses & Syllabus',
                'page_slug'  => 'courses',
                'sort_order' => 2,
                'status'     => true,
            ],
            [
                'question'   => 'Can I join multiple diploma courses at DigiCoders Academy?',
                'answer'     => 'Yes, you can enroll in multiple diploma courses or upgrade your 6-month diploma to a 1-year advanced master diploma anytime.',
                'category'   => 'Courses & Syllabus',
                'page_slug'  => 'courses',
                'sort_order' => 3,
                'status'     => true,
            ],
            [
                'question'   => 'Will I get study material, books, and software tools access?',
                'answer'     => 'Yes, every student gets complete digital study material, video lectures, source code access, and software tools pre-installed on lab workstations.',
                'category'   => 'Courses & Syllabus',
                'page_slug'  => 'courses',
                'sort_order' => 4,
                'status'     => true,
            ],
        ];

        foreach ($faqs as $faqData) {
            Faq::create($faqData);
        }
    }
}
