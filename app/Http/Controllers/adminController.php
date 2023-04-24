<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use App\Models\Announcement;
use App\Models\Appointment;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;

class adminController extends Controller
{
    public function adminAnnouncement(Request $request)
    {   $announcements = Announcement::get();
        return view('admin.announcement', compact('announcements'));
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

    public function viewApp($id){
        $booking = Booking::with('user', 'appointment.form')->findOrFail($id);
        $fullName = $booking->user->lastName . ', ' . $booking->user->firstName;
        if ($booking->user->middleName) {
            $fullName .= ' ' . $booking->user->middleName;
        }if ($booking->user->suffix) {
            $fullName .= ' ' . $booking->user->suffix;
        }

        return response()->json([
            'fullName' => $fullName,
            'address' => $booking->user->address,
            'school_id' => $booking->user->school_id,
            'cell_no' => $booking->user->cell_no,
            'civil_status' => $booking->user->civil_status,
            'email' => $booking->user->email,
            'birthdate' => Carbon::parse($booking->user->birthdate)->format('F j, Y'),
            'status' => $booking->user->status,
            'gender' => $booking->user->gender,
            'course' => $booking->user->course,
            'acadYear' => $booking->user->acadYear,
            'gradYear' => $booking->user->gradYear,

            'app_purpose' => $booking->appointment->app_purpose,
            'doc_req_year' => $booking->appointment->acad_year,
            'doc_name' => $booking->appointment->form->name,
            'doc_created' => Carbon::parse($booking->user->created_at)->format('F j, Y'),
            'appointment_date' => $booking->appointment->appointment_date,
            'booking_number' => $booking->appointment->booking_number,

            'doc_fee' => $booking->appointment->form->fee,
            'payment_method' => $booking->appointment->payment_method,
        ]);
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
