<!-- Lista de contatos -->
<div class="container-formulario">
    <div class="col-10">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="col-10">
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>
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
                    <p class="text-muted mb-0">{{ $contact['phone-number'] }}</p>
                </td>
                <td colspan="2">
                    <a href="{{route('edit.contact',['id' => $contact->id])}}" class="btn" id=""><img src="{{asset ('img/edit.svg')}}" alt="Editar contato">
                    </a>
                    <button type="button" class="btn" id="btn-delete"><img src="{{asset ('img/delete.svg')}}" alt="Apagar contato" data-bs-toggle="modal" data-bs-target="#deleteContact">
                    </button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">D</button>
                    <!-- Modal delete contato -->
                    <div class="modal fade" id="deleteContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('delete.contact', ['id' => $contact->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Apagar contato</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Tem certeza que deseja apagar o contato <b>{{$contact->name}}</b>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Apagar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detalhes do contato {{ $contact->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Nome completo: </strong> {{ $contact->name }}</p>
                                <p><strong>CPF: </strong> {{ $contact->cpf }}</p>
                                <p><strong>Telefone: </strong> {{ $contact->phone }}</p>
                                <p><strong>Celular: </strong> {{ $contact['phone-number'] }}</p>
                                <p><strong>E-mail: </strong> {{ $contact->email }}</p>
                                <p><strong>CEP: </strong> {{ $contact->cep }}</p>
                                <p><strong>Rua: </strong> {{ $contact->street }}</p>
                                <p><strong>Numero: </strong> {{ $contact->number }}</p>
                                <p><strong>Estado: </strong> {{ $contact->state }}</p>
                                <p><strong>Cidade: </strong> {{ $contact->city }}</p>
                                <p><strong>Observações: </strong> {{ $contact->note }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

</div>
