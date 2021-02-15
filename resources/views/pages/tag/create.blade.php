@extends('layout1')

@section('title', 'Contacts')

@section('content')


</br></br></br>
</br>

    <h1>добавить пост </h1>

    <form class="form-text" action="#" method="post">
        <p>Post name <input name="title" size="40"><br>
        <p>Post slug <input name="slug" size="40"><br>
        <p><input name ="submit" type="submit" value="save post">
    </form>
        @endsection