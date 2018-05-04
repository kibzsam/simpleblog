@extends('layouts.main')

@section('title')
   sign in
@endsection
@section('content')
    <div class="card card-block" style="background-color: white; margin-top: 100px; padding: 30px; border-color: #4DB6AC">
        @include('includes.messagebox')
        <div class="col-sm-4 ">
            <h3>Sign up</h3>
            <form action="{{ route('signup') }}"method="post">
                <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">

                    <input class="form-control input-lg" type="text" name="email" id="email" value="{{Request::old('email')}}" placeholder="Email">
                </div>
                <div class="form-group {{ $errors->has('first_name')? 'has-error':'' }}">

                    <input class="form-control input-lg" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}" placeholder="First Name">
                </div>
                <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">

                    <input class="form-control input-lg" type="password" name="password" id="password" value="{{Request::old('password')}}" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default btn-lg btn-block" style="background-color: #138D75; color: white">Sign Up</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>

    @endsection