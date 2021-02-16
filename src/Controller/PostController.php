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
    public function create(){
        $post = new Post();
        $categories =  Category::all();
        $tags = Tag::all();
        return view('pages/post/create',compact('post','categories','tags'));
    }

        public function store(){
        $data = request()->all();
        $post = new Post();
       $post->title=$data['title'];
        $post->body=$data['body'];
        $post->category_id=$data['category_id'];
        $post->save();
            return new RedirectResponse('/post/list');
        }
    /*public function update($id){
        $data = request()->all();
        $category =  Category::find($id);
        $category->title=$data['title'];
        $category->slug=$data['slug'];
        $category->save();
        return new RedirectResponse('/category/list');
    }*/

    public function edit($id){
        $post =  Post::find($id);
        $tags = Tag::all();
        $categories = Category::all();
      return view('pages/post/edit',compact('post','categories','tags'));

    }
}