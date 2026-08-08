<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    /**
     * Show CMS Management Page with all 6 Page Tabs.
     */
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('admin.cms.index', compact('settings'));
    }

    /**
     * Update Home Page CMS Content.
     */
    public function updateHome(Request $request)
    {
        $fields = [
            'home_hero_badge',
            'home_hero_title',
            'home_hero_subtitle',
            'home_stat_students',
            'home_stat_placement',
            'home_stat_trainers',
            'home_stat_projects',
            'home_about_title',
            'home_about_desc',
            'home_phone',
            'home_whatsapp',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::setKey($field, $request->input($field));
            }
        }

        return redirect()->back()->with('success', 'Home Page CMS content updated successfully!');
    }

    /**
     * Update About Us Page CMS Content.
     */
    public function updateAbout(Request $request)
    {
        $fields = [
            'about_hero_title',
            'about_hero_subtitle',
            'about_vision',
            'about_mission',
            'about_gopal_bio',
            'about_himanshu_bio',
            'about_founded_year',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::setKey($field, $request->input($field));
            }
        }

        return redirect()->back()->with('success', 'About Us Page CMS content updated successfully!');
    }

    /**
     * Update Admissions Page CMS Content.
     */
    public function updateAdmissions(Request $request)
    {
        $fields = [
            'admissions_hero_title',
            'admissions_hero_subtitle',
            'admissions_next_batch',
            'admissions_guidelines',
            'admissions_seat_fee',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::setKey($field, $request->input($field));
            }
        }

        return redirect()->back()->with('success', 'Admissions Page CMS content updated successfully!');
    }

    /**
     * Update Placements Page CMS Content.
     */
    public function updatePlacements(Request $request)
    {
        $fields = [
            'placements_hero_title',
            'placements_highest_package',
            'placements_avg_package',
            'placements_hiring_partners_count',
            'placements_notice',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::setKey($field, $request->input($field));
            }
        }

        return redirect()->back()->with('success', 'Placements Page CMS content updated successfully!');
    }

    /**
     * Update Contact Page CMS Content.
     */
    public function updateContact(Request $request)
    {
        $fields = [
            'contact_office_address',
            'contact_phone_primary',
            'contact_phone_secondary',
            'contact_whatsapp',
            'contact_email',
            'contact_office_timing',
            'contact_map_url',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::setKey($field, $request->input($field));
            }
        }

        return redirect()->back()->with('success', 'Contact Us Page CMS content updated successfully!');
    }

    /**
     * Update Student Life Page CMS Content.
     */
    public function updateStudentLife(Request $request)
    {
        $fields = [
            'student_life_hero_title',
            'student_life_hero_subtitle',
            'student_life_labs_info',
            'student_life_hackathons_info',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::setKey($field, $request->input($field));
            }
        }

        return redirect()->back()->with('success', 'Student Life Page CMS content updated successfully!');
    }
}
