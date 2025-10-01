<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSendRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactSendRequest $request)
    {
        $data = $request->validated();

        Message::create([
            'user_id' => auth()->id(), // logged-in user
            'subject' => $data['subject'],
            'message' => $data['message'],
        ]);

        return redirect()->route('contact.index')->with('toast', [
            'title' => 'Message Sent Successfully!',
            'type' => 'success',
        ]);
    }
}
