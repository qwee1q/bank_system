<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <style>
        body{
            background: linear-gradient(135deg, #232526, #414345);
            font-family: Arial, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
            width: 320px;
            background: rgba(255,255,255,0.1);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        h2{
            text-align: center;
            margin-bottom: 20px;
        }
        label{
            display: block;
            margin-top: 18px;
            font-size: 14px;
            font-weight: 600;
        }
        input, .role-select{
            display: block;
            height: 44px;
            width: 100%;
            background-color: rgba(27, 2, 2, 0.07);
            border: none;
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 10;
            color: white;
        }
        ::placeholder{
            color: #e5e5e5;
        }
        button{
            margin-top: 24px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 12px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.5s, color 0.5s, transform 0.6s;
        }
        button:hover {
            background: black;
            color: #ffffff;
            transform: scale(1.03);
        }
    </style>
</head>
<body>

    <form action="{{route('registration')}}" method="POST">
        @csrf
        <h2>Реєстрація</h2>

        <label>Ім'я</label>
        <input type="text" name="name" placeholder="Введіть ім'я" id="name">

        <label>Email</label>
        <input type="email" name="email" placeholder="Введіть email" id="email">

        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль" id="password">

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password">

        <button type="submit">Зареєструватися</button>
    </form>

</body>
</html>
