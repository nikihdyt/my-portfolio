<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://127.0.0.1:8000/about-me">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://127.0.0.1:8000/contact-me">Contact Me</a>
                </li>
                </ul>
            </div>
        </nav>
        <!-- content -->
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>