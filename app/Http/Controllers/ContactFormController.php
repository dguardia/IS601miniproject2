<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);
        //dd(request()->all());
        //Send email

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        //This option works well but we will be using the with option
        //session()->flash('message', 'Thanks for your message. We\'ll be in touch.');

        return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
