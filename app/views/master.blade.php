<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-ocene - @yield('page-title')</title>

        {{ HTML::style("css/bootstrap/bootstrap.min.css") }}
        {{ HTML::style("font-awesome/css/font-awesome.min.css") }}
        
        
        
        @yield('extra-css')
        
        {{ HTML::style("css/libs/nanoscroller.css") }}
        {{ HTML::style("css/compiled/layout.css") }}
        {{ HTML::style("css/compiled/elements.css") }}
        
        {{ HTML::style("css/style.css") }}
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="navbar" id="header-navbar">
            <div class="container">
                <a href="index.html" id="logo" class="navbar-brand">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="normal-logo logo-white"/>
                    <img src="{{ asset('img/logo-black.png') }}" alt="" class="normal-logo logo-black"/>
                    <img src="{{ asset('img/logo-small.png') }}" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
                </a>
                <div class="clearfix">
                    <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                        <ul class="nav navbar-nav pull-left">
                            <li>
                                <a class="btn" id="make-small-nav">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @include('template/top-right-menu')
                </div>
            </div>
        </header>
        <div id="page-wrapper" class="container">
            <div class="row">
                @if(Auth::check())
                <div id="nav-col">
                    <section id="col-left" class="col-left-nano">
                        <div id="col-left-inner" class="col-left-nano-content">
                            <div id="user-left-box" class="clearfix hidden-sm hidden-xs">
                                <img alt="" src="{{ asset('img/samples') }}/scarlet-159.png"/>
                                <div class="user-box">
                                    <span class="name">
                                        Dobrodošli<br/>
                                        {{ Auth::user()->ime }}
                                    </span>
                                </div>
                            </div>
                            @if(Auth::user()->level == 1)
                                @include("/rod/main-menu")
                            @elseif(Auth::user()->level == 2)
                                @include("/prof/main-menu")
                            @elseif(Auth::user()->level == 3)
                                @include("/raz/main-menu")
                            @elseif(Auth::user()->level == 4)
                                @include("/uprava/main-menu")
                            @elseif(Auth::user()->level == 5)
                                @include("/admin/main-menu")
                            @endif
                        </div>
                    </section>
                </div>
                @endif
                <div id="content-wrapper">
                    @if(Session::has('global-text'))
                    <div class="alert alert-{{ Session::get('global-class') }} fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-check-circle fa-fw fa-lg"></i>
                        <strong>{{ Session::get('global-naslov') }}</strong> {{ Session::get('global-text') }}
                    </div>
                    @endif
                    @yield('content')
                    @include('template/footer')
                    <?php
                        $queries = DB::getQueryLog();
                        $last_query = end($queries);
                        //var_dump($queries);
                        echo "Queries executed: ", count($queries);
                    ?>
                </div>
            </div>
        </div>

        {{ HTML::script("js/demo-skin-changer.js") }}
        {{ HTML::script("js/jquery.js") }}
        {{ HTML::script("js/bootstrap.js") }}
        {{ HTML::script("js/jquery.nanoscroller.min.js") }}
        {{ HTML::script("js/demo.js") }}
        
        @yield('extra-js')
        
        {{ HTML::script("js/scripts.js") }}
        @if(Session::has('global-after-all'))
        {{ Session::get('global-after-all') }}
        @endif
    </body>
</html>