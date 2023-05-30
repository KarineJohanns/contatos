<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

           return redirect()->back()->with('error', 'E-mail ou senha inválidos.');

        }
    }

    public function create(Request $request)
    {

        if($request->input('password') != $request->input('confirm-password')){
            return redirect()->route('registry')->with('error', 'As senhas precisam ser iguais.');
        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm-password' => 'required'
        ],[
            'name.required' => 'Nome não pode ficar em branco.',
            'email.required' => 'E-mail não pode ficar em branco.',
            'password.required' => 'Senha não pode ficar em branco.',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        Auth::login($user);

        Session::flash('registry-user', 'Registro concluído com sucesso.');

        return redirect()->route('contact');
    }



    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
