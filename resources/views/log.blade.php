<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glassmorphism Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/style_log_reg.css') }}">
</head>
<body>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <h2>Login Here</h2>

        <label for="username">Email</label>
        @error('email')
            <p class="red">{{$message}}</p>
        @enderror
        <input type="text" placeholder="Email or Phone" id="email" name="email" value="{{old('email')}}">

        <label for="password">Password</label>
        @error('password')
            <p class="red">{{$message}}</p>
        @enderror
        <input type="password" placeholder="Password" id="password" name="password">

        <div class="remember-row">
            <label class="custom-checkbox">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <span class="checkmark"></span>
                <span class="custom-checkbox-text">Запам’ятати мене</span>
            </label>
        </div>


        <button type="submit">Log In</button>

        <div class="social">
            <div class="go"><i class="fab fa-google"></i><p>Google</p></div>
            <div class="fb"><i class="fab fa-facebook"></i><p>Facebook</p></div>
        </div>
        <p class="signin">Ще немаєте акаунту ? <a href="{{route('registration')}}" style="text-decoration:none;">Reg In</a> </p>

    </form>
</body>
</html>
