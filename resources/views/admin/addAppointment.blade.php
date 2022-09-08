@extends('admin.layouts.app')

@section('body')
    <br/>
    <div class="container">
        <form id="Form">
            <div class="form-group">
                <label for="exampleFormControlInput1">Customer Name</label>
                <input type="email" name="customer_name" class="form-control" id="exampleFormControlInput1"
                       placeholder="Customer Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Customer Surname</label>
                <input type="email" name="customer_surname" class="form-control" id="exampleFormControlInput1"
                       placeholder="Customer Surname">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Customer Email</label>
                <input type="email" name="customer_email" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Customer Adress</label>
                <textarea class="form-control" name="customer_adress" id="exampleFormControlTextarea1"
                          rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Customer PhoneNumber</label>
                <input type="number" name="customer_phoneNumber" class="form-control" id="exampleFormControlInput1"
                       placeholder="55555555555">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Appointment Adress</label>
                <textarea class="form-control" name="appointment_adress" id="exampleFormControlTextarea1"
                          rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Appointment Date</label>
                <input type="date" name="appointment_date" class="form-control" id="exampleFormControlInput1"
                       placeholder="Appointment Date">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Real estate agent</label>
                <select name="user_id" class="form-control" id="select">

                </select>
            </div>
        </form>
        <button class="btn btn-success" id="onSave">Add Appointment</button>
    </div>
@endsection
@section('script')
    <script  type="text/javascript" src="{{asset('/js/addAppointment.js')}}">  </script>
@endsection
