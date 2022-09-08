<?php

namespace App\Http\Services;

use App\Models\Appointment;

class AppointmentService
{
    private $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function index($request)
    {
        return $this->appointment->index($request);
    }

    public function userIndex($request)
    {
        return $this->appointment->userIndex($request);
    }

    public function store($request)
    {
        return $this->appointment->store($request);
    }

    public function edit($id)
    {
        return $this->appointment->edit($id);
    }

    public function update($request, $id)
    {
        return $this->appointment->updateAppointment($request, $id);
    }

    public function destroy($id)
    {
        return $this->appointment->destroyAppointment($id);
    }
}
