@extends('layout1')

@section('title', 'Homepage')

@section('content')
    <h1>Posts</h1>

    @forelse($posts as $post)
        @if ($loop->first)
            <hr>
        @endif

        <p><H1>{{ $post->title }}</H1>></p>
        <p><h3>category: {{$post->category->title}}</h3>></p>
        <p>tags: {{$post->tagsAsString()}}</p>>
        </br>
        <p>{{$post->body}}</p>>
        </br>
        @if ($loop->last)
            <hr>
        @endif
    @empty
        <p>no categories</p>
    @endforelse
