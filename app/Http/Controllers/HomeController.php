<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        // $contacts = Contact::all();
        // return view('welcome', ['contacts' => $contacts]);
        // ou bien
        return view('welcome', ['contacts' => Contact::all()]);
    }
}
