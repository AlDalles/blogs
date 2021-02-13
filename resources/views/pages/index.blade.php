@extends('layout1')

@section('title', 'Homepage')

@section('content')
    <h1 class = "info">Posts</h1>

    @forelse($posts as $post)
        @if ($loop->first)
            <hr>
        @endif

        <div class="text-white bg-dark info">
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="text-info bg-dark info">
            <h3>category: {{$post->category->title}}</h3>
        </div>
        <div class="text-primary info">
            <p>tags: {{$post->tagsAsString()}}</p>
        </div>
        </br>
        <p class = "info">{{$post->body}}</p>
        </br>
        @if ($loop->last)
            <hr>
        @endif
    @empty
        <p>no categories</p>
    @endforelse
