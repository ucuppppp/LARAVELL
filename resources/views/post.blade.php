@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{$post->title}}</h1>

<p>By : <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a
        href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>

{!!$post->body!!}
<a href="/blog" class="text-decoration-none d-block">Back</a>
@endsection