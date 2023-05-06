    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>

        @include('partials.header')
    </head>
    <body class="antialiased" id="body-cadastro">
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
        <div class="container-cadastro">
        <section class="cadastro-container">
            <article class="title">
                <h4 class="title-text">Crie sua conta</h4>
            </article>
            <form action="" class="form-cadastro">
            @csrf
                <label for="">Nome*</label>
                <input type="text" name="name" placeholder="Nome">
                <label for="">Email*</label>
                <input type="text" name="email" placeholder="Seuemail@mail.com">
                <label for="">Senha*</label>
                <input type="password" name="password" placeholder="Senha">
                <label for="">Confirmar senha*</label>
                <input type="password" name="confirm-password" placeholder="Confirmar senha">
                <div class="btn-control">
                    <button type="button"><a href="{{route('login')}}">Voltar</a></button>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </section>
    </div>
@include('partials.scripts')
    </body>
</html>
