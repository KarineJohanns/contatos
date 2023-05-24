<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $contacts = $user->contacts()->get();

        return view('Contact.index', compact('contacts'));
    }

    public function new(){

        return view('Contact.new');
    }

    public function edit(){
        return view('Contact.edit');
    }

    public function createContact(Request $request){

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone-number' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->street = $request->input('street');
        $contact->state = $request->input('state');
        $contact->cpf = $request->input('cpf');
        $contact['phone-number'] = $request->input('phone-number');
        $contact->cep = $request->input('cep');
        $contact->number = $request->input('number');
        $contact->city = $request->input('city');
        $contact->note = $request->input('note');

        $contact->user_id = Auth::id();

        $contact->save();

        return redirect('/contato');
    }
}
