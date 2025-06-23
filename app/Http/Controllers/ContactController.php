<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first(); // assuming only one row
        return view('admin.contact.index', compact('contact'));
    }

    public function edit()
    {
        $contact = Contact::first();
        return view('Admin.Contact.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        Contact::first()->update($validated);

        return redirect()->route('contact.index')->with('success', 'Contact information updated successfully!');
    }

    public function show()
{
    $contact = Contact::first();
    return view('Admin.Contact.show', compact('contact'));
}

}
