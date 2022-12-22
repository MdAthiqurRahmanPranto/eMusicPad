<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin_user;
use Illuminate\Support\Facades\Auth;

class AdminloginController extends Controller
{
    public function ShowLoginForm(){
        return view('backend.pages.adminlogin');
    }


    public function ProcessLogin(Request $request)
    {

        $credentials= $request->except(['_token']);

     
        if(Auth::attempt($credentials))
        {
           
            $this->setSuccessMessage('login successfull');
            return redirect()->route('dashboard');
        }
       
        else{
            
          
            $this->setErrorMessage('Invalid Email Or Password');
            return redirect()->back();
            
        }
        
    
    }
    public function logout()
        {
            auth()->logout();
            $this->setSuccessMessage('logout Successfull');
    
            return redirect()->route('login');
        }


}

