@extends('layouts.main')

@section('title')
    karibu sana
@endsection

@section('content')
    <div class="row card card-block center-block" style="background-color: white; margin-top: 100px; padding: 30px;height: 500px">
        <div class="col-lg-3" ></div>
       <div class="col-sm-6 ">
           <h3>Welcome::</h3>
           <form action="{{ route('signin') }}"method="post">
               <div class="form-group label-floating {{ $errors->has('email')? 'has-error':'' }}">
                   <label for="email" class="control-label">Email</label>
                   <input class="form-control input field " type="text" name="email" id="email" value="{{Request::old('email')}}">
               </div>
               <div class="form-group label-floating {{ $errors->has('password')? 'has-error':'' }}">
                   <label for="Password" class="control-label">Password</label>
                   <input class="form-control input-field" type="password" name="password" id="password" value="{{Request::old('password')}}" >
               </div>
               <button href="javascript:void(0)" type="submit" class="btn btn-block btn-lg btn-raised" style="background-color: #138D75; color: white"><strong>Login</strong></button>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <a href="{{route('signup_form')}}"><h6 style="color:#4DB6AC "><strong>Not a member yet?..Sign up here</strong></h6></a>
           </form>
           @include('includes.messagebox')
       </div>

   </div>

@endsection