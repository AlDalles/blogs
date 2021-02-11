<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$tags = \Hillel\Model\Tag::all();
{echo $blade->make('pages/delete1-tags',['tags' => $tags])->render();}

if(isset($_POST['submit']))
{
    foreach ($_POST['tags1']as $tag)
    {
       $del_tag = \Hillel\Model\Tag::find($tag);
       $del_tag->delete();
    }

}