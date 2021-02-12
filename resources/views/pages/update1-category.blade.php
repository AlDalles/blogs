@extends('layout1')

@section('title', 'Categories')

@section('content')



    <form action="update-category.php" method="post">
        <select name = id size="1">


        @forelse($categories as $category)
                <option  value={{ $category->id }}>{{ $category->title }}</option>

             @empty
            <p>no categories</p>
        @endforelse
        </select>
        <input name ="update" type="submit" value="select category"><br>



    @endsection