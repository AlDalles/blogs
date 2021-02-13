@extends('layout1')

@section('title', 'tags')

@section('content')
    <h1>
        <a href="list-tags.php">К списку тегов</a>
    </h1>

    <form method="post" action=#>
        <select name = "tags1[]" size={{$tags->count()}} multiple="multiple">
    @forelse($tags as $tag)


            <option value={{ $tag->id }}>{{ $tag->title }}</option>

        @empty
        <p>no tags</p>
    @endforelse



        </select><br> <input name ="submit" type="submit" value="delete tags"></form>
    @push('scripts')
        <script src="/example.js"></script>
    @endpush
@endsection