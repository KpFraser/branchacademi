<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

{{--Theme Links--}}
        <link rel="apple-touch-icon" sizes="180x180" href="https://aatrox.herokuapp.com/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="https://aatrox.herokuapp.com/images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="https://aatrox.herokuapp.com/images/favicons/favicon-16x16.png" />
        <link rel="stylesheet" href="https://aatrox.herokuapp.com/css/main.bundle.css" />
        <!--Page Level Styles -->
        <link rel="stylesheet" href="https://aatrox.herokuapp.com/css/pages/app/event-calendar.css" />
        <link href="https://aatrox.herokuapp.com/vendors/fullcalendar/main.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />

{{--Theme Links--}}

        <title>{{ config('app.name', 'LARAVEL') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Icons -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{--<script src="https://unpkg.com/vue@3" ></script>--}}
        <script src="{{ asset('js/cstmvue.js') }}" defer></script>



    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" id="app">

            <!-- Page Heading -->
{{--            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>--}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
