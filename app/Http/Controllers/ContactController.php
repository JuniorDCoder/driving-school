<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $details = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255|min:5',
            'message' => 'required|string|min:10',
        ]);

        Mail::to('info@brilliantdrivingschool.online')->send(new ContactMail($details));

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function sendAppointment(Request $request){
        $details = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'license_type' => 'required|string|max:255|min:3',
            'car_type' => 'required|string|max:255|min:3',
            'message' => 'required|string|min:10',
        ]);

        Mail::to('info@brilliantdrivingschool.online')->send(new ContactMail($details, 'appointment'));

        return back()->with('success', 'Your appointment has been sent successfully!');
    }
}
