<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{


    public function register(){

      if(request()->isMethod('post')){
      //validate user
      $this->validate(request(), [
        'name' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|confirmed'

      ]);


      //create user
      $user = new User();
      $user->name = request('name');
      $user->email = request('email');
      $user->password = bcrypt(request('password'));

      $user->save();

      //sign in user
      auth()->login($user);

      //redirect to homepage
      return redirect()->route('users-welcome');
    }

      return view('admin.register');

    }
}
