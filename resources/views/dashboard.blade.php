<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qwee1's Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">
</head>
<body class="bg-dark">
    <ul class="nav justify-content-end gap-3 links">
        <li class="nav-item">
            <a href="{{route('logout')}}" class="btn btn-outline-danger">Log Out</a>
        </li>
    </ul>
    <div class="content">
        <p class="text-white">TEXT</p>
    </div>
</body>
</html>
