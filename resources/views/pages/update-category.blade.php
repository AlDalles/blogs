@extends('layout1')

@section('title', 'Contacts')

@section('content')



    <form action="#" method="post">
        <p>Название категории<input name="title" value="{{$category->title}}">
        <p>Слаг для категории<input name="slug" value="{{$category->slug}}">
        <p><input name ="update" type="submit" value="Update"><br>

        <p><a href="list-categories.php">К списку категорий</a>>

    @endsection