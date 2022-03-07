<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $message = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;

        $message->save();
        flashy()->success('Message Envoyé ! On vous remercie.');
        return redirect()->route('contact');
    }
    public function Messages(){
        $messages = Contact::all();
        return view('pages.dashboard', compact('messages') );
    }
}
