<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;


class faqsController extends Controller
{


    public function viewFaqAdmin(){
        $faqs = Faq::all();
        return view('admin-dashboard.faqs', compact('faqs'));
    }

}
