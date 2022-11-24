<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //admin login

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required'
            ];
            $customMessage = [
                'email.required' => 'You must enter email address',
                'email.email' => 'Please enter a valid email',
                'email.max' => 'You are not allowed to enter more than 255 words',
                'password.required' => 'You must enter valid password'
            ];
            $this->validate($request, $rules, $customMessage);

            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
                return redirect()->route('adminDashboard');
            }
            else{
                $request->session()->flash('error_message', 'Invalid username and password');
                return redirect()->route('adminLogin');
            }
        }
        if(Auth::guard('admin')->check()){
            return redirect()->route('adminDashboard');
        }
        else{
            return view('admin.auth.login');
        }
    }

    // Admin Dashboard

    public function dashboard(){
        return view('admin.auth.dashboard');
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->flash('success_message', 'logout successfully');
        return redirect()->route('adminLogin');
    }
}
