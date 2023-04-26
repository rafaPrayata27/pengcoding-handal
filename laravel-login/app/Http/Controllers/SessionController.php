<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;

class SessionController extends Controller
{
    function index()
    {
        return view("login.index");
    }

    function login(Request $request)
    {
    Session::flash('email',$request->email);
    $request->validate([
        'email' => 'required',
        'password'=> 'required'
        
    ],[
        'email.required'=>'Email wajib diisi!!',
        'password.required'=>'password wajib diisi!!',
    ]);
      
    $info_login =[
        'email' => $request->email,
        'password' => $request->password
      ];

      if(Auth::attempt($info_login)){
        return redirect()->to('user')->with('success',Auth::user()->name. 'berhasil login!!');
      }
      else{
        return redirect()->to('index')->withErrors('Email dan password tidak sesuai');

      }
    }
    function logout()
    {
      Auth::logout();

      return redirect()->to('index')->with('success','berhasil logout');
    }
}
