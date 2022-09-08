<?php

namespace App\Observers;

use App\Events\ApiCreatedEvent as Event;
use App\Models\Api as Model;

class ApiObserver
{
    public function created(Model $model)
    {
        event(new Event($model));
    }
}
