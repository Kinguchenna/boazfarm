<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $blog = Post::all();
         return view ('frontend.blog')->with('blog',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name','id');
        $posts = Post::all();
        return view ('backend.addblogposts')->with('category',$category)->with('posts',$posts);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


      public function sendcomment(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'website'=>'required',
            'message'=>'required',
        ]);

        $data = $request->all();
        $post = new Comment();
        $post->fill($data);

        
        $post->user_id = Auth::user()->id ?? '';
        $post->post_id = $request->post_id;
 
        $post->save();

        toastr()->success('Comment Saved Successfully');
        return back();
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required',
            'message'=>'required',
        ]);

        $data = $request->all();
        $post = new Post();
        $post->fill($data);

        
        $post->user_id = Auth::user()->id;

        $image=$request->image;
        if($image){
            $destination = 'post/';
            $imageName=$image->getClientOriginalName();
            $image->move('post', $imageName);
            $post['image']= $destination . $imageName;
        }
        $post->save();

        toastr()->success('Team Saved Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit = Post::find($id);
        return view('frontend.single')->with('edit',$edit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Post::find($id)->delete();
        toastr()->success('Blog Deleted Successfully');
        return back();
    }
}
