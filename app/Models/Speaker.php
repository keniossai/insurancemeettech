<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

//    const MALE   = 'M';
//    const FEMALE = 'F';

//    const MALE   = 'M';
//    const FEMALE = 'F';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [];


//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }


//    function photo()
//    {
//        return cloudinary_url($this->photo, [
//            "gravity" => "face", "height" => 400, "width" => 400, "crop" => "fill"
//        ]);
//    }

}
