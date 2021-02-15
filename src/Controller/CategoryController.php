<?php
namespace Hillel\Controller;

use Hillel\Model\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CategoryController
{
    public function index(){
        $categories = Category::all();

        return view('pages/category/list',compact('categories'));

    }

    public function create(){
        $category = new Category();
        return view('pages/category/create',compact('category'));
    }

    public function store(){
        $data = request()->all();
       //var_dump($data);

       $category = new Category();
        $category->title=$data['title'];
        $category->slug=$data['slug'];
        $category->save();
        return new RedirectResponse('/');
    }


    public function destroy($id){

        $category =  Category::find($id);
        $category->delete();

        return new RedirectResponse('/');

    }
    public function delete_many(){
    $categories = Category::all();
    return view('pages/category/delete',compact('categories'));

    }


    public function destroy_many(){
        $data = request()->all();
      //var_dump($data);
          Category::destroy($data[categories_id]);
        return new RedirectResponse('/');
    }

    public function edit($id){
        $category =  Category::find($id);
        return view('pages/category/edit',compact('category'));

    }

    public function edit_select(){
        $categories =  Category::all();
        return view('pages/category/select-category',compact('categories'));

    }

    public function update($id){
        $data = request()->all();
        $category =  Category::find($id);
        $category->title=$data['title'];
        $category->slug=$data['slug'];
        $category->save();
        return new RedirectResponse('/');
    }

    public function edit1()
    {
      $data = request()->all();
      $category = Category::find($data['id']);
      return view('pages/category/edit', compact('category'));
    }



}