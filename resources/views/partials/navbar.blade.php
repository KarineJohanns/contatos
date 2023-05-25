<!-- Navbar -->
<nav class="d-flex justify-content-between">
	<a href="/contato">
		<h6 class="title-text">Lista de contatos</h6>
	</a>
	<div class="logout">
		<a href="{{route('auth.destroy')}}"><img src="{{ asset('img/logout.svg')}}" alt="Logout"></a>
	</div>
</nav>