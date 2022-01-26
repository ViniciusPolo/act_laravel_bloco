@extends('layouts.app')

@section('content')

    <form action="/posts/update/{{ $post->id}}" method="POST">
    @csrf
    <input name="title" value="{{ $post->title}}">
    <br>
    <textarea name="content" id="" cols="30" rows="3">{{$post->content}}</textarea>
    <br>
    <button type="submit">Salvar alteração</button>
    </form>
@endsection