<?php


require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */


$post = new \Hillel\Model\Post;
$categories = \Hillel\Model\Category::all();
$tags = \Hillel\Model\Tag::all();
echo $blade->make('pages/create-post', ['post' => $post,'categories'=>$categories,'tags'=>$tags])->render();



if(isset($_POST['save'])) {
    $post->body = $_POST['body'];
    $post->category_id = $_POST['id'];
    $post->title = $_POST['title'];
    $post->tags()->attach([compact($_POST['tags'])]);
    $post->save();
    //$tags_id=$_POST['tags_id'];
    //var_dump($tags_id);
    
}