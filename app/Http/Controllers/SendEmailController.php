<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
     ]);

        $data = array(
            'name'      =>  $request->name,
        );

     Mail::to('brandon.ivancic@hotmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

?>