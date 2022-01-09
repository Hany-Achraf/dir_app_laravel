<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand">Everything in SouthKey (Admin Panel)</a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('home') }}" class="nav-link {{ 'home' == request()->path() ? 'active' : ''}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ 'businesses' == request()->path() ? 'active' : ''}}">Businesses</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ 'promotions' == request()->path() ? 'active' : ''}}">Promotions</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('events') }}" class="nav-link {{ 'events' == request()->path() ? 'active' : ''}}">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('destinations') }}" class="nav-link {{ 'destinations' == request()->path() ? 'active' : ''}}">Destinations</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ 'categories' == request()->path() ? 'active' : ''}}">Categories</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div style="padding-top:70px;">
            @yield('content')
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
