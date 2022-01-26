@extends('layouts.app')

@section('content')

    <form action="/posts/store" method="POST">
    @csrf
    <input name="title" placeholder="Título">
    <br>
    <textarea name="content" id="" cols="30" rows="3" placeholder="Conteúdo"></textarea>
    <br>
    <button type="submit">Publicar</button>
    </form>
@endsection