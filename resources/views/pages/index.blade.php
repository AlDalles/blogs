@extends('layout1')

@section('title', 'Homepage')

@section('content')
    <h1>Posts</h1>

    @forelse($posts as $post)
        @if ($loop->first)
            <hr>
        @endif

        <div class="text-white bg-dark"><p><H1>{{ $post->title }}</H1></p></div>
        <div class="text-info bg-dark"><p><h3>category: {{$post->category->title}}</h3></p></div>
        <div class="text-primary">><p>tags: {{$post->tagsAsString()}}</p></div>
        </br>
        <p>{{$post->body}}</p>
        </br>
        @if ($loop->last)
            <hr>
        @endif
    @empty
        <p>no categories</p>
    @endforelse
