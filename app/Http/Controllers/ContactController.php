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
        //return view('messages', ['data' => $contact->where('topicOfMessage', '<>', 'Hi im Den')->get()]);

        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->topicOfMessage = $req->input('topicOfMessage');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', "Message has been updated");
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Message has been deleted');
    }
}
