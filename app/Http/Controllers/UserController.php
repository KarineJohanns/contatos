<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function login(){
        return view('Login.index');
    }

    public function registry(){
        return view('Login.registry');
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

           return redirect('/contato');

        } else {

           return redirect()->back()->with('danger', 'E-mail ou senha inválidos.');

        }
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'confirm-password' => 'required'
        ],[
            'name.required' => 'Nome não pode ficar em branco.',
            'email.required' => 'E-mail não pode ficar em branco.',
            'password.required' => 'Senha não pode ficar em branco.',
            'confirm-password.required' => 'Confirmação de senha não pode ficar em branco.'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/contato');
    }



    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
