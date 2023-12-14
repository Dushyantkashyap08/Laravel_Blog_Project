<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request )
   {
      if($request->isMethod('post'))
      {
        $addnew =  new Contact;
        $addnew->name = $request->get('name');
        $addnew->email = $request->get('email');
        $addnew->message = $request->get('message');
        $addnew->save();
      }

      $data = [
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'message' => $request->get('message'),
      ];

      Mail::to('dknov2000@gmail.com')->send(new SendMail($data));
      return redirect()->back()->with('success','Your Message is Sent Successfully..');
    }
}
