<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserPhotoController extends Controller
{
    public function update(Request $request, User $user)
    {
        $user->photo = $request->photo->storeOnCloudinary(User::CLOUDINARY_FOLDER)->getFileName();
        $user->save();

        return Response::api('Uploaded successfully');
    }
}
