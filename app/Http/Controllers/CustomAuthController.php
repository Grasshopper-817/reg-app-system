<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
              'name'=>'required',
              'email'=>'required|email|unique:users',
              'password'=>'required|min:8|max:12',
        ]);
        //Inserting data from the user inputed
        $user = new User();
        $user -> name =$request->name;
        $user -> email = $request->email;
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
            return redirect('login');
      }
  }



//   public function sample(){
//       return view('frontendUser.sample');
//   }
}
