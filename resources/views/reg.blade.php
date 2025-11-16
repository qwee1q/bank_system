<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="{{ asset('css/style_log_reg.css') }}">
</head>
<body>
    <form action="{{route('registration')}}" method="POST">
        @csrf
        <h2>Реєстрація</h2>

        <label>Ім'я та прізвище</label>
        @error('name')
            <p class="red">{{$message}}</p>
        @enderror
        <input type="text" name="name" placeholder="Введіть ваше ім'я та прізвище" id="name" value="{{old('name')}}">

        <label>Email</label>
        @error('email')
            <p class="red">{{$message}}</p>
        @enderror
        <input type="email" name="email" placeholder="Введіть ваш email" id="email" value="{{old('email')}}">

        <label>Пароль</label>
        @error('password')
            <p class="red">{{$message}}</p>
        @enderror
        <input type="password" name="password" placeholder="Введіть ваш пароль (мінімум 8 символів)" id="password">

        <label>Підтвердження паролю</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Підтвердіть ваш пароль">

        <button type="submit">Зареєструватися</button>
        <p class="regnin">Вже маєте акаунт ? <a href="{{route('login')}}" class="btn btn-outline-light">Log In</a> </p>
    </form>

</body>
</html>
