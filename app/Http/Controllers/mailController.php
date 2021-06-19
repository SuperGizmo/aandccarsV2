<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        Mail::send('emails.booking', $data, function($message) use ($data) {
            $message->from('bookings@aandccars.co.uk' , 'Web Bookings');
            $message->to(env('MAIL_TO_ADDRESS'), env('MAIL_TO_NAME'))->subject('New Booking');
            $message->bcc('daniel@rawrsome.co.uk', env('MAIL_TO_NAME'))->subject('New Booking');
        });

        // Redirect to page
        return redirect('thankyou.html');
    }

}
