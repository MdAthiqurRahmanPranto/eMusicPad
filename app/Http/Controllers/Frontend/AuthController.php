<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function ShowRegistrationForm()
    {
        return view('frontend.pages.registration');
    }
    public function ProcessRegistration(Request $request)
    {
        //validation
        //insert into database
        //redirect
        
        //return $request->all();
        //echo $request->input('name');
        //echo $request->expect('_token');

        $this->validate($request,[
            //input field Name
            'name'=> 'required',
            'email'=>'required|email',
            'phone'=>'required|min:6|max:13',
            'password'=>'required|min:6|confirmed',
            

        ]);

        $data= [
            //database column name | Input field name

            'name'=>$request->input('name'),
            'email'=>strtolower($request->input('email')),
            'phone'=>$request->input('phone'),
            'password'=>bcrypt($request->input('password')),
            'role'=>'user'
        ];

        try
        {
            User::Create($data);

            $this->setSuccessMessage('User Account Created');

            return redirect()->route('login');
        }
        catch(exception $e)
        {
            $this->setErrorMessage($e->getmessage());
        }

        
    }
    
    
    public function ShowLoginForm()
    {
        return view('frontend.pages.login');
    }
    public function Processlogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            
            'email'=> 'required|email',
            'password'=>'required',
            
        ]);
        $credentials= $request->except(['_token']);
        if(auth()->attempt( $credentials))
        {
            //dd($credentials);
            $this->setSuccessMessage('login successfull');
            return redirect()->route('musicpads');
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

