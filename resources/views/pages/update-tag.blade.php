@extends('layout1')

@section('title', 'Tags')

@section('content')



    <form action="#" method="post">
        <p>Название тега<input name="title" value="{{$tag->title}}">
        <p>Слаг для тега<input name="slug" value="{{$tag->slug}}">
        <p><input name ="update" type="submit" value="Update"><br>
            <input type="hidden" name="id" value="{{$tag->id}}">
        <p><a href="list-tags.php">К списку тегов</a>>

    @endsection