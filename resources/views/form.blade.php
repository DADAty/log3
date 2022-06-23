@extends('layouts.app')
@section('content')
<h1>Creer un post</h1>
                        <form action="{{ route('store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="text-info">Mot de passe:</label><br>
                                    <input type="text" name="title" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="content" class="text-info">Texte:</label><br>
                                    <textarea class="text-info"  name="content"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-info btn-md Api" value="Creer">

                                </div>
                            </form>
@endsection