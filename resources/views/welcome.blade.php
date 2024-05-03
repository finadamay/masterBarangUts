<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/sass/app.scss')
    </head>
    <body>
        <div class="container text-center my-5">
            <h1 class="mb-4">Welcome</h1>
            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn btn-dark" href="home">Home</a>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
