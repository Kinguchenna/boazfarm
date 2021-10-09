<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Team;

use Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::orderByRaw('id DESC')->limit(1)->first();
         return view ('frontend.about')->with('about',$about);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $about = About::all();
        $team = Team::all();
        return view ('backend.addabout')->with('about',$about)->with('team',$team);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required',
            'message'=>'required',
        ]);

        $data = $request->all();
        $post = new About();
        $post->fill($data);

        
        $post->user_id = Auth::user()->id;

        $image=$request->image;
        if($image){
            $destination = 'about/';
            $imageName=$image->getClientOriginalName();
            $image->move('about', $imageName);
            $post['image']= $destination . $imageName;
        }
        $post->save();

        toastr()->success('About Saved Successfully');
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
        //
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
        $about = About::find($id);
        $about->delete();
         toastr()->success('About Deleted Successfully');
        return back();
    }
}
