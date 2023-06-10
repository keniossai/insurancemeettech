<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait ObservesWrites
{

    public static function bootObservesWrites()
    {
        static::creating(function(Model $model) {

            $model->created_by = Auth::id();
        });

        static::updating(function(Model $model) {

            $model->updated_by = Auth::id();
        });

        static::deleting(function(Model $model) {

            $model->updated_by = Auth::id();
            $model->save();
        });
    }
}
