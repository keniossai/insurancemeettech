<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function index()
    {
        // $data=Speaker::all();
        return view('admin.speaker.index');
    }

    public function create()
    {
        return view('admin.speaker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'designation'=>'required',
            'organization'=>'required',
            'photo'=>'required|file',
        ]);

        // Post Thumbnail
        if($request->hasFile('photo')){
            $image1=$request->file('photo');
            $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
            $dest1=public_path('/imgs/thumb');
            $image1->move($dest1,$reThumbImage);
        }else{
            $reThumbImage='na';
        }

        // Post Full Image
        if($request->hasFile('post_image')){
            $image2=$request->file('post_image');
            $reFullImage=time().'.'.$image2->getClientOriginalExtension();
            $dest2=public_path('/imgs/full');
            $image2->move($dest2,$reFullImage);
        }else{
            $reFullImage='na';
        }

        $speakers=new Speaker;
        $speakers->user_id=0;
        $speakers->title=$request->category;
        $speakers->first_name=$request->first_name;
        $speakers->middle_name=$request->middle_name;
        $speakers->last_name=$request->last_name;
        $speakers->thumb=$reThumbImage;
        $speakers->full_img=$reFullImage;
        $speakers->detail=$request->detail;
        $speakers->tags=$request->tags;
        $speakers->save();

        return redirect('admin/post/create')->with('success','Data has been added');
    }
}
