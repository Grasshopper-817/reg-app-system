<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use App\Models\Appointment;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;

class announcementController extends Controller
{
    public function showAnnouncement(Request $request)
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->take(2)->get();
        return view('index', compact('announcements'));
    }

    public function viewAnnouncementAdmin(){
        $announcements = Announcement::all();
        return view('admin-dashboard.announcement', compact('announcements'));
    }
    public function dashboardAnnouncement(){
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('announcement.announcement', compact('announcements'));
    }
    
    public function storeAnnouncement(Request $request){
        $request ->validate([
            'announcement_title' => 'required',
            'announcement_text' => 'required',
        ]);

        $announcement = new Announcement();
        $announcement -> announcement_title =$request -> announcement_title;
        $announcement -> announcement_text = $request -> announcement_text;
        $announcement = $announcement -> save();
        if($announcement){
                    return back()-> with ('success','Announcement post successfully');
            }else{
                    return back()-> with('fail','Something wrong');
            }
    }
    
}
