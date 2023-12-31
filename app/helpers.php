<?php

use App\Models\User;
use Cloudinary\Configuration\Configuration;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Cloudinary\Asset\Image;

/**
 * @param null $key
 * @return Authenticatable|User|null
 */
function user($key = null)
{
    $user = Auth::user();

    return $key ? $user?->{$key} : $user;
}


/**
 * @param $value
 * @param array $transformation
 * @param bool $bg_auto
 * @return string
 */
function cloudinary_url($value, $transformation = [], $bg_auto = false)
{
    if (!is_array($transformation)) {
        $transformation = ['width' => $transformation];
    }

    if ($bg_auto) {
        $transformation = array_merge($transformation, [
            "crop"       => "pad",
            "background" => "auto"
        ]);
    }

    Configuration::instance(config('cloudinary.cloud_url'));

    return (string) Image::fromParams($value, ["transformation" => [$transformation]]);
}



/**
 * Generates a QR Code image src
 * @param $data
 * @param int $size
 * @return string
 */
function qr($data, $size = 120): string
{
    return "https://chart.googleapis.com/chart?cht=qr&chl={$data}&chs={$size}x{$size}&choe=UTF-8&chld=L|0";
}
