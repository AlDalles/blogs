<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

//
{echo $blade->make('pages/create-category')->render();}


if(isset($_POST['submit']))
{
$category = new \Hillel\Model\Category;
$category->title= htmlspecialchars($_POST['category']);
$category->slug=htmlspecialchars($_POST['slug']);
$category->save();
echo "Category ".$category->title." was saved";


}

