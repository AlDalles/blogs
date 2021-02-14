<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */
$category = new \Hillel\Model\Category;
if(isset($_POST['submit']))
{

$category->title= htmlspecialchars($_POST['category']);
$category->slug=htmlspecialchars($_POST['slug']);
$category->save();
header('location: list-categories.php');

}
echo $blade->make('pages/create-category',['category' => $category])->render();

