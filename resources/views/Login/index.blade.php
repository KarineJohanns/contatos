    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('partials.header')

    </head>
    <body class="antialiased">
        <h1>Page login</h1>
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

        <form method="post" action="{{route('auth.user')}}">
            @csrf
            <label for="">Email:</label>
            <input type="text" name="email">

            <label for="">Senha:</label>
            <input type="password" name="password">
            <button type="submit">Logar</button>
        </form>
        <a href="{{route('registry')}}">Registre-se</a>
    </body>
</html>
