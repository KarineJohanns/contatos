    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        @include('partials.header')

    </head>

    <body class="antialiased " id="body-login">
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

        <div class="container-login">
            <section class="login-container">
                <article class="title">
                    <h4 class="title-text">Lista de Contatos</h4>
                    <p class="description">Faça login para acessar</p>
                </article>
                <form method="post" action="{{route('auth.user')}}" class="form-login">
                    @csrf
                    <label for="">Email*</label>
                    <input type="text" name="email" placeholder="Seuemail@mail.com">
                    <label for="">Senha*</label>
                    <input type="password" name="password" placeholder="Senha">
                    <a href="#" class="forgot-password">Esqueceu a senha?</a>
                    <button type="submit">Entrar</button>
                </form>
                <article class="login-google">
                    <div id="buttonDiv"></div>
                </article>
                <article class="signin">
                    <p class="text">Não possui conta?<span><a href="{{route('registry')}}" class="signin-text"> Cadastre-se</a></span></p>
                </article>
            </section>
        </div>
        @include('partials.scripts')
    </body>

    </html>