<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'email' => 'required', 'insurance_type' => 'required']);
        return Contact::create($request->all());
    }
}
