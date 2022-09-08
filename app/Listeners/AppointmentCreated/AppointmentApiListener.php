<?php

namespace App\Listeners\AppointmentCreated;

use App\Events\AppointmentCreatedEvent as Event;
use App\Models\Api;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AppointmentApiListener
{
    public function handle(Event $event)
    {
        $model = new Api();
        $model->api_url = "https://api.distancematrix.ai/maps/api/distancematrix/json?origins=Westminster Abbey, London SW1P 3PA, UK&destinations=" . $event->model->appointment_adress . "&departure_time=now&key=ud7XVaYRvIrvIwqvNAQDW5GMGmICS";
        $model->appointment_id = $event->model->id;
        $model->save();
    }
}
