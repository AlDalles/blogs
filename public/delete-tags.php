<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$tag = \Hillel\Model\Tag::find($_POST['id']);
$tag->delete();
echo $blade->make('pages/delete-tags',['tag' => $tag])->render();



