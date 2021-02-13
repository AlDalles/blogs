@extends('layout1')

@section('title', 'Contacts')

@section('content')

    <form class="form-text" action="#" method="post">
        <p>Category name <input name="category" size="40"><br>
        <p>Category slug <input name="slug" size="40"><br>
        <p><input name ="submit" type="submit" value="save category">
    </form>
    <p> <p><a href="list-categories.php">К списку категорий</a>>
    @endsection