<?php

namespace App\Models\Traits;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;

trait InteractsWithUserAttributes
{
    /**
     * @return Attribute
     */
    public function password(): Attribute
    {
        return Attribute::set(fn ($value) => Hash::make($value));
    }


    /**
     * @return Attribute
     */
    public function name(): Attribute
    {
        return Attribute::get(fn() => "$this->first_name $this->last_name");
    }


    /**
     * @return Attribute
     */
    public function fullName(): Attribute
    {
        return Attribute::get(fn() => "$this->title $this->last_name $this->first_name $this->middlename");
    }


    /**
     * @return Attribute
     */
    public function genderString(): Attribute
    {
        return Attribute::get(fn() => __("user.gender.$this->gender"));
    }


    /**
     * @return Attribute
     */
    public function attendance(): Attribute
    {
        return Attribute::get(fn() => $this->isAttendingVirtually() ? 'Virtual' : 'In-Person');
    }


    /**
     * Determine if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function isFemale(): bool
    {
        return $this->gender == 'F';
    }

    public function isMale(): bool
    {
        return $this->gender == 'M';
    }


    /**
     * Determine if the user is attending the conference virtually.
     *
     * @return bool
     */
    public function isAttendingVirtually(): bool
    {
        return $this->virtual;
    }


    public function isAttendingWithAToddler(): bool
    {
        return (bool) ($this->meta->attending_with_toddler ?? null);
    }


    public function isOver70Years(): bool
    {
        return (bool) ($this->meta->over_70 ?? null);
    }


    public function isEnforcedForEarlyBird(): bool
    {
        return (bool) ($this->meta->enforced_for_early_bird ?? null);
    }


    /**
     * Get the users age at the bar.
     *
     * @return int|null
     */
    public function barAge()
    {
        return now()->setYear($this->enrol?->year_of_call)->age + 1;
    }


    /**
     * Assign a reg_number to the user.
     *
     * @return void
     */
    public function assignRegNumber()
    {
        if ($this->branch && !$this->reg_number) {

            $this->reg_number = User::generateRegNumber($this->branch);

            $this->save();
        }
    }


    /**
     * Generate the next sequential reg_number for the given branch.
     *
     * @param Branch $branch
     * @return string
     */
    public static function generateRegNumber(Branch $branch): string
    {
        #$count = User::whereBelongsTo($branch)->whereNotNull('reg_number')->count();   do not delete
        $lastRegNo  = User::whereBelongsTo($branch)->whereNotNull('reg_number')
            ->where('reg_number','like',"%{$branch->slug}%")
            ->latest('reg_number')
            ->first();
        if(!$lastRegNo)
        {
            $count = 0;
        }
        else
        {
            $count  = str($lastRegNo->reg_number)->after("{$branch->slug}-")->toInteger();
        }
        return str($count + 1)->padLeft(4, '0')->prepend("{$branch->slug}-");
    }

}
