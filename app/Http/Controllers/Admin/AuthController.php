<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Auth;
use Hash;
use validate;


class AuthController extends Controller
{
    public function create(Request $request){

     return view('admin.pages.login');
    }

    public function index(){

     return view('admin.pages.register');
    }

    public function login(Request $request,User $user){
       $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8|max:12'
        ]);
         $user=Auth::attempt(['email' => $request->email, 'password' => $request->password]);

         if($user){
         return redirect('/dashboard')->with(['message'=>'LOG in Succsessfully!']);
        }
         else{
         return redirect()->back()->with(['message'=>'Email or Password is Invalid!']);
        }
    }

    public function setting(Request $request,User $user){

        $user=auth()->user();
        return view('pages.profile',compact('user'));
    }

    public function profile_update(Request $request,User $user){

        // $user = User::where('id',auth()->user()->id)->update($user);
        $user = User::where('id', auth()->user()->id)->update($user);
        $user->name = $request->edit_name;
        $user->email = $request->edit_email;
        $user->save();

        if($user){
            return redirect('profile-update')->with(['message'=>'Profile Updated Successfully!!']);
        }

    }



    public function reset(){

          return view('admin.pages.reset');
    }

    public function forgot(){

          return view('admin.pages.forgot');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }

}
