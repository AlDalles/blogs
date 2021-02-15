@extends('layout1')

@section('title', 'Contacts')

@section('content')


</br></br></br>
</br>

    <h1>Изменить тег </h1>

    <form class="form-text" action="/tag/{{$tag->id}}/update"  method="post">
        <p>Category name <input name="title" value="{{$tag->title}}" size="40"><br>
        <p>Category slug <input name="slug" value="{{$tag->slug}}" size="40"><br>
        <p><input name ="submit" type="submit" value="save tag">
    </form>
        @endsection