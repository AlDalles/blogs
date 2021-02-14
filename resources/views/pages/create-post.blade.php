@extends('layout1')

@section('title', 'Ppst')

@section('content')

    <div><h1>Добавить новый пост</h1></div>
  <div> <form action="#" name="main" method="post">
        <div>Title<input name="title" size="100"></div>
        <div ><textarea name="body" cols="100"
 rows="35"></textarea></div>
        <div><select name="id">
         @foreach($categories as $category){
                <option value="{{$category->id}}">{{$category->title}}</option>
                }@endforeach
            </select></div>
        <div>
                 @foreach($tags as $tag)
                <input type="checkbox" name="tags_id[]" value={{$tag->id}}>{{$tag->title}}
        </div>
            @endforeach
            <div><input type="submit" name="save" value="Save"></div>
       </form> </div>


    @endsection