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

           return redirect('/home');

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
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/home');
    }



    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
