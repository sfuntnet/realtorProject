@extends('profile.layouts.app')

@section('body')
    <div class="container">
        <br/>
        <table class="table table-bordered user_datatable">
            <thead>
            <tr>
                <th>Customer Name</th>
                <th>Customer Surname</th>
                <th>Customer PhoneNumber</th>
                <th>Appointment Adress</th>
                <th>Appointment Date</th>
                <th>Appointment Status</th>
                <th>Realtor</th>
                <th>ETA</th>
                <th>Detail</th>
            </tr>
            </thead>
            <tbody >
            </tbody>
        </table>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="Form">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Customer Name</label>
                                <input type="email" name="customer_name" class="form-control"
                                       id="customer_name"
                                       placeholder="Customer Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Customer Surname</label>
                                <input type="email" name="customer_surname" class="form-control"
                                       id="customer_surname"
                                       placeholder="Customer Surname">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Customer Email</label>
                                <input type="email" name="customer_email" class="form-control"
                                       id="customer_email"
                                       placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Customer Adress</label>
                                <input type="text" name="customer_adress" class="form-control"
                                       id="customer_adress"
                                       placeholder="Customer Adress">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Customer PhoneNumber</label>
                                <input type="number" name="customer_phoneNumber" class="form-control"
                                       id="customer_phoneNumber"
                                       placeholder="55555555555">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Appointment Adress</label>
                                <input type="text" name="appointment_adress" class="form-control"
                                       id="appointment_adress"
                                       placeholder="Appointment Adress">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Appointment Date</label>
                                <input type="date" name="appointment_date" class="form-control"
                                       id="appointment_date"
                                       placeholder="Appointment Date">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Real estate agent</label>
                                <select name="user_id" class="form-control" id="select" disabled>

                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="closeUpdateModal" type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button id="onUpdate" type="button" class="btn btn-primary">Go To Address</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script  type="text/javascript" src="{{asset('/js/profile.js')}}">  </script>
@endsection
