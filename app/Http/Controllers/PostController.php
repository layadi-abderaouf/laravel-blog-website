<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        $posts = Post::all();
        
        return view('blog.index',[
            'posts'=>$posts
        ]);
        
    }

    
    public function create()
    {
        if(Auth::check()){
            return view('blog.create');
        }else{
            return redirect('/login');
        }

        
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'description' =>'required',
            'image' =>'required|mimes:png,jpg,jpeg|max:5048'
        ]);
        $slug = Str::slug($request->title,'-');
        $image_name = uniqid() .'-'.$slug .'.'. $request->image->extension();

        $request->image->move(public_path('images'),$image_name);
        
       Post::create([
           'title' =>$request->input('title'),
           'description' =>$request->input('description'),
           'slug' => $slug,
           'image' => $image_name,
           'user_id'=> auth()->user()->id
       ]);

        return redirect('/blog');

       
    }

   
    public function show($id)
    {
        return view('blog.show')
        ->with('post',Post::where('slug',$id)->first());
    }

   
    public function edit($id)
    {
        $post = Post::where('slug',$id)->first();
        
        if(Auth::check() && Auth::user()->id == $post['user_id']){
            return view('blog.edit')
            ->with('post',$post);
        }else{
            return redirect('/login');
        }
        
    }

   
    public function update(Request $request, $slug)
    {

        $request->validate([
            'title' =>'required',
            'description' =>'required',
            'image' =>'required|mimes:png,jpg,jpeg|max:5048'
        ]);
        
        $image_name = uniqid() .'-'.$slug .'.'. $request->image->extension();

        $request->image->move(public_path('images'),$image_name);

        Post::where('slug',$slug)
        ->update([
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
            'slug' => $slug,
            'image' => $image_name,
            'user_id'=> auth()->user()->id
        ]);
 
         return redirect(route('blog.show',$slug))->with(
             'message','the post was updated'
         );
 
    }

    
    public function destroy($id)
    {
        Post::where('slug',$id)->delete();
        return redirect('/blog')->with(
            'message','the post was deleted'
        );
    }
}
