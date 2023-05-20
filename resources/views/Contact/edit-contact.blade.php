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
    @foreach($contacts as $contact)
    <section class="edit-contact-container">
        <article>
            <h5 class="edit-contact-title">Editar contato</h5>
            <form class="form-container">
                <div class="row">
                    <div class="idContato" style="visibility: hidden;">{{ $contact->id}}</div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input value="{{ $contact->name }}" type="text" id="nome" name="nome" placeholder="Nome" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input value="{{ $contact->cpf }}" type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input value="{{ $contact->phone }}" type="text" id="telefone" name="telefone" placeholder="(00) 0000-0000" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input value="{{ $contact->phone_number }}" type="text" id="celular" name="celular" placeholder="(00) 0 0000-0000" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input value="{{ $contact->email }}" type="text" id="email" name="email" placeholder="Digite aqui" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input value="{{ $contact->cep }}" type="text" id="cep" name="cep" placeholder="00000-000" required onblur="pesquisacep(this.value);">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="rua">Rua</label>
                            <input value="{{ $contact->street }}" type="text" id="rua" name="rua" placeholder="Digite aqui" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input value="{{ $contact->number }}" type="text" id="numero" name="numero" placeholder="0000" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input value="{{ $contact->state }}" type="text" id="estado" name="estado" placeholder="Digite aqui" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input value="{{ $contact->city }}" type="text" id="cidade" name="cidade" placeholder="Digite aqui" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacoes">Observações</label>
                        <textarea value="{{ $contact->name }}" id="observacoes" name="observacoes" placeholder="Digite aqui"></textarea>
                    </div>
                    <div class="button-row">
                        <div class="form-button">
                            <button type="button" id="cancelarEdit">Cancelar</button>
                            <button type="submit" id="salvar">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </article>
    </section>
    @endforeach

    <div class="overlay hidden" id="overlay"></div>
    @include('partials.scripts')

</body>

</html>