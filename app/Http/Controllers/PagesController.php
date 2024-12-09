<?php

namespace App\Http\Controllers;

use App\Models\BannerStats;
use App\Models\Notification;
use App\Models\Page;
use App\Models\Programme;
use App\Models\StudentAchievements;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $notifications = Notification::orderBy('notification_date', 'asc')->get();
        // get all programs which are not expired
        $programmes = Programme::where('programme_date', '>=', date('Y-m-d'))->orderBy('programme_date', 'asc')->get();

        $bannerStats = BannerStats::where('status', 1)->take(6)->get();

        $achievements = StudentAchievements::all();

        return view('frontend.index')
            ->with('notifications', $notifications)
            ->with('programmes', $programmes)
            ->with('bannerStats', $bannerStats)
            ->with('achievements', $achievements);
    }

    public function page($slug, $file=null)
    {



        if ($slug === 'members-of-executive-board')
        {
            $executives = \App\Models\Member::where('member_type', 'executive_board')->get();
            return view('frontend.executive_board')->with('executives', $executives);
        }
        if ($slug === 'members-of-general-body')
        {
            $generals = \App\Models\Member::where('member_type', 'general_body')->get();
            return view('frontend.general_body')->with('generals', $generals);
        }
        if ($slug === 'download')
        {
            $downloads = \App\Models\Download::all();
            return view('frontend.downloads')->with('downloads', $downloads);
        }
        if ($slug === 'contact-us')
        {
            $contacts = \App\Models\Contact::all();
            return view('frontend.contact')->with('contacts', $contacts);
        }

        if ($file!=null)
        {
            $foldername = 'storage';
            $path = asset($foldername.'/'.$file);
            return view('frontend.pdf')->with('path',$path)->with('slug', $slug);
        }



        $page = Page::where('slug', $slug)->first();
        if($page == null) {
            $foldername = 'pdf';
            $filename = $slug;
            $path = asset('assets/'.$foldername.'/'.$filename.'.pdf');
            return view('frontend.pdf')->with('path',$path)->with('slug', $slug);
        }


        return view('frontend.page')->with('page',$page);
    }

    public function announcements(){
        $announcements = Notification::orderBy('notification_date', 'asc')->get();
        return view('frontend.announcements')->with('announcements', $announcements);
    }
    public function events(){
        $events = Programme::orderBy('programme_date', 'desc')->get();
        return view('frontend.events')->with('events', $events);
    }

    public function studentAchievements(){
        $achievements = StudentAchievements::all();
        return view('frontend.studentAchievements')->with('achievements', $achievements);
    }


//    public function view()
//    {
//        return view
//    }
}
