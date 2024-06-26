<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        $email = $request->email."@cpilosenlaces.com";
        $user = User::where(
            'email', '=', $email
        )->first();
        //dd($user->name);
        if($user != null) {
            if(password_verify($request->password, $user->password)) {
                if($user->name == 'admin'){
                    return view('admin.index', compact('user'));
                } else {
                    //dd($request->password);
                    if(password_verify('losenlaces', $user->password)){
                        return redirect()->route('password.index');
                    } else {
                        //dd('no ha comprobado bien password_verify');
                        return view('user.index', compact('user'));
                    }
                }
            }
            else {
                //dd('Contraseña incorrecta');
                return redirect()->route('/')
                    ->with('message', 'Contraseña incorrecta');
            }
        }
        else {
            //dd('Usuario no encontrado');
            return redirect()->route('/')
                ->with('message', 'Usuario no encontrado');
        }
    }
}
