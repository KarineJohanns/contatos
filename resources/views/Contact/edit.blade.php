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

  <!-- Editar contato -->

  <section class="edit-contact-container container">
    <article>
      <h5 class="edit-contact-title">Editar contato</h5>
      @csrf
      <form class="form-container myForm" id="myFormEdit" method="post" action="{{route('create.contact')}}">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nome">Nome completo *</label>
              <input value="" class="nome" type="text" id="nome" name="nome" placeholder="Nome">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input value="" type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input value="" type="text" id="telefone" name="telefone" placeholder="(00) 0000-0000">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="celular">Celular *</label>
              <input value="" class="celular" type="text" id="celular" name="celular" placeholder="(00) 0 0000-0000">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input value="" type="text" id="email" name="email" placeholder="Digite aqui">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="cep">CEP</label>
              <input value="" type="text" id="cep" name="cep" placeholder="00000-000" onblur="pesquisacep(this.value);">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="rua">Rua</label>
              <input value="" type="text" id="rua" name="rua" placeholder="Digite aqui">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="numero">Número</label>
              <input value="" type="text" id="numero" name="numero" placeholder="0000">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="estado">Estado</label>
              <input value="" type="text" id="estado" name="estado" placeholder="Digite aqui">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="cidade">Cidade</label>
              <input value="" type="text" id="cidade" name="cidade" placeholder="Digite aqui">
            </div>
          </div>
          <div class="form-group">
            <label for="observacoes">Observações</label>
            <textarea value="" id="observacoes" name="observacoes" placeholder="Digite aqui"></textarea>
          </div>
          <div class="button-row">
            <div class="form-button">
              <a href="/contato"><button type="button" id="cancelarEdit">Cancelar</button></a>
              <button type="submit" id="salvar">Salvar</button>
            </div>
          </div>
        </div>
      </form>
    </article>
  </section>


  <div class="overlay hidden" id="overlay"></div>
  @include('partials.scripts')

</body>

</html>