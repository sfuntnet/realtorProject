<?php

namespace App\Models;

use App\Observers\ApiObserver as Observer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;


    public static function boot()
    {
        parent::boot();

        parent::observe(Observer::class);
    }
}
