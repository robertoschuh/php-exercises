<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
   public function index(){

    	$categories = Category::all();
    	
    	return view('categories.index', ['categories' => $categories]);
    }


    public function store(Request $request){

    	$category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;

    	if ($category->save()) {
    		return redirect('/admin/categories');
    	}
     
    	return view('categories.index', ['categories' => $category]);

    }

    public function update(Request $request){

        $category = Category::findOrFail($request->get('id'));
   
        if ($category->update($request->all())) {
           
            return redirect('/' .$category->name);

        }

        return view('categories.edit', ['category' => $category]);


    }

    public function edit($id){

        $category = Category::find($id);
        return view('categories.edit', ['category' => $category]);

    }
}
