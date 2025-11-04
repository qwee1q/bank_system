<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qwee1's Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .links {
            position: absolute;
            top: 20px;
            right: 30px;
            z-index: 1000;
        }
    </style>
</head>
<body class="bg-dark">
    <ul class="nav justify-content-end gap-3 links">
        <li class="nav-item">
            <a href="{{route('login')}}" class="btn btn-outline-light">Log In</a>
        </li>
        <li class="nav-item">
            <a href="{{route('registration')}}" class="btn btn-outline-success">Registration</a>
        </li>
    </ul>
    <div class="container">
        <h1 class="h1 text-white">Content</h1>
    </div>
</body>
</html>
