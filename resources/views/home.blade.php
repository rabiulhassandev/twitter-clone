<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>Twitter - Home Page</title>
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
                <div class="row justify-content-between">
                    {{-- left side --}}
                    <div class="col-md-3">
                        <x-left-sidebar />
                    </div>
                    {{-- left side --}}

                    {{-- Main Content --}}
                    <div class="col-md-6 mx-auto" style="max-width: 700px;">
                        {{-- Publish Tweet Panel --}}
                        <x-publish-tweet-panel />
                        {{-- Publish Tweet Panel --}}

                        {{-- Tweet Box --}}
                        <div class="border rounded-10 mb-2">
                            {{-- Tweet --}}
                            <x-tweet :tweets='$tweets' />
                            {{-- Tweet --}}
                        </div>
                        {{-- Tweet Box --}}

                    </div>
                    {{-- Main Content --}}

                    {{-- Friends --}}
                    <div class="col-md-3">
                        <div class="friends-card card">
                            <div class="card-body">
                                <h3 class="mb-3">Friends</h3>

                                @for ($i = 0; $i < 8; $i++)
                                    <x-friends />
                                @endfor
                            </div>
                        </div>
                    </div>
                    {{-- Friends --}}
                </div>
            </div>
        </section>
        {{-- Main Section --}}


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
