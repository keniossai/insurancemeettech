<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Imports\SponsoredDelegateImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Response;

class UploadSponsoredDelegateController extends Controller
{

    public function store(Request $request)
    {
        Excel::import(new SponsoredDelegateImport, $request->enrols);

        return Response::api('Uploaded successfully.');
    }


}
