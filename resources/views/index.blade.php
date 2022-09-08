@extends('layouts.app')

@section('body')
    <br/>
    <div class="container">
        <form id="Form">
            <h2 class="text-center">Admin Login</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
        </form>
        <button type="submit" id="onSubmit" class="btn btn-primary">Submit</button>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('/js/adminLogin.js')}}"></script>
@endsection
