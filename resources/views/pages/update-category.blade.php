@extends('layout1')

@section('title', 'Contacts')

@section('content')



    <form action="#" method="post">
        <p>Название категории<input name="title" value="{{$category->title}}">
        <p>Слаг для категории<input name="slug" value="{{$category->slug}}">
            <input type="hidden" name="id" value="{{$category->id}}">
            <f><input name ="update" type="submit" value="Update"><br>

    </form>

        <p><a href="list-categories.php">К списку категорий</a>>

    @endsection