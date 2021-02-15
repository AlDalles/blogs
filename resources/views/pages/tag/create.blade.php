@extends('layout1')

@section('title', 'Contacts')

@section('content')


<div class="info1">

    <h1>добавить тег </h1>

    <form class="form-text" action="#" method="post">
        <p>Post name <input name="title" size="40"><br>
        <p>Post slug <input name="slug" size="40"><br>
        <p><input name ="submit" type="submit" value="save tag">
    </form>
</div>
        @endsection