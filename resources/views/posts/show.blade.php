@extends('layouts.app')

@section('content')

<h1>Título:{{ $post->title}}</h1>
<br>
<h3>Conteúdo:{{$post->content}}</h3>
<br>
<h4>Código:{{$post->id}}</h4>
<a href="/dashboard"><button type="submit">Voltar</button></a>
    </form>
@endsection