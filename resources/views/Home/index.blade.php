    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de contatos</title>

        @include('partials.header')
    </head>
    <body class="antialiased">
    
      @include('partials.navbar')
      @include('partials.pesquisa')
      @include('partials.new-contact')

      <div class="overlay hidden" id="overlay"></div>
      @include('partials.scripts')
      
    </body>
</html>
