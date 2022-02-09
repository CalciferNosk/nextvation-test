<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Categories;
class PostsController extends Controller
{
    //
    public function index(){

    	return view('post');
    }
    public function store(Request $request){



    	 request()->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'content' => 'required',
            'img_link' => 'required|mimes:jpeg,jpg,png',


    	]);
         $imageNewName = time() . '-' . strtok($request->title, " ") . '.' . $request->img_link->extension();
        $request->img_link->move(public_path('images'), $imageNewName);   

    	 $blog = new Post(
                [
                    'content' => $request->input('content'),
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'img_link' => $imageNewName,
                    
                ]
            );

            $blog->save();

    	return redirect()->route('home.index')->with('success','post successfull.');
    	//dd(request()->all());
    }
    function show(){
        
        $data2 =  Categories::all();
        return view('post',['data2'=>$data2]);
    }
    function editById($id){

        $data2 =  Post::find($id);
        return view('edit',['data2'=>$data2]);
    }

    function update(Request $Request){

            $data=Post::find($Request->id);
            $data->title=$Request->title;
            $data->description=$Request->description;
            $data->content=$Request->content;
            $data->save();
            return redirect('home');
    }
    function delete($id){

        $data=Post::find($id);
        $data->delete();
        return redirect('home');
    }
}
