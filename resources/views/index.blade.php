<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repositorio - Los Enlaces</title>
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
</head>
<body>
    <main>
        <div class="logo_container">
            <form class="login_form" action="{{ route('user.main') }}" method="POST">
            @csrf
                <table>
                    <tr>
                        <td class="form_table">Usuario:</td>
                        <td class="form_table"><input type="text" name="email">@cpilosenlaces.com</td>
                    </tr>
                    <tr>
                        <td class="form_table">Contraseña:</td>
                        <td class="form_table">
                            <input type="password" name="password">
                            <div class="form_table_error">
                                @if (session('message'))
                                    {{ session('message') }}
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="center" colspan="2"><input type="submit" value="Entrar" class="submit_button"></td>
                    </tr>
                    <tr>
                        <td class="center" colspan="2"><a href="{{ route('password.index') }}" class="forgotten_password">¿Olvidó su contraseña?</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>
</html>