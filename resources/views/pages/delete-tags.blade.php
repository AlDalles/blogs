@extends('layout1')

@section('title', 'tags')

@section('content')

    <p><a href="list-tags.php">К списку тегов</a>

    @push('scripts')
        <script src="/example.js"></script>
    @endpush
@endsection