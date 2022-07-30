@extends('client.layout.mastersignin')
@section('content')
<body>
    <section>
        <div class="imgBx"><img src="img/signin.png" alt=""></div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Sign In</h2>
                <form role="form" method="GET" action="">
                    @csrf
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="name">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> &nbsp;&nbsp;&nbsp;Remember Me</label>
                    </div>
                    <div class="inputBx">
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