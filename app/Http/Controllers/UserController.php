<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function emailview()
    {
        return view('send_email');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'message' =>  'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message'   =>   $request->message
        );

        Mail::to('abs3nt21@gmail.com')->send(new SendMail($data));
        

        if($request->message == 'AODA'){

        
        User::where('name', $request->name)->update(['aoda' => 'DONE']);
        }
        else
        {
        User::where('name', $request->name)->update(['whmis' => 'DONE']);    
        }

        return redirect('/completion');

    }

    public function index($name)
    {

        if ($name == '47drfguy65ytrg') {

            $users = User::all();

            return view('/storm', compact('users'));
        } else {

            return redirect('/contact');
        }
    }

    function list() {

        $users = User::all();

        // User::where('id', $id)->update(['aoda' => 'DONE']);

        return redirect('/storm');

        // return view('contact');
    }

    public function show($id)
    {

        

        User::where('id', $id)->update(['aoda' => 'DONE']);

        return redirect('/completion');

        // return view('contact');
    }

    public function show2($id)
    {

        User::where('id', $id)->update(['whmis' => 'DONE']);

        return redirect('/completion');

        // return view('contact');
    }
}
