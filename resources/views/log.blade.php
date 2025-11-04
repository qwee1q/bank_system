<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glassmorphism Login Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <ul class="nav justify-content-end gap-3 login">
        <li class="nav-item">
            <a href="{{route('registration')}}" class="btn btn-outline-success">Registration</a>
        </li>
    </ul>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <h3>Login Here</h3>

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

        <button type="submit">Log In</button>

        <div class="social">
            <div class="go"><i class="fab fa-google"></i>  Google</div>
            <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</body>

<style>
*,
*:before,
*:after {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    background: #080710;
}
form {
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form * {
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3 {
    font-size: 32px;
    font-weight: 1500;
    line-height: 42px;
    text-align: center;
}
label {
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 600;
}
input {
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(27, 2, 2, 0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
}
::placeholder {
    color: #e5e5e5;
}
button {
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.5s, color 0.5s, transform 0.6s;
}
button:hover {
    background: black;
    color: #ffffff;
    transform: scale(1.05);
}
.social {
    margin-top: 30px;
    display: flex;
}
.social div {
    background: red;
    width: 150px;
    border-radius: 3px;
    padding: 5px 10px 10px 5px;
    background-color: rgba(255,255,255,0.27);
    color: #eaf0fb;
    text-align: center;
    cursor: pointer;
    transition: transform 0.3s;
}
.social div:hover {
    transform: scale(1.07);
}
.social .fb {
    margin-left: 25px;
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
