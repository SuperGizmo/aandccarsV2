<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Notifications\BookingReceived;
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
        Notification::send(['bookings@aandccars.co.uk','daniel@rawrsome.co.uk'], new BookingReceived($data));

        // Redirect to page
        return redirect('thankyou.html');
    }

}
