<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Enrol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EnrolController extends Controller
{
    public function index(Request $request)
    {
        return Response::api([
            'message' => 'Enrols Retrieved',
            'data'    => Enrol::search($request->q)->take(30)->get()
        ]);
    }


    /**
     * Store a newly created enrollment in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate(['scn' => 'required|unique:enrols']);

        Enrol::create($request->all());

        return Response::api('Created successfully.');
    }
}
