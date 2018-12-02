<link rel="stylesheet" href="{{asset('css/register_and_add_post_style.css')}}">

@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf
        <div class="container">
            <h1 class="mt-5">Register</h1>
                <p>Please fill in this form to create an account.</p>
            <hr>

                <label for="name"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Fullname" name="name" required>

                 <label for="username"><b>UserName</b></label>
                    <input type="text" placeholder="Enter UserName" name="username" required>

                <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                <label for="passsword"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                 <label for="password-repeat"><b>Repeat Password</b></label>
                     <input type="password" placeholder="Repeat Password" name="password-repeat" required>

                <label for="contact"><b>Contact</b></label>
                    <input type="contact" placeholder="Enter Contact No" name="contact" required>
            <hr>

                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn">Register</button>

        </div>

        <div class="container signin">
             <p>Already have an account? <a href="{{route('login')}}">Sign in</a>.</p>
        </div>
    </form>
@endsection

 @section('scripts')
<script>
    $('#search').remove();
</script>
 @endsection