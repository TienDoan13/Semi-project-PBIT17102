@extends('client.layout.mastersignin')
@section('content')
<body>
    <section>
        <div class="imgBx"><img src="img/signin.png" alt=""></div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Sign In</h2>
                @if ($message=Session::get('success'))
                <div class="alert alert-success">
                  <h6>{{ $message }}</h6>
                </div>
                @endif          
                <form role="form" method="POST" action="">
                    @csrf
                    <div class="inputBx form-group">
                        <span>Email</span>
                        <input type="text" name="email">
                    </div>
                    @if ($errors->has('email'))
                    <h6>{{ $errors->first('email') }}</h6>
                    @endif
                    <div class="inputBx form-group">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    @if ($errors->has('password'))
                    <h6>{{ $errors->first('password') }}</h6>
                    @endif
                    <div class="remember form-group">
                        <label><input type="checkbox" name="remember"> &nbsp;&nbsp;&nbsp;Remember Me</label>
                    </div>
                    <div class="inputBx form-group">
                        <input type="submit" value="Sign In">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account yet?<a href="{{ route('client.page.signup') }}"> Sign Up</a></p>
                    </div>
                </form>
                <h3>Sign In with Social Media</h3>
                <ul class="sci">
                    <li><img src="img/fbicon.png" alt=""></li>
                    <li><img src="img/ggicon.png" alt=""></li>
                    <li><img src="img/instaicon.png" alt=""></li>
                </ul>
            </div>
        </div>
    </section>
</body>
@endsection