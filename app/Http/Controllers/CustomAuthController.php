<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;

class CustomAuthController extends Controller
{
 public function login()
 {
        return view ('auth.login');
 }
 public function registration()
 {
        return view('auth.registration');
    
 }
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
      $user = session()->get('user');
      $forms = Form::all();
      return view('mainpage', compact('user', 'forms'));
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

//----------------------------------// End //--------------------------------------------------------------------------//

public function appointment(){
      $user = session()->get('user');
      $forms = Form::all();
      return view('appointment.appointment', compact('user', 'forms'));

 }

// public function appointmentForm(Request $request){
//       $request -> validate([
//             'name'=>'required',
//             'description' => 'required',
//             'days' => 'required',
//             'fee' => 'required',
//       ]);
//       $form = new Form();
//       $form -> name = $request -> name;
//       $form -> description = $request -> description;
// }

}
