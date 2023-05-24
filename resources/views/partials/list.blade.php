<!-- Lista de contatos -->
<div class="container-formulario">
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
            @foreach($contacts as $contact)
            <tr class="" id="{{ json_encode($contact->id) }}">
                <div class="idContato" style="visibility: hidden;">{{ $contact->id}}</div>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-bold mb-1">{{ $contact->name }}</p>
                            <p class="text-muted mb-0">{{ $contact->email }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $contact->street }}</p>
                    <p class="text-muted mb-0">{{ $contact->city }}</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $contact->phone }}</p>
                    <p class="text-muted mb-0">{{ $contact->phone_number }}</p>
                </td>
                <td colspan="2">
                    <a href="{{route('edit.contact')}}" class="btn" id=""><img src="{{asset ('img/edit.svg')}}" alt="Editar contato">
                    </a>
                    <button type="button" class="btn" id="btn-delete"><img src="{{asset ('img/delete.svg')}}" alt="Apagar contato">
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
