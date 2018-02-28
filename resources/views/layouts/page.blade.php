<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    

    <link href="{{asset('css/templates/reset.css')}}" rel="stylesheet">

    <link href="{{asset('css/templates/style.css')}}" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="script.js" type="application/ecmascript"></script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113975825-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113975825-2');
    </script>
</head>

<body>

    <div class="container-fluid p-0">
        <nav id="menu" class="d-flex justify-content-center justify-content-md-between">
            <a href="index.html">
                <img src="{{asset('images/templates/logo.png')}}" alt="logo" />
            </a>
            <ul class="d-none d-md-flex">
                <li class="btn" data-toggle="modal" data-target="#contacto_flota">Reserva tu cita</li>
                <a href="tel:952009955"><li class="btn btn-azul2">952 00 99 55</li></a>
            </ul>
            <!--<div class="d-flex d-lg-none d-xl-none" data-toggle="collapse" data-target="#menumobile" aria-expanded="false" aria-controls="menucollapse" style="font-size: 2rem; padding: 0 1em; color: var(--gris1)">≡</div>       -->
        </nav>
        <!--<div id="menumobile" class="collapse" aria-labelledby="menumobile" data-parent="#menu">
            <ul>
                <a href="#">
                    <li>
                        <span style="font-size: 2rem; margin: -3px 10px 0 0;">✆</span> 952 00 99 55
                    </li>
                </a>
            </ul>
        </div>-->
    </div>

    @yield('content')

    <footer class="mt-4">
        <div class="container d-flex justify-content-between align-items-center">
            <a style="color:gray" href="#">Política de privacidad</a>
            <div class="socialicons">
                <i class="fab fa-facebook fa-lg"></i>&nbsp;&nbsp;
                <i class="fab fa-instagram fa-lg"></i>&nbsp;&nbsp;
                <i class="fab fa-twitter fa-lg"></i>
            </div>
        </div>
    </footer>

</body>

@yield('scripts')

</html>