<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Comment;
use App\Contact;


class ContactsController extends Controller
{

  public function contact(){
      if(request()->isMethod('post')){
          $this->validate(request(), [
              'name' => "required|string",
              'email' => 'required|email',
              'phone' => 'required|string',
              'comment' => 'required|string|min:5',

          ]);

          $contact = new Contact();
          $contact->name = request('name');
          $contact->email = request('email');
          $contact->phone = request('phone');
          $contact->comment = request('comment');

          $contact->save();

          // return redirect( route('thanks-message') );
          session()->flash('message-type', "success");
          session()->flash('message', 'Poruka poslata');


          \Mail::to('test@gmail.com')->send( new Comment($contact) );
     }

      return back();
  }


}
