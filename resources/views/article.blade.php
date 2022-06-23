
@extends('layouts.app')
@section('content')
<h1>Liste des </h1>
    @if ($kaka->count() > 1 )
        @foreach($kaka as $kaka)
            <h3><a href="{{ route('avecid', ['id' => $kaka->id])}}">{{  $kaka->title }}</a></h3>
        @endforeach
    @else
        <span> Aucun poste dans la bd </span>
    @endif
@endsection


