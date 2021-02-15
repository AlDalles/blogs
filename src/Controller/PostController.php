<?php
namespace Hillel\Controller;

use Hillel\Model\Tag;
use Hillel\Model\Category;
use Hillel\Model\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PostController{

    public function index(){
        $posts = \Hillel\Model\Post::all();
        return view('pages/post/list',compact('posts'));
    }


}