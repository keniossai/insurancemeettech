<?php

namespace App\Http\Controllers;


use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
//        dd($request->all());
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'organization'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);

//        Upload Image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('speaker'),$imageName);
//        dd($imageName);
        $speaker = new Speaker;
        $speaker->image = $imageName;
        $speaker->title = $request->title;
        $speaker->name = $request->name;
        $speaker->slug = $request->slug;
        $speaker->gender = $request->gender;
        $speaker->organization = $request->organization;
        $speaker->bio = $request->bio;

        $speaker->save();

        return Response::api(['message' => 'Speaker created successfully']);
    }

    public function show($id)
    {
//        dd($id);
        $speaker = Speaker::where('id', $id)->first();
        return view('admin.speaker.edit', ['speaker' => $speaker]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'organization'=>'required',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:10000'
        ]);

        $speaker = Speaker::where('id', $id)->first();

        if(isset($request->image)){
//            Image Upload
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('speaker'),$imageName);
            $speaker->image = $imageName;
        }

//        $speaker->title = $request->title;
        $speaker->name = $request->name;
        $speaker->slug = $request->slug;
        $speaker->gender = $request->gender;
        $speaker->organization = $request->organization;
        $speaker->bio = $request->bio;

        $speaker->save();

        return Response::api(['message' => 'Speaker updated successfully']);
    }

    public function destroy($id)
    {
        $speaker = Speaker::where('id', $id)->first();
        $speaker->delete();
        return Response::api(['message' => 'Speaker deleted successfully']);
    }




}
