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
        <div id="login-page">
            <div class="login-box">
                <form action="{{ URL::Route("prijava") }}" method="post">
                    <span>Prijava</span></br>
                    @if(Session::has('login-alert-class'))
                        <div>
                            Pogresni podaci
                        </div>
                    @endif
                    <label>Broj indexa</label>
                    <div class="form-group">
                        <input name="index" type="text" required="">
                    </div>
                    <label>Šifra</label>
                    <div class="form-group">
                        <input name="password" type="password" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="remember-me" checked="checked"/>
                        <label for="remember-me">
                            Zapamti me
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Prijavi se">
                        <input type="reset" value="Otkaži">
                    </div>
                </form>
            </div>
        </div>
        {{ HTML::script("js/script.js") }}

    </body>
</html>
