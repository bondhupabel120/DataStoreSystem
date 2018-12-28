@extends('front.master')

@section('title')
    Registration
@endsection

@section('body')
    <!--Registation Form-->

    <div id="login-box" class="col-md-12 col-md-6">
            <div class="left">
                <form action="{{ route('new-sign-up') }}" method="POST">
                    @csrf
                <h1>Sign up</h1>

                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="email" placeholder="E-mail"  onblur="emailCheck(this.value);"/>
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="password2" placeholder="Retype password" />
                <p>If you have a account <a href="{{ route('sign-in') }}" style="color: #007bff">login</a></p>

                <input type="submit" name="reg-btn" value="Registration" />
                </form>
            </div>

        <div class="right">
            <span class="login-with" style="color: #343a40">Sign in with<br />social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
        </div>
        <div class="or">OR</div>
    </div>

    <script>
        function emailCheck(email) {
            $.ajax({
                url : 'http://localhost/data-store/public/email-check/'+email,
                method : 'GET',
                data : {email:email},
                dataType : 'JSON',
                success : function(data){
                    document.getElementById('res').innerHTML = data;
                    if  (xmlHttp.responseText == '<span class="text-danger">Email address already exist</span>'){
                        document.getElementById('resBtn').disabled = true;
                    }   else {
                        document.getElementById('resBtn').disabled = false;
                    }
                }
            });
        }
    </script>
@endsection
