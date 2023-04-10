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


class CustomAuthController extends Controller
{
//  public function login()
//  {
//         return view ('auth.login');
//  }
//  public function registration()
//  {
//         return view('auth.registration');
    
//  }
 public function registerUser(Request $request){
        $request->validate([
              'firstName'=>'required',
              'lastName'=>'required',
              'middleName'=>'required',
              'suffix'=>'required',
              'address'=>'required',
              'school_id'=>'required|unique:users',
              'cell_no'=>'required|unique:users',
              'civil_status'=>'required',
              'email'=>'required|email|unique:users',
              'birthdate'=>'required',
              'gender'=>'required',
              'status'=>'required',
              'course'=>'required',
              'password'=>'required|min:8|max:12',
        ]);
        //Inserting data from the user inputed
        $user = new User();
        $user -> firstName =$request->firstName;
        $user -> lastName =$request->lastName;
        $user -> middleName =$request->middleName;
        $user -> suffix =$request->suffix;
        $user -> address = $request->address;
        $user -> school_id = $request ->school_id;
        $user -> cell_no = $request ->cell_no;
        $user->civil_status = $request->input('civil_status');
        $user -> email = $request->email;
        $user->birthdate = $request->input('birthdate');
        $user->status = $request->input('status');
        $user->gender = $request->input('gender');
        $user->course = $request->input('course');
        $user -> password = Hash::make($request->password);
        $res = $user -> save();

        if($res){
              return back()-> with ('success','You have registered successfully');
        }else{
              return back()-> with('fail','Something wrong');
        }

 }

 public function loginUser(Request $request)
 {
      $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:12',
      ]);
      //checking user
      $user = User::where('email','=',$request->email)->first();
      if($user){
            if(Hash::check($request->password,$user->password)){
                  $request->session()->put('loginId',$user->id);
                  return redirect('dashboard');               
            }else{
                  return back()-> with('fail','email and password not match');
            }
            
      }else{
            return back()-> with('fail','This email is not registered.');
      }
 }

  public function dashboard()
  {
      //gettig data pag naka login
      $data = array();
      if (Session::has('loginId')){
            $data = User::where('id','=', Session::get('loginId'))->first();
            
      }
      return view('dashboard',compact('data'));
  }
  public function logout(){
      if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
      }
  }



 //------------------------------------// Frorm Crud //--------------------------------------------------------// 
public function create(){
      return view('appointment.create');
}

public function createForm(Request $request){
      $request ->validate([
            'name' => 'required',
            'description'=>'required',
            'days'=>'required',
            'fee'=>'required|integer',
      ]);

      $form = new Form();
      $form -> name = $request -> name;
      $form -> description = $request -> description;
      $form -> days = $request -> days;
      $form -> fee = $request -> fee;
      $form = $form -> save();
      if($form){
            return back()-> with ('success','You have created successfully');
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
      $form -> description = $request -> input('description');
      $form -> days = $request -> input('days');
      $form -> fee = $request -> input('fee');
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

//===================---------------// Form End //-------------------------===========================================//


//================------------- // Appointment Content // ------------==========================================//
public function appointment(){
      $user = null;
      if (session()->has('loginId')) {
          $user = User::where('id', session()->get('loginId'))->first();
      }
  
      // get user's first name
      $firstName = null;
      $lastName = null;
      $middleName = null;
      $suffix  = null;
      $address = null;
      $school_id = null;
      $cell_no = null;
      $civil_status = null;
      $email = null;
      $birthdate = null;
      $status = null;
      $gender = null;
      $course = null;
      if ($user) {
          $firstName = $user->firstName;
          $lastName = $user->lastName;
          $middleName = $user -> middleName;
          $suffix = $user -> suffix ;
          $address  = $user -> address ;
          $school_id = $user -> school_id ;
          $cell_no = $user -> cell_no;
          $civil_status = $user->civil_status ; //dropdown table
          $email = $user -> email;
          $birthdate = $user->birthdate;//birtdate
          $status = $user->status; //dropdown
          $gender = $user->gender; //dropdown
          $course = $user->course; // dropdown
      }
  
      $forms = Form::all();
      return view('appointment.appointment', compact( 
            'firstName',
            'lastName',
            'middleName',
            'suffix',
            'address',
            'school_id',
            'cell_no',
            'civil_status',
            'email',
            'birthdate',
            'gender',
            'status',
            'course',
            'forms'));

 }

public function bookAppointment(Request $request){
      $user_id = session('loginId');
      $form = Form::find($request->form_id);

      if (!$form) {
         abort(404);
      }

      $appointment = new Appointment();
      $appointment->app_purpose = $request->app_purpose;
      $appointment->user_id = $user_id;
      $appointment->form_id = $form->id;

      if ($appointment->save()) {
            $bookingNumber = 'B' . str_pad($appointment->id, 6, '0', STR_PAD_LEFT);
            $appointment->booking_number = $bookingNumber;
            $appointment->save();
            // return view('appointment.showAppointment', ['bookingNumber' => $bookingNumber]); Displaying the history sa ge book
            return response()->json(['success' => true, 'message' => 'Appointment booked successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Appointment booking failed.']);
        }
}

      

 public function makeAppointment(){
      return view('appointment.makeAppointment');
 }

}
