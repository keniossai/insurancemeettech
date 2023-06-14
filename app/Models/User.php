<?php

namespace App\Models;

use App\Jobs\SendEmailVerificationJob;
use App\Models\Traits\HasMetaAttribute;
use App\Models\Traits\InteractsWithUserAttributes;
use App\Models\Traits\HasPhotoAttribute;
use App\Notifications\VerifyEmailQueued;
use App\Observers\HasObserver;
use App\Observers\ObservesWrites;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithUserAttributes, HasObserver,
        HasPhotoAttribute, ObservesWrites, HasMetaAttribute;

    /**
     * Gender Constants
     */
    const MALE   = 'M';
    const FEMALE = 'F';

    /**
     * Cloudinary
     */
    const CLOUDINARY_FOLDER = 'imt/user/';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var string[]|bool
     */
    protected $guarded = ['reg_number'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'registered_at'     => 'datetime',
        'last_login'        => 'datetime',
        'virtual'           => 'boolean'
    ];


    public function scopeThisYear(Builder $builder)
    {
        $builder->withPaymentsCount()->whereNotNull('registered_at')->latest('registered_at');
    }


    public function scopeWithPaymentsCount(Builder $builder)
    {
        $builder->with(['enrol', 'branch'])
            ->withCount(['payments' => function ($query) {
                $query->whereHas('transaction', fn ($query) => $query->paid());
            }]);
    }


    /**
     * @param Builder $builder
     * @param Request $request
     */
    public function scopeSearch(Builder $builder, string $keyword)
    {
        $keyword = Str::of("$keyword*")->squish()->remove('-')
            ->before('@')->replace(' ', '* ');

        $builder->whereFullText(
            ['first_name', 'last_name', 'middle_name', 'email', 'phone'],
            $keyword, ['mode' => 'boolean']
        )->orWhereHas('enrol',
            fn ($query) => $query->search($keyword->remove('*'))
        )->withPaymentsCount();
    }


    public function fee(): Attribute
    {
        return Attribute::get(fn () => Fee::forUser($this)->first())->shouldCache();
    }


    /**
     * @return BelongsTo
     */
    public function enrol()
    {
        return $this->belongsTo(Enrol::class);
    }


    /**
     * @return BelongsTo
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }


    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * @return HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

//    /**
//     * Send the queued email verification notification.
//     *
//     * @param  string  $token
//     * @return void
//     */
//

//    public function sendEmailVerificationNotification()
//    {
//        //dispactches the job to the queue passing it this User object
//        SendEmailVerificationJob::dispatch($this);
//    }
}
