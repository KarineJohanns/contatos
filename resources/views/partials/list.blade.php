<!-- Lista de contatos -->
<div class="container container-formulario">
    <table class="table align-middle mb-0">
        <thead class="head-table">
            <tr>
                <th>Nome / E-mail</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-bold mb-1">Karine Johanns</p>
                            <p class="text-muted mb-0">karinejohanns@gmail.com</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Rua Marechal Deodoro</p>
                    <p class="text-muted mb-0">Concórdia</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">(49) 3441-1234</p>
                    <p class="text-muted mb-0">(49) 9 9999-9999</p>
                </td>
                <td colspan="2">
                    <button type="button" class="btn" id="btn-edit"><img src="{{asset ('img/edit.svg')}}" alt="Editar contato">
                    </button>
                    <button type="button" class="btn" id="btn-delete"><img src="{{asset ('img/delete.svg')}}" alt="Apagar contato">
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>