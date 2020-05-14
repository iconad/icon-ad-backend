<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index (Request $request) {

        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'numeric',
            'email' => 'email',
            'message' => 'required',
        ]);

        $email =  $request->email;
        $name =  $request->name;

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bodyMessage' => "Body Message"
        );


        Mail::send('emails.success_email_to_user', $data, function($message) use ($email, $name) {
            $message->from('info@icon-ad.com');
            $message->to($email, $name)->subject('Thank you for contacting Icon Adverting LLC.');
        });


        Mail::send('emails.success_email_to_icon', $data, function($message) use ($email, $name) {
            $message->from('info@icon-ad.com');
            $message->to('amir@icon-ad.com', 'Icon Advertising LLC')->subject('New email from contact form');
        });

        // Mail::to($request->email)->send(new EmailToUser($data));

        if (Mail::failures()) {
            return response()->json(
                [
                    "success" => "Something wrong please try again"
                ]
            );
        }else{
            return response()->json(
                [
                    "success" => "success"
                ]
            );
        }


    }
}
