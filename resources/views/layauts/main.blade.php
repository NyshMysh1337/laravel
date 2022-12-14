<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('main.index') }}>Main</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('about.index') }}>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('post.index') }}>Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('contact.index') }}>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

</body>
</html>
