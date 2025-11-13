<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string',
        ]);

        // Store in database
        $message = ContactMessage::create($validated);

        // Send email notification
        Mail::raw("New contact message from {$validated['first_name']} ({$validated['email']})\n\nSubject: {$validated['subject']}\n\nMessage:\n{$validated['message']}", function ($mail) use ($validated) {
            $mail->to('famifycreative@gmail.com')
                ->subject('New Contact Message from ' . $validated['first_name']);
        });

        return back()->with('success', 'Thank you for reaching out! We’ll get back to you soon.');
    }
}
