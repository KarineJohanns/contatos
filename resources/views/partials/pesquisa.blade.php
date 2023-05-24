 <!-- menu lateral -->
 <div id="menu" class="container">
     <ul>
         <li><a href="/contato"><img src="{{ asset('img/contato-caderno.svg')}}">Contatos</a></li>
         <!-- <li><a href="#"><img src="{{ asset('img/agenda.svg')}}">Agenda</a></li> -->
     </ul>
 </div>

 <!-- busca e adicionar contato -->
 <div class="container">
     <form>
         <div class="search-container">
             <div class="search-box flex-grow-1">
                 <input type="text" placeholder="Pesquise por nome, cpf, telefone ou endereço">
                 <button type="submit"><i class="fa fa-search"></i></button>
             </div>
             <a href="{{route('new.contact')}}" class="add-contact-btn" id=""><i class="fa-solid fa-plus"></i> Novo contato</a>
         </div>
     </form>


 </div>
