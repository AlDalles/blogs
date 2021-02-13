<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$posts = \Hillel\Model\Post::all();
//compact('posts'); // ['posts' => $posts]
echo $blade->make('pages/index', ['posts' => $posts])->render();
