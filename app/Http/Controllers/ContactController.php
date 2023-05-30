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

    public function edit(Request $request){
        $user = auth()->user();
        $contact = $user->contacts()->find($request->id);

        return view('Contact.edit',compact('contact'));
    }

    public function updateContact(Request $request, $id){
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Usuário não autenticado.');
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

        $contact = Contact::find($id);

        if (!$contact) {
            return redirect()
                ->back()
                ->with('error', 'Contato não encontrado');
        }

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

        $contact->save();
        return redirect('/contato')->with('success', 'Contato editado com sucesso.');
    }

    public function createContact(Request $request){
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Usuário não autenticado.');
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

        return redirect('/contato')->with('success', 'Contato criado com sucesso.');
    }

    public function deleteContact(Request $request, $id){
        $contact = Contact::find($id);
        if (!$contact) {
            return redirect()->route('contact')->with('error', 'Contato não encontrado.');
        }

        $contact->delete();

        return redirect()->route('contact')->with('success', 'Contato deletado com sucesso.');

    }
}
