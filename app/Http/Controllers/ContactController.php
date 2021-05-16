<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->topicOfMessage = $req->input('topicOfMessage');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', "Message has been added");
    }

    public function allData()
    {
        $contact = new Contact();
        //return view('messages', ['data' => $contact->orderBy('id','asc')->take(1)->get()]);
        // '<>' in sql means !=
        return view('messages', ['data' => $contact->where('topicOfMessage', '<>', 'Hi im Den')->get()]);
    }
}
