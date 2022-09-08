@extends('layouts.app')

@section('body')
    <br/>

    <div class="container">
        <h2 class="text-center">Realtor Register</h2>
        <div class="success"></div>
        <div class="error"></div>
        <form id="FormRegister">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="username" name="name" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            </div>
        </form>
        <button id="saveButton" class="btn btn-primary">Submit</button>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('/js/user.js')}}"></script>
@endsection
