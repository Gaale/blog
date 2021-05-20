<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();

        return view('contacts', ['contacts' => $contacts]);
    }
}
