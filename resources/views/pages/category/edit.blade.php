@extends('layout1')

@section('title', 'Contacts')

@section('content')


</br></br></br>
</br>

    <h1>Изменить категорию </h1>

    <form class="form-text" action="/category/{{$category->id}}/update"  method="post">
        <p>Category name <input name="title" value="{{$category->title}}" size="40"><br>
        <p>Category slug <input name="slug" value="{{$category->slug}}" size="40"><br>
        <p><input name ="submit" type="submit" value="save category">
    </form>
        @endsection