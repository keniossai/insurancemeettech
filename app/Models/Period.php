<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'expires_at' => 'datetime',
        'virtual'    => 'boolean'
    ];


    /**
     * @return Attribute
     */
    public function attendance(): Attribute
    {
        return Attribute::get(fn() => $this->virtual ? 'Virtual' : 'In-Person');
    }


    /**
     * @param Builder $builder
     * @param $now
     * @return void
     */
    public function scopeAvailable(Builder $builder, $now = null)
    {
        $builder->where('expires_at', '>=', $now ?? now());
    }
}
