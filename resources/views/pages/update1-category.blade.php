@extends('layout1')

@section('title', 'Contacts')

@section('content')



    <form action="#" method="post">
        <select name = category size="1">


        @forelse($categories as $category)
                <option value={{ $category->id }}>{{ $category->title }}</option>

             @empty
            <p>no categories</p>
        @endforelse
        </select>
        <input name ="update" type="submit" value="select category"><br>



    @endsection