<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $user = auth()->user();
        $contacts = $user->contacts()->get();

        return view('Home.index', compact('contacts'));
    }
}
