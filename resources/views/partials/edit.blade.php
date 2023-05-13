<!-- Editar contato -->
<section class="edit-contact-container">
    <article>
    <h5 class="edit-contact-title">Editar contato</h5>
    <form class="form-container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome completo</label>
                    <input value="Teste" type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input value="Teste" type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input value="Teste" type="text" id="telefone" name="telefone" placeholder="(00) 0000-0000" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input value="Teste" type="text" id="celular" name="celular" placeholder="(00) 0 0000-0000" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input value="Teste" type="text" id="email" name="email" placeholder="Digite aqui" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input value="Teste" type="text" id="cep" name="cep" placeholder="00000-000" required onblur="pesquisacep(this.value);">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input value="Teste" type="text" id="rua" name="rua" placeholder="Digite aqui" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input value="Teste" type="text" id="numero" name="numero" placeholder="0000" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input value="Teste" type="text" id="estado" name="estado" placeholder="Digite aqui" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input value="Teste" type="text" id="cidade" name="cidade" placeholder="Digite aqui" required>
                </div>
            </div>
            <div class="form-group">
                <label for="observacoes">Observações</label>
                <textarea value="Teste" id="observacoes" name="observacoes" placeholder="Digite aqui"></textarea>
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