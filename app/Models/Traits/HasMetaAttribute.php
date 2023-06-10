<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasMetaAttribute
{

    public function initializeHasMetaAttribute()
    {
        $this->casts['meta'] = 'object';
    }


    public function meta(): Attribute
    {
        return Attribute::set(fn($value) => collect($this->meta)->merge($value));
    }
}
