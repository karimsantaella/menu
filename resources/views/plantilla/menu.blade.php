<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visor</title>

    <link href="/menu_visor2/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/menu_visor2/public/css/metisMenu.min.css" rel="stylesheet">
    <link href="/menu_visor2/public/css/sb-admin-2.css" rel="stylesheet">
    <link href="/menu_visor2/public/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/menu_visor2/public/css/visor.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-top navbar-inverse navbar_visor" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Menu movil</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="logo_visor_blanco">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="images/plantilla/logo_visor_blanco.png" id="logo_visor_blanco">
                    </a>
                </div>
            </div>

            <div class="fondo navbar-default sidebar fondo_menu" role="navigation">
                <div class="sidebar-nav navbar-collapse fondo">
                    <ul class="nav fondo" id="side-menu">
                        <li>
                            <a href="{{ url('/') }}"> Inicio</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}"> Preguntas</a>
                        </li>
                        <li>
                            <a href="{{ url('ejecutivo') }}"> Vista Ejecutivo</a>
                        </li>
                        <li>
                            <a href="{{ url('usuario') }}"> Vista Usuario</a>
                        </li>
                        <li>
                            <a href="{{ url('traductor') }}"> Vista Traductor</a>
                        </li>
                       <li>
                            <a href="{{ url('/') }}"> Cambiar contraseña</a>
                        </li>
                        <li>
                            <a href="{{ url('login') }}"> Login</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}"> Salir</a>
                        </li>

                    </ul>
                </div>
            </div>







     </nav>
        <div id="page-wrapper" class="fondo_triangulos">
            @yield('contenido')
        </div>
    </div>    
    <script src="/menu_visor/public/js/jquery.min.js"></script>
    <script src="/menu_visor/public/js/bootstrap.min.js"></script>
    <script src="/menu_visor/public/js/metisMenu.min.js"></script>
    <script src="/menu_visor/public/js/sb-admin-2.js"></script>
</body>
</html>