<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;
use App\Models\Article;



class ArticleController extends Controller
{
    //
    public function show(){

   	
   }
    public function showById($id)
    {
   $data =  Post::find($id);
   $cat =  Categories::all();
   $data2 =  Article::all();
        return view(
        'article',
         [
         	'id' => $id
         ],
         [
         	'data2' =>$data2,
        	'data'	=>$data,
        	'cat'	=>$cat
        ]);
        


      //return view('article',['data'=>$data,'cat'=>$cat]);
    }
    public function comment(Request $request){

    	 request()->validate([
    		'comment' => 'required',
    		'article_id' => 'required'
    	]);
		//dd(request()->all());
    	Article::create($request->all());
    	return redirect()->route('home.index')->with('success','comment successfull.');
    	
    }


}
