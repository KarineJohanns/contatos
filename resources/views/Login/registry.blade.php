    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <h1>Page Registry</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('danger'))
            <div class="alert alert-danger">
                {{session('danger')}}
            </div>
        @endif

        <form method="post" action="{{route('create.user')}}">
            @csrf
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirme a senha:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Registrar</button>
        </form>
        <a href="{{route('login')}}">Logar</a>
    </body>
</html>
