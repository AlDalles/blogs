<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

//
$tag = \Hillel\Model\Tag::find($_POST['id']);
echo $blade->make('pages/update-tag',['tag' => $tag])->render();

//да я знаю - єто КОСТЫЛЬ
if(isset($_POST['marker'])){
    exit;
}

if(isset($_POST['update'])){
$tag->title=$_POST['title'];
$tag->slug=$_POST['slug'];
$tag->save();

}
