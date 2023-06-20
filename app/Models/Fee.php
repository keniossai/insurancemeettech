<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fee extends Model
{
    use HasFactory;

    // public function name(): Attribute
    // {
    //     if ($this->category) {

    //         $name = $this->category->name;

    //     } else {
    //         $name = ($this->min_age > 20)
    //             ? "Above 20 Years"
    //             : "{$this->min_age} to {$this->max_age} Years";
    //     }

    //     return Attribute::get(fn () => $name);
    // }

    // public function amountPayable(): Attribute
    // {
    //     $scn = user()->enrol->scn ?? Null;

    //     if (Discount::query()->whereScn($scn)->first())
    //     {
    //         $amount = ($this->period->id == 1)
    //             ?  ($this->amount / 2)
    //             : $this->amount;
    //     }
    //     else
    //     {
    //         $amount = $this->amount;
    //     }

    //     return Attribute::get(fn () => $amount);
    // }
    public function amountPayable(): Attribute
    {

            $amount = $this->amount;

        return Attribute::get(fn () => $amount);
    }


    // public function attendance(): Attribute
    // {
    //     return Attribute::get(fn () => $this->period->attendance);
    // }


    /**
     * Determine if the fee that expired.
     *
     * @return bool
     */
    // public function hasExpired(): bool
    // {
    //     if (user()->isEnforcedForEarlyBird()) {
    //         return false;
    //     }

    //     return $this->period->expires_at->isPast();
    // }


    public function scopeForUser(Builder $builder, User $user)
    {
        $now = user()->isEnforcedForEarlyBird() || $user->isEnforcedForEarlyBird() ? now()->subMonth() : now();

        $builder->where(function (Builder $builder) use ($user) {

            $builder->whereBelongsTo($user->category)
                ->orWhereRaw("(? BETWEEN min_age AND max_age)", [$user->barAge()]);

        })->whereHas('period',
            fn ($query) => $query->available($now)->whereVirtual($user->virtual)
        )->oldest('period_id')->latest('category_id');
    }


    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * @return BelongsTo
     */
    public function period()
    {
        return $this->belongsTo(Period::class);
    }


    /**
     * @return HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
