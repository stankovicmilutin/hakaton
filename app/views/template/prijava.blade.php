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
</head>
<body>
    <div class="login">
        <div class="login1">
            <img src="img/logo.svg" alt="logo" />
            <form class="login-form" action="{{ URL::Route("prijava") }}" method="post">
            @if(Session::has('login-alert-class'))
                        <div>
                            Pogresni podaci
                        </div>
                    @endif
                <div class="top">
                    <input name="index" type="text" required placeholder="Broj indeksa"/>
                    <input name="password" type="password" required placeholder="šifra"/>
                </div>
                <div class="bottom">
                    <input type="checkbox" id="remember-me" checked="checked"/>
                        <label for="remember-me" class="login-label">
                            Zapamti me
                        </label>
                    <input class="login-button" type="submit" value="PRIJAVI SE">
                </div>

            </form>
        </div>
    </div>
    {{ HTML::script("js/script.js") }}
</body>
</html>

