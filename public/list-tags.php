<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */


$tags = \Hillel\Model\Tag::all();
compact('tags'); // ['tags' => $tags]

echo $blade->make('pages/list-tags', ['tags' => $tags])->render();

