<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('Login.index');
    }

    public function auth(Request $request){
        $this->validate($request, [
            'email'=> 'required',
            'password'=> 'required'
        ],[
            'email.required' => 'E-mail é obrigátorio.',
            'password.required' => 'Senha é obrigátorio.'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('Logou');
        } else {
           return redirect()->back()->with('danger', 'E-mail ou senha inválidos.');
        }
    }
}
