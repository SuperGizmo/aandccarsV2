<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingReceived;
use Illuminate\Support\Facades\Notification;

class mailController extends Controller
{
    public function getContactUsForm(Request $request){
        //Get all the data and store it inside Store Variable
        $data = $request->all();

        //Validation rules
        $request->validate([
            'name' => 'required',
            'phone' => 'required',// uncomment if you want to grab this field
            'email' => 'required|email'//  uncomment if you want to grab this field
        ]);

        //If everything is correct than run passes.
        foreach (['aandccars@outlook.com', 'daniel@rawrsome.co.uk'] as $recipient) {
            Mail::to($recipient)->send(new BookingReceived($data));
        }
//        Notification::route('mail', 'bookings@aandccars.co.uk')->notify(new BookingReceived($data));
//        Notification::route('mail', 'daniel@rawrsome.co.uk')->notify(new BookingReceived($data));

        // Redirect to page
        return redirect('thankyou.html');
    }

}
