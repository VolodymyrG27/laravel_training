@extends('app')

@section('content')
    <h1 class="mt-3">{{ $article->title }}</h1>
    <hr />
   <article>
        {{ $article->body }}
   </article>
@endsection