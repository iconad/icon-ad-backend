<?php

namespace App\Http\Controllers;

use App\Mail\ResumeMailToIcon;
use App\Mail\ResumeMailToUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\TeamApplication;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email',
            'message' => 'required',
        ]);

        $email =  $request->email;
        $name =  $request->name;

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'bodyMessage' => $request->message
        );


        Mail::send('emails.success_email_to_user', $data, function ($message) use ($email, $name) {
            $message->from('info@icon-ad.com');
            $message->bcc("chris.r@icon-ad.com");
            $message->to($email, $name)->subject('Thank you for contacting Icon Adverting LLC.');
        });


        Mail::send('emails.success_email_to_icon', $data, function ($message) use ($email, $name) {
            $message->from('info@icon-ad.com');
            $message->to('info@icon-ad.com', 'Icon Advertising LLC')->subject('New email from contact form');
        });

        // Mail::to($request->email)->send(new EmailToUser($data));

        if (Mail::failures()) {
            return response()->json(
                [
                    "success" => "Something wrong please try again"
                ]
            );
        } else {
            return response()->json(
                [
                    "success" => "success"
                ]
            );
        }
    }


    public function joinOurTeam (Request $request) {


        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $fname = 'resume/' . uniqid() . '.' . $file->extension();
            $extenstion = $file->extension();
            $file->storePubliclyAs('public', $fname);
            $data['file'] = $fname;

            $email =  $request->email;

            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'nationality' => $request->nationality,
                'resident_country' => $request->resident_country,
                'about' => $request->about
            );

            $team = TeamApplication::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'nationality' => $request->nationality,
                'resident_country' => $request->resident_country,
                'role' => $request->role,
                'resume' => $fname,
                'about' => $request->about
            ]);

            $input = array(
                'data'     => $data,
                'path'     => $fname,
                'extenstion'     => $extenstion
            );

            if($team){
                Mail::to($email)->send(new ResumeMailToUser($data));
                Mail::to('hr@icon-ad.com')->send(new ResumeMailToIcon($input));
            }

        }else{
            return "Resume field is requred";
        }














    }
}
