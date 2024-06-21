<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PassController extends Controller
{
    public function index()
    {
        return view('user.passwordmail');
    }

    public function send(Request $request)
    {
        $mail = $request->email."@cpilosenlaces.com";
        mail($mail, 'Repositorio Los Enlaces: Cambio de contraseña',
            '
                Hola '.$request->email.',\r\n
                Siga el siguiente enlace para cambiar su contraseña:\r\n\r\n
                <a href="http://localhost/repoenlaces/public/password/update/">http://localhost/repoenlaces/public/password/update</a>
            ');

        return redirect()->route('password.index')
            ->with('message', 'Se ha enviado el correo electrónico a la dirección indicada');
    }

    public function edit()
    {
        return view('user.passwordmail');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user_id)
    {
        $user = User::findOrFail($request->id);
        $user->update([
            'password' => $request->input('password')
        ]);

        return view('admin.users', compact('user'));
    }
}
