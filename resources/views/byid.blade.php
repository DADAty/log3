
@extends('layouts.app')
@section('content')
<h1>Liste des </h1>  
            <h3><a href="#">{{  $kaka->content }}</a></h3>
            <h3><a href="#">{{ $kaka->image ? $kaka->image->path : "Pas d`image"}}</a></h3>
            @foreach($kaka->coments as $coments)
                <span><p>{{ $coments->content }} creer le {{ $coments->created_at->format('d / m / Y   ') }}</p><span>
            @endforeach

 
@endsection
