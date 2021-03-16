<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tember Web</title>

    <link rel="stylesheet" href="{{ asset('vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>
    @include('layoutsWeb.navbar')

    <div class="container-fluid page-body-wrapper">

        @include('layoutsWeb.theme-config')

        @include('layoutsWeb.sidebar')


        <!--ACA ES EL CONTENIDO-->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="page-header">
                    <h3 class="page-title">Dashboard</h3>
                </div>

                <div class="banner">

                    <div class="item">
                        <div class="icono">
                            <i class="far fa-images"></i>
                        </div>
                        <div class="title">
                            Publicaciones
                        </div>
                        <div class="subtitle">Pendientes (M)</div>
                        <div class="numero">0012</div>
                        <div class="totales">
                            <div class="contenedor">15 totales</div>
                        </div>
                    </div>

                    <div class="item border-izq">
                        <div class="icono">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="title">
                            Objetivos
                        </div>
                        <div class="subtitle">Cumplidos (M)</div>
                        <div class="numero">0008</div>
                        <div class="totales">
                            <div class="contenedor">28 totales</div>
                        </div>
                    </div>

                    <div class="item border-izq">
                        <div class="icono">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="title">
                            Alcance
                        </div>
                        <div class="subtitle">Redes totales</div>
                        <div class="numero">11.348</div>
                        <div class="totales">
                            <div class="contenedor">mensual</div>
                        </div>
                    </div>

                    <div class="item border-izq">
                        <div class="icono">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="title">
                            Oportunidades
                        </div>
                        <div class="subtitle">de negocios</div>
                        <div class="numero">0005</div>
                        <div class="totales">
                            <div class="contenedor">12 totales</div>
                        </div>
                    </div>

                    <div class="flecha border-izq">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>


            </div>

            @include('layoutsWeb.footer')

        </div>

    </div>




    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>

    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>


</html>
