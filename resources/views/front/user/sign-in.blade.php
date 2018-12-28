@extends('front.master')

@section('title')
    Login
@endsection

@section('body')
    <!--Login Form-->

    <h3 class="text-danger text-center">{{ Session::get('message') }}</h3>
    <div id="login-box-2">
        <div class="left">
            <form action="{{ route('new-sign-in') }}" method="POST">
                @csrf
            <h1>Login</h1>

            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <p>If you have no account <a href="{{ route('sign-up') }}" style="color: #007bff">Sign Up</a></p>

            <input type="submit" name="lg-btn" value="Login" />
            </form>
        </div>

        <div class="right-two">

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
        </div>
        <div class="or2">OR</div>
    </div>
@endsection
