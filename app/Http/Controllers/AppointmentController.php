<?php

namespace App\Http\Controllers;

use App\Http\Services\AppointmentService;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    private $appointment;

    public function __construct(AppointmentService $appointment)
    {
        $this->appointment = $appointment;
    }

    public function index(Request $request)
    {
        return $this->appointment->index($request);
    }

    public function userIndex(Request $request)
    {
        return $this->appointment->userIndex($request);
    }

    public function create()
    {
        return view('admin.addAppointment');
    }

    public function store(Request $request)
    {
        return $this->appointment->store($request);
    }

    public function edit($id)
    {
        return $this->appointment->edit($id);
    }

    public function update(Request $request, $id)
    {
        return $this->appointment->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->appointment->destroy($id);
    }
}
