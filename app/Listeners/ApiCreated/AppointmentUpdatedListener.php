<?php

namespace App\Listeners\ApiCreated;

use App\Events\ApiCreatedEvent as Event;
use App\Models\Appointment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AppointmentUpdatedListener
{
    public function handle(Event $event)
    {
        $model = Appointment::findOrFail($event->model->appointment_id);
        $model->api_id = $event->model->id;
        $model->update();
    }
}
