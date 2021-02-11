@extends('layout1')

@section('title', 'tags')

@section('content')
    <h1> <a href="list-categories.php">Список категорий</a>></h1>
    <form method="post" action=#>
        <select name = "categories[]" size={{$categories->count()}} multiple="multiple">
            @forelse($categories as $category)


                <option value={{ $category->id }}>{{ $category->title }}</option>

            @empty
                <p>no categories</p>
            @endforelse



        </select> <br><input name ="submit" type="submit" value="delete categories"></form>
    @push('scripts')
        <script src="/example.js"></script>
    @endpush
@endsection