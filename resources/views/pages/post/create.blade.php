@extends('layout1')

@section('title', 'Post')

@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/resources/pages/css/index.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-start">
        <div class="col title">
            <h1>Добавить новый пост</h1>
        </div>
        <div class="col-4,info1" class ="container-form">
            <form action="/post/create" name="main" method="post" class="form">
                <h2 class="col-4,info1 title">Title</h2>
                <input name="title" class ="input-titel display-form">
                <input name="slug" class ="input-titel display-form">
                <textarea name="body" class="form-textarea display-form"></textarea>
                <select name="category_id" class ="select-form">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                <div>
                    @foreach($tags as $tag)
                     <input class = "input-checkbox" type="checkbox" name="tags_id[]" value={{$tag->id}}>{{$tag->title}}
                    @endforeach
                    <input class = "input-checkbox" type="submit" name="save" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

@endsection