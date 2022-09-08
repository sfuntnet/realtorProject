@extends('layouts.app')

@section('body')
    <br/>
    <div class="container">
        <h2 class="text-center">Realtor Login</h2>
        <form id="FormLogin">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <label for="exampleCheck1"><a href="{{route('userRegister')}}">Create Account</a></label>
            </div>
        </form>
        <button type="submit" id="onSubmit" class="btn btn-primary">Submit</button>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('/js/user.js')}}"></script>
@endsection
