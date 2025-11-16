<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glassmorphism Login Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

        <div class="form-check">
            <input type="checkbox" id="remember" name="remember" class="form-check-input">
            <label for="remember" class="form-check-label">Remember Me</label>
        </div>


        <button type="submit">Log In</button>

        <div class="social">
            <div class="go"><i class="fab fa-google"></i>  Google</div>
            <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
        <p class="signin">Ще немаєте акаунту ? <a href="{{route('registration')}}" style="text-decoration:none;">Reg In</a> </p>

    </form>
</body>

<style>

.social {
    margin-top: 5px;
    display: flex;
}
.form-check input{
        margin-right: 10px
}
.social div {
    background: rgb(0, 0, 0);
    width: 200px;
    height: 35px;
    border-radius: 3px;
    padding: 5px 10px 10px 5px;
    background-color: rgba(0, 0, 0, );
    color: #eaf0fb;
    text-align: center;
    cursor: pointer;
    transition: transform 0.3s;
}
.social div:hover {
    transform: scale(1.07);
    background: rgb(143, 143, 143);
}
.social .fb {
    margin-left: 5px;
}
.social i {
    margin-right: 4px;
}

.red {
    color: red;
}

.login {
    position: absolute;
    top: 20px;
    right: 30px;
    z-index: 1000;
}
</style>
</html>
