<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminAnnouncement()
    {
        return view('admin.announcement');
    }
    public function adminRequest()
    {
        return view('admin.requests');
    }
    public function adminMessage()
    {
        return view('admin.message');
    }
    public function adminForms()
    {
        return view('admin.forms');
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
