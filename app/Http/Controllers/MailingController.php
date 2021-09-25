<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailBroadCastingRequest;
use App\Mail\NewsLetterMail;
use Mail;

class MailingController extends Controller
{
    public function sendMailBroadcasting(MailBroadCastingRequest $request)
    {
        $subject = $request->get('subject');
        $message = $request->get('message');
       Mail::to($request->get('emails'))->send(new NewsLetterMail($subject , $message));
        return response()->json(['status' => true , 'message' => "Emails has been sent successfully"]);
    }
}
