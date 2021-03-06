<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>My App</title>
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <div id="app">

            @include('layouts.header')

            <section class="section">

                <div class="container">

                    <router-view></router-view>

                </div>

            </section>

        </div>

        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
