<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Imports\ReconciliationImport;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

class ReconciliationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'datasheet' => 'required'
        ]);
        Excel::import(new ReconciliationImport, $request->datasheet);

        return Response::api('Uploaded successfully.');
    }
}
