@extends('layout1')

@section('title', 'Tags')

@section('content')



    <form action="update-tag.php" method="post">
        <select name =id  size="1">


        @forelse($tags as $tag)
                <option  value={{ $tag->id }}>{{ $tag->title }}</option>

             @empty
            <p>no tags</p>
        @endforelse
        </select>
        <input name ="update" type="submit" value="select category"><br>



    @endsection