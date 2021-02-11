@extends('layout1')

@section('title', 'Tags')

@section('content')

    <form action="#" method="post">
    Tag name <input name="tag" size="40"><br>
    Tag slug <input name="slug" size="40"><br>
    <input name ="submit" type="submit" value="save tag">
    </form>
    @endsection