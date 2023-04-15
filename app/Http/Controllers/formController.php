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

class formController extends Controller
{
    public function create(){
        return view('appointment.create');
  }
  
  public function createForm(Request $request){
        $request ->validate([
              'name' => 'required',
              'form_requirements'=>'required',
              'form_process'=>'required',
              'fee'=>'required',
              'form_avail'=>'required',
              'form_who_avail'=>'required',
              'form_max_time'=>'required',
        ]);
  
        $form = new Form();
        $form -> name = $request -> name;
        $form -> form_requirements = $request -> form_requirements;
        $form -> form_process = $request -> form_process;
        $form -> fee = $request -> fee;
        $form -> form_avail = $request -> form_avail;
        $form -> form_who_avail = $request -> form_who_avail;
        $form -> form_max_time = $request -> form_max_time;
        $form = $form -> save();
        if($form){
              return back()-> with ('success','Form created successfully');
        }else{
              return back()-> with('fail','Something wrong');
        }
  
  }
  
  public function getAllForm(Request $request){
        $forms = Form::all();
        return view('mainpage', compact('forms'));
  }
  
  public function edit($id){
        $forms = Form::find($id);
        return view('appointment.edit',compact('forms'));
  }
  
  public function update (Request $request, $id){
        $form = Form::find($id);
        $form -> name = $request -> input('name');
        $form -> form_requirements = $request -> input('form_requirements');
        $form -> form_process = $request -> input('form_process');
        $form -> fee = $request -> input('fee');
        $form -> form_avail = $request -> input('form_avail');
        $form -> form_who_avail = $request -> input('form_who_avail');
        $form -> form_max_time = $request -> input('form_max_time');
        $form -> update();
        if($form){
              return redirect('dashboard/admin')-> with ('success','You have update successfully');
        }else{
              return back()-> with('fail','Something wrong');
        }     
  
  }
  
  public function delete($id){
        $forms = Form::find($id);
        $forms ->delete();
        return redirect('dashboard/admin')-> with ('success','You have deleted successfully');
  }
  
  
}
