<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Enrol extends Model
{
    use HasFactory;


    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['text'];


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'scn';
    }


    /**
     * @param Builder $builder
     * @param Request $request
     */
    public function scopeSearch(Builder $builder, string $keyword)
    {
        $keyword = Str::of("$keyword*")->squish()->remove('-')
            ->before('@')->replace(' ', '* ');

        $builder->whereFullText(['scn', 'name', 'email', 'phone'], $keyword, ['mode' => 'boolean']);
    }


    public function text(): Attribute
    {
        return Attribute::get(fn () => "$this->name - $this->scn ($this->year_of_call)");
    }


    /**
     * @return HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
