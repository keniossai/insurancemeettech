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
            'category'=>'required',
            'detail'=>'required',
        ]);

        // Post Thumbnail
        if($request->hasFile('post_thumb')){
            $image1=$request->file('post_thumb');
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

        $speaker=new Speaker;
        $speaker->user_id=0;
        $speaker->cat_id=$request->category;
        $speaker->title=$request->title;
        $speaker->thumb=$reThumbImage;
        $speaker->full_img=$reFullImage;
        $speaker->detail=$request->detail;
        $speaker->tags=$request->tags;
        $speaker->save();

        return redirect('admin/post/create')->with('success','Data has been added');
    }
}
