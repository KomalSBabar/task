<!doctype html>
<html>
    <head>
    <!-- <script src="{{asset('assets/js/app.js')}}" defer></script> -->

    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 

    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <!-- <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" /> -->

        <title> CRUD operation</title>
    </head>
    <body>
    <div class="container">
        @yield('content')
    </div>    

    </body>
</html>