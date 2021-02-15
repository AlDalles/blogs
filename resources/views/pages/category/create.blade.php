@extends('layout1')

@section('title', 'Contacts')

@section('content')


</br></br></br>
</br>

    <h1>добавить категорию </h1>

    <form class="form-text" action="#" method="post">
        <p>Category name <input name="title" size="40"><br>
        <p>Category slug <input name="slug" size="40"><br>
        <p><input name ="submit" type="submit" value="save category">
    </form>
        @endsection