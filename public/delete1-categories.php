<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$categories = \Hillel\Model\Category::all();
{echo $blade->make('pages/delete1-categories',['categories' => $categories])->render();}

if(isset($_POST['submit']))
{
    foreach ($_POST['categories']as $cat)
    {
       $del_cat = \Hillel\Model\Category::find($cat);
       $del_cat->delete();
    }

}