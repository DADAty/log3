<ul>
    <li><a href="{{ route('welcome') }}">Accueil</a></li>
    <li><a href="/post">Page de contact</a></li>
    <li><a href="{{ route('contact') }}">Accueil</a></li>
    <li><a href="{{ route('create') }}">Creer</a></li>
</ul>
<form action="{{ route('logout') }}" methode="post">
    @csrf
    <button type="submit">Se deconnecter</button>