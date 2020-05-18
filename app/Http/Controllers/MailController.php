<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    // $to_name = ‘RECEIVER_NAME’;
    // $to_email = ‘RECEIVER_EMAIL_ADDRESS’;
    // $data = array(‘name’=>”Ogbonna Vitalis(sender_name)”, “body” => “A test mail”);
    // Mail::send(‘emails.mail’, $data, function($message) use ($to_name, $to_email) {
    // $message->to($to_email, $to_name)
    // ->subject(Laravel Test Mail’);
    // $message->from(‘SENDER_EMAIL_ADDRESS’,’Test Mail’);
    // });

    public function sendMail(Request $request){
        $this->validate($request,[
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'message_body' => ['required', 'string',],
          ]);
        $formInput = $request->all();
        $from = $formInput['email'];
        $fromName = $formInput['name'];

        Mail::send(['text'=>'email-body'], $formInput, function($message) use ($from, $fromName) {
            $message->to('frostfree.demo@gmail.com', 'FrostFree')
            ->subject('Customer Query');
            $message->from($from, $fromName);
         });

        session()->flash('snackbar-message', "Mail sent Successfully!");
        return back();
    }
}
