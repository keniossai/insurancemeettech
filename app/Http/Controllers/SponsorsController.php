<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('sponsor.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);

//        Upload Image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('sponsor'),$imageName);
//        dd($imageName);
        $sponsor = new Sponsor;
        $sponsor->image = $imageName;

        $sponsor->save();

        return Response::api(['message' => 'Sponsor added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsors)
    {
        //
    }
}
