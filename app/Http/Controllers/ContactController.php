<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'service' => $request->service,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Form submitted successfully!');
    }
}