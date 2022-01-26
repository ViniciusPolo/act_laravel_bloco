@extends('layouts.app')

@section('content')
<a href="/posts/create"><button>Criar Post</button></a>
    @foreach ($posts as $post)
        
    <div class="class" style="width: 300px">
        <h5 class="card-title">
            {{$post->title}}
        </h5>
        <p class="card-text">
            {{$post->content}}
        </p>
        <a href="/posts/show/{{$post->id}}"><button>Exibir</button></a>
        <a href="/posts/edit/{{$post->id}}"><button>Editar</button></a>
        <a href="/posts/delete/{{$post->id}}"><button>Deletar</button></a>
    </div>
    @endforeach
@endsection