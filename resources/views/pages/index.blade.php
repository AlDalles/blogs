@extends('layout1')

@section('title', 'Homepage')

@section('content')
    <h1>Categories</h1>

    @forelse($categories as $category)
        @if ($loop->first)
            <hr>
        @endif

        <p>{{ $category->title }}</p>

        @if ($loop->last)
            <hr>
        @endif
    @empty
        <p>no categories</p>
    @endforelse

   {{-- @forelse($tags as $tag)
        @if ($loop->first)
            <hr>
        @endif

        <p>{{ $tag->title }}</p>

        @if ($loop->last)
            <hr>
        @endif
    @empty
        <p>no tags</p>
    @endforelse

    @push('scripts')
        <script src="/example.js"></script>
    @endpush
@endsection--}}
