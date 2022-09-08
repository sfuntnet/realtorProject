<?php

namespace App\Observers;

use App\Events\AppointmentCreatedEvent as Event;
use App\Models\Appointment as Model;


class AppointmentObserver
{
    public function created(Model $model)
    {
        event(new Event($model));
    }
}
