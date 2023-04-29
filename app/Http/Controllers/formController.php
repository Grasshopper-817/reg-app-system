<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
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
  

  public function viewForm(){
      $forms = Form::all();
      return view('admin-dashboard/forms', compact('forms'));
}

public function edit($id)
{
    $form = Form::findOrFail($id);
    return view('admin-dashboard.modal.forms.edit-form', compact('form'));
}

public function update(Request $request, Form $form)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'availability' => 'required',
        'who_may_avail' => 'required',
        'requirements' => 'required',
        'processing_time' => 'required',
        'document_fee' => 'required',
        'max_time_claim' => 'required',
    ]);

    $form->name = $validatedData['name'];
    $form->availability = $validatedData['availability'];
    $form->who_may_avail = $validatedData['who_may_avail'];
    $form->requirements = $validatedData['requirements'];
    $form->processing_time = $validatedData['processing_time'];
    $form->document_fee = $validatedData['document_fee'];
    $form->max_time_claim = $validatedData['max_time_claim'];
    $form->save();

    return back()->with('success', 'Form updated successfully.');
}

public function destroy(Form $form)
{
    {
        $form->delete();
        return back()->with('success', 'Form deleted successfully');
    }
}

}
