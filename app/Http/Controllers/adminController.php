<?php

namespace App\Http\Controllers;

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

class adminController extends Controller
{
    public function adminAnnouncement()
    {
        return view('admin.announcement');
    }
    public function adminRequest()
    {
        $bookings = Booking::with('user', 'appointment')->get();
        $users = User::whereIn('id', $bookings->pluck('user_id'))->select('id')->get();
        $appointments = Appointment::whereIn('id', $bookings->pluck('appointment_id'))->get();
          
        return view('admin.requests', compact('bookings', 'users', 'appointments'));
    }
    public function adminRequestDashboard()
    {
        $bookings = Booking::with('user', 'appointment')->get();
        $users = User::whereIn('id', $bookings->pluck('user_id'))->select('id')->get();
        $appointments = Appointment::whereIn('id', $bookings->pluck('appointment_id'))->get();
          
        return view('admin.dashboard', compact('bookings', 'users', 'appointments'));
    }
    
    public function adminMessage()
    {
        return view('admin.message');
    }
    public function adminForms(Request $request)
    {
        $forms = Form::all();
        return view('admin.forms',compact('forms'));
    }
    public function adminFaqs()
    {
        return view('admin.faqs');
    }
    public function adminSettings()
    {
        return view('admin.settings');
    }

}
