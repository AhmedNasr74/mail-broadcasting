<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailBroadCastingRequest;
use App\Mail\NewsLetterMail;
use Mail;
use Symfony\Component\HttpFoundation\Response;

class MailingController extends Controller
{
    public function sendMailBroadcasting(MailBroadCastingRequest $request)
    {
        try {
            $subject = $request->get('subject');
            $message = $request->get('message');
            Mail::to($request->get('emails'))->send(new NewsLetterMail($subject , $message));
            return response()->json(['status' => true , 'message' => "Emails has been sent successfully"]);
        } catch (\Exception $exception){
            return response()->json(['status' => false , 'error' => "Failed To Send Emails , Please Try Again Later"] , Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
