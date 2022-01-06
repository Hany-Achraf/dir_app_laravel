<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
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

    <script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker();
    });

    $('.modal').on('shown.bs.modal', function () {
  $('#datetimepicker').datetimepicker();
});
    </script>
  </body>
</html>
