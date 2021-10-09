<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Link;
use App\Models\Map;
use Auth;

use Mail;
use App\Mail\SendContactMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $map = Map::orderByRaw('id DESC')->limit(1)->first();
          $link = Link::orderByRaw('id DESC')->limit(1)->first();
         return view ('frontend.contact')->with('map',$map)->with('link',$link);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $link = Link::all();
        $map = Map::all();
        return view ('backend.addcontact')->with('link',$link)->with('map',$map);
    }

     public function allmessages()
    {
        $contact = Contact::all(); 
        return view ('backend.allmessages')->with('contact',$contact);
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
            'google'=>'required',
            'facebook'=>'required',
            'youtube'=>'required',
            'twitter'=>'required',
        ]);

        $data = $request->all();
        $post = new Link();
        $post->fill($data);

        
        $post->user_id = Auth::user()->id;

        
        $post->save();

        toastr()->success('Link Saved Successfully');
        return back();
    }

     public function addgooglemap(Request $request)
    {


        // return 1;

        $this->validate($request,[
            'map'=>'required', 
        ]);

        $data = $request->all();
        $post = new Map();
        $post->fill($data);

        
        $post->user_id = Auth::user()->id;

        
        $post->save();

        toastr()->success('Map Saved Successfully');
        return back();
    }


    public function sendcontacttoadmin(Request $request)
    {


        // return 1;

        $this->validate($request,[
            'name'=>'required', 
            'email'=>'required', 
            'subject'=>'required', 
            'message'=>'required', 
        ]);

        $data = $request->all();
        $post = new Contact();
        $post->fill($data);

        
        $post->user_id = Auth::user()->id ?? '';

        
        $post->save();

                $send_mail = ['admin@boazcity.com'];

                                
                                 $usermail = $request['email'];
                                 $username = $request['name'];
                                 $subject = $request['subject']; 
                                 $message = $request['message']; 
                               
                               


                   Mail::to($send_mail)
                                    ->send(new SendContactMail ($usermail,$username,$subject,$message));

        toastr()->success('Mail sent Successfully');
        return back();
    }




    


    

       public function deletetmap($id)
    {
        $delete = Map::find($id);
        $delete->delete();
         toastr()->success('Map Deleted Successfully');
        return back(); 

    }


        public function deladdcontact($id)
    {
        $delete = Contact::find($id);
        $delete->delete();
         toastr()->success('Contact Deleted Successfully');
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
        $delete = Link::find($id);
        $delete->delete();
         toastr()->success('Link Saved Successfully');
        return back();

    }
}
