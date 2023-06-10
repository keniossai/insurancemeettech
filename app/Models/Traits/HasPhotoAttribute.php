<?php

namespace App\Models\Traits;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasPhotoAttribute
{
//    public function photo(): Attribute
//    {
//        return Attribute::get(fn($value) => $this->getPhoto($value));
//    }

    public function photo(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                $value ??  config("cloudinary.defaults.photos")."{$this->gender_string}";

                return cloudinary_url($value, config('cloudinary.transformations.photos'));
            },
            set: fn ($value) => $this->setMediaAttribute($value, 'cloudinary.folders.photos')
        )->withoutObjectCaching();
    }

    /**
     * @param $value
     * @param string $folder
     * @return mixed
     */
    public function setMediaAttribute($value, string $folder): mixed
    {
        if (str($value)->startsWith(['/', 'http'])) {
            return Cloudinary::upload((string) $value, ['folder' => config($folder)])->getFileName();
        }

        return $value;
    }


    /**
     * Get the full url src to the user's photo
     *
     * @param $public_id
     * @return string
     */
    public function getPhoto($public_id)
    {
        return cloudinary_url($public_id ?: $this->getDefaultPhoto(), [
            "gravity" => "face", "height" => 220, "width" => 220, "crop" => "fill"
        ]);
    }


    /**
     * Get a default photo avatar for the user, considering their gender.
     *
     * @return string
     */
    public function getDefaultPhoto()
    {
        return self::CLOUDINARY_FOLDER.'defaults/'.($this->gender_string);
    }
}
