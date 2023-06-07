<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{


    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'service' => 'required',
            'message' => 'required',
        ]);

        try {
            $validatedData = $request->only(['name', 'email', 'phone', 'service', 'message']);

            // Send email
            Mail::to('crowdplayabuja@gmail.com')->send(new ContactFormMail($validatedData));

            // Email sent successfully
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $exception) {
            // Handle email sending failure
            return redirect()->back()->with('error', 'Your message failed to send!');
        }
    }
}
