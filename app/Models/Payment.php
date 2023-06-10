<?php

namespace App\Models;

use App\Observers\ObservesWrites;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory, ObservesWrites;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = [];


    public function scopePaid(Builder $builder)
    {
        return $builder->whereHas('transaction', fn ($query) => $query->paid());
    }


    public function scopePending(Builder $builder)
    {
        return $builder->whereHas('transaction', fn ($query) => $query->pending());
    }


    /**
     * @return BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }


    /**
     * @return BelongsTo
     */
    public function fee()
    {
        return $this->belongsTo(Fee::class);
    }


    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
