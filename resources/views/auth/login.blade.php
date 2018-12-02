<link rel="stylesheet" href="{{asset('css/login_style.css')}}">
@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('login') }}" >
 @csrf
    <div class="container mt-5">
      <label for="username"><b>Username</b></label>
        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{old('username') }}"  autofocus>

                @if ($errors->has('username'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif
 
      <label for="password"><b>Password</b></label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

        <button type="submit"><!-- <a href="{{route('home')}}"> -->Login<!-- </a> --></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1" >
        <button type="button" class="cancelbtn"><a href="/">Cancel</a></button>
        <span class="psw">Forgot <a href="{{ route('password.request') }}">password?</a></span>
    </div>
</form>
@endsection


 @section('scripts')
<script>
  $('#search').remove();  
</script>
 @endsection