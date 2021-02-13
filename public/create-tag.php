<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

//
{echo $blade->make('pages/create-tag')->render();}


if(isset($_POST['submit']))
{
$tag = new \Hillel\Model\Tag();
$tag->title= htmlspecialchars($_POST['tag']);
$tag->slug=htmlspecialchars($_POST['slug']);
$tag->save();
echo "Tag ".$tag->title." was saved";


}

