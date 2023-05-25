<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Notifications\ContactFormSubmitted;
use App\Models\Contact;

class ContactController extends Controller
{

    //  public function store()
    // {
    //     var_dump(request('name'));
    //     var_dump(request('publisher'));
    //     var_dump(request('email'));
    //     var_dump(request('service'));
    //     var_dump(request('message'));
    // }
    public function submitForm(Request $request)
    {
       // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255',
            'service' => 'required',
            'message' => 'required',
        ]);

        // Send email notification
        Mail::to('crowdplayabuja@gmail.com')->send(new ContactFormMail($validatedData));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
