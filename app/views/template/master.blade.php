<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E - šalter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="favicon.png">

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

        @yield('extra-css')

        {{ HTML::style("css/style.css") }}
        {{ HTML::style("css/extra.css") }}

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <h4 class="v-center">dashboard</h4>
            <div><h6 class="v-center"><a href="{{ URL::route('odjava') }}"><span class="icon-newspaper"></span></a></h6></div>
            <div><h6 class="v-center">Pomoć</h6></div>
            <div class="name">
                <h6 class="v-center"><span class="icon-paperclip2"></span>{{ Auth::user()->ime," ", Auth::user()->prezime }}</h6>
            </div>
        </header>
        
        <div class="menu-left">
            @include('template/menu')
        </div>
        <div class="main-content">
            <div class="left">
                @yield("content")
            </div>
            <div class="right">
                @include('template/right-sidebar')
            </div>
        </div>

        @yield('extra-js')

        {{ HTML::script("js/script.js") }}

    </body>
</html>
