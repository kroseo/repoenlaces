<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PassController extends Controller
{
    public function index()
    {
        return view('user.passwordmail');
    }

    public function send(Request $request)
    {
        $mail = $request->email."@cpilosenlaces.com";
        if (mail($mail, 'Repositorio Los Enlaces: Cambio de contraseña',
                '
                    Hola '.$request->email.',
                    Siga el siguiente enlace para cambiar su contraseña:
                    http://localhost/repoenlaces/public/password/changePassword?email='.$request->email,
                'De: rubenmanerobuey@gmail.com')) {
            return redirect()->route('password.index')
                ->with('message', 'Se ha enviado el correo electrónico a la dirección indicada: '.$request->email.'@cpilosenlaces.com');
        } else {
            return redirect()->route('password.index')
                ->with('message', 'Fallo al enviar el correo');
        }
    }

    public function edit(Request $request)
    {
        $mail = $request->email.'@cpilosenlaces.com';
        $user = User::where('email','=',$mail)->first();
        return view('user.changepassword', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $mail = substr($request->mail, 0, -18);
        $string = 'email='.$mail;
        $user = User::where('email','=',$request->email)->first();

        if($request->password != $request->confirm) {
            $message = 'Las contraseñas no coinciden';
            return view('user.changepassword', compact('user', 'message'));
        } else {
            $user->update([
                'password' => Hash::make($request->input('password')),
            ]);
        }
        return redirect()->route('/')
            ->with('message', 'Contraseña actualizada');
    }
}
