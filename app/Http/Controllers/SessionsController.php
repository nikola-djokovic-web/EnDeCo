<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;

class SessionsController extends Controller
{

    

    public function loginView(){

      return view('admin.login');
    }

    public function login(){

      if(! auth()->attempt(request(['email', 'password']))){
        return back()->withErrors([
          'message' => "Please check your credentials and try again"
        ]);
      }

      return redirect('/users-welcome');
    }

    public function tables(Contact $contact){

      $contacts = Contact::all();

        return view('admin.table', compact('contacts'));
    }

    public function logout(){
        Auth::logout();

        return redirect( ('/login') );
    }
}
