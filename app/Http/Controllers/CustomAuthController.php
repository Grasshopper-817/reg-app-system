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
 //------------------------------------// Registration & Log-in //--------------------------------------------------------// 
 public function registerUser(Request $request){
        $request->validate([
              'firstName'=>'required',
              'lastName'=>'required',
              'middleName'=>'required',
              'suffix'=>'',
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
            'password'=>'required|min:8',
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


//------------------------// Retrieving and passing information to Appointment database and Displaying //-----------------------//
public function appointment(){
            $user = null;
            $appointments = Appointment::all();
            $forms = Form::all();

            if (session()->has('loginId')) {
            $user = User::where('id', session()->get('loginId'))->first();
            $user_id = session('loginId');
            $appointments = Appointment::where('user_id', $user_id)
                  ->orderBy('created_at', 'desc')
                  ->with(['user' => function ($query) {
                        $query->select('id', 'firstName','lastName','middleName','email','suffix');
                  }, 'form' => function ($query) {
                        $query->select('id', 'name','fee');
                  }])
                  ->get();
            }

            $firstName = $user ? $user->firstName : null;
            $lastName = $user ? $user->lastName : null;
            $middleName = $user ? $user->middleName : null;
            $suffix = $user ? $user->suffix : null;
            $address = $user ? $user->address : null;
            $school_id = $user ? $user->school_id : null;
            $cell_no = $user ? $user->cell_no : null;
            $civil_status = $user ? $user->civil_status : null;
            $email = $user ? $user->email : null;
            $birthdate = $user ? $user->birthdate : null;
            $status = $user ? $user->status : null;
            $gender = $user ? $user->gender : null;
            $course = $user ? $user->course : null;

            return view('appointment.appointment', compact('firstName','lastName','middleName','suffix','address','school_id','cell_no','civil_status','email','birthdate','gender','status','course',
            'forms',
            'appointments'
            ));

 }

 //------------------------------------// Setting up Booking Appointment //--------------------------------------------------------// 
public function bookAppointment(Request $request){
            $user_id = session('loginId');
            $form = Form::find($request->form_id);


      if (!$form) {
         abort(404);
      }   
            $appointment = new Appointment();
            $appointment->app_purpose = $request->app_purpose;
            $appointment->acad_year = $request ->acad_year;
            $appointment->user_year_grad = $request ->user_year_grad;
            $appointment->user_acad_year = $request ->user_acad_year;
            $appointment->appointment_date = $request ->appointment_date;
            $appointment->user_id = $user_id;
            $appointment->form_id = $form->id;

      if ($appointment->save()) {
            $bookingNumber = 'B' . str_pad($appointment->id, 6, '0', STR_PAD_LEFT);
            $appointment->booking_number = $bookingNumber;
            $appointment->save();

            $booking = new Booking();
            $booking->user_id = $user_id;
            $booking->appointment_id = $appointment->id;
            $booking->save();
    
            return response()->json(['success' => true, 'message' => 'Appointment booked successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Appointment booking failed.']);
        }
}

//-------------------------------// Retrive All Bookings and Displaying//-------------------------------//

public function bookings()
{
      $bookings = Booking::with('user', 'appointment')->get();
      $users = User::whereIn('id', $bookings->pluck('user_id'))->select('id')->get();
      $appointments = Appointment::whereIn('id', $bookings->pluck('appointment_id'))->get();
        
            return view('appointment.showBookings', compact('bookings', 'users', 'appointments'));
}

public function updateProfile(Request $request){
      $user_id = session('loginId');

      $user = User::find($user_id);
      if (!$user) {
            abort(404);
      }

      $user->firstName = $request->input('editFirstName');
      $user->lastName = $request->input('editLastName');
      $user->middleName = $request->input('editMiddleName');
      $user->suffix = $request->input('editSuffix');
      $user->address = $request->input('editAddress');
      $user->school_id = $request->input('editSchoolID');
      $user->cell_no = $request->input('editCpNo');
      $user->civil_status = $request->input('editCivilStatus');
      $user->email = $request->input('editEmail');
      $user->birthdate = $request->input('editBirthdate');
      $user->status = $request->input('editStatus');
      $user->gender = $request->input('editGender');
      $user->course = $request->input('editCourse');
      $user->save();

      return redirect('/dashboard')->with('success', 'User information updated successfully.');
}

public function adminDashboard(){
      return view('admin.dashboard');
}

}
