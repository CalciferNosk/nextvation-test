<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function add(Request $request){

    	 request()->validate([
    		'category' => 'required'
    	]);
		//dd(request()->all());
    	Categories::create($request->all());
    	return redirect()->route('home.index')->with('success','post successfull.');
    	
    }
    function show(){
    	$cat =  Categories::all();
    	return view('home',['cat'=>$cat]);
    }
}
