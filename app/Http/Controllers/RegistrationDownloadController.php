<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationExport;
use Illuminate\Http\Request;

class RegistrationDownloadController extends Controller
{
    public function __invoke(Request $request)
    {
        return new RegistrationExport($request);
    }
}
