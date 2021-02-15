<?php
namespace Hillel\Controller;

use Hillel\Model\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TagController
{
    public function index(){
        $tags = Tag::all();

        return view('pages/tag/list',compact('tags'));

    }

    public function create(){
        $category = new Tag();
        return view('pages/tag/create',compact('tag'));
    }

    public function store(){
        $data = request()->all();
       //var_dump($data);

       $tag = new Tag();
        $tag->title=$data['title'];
        $tag->slug=$data['slug'];
        $tag->save();
        return new RedirectResponse('/');
    }


    public function destroy($id){

        $tag =  Tag::find($id);
        $tag->delete();

        return new RedirectResponse('/tag/list');

    }
    public function delete_many(){
    $tags = Tag::all();
    return view('pages/tag/delete',compact('tags'));

    }


    public function destroy_many(){
        $data = request()->all();
       Tag::destroy($data[tags_id]);
        return new RedirectResponse('/tag/list');
    }

    public function edit($id){
        $tag =  Tag::find($id);
        return view('pages/tag/edit',compact('tag'));

    }

    public function edit_select(){
        $tags =  Tag::all();
        return view('pages/tag/select-tag',compact('tags'));

    }

    public function update($id){
        $data = request()->all();
        $tag =  Tag::find($id);
        $tag->title=$data['title'];
        $tag->slug=$data['slug'];
        $tag->save();
        return new RedirectResponse('/tag/list');
    }

    public function edit1()
    {
      $data = request()->all();
      $tag = Tag::find($data['id']);
      return view('pages/tag/edit', compact('tag'));
    }



}