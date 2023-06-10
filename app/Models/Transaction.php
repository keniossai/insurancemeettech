<?php

namespace App\Models;

use App\Observers\HasObserver;
use App\Observers\ObservesWrites;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory, ObservesWrites, HasObserver;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = ['paid_at'];

    /**
     * @return $this
     */
    public function markAsPaid(): static
    {
        if (!$this->isPaid()) {
            $this->paid_at = now();
            $this->save();
        }

        return $this;
    }


    public function isPaid(): bool
    {
        return !is_null($this->paid_at);
    }


    /**
     * Get the users that are notifiable for this transaction.
     *
     * @return \Illuminate\Support\Collection
     */
    public function notifiables()
    {
        return $this->payments()->with('user.branch')->get()->pluck('user');
    }


    /**
     * @param Builder $builder
     * @return Builder
     */
    public function scopePaid(Builder $builder)
    {
        return $builder->whereNotNull('paid_at');
    }


    /**
     * @param Builder $builder
     * @return Builder
     */
    public function scopePending(Builder $builder)
    {
        return $builder->whereNull('paid_at');
    }


    /**
     * @return HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class)->with('user');
    }


    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
