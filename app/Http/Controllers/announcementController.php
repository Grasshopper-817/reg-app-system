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

class announcementController extends Controller
{
    public function showAnnouncement()
    {
        return view('announcement.announcement');
    }

    public function createAnnouncement(Request $request){
        
        return view('announcement.createAnnouncement');
    }
    
}
