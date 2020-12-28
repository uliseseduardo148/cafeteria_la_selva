<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact(Request $request)
    {
        $data = array(
            'email' => 'juanmartinlopez505@gmail.com', 'name' => $request->input('name'), 'from' => $request->input('email'), 'subject' => $request->input('message')
        );

        Mail::send('clientes.contact', $data, function ($msj) use ($data) {
            $msj->from($data['from'], $data['name']);
            $msj->subject($data['subject']);
            $msj->to($data['email']);
        });
        return redirect()->back();
    }
}
