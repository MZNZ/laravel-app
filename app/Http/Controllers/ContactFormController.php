<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    //
    public function create() {
      return view('contact.create');
    }

    public function store() {
      $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        ]);

        Mail::to($data['email'])->send(new ContactFormMail($data));

        // the lines below are equivalent to each other
        // session()->flash('message', 'Thanks for your message. Let\'s keep in touch.');
        return redirect(route('contact.create'))->with('message', 'Thanks for your message. Let\'s keep in touch.');
    }
}
