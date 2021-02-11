<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

//
$tag = \Hillel\Model\Tag::find($_GET['id']);
echo $blade->make('pages/update-tag',['tag' => $tag])->render();

if(isset($_POST['update'])){
$tag->title=$_POST['title'];
$tag->slug=$_POST['slug'];
$tag->save();

}
