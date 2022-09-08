<?php

namespace App\Models;

use App\Observers\AppointmentObserver as Observer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;


class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_adress',
        'appointment_date',
        'customer_name',
        'customer_surname',
        'customer_email',
        'customer_adress',
        'customer_phoneNumber',
        'appointment_status',
        'eta',
        'user_id',
        'api_id'
    ];

    public function index($request)
    {
        if ($request->ajax()) {
            $data = Appointment::with('user')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button id="edit" data-id=' . $row->id . ' class="btn btn-success " data-toggle="modal" data-target="#exampleModal">Edit</button><button id="delete" data-id=' . $row->id . ' class="btn btn-danger">Delete</button>';
                    return $btn;
                })
                ->make(true);
        }
    }

    public function userIndex($request)
    {
        if ($request->ajax()) {
            $data = Appointment::with('user')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button id="detail" data-id=' . $row->id . ' class="btn btn-success " data-toggle="modal" data-target="#exampleModal">Detail</button>';
                    return $btn;
                })
                ->make(true);
        }
    }

    public function store($request)
    {
        $model = new Appointment();
        $model->fill($request->toArray());
        $model->save();

        return response()->json($model);
    }

    public function edit($id)
    {
        $model = Appointment::with('user', 'api')->findOrFail($id);
        return response()->json($model);
    }

    public function updateAppointment($request, $id)
    {
        $model = Appointment::findOrFail($id);
        $model->fill($request->toArray());
        $model->update();

        return response()->json($model);
    }

    public function destroyAppointment($id)
    {
        $model = Appointment::findOrFail($id);
        $model->delete();

        return response()->json($model);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function api()
    {
        return $this->belongsTo(Api::class);
    }


    public static function boot()
    {
        parent::boot();

        parent::observe(Observer::class);
    }
}
