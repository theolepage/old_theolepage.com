<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function page()
    {
        return view('contact.contact');
    }

    public function contact(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string']
        ])->validate();

        Mail::to('theo@thdoteo.com')->send(
            new Contact(
                $request->get('name'),
                $request->get('email'),
                $request->get('message')
            )
        );

        return redirect()->back()->with('success', 'Your message has been successfully sent!');
    }
}
