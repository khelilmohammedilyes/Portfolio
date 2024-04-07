<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);

        Mail::to('khelilmohammedilyes3@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message']));

        return $request->all();
    }
}
