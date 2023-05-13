<!-- Adicionar contato -->
<section class="new-contact-container">
    <article>
    <h5 class="new-contact-title">Novo contato</h5>


    <form class="form-container" method="post" action="{{route('create.contact')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">
                        Nome completo
                        @if($errors->has('name'))
                            <span class="text-danger">*</span>
                        @endif
                    </label>
                    <input class="{{ $errors->has('name') ? 'border border-danger' : '' }}" type="text" id="nome" name="name" placeholder="Nome">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone-number">
                        Celular
                        @if($errors->has('name'))
                            <span class="text-danger">*</span>
                        @endif
                    </label>
                    <input class="{{ $errors->has('phone-number') ? 'border border-danger' : '' }}" type="text" id="phone-number" name="phone-number" placeholder="(00) 0 0000-0000">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" name="phone" placeholder="(00) 0000-0000">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Digite aqui">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" placeholder="00000-000">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="street">Rua</label>
                    <input type="text" id="street" name="street" placeholder="Digite aqui">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="number">Número</label>
                    <input type="text" id="number" name="number" placeholder="0000">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="state">Estado</label>
                    <input type="text" id="state" name="state" placeholder="Digite aqui">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text" id="city" name="city" placeholder="Digite aqui">
                </div>
            </div>
            <div class="form-group">
                <label for="note">Observações</label>
                <textarea id="note" name="note" placeholder="Digite aqui"></textarea>
            </div>
            <div class="button-row">
                <div class="form-button">
                    <button type="reset" id="cancelar">Cancelar</button>
                    <button type="submit" id="salvar">Salvar</button>
                </div>
            </div>
        </div>
    </form>
    </article>
</section>
