<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'content'=>'required|min:3'
            ]);

        //Enviar email.
        Mail::to('r.otarola.bass@gmail.com')->queue(new MessageReceived($message));

        return back()->with('status','Hemos recibido tu mensaje exitosamente');
    }
}
