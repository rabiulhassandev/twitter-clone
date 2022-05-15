<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>Twitter</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

        {{-- Header Section --}}
        <section id="header">
            <div class="container pt-3">
                <div class="d-flex">
                    <h3 class="font-weight-bold">
                        <img src="{{ asset('images/logo.png') }}" class="header-logo" alt="Twitter">
                        Twitter
                    </h3>
                </div>
            </div>
        </section>
        {{-- Header Section --}}


        {{-- Main Section --}}
        <section id="main">
            <div class="container pt-4">
                <div class="row">
                    {{-- left side --}}
                    <div class="col-md-3">
                        <ul class="nav d-block left-sidebar">
                            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Explore</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Notification</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Messages</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Bookmarks</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Lists</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">More</a></li>
                        </ul>
                    </div>
                    {{-- left side --}}
                </div>
            </div>
        </section>
        {{-- Main Section --}}


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
