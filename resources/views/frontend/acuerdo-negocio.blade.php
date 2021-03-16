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

                <h2 style="text-align: center">Acuerdo de Negocio</h2>
                <hr>

                <div class="grilla-acuerdo">

                    <div class="facturacion">
                        <h4>Facturacion</h4>
                        <div class="grilla-facturacion">

                            <div class="sector">
                                Periodo
                            </div>

                            <div class="">
                                <label for="desde">Desde</label>
                                <input class="form-control" type="text" id="desde">
                            </div>
                            <div class="">
                                <label for="hasta">Hasta</label>
                                <input class="form-control" type="text" id="hasta">
                            </div>

                            <div class="sector">
                                Metodo de Pago
                            </div>
                            <div class="input ">
                                <input class="form-control" type="text">
                            </div>

                        </div>
                    </div>
                    <div class="publicaciones">
                        <h4>Publicaciones por mes</h4>

                        <div class="grilla-publicaciones">

                            <div class="sector">
                                Cantidad Maxima
                            </div>
                            <input class="form-control" type="number">


                            <div class="sector">
                                Cantidad Minima
                            </div>
                            <input class="form-control" type="number">

                        </div>
                    </div>
                    <div class="items">
                        <h4>Items</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Activo</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sitio Web</td>
                                        <td class="center">
                                            <label class="badge badge-success badge-pill">SI</label>
                                        </td>
                                        <td> 20 Diciembre, 2020</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SEM</td>
                                        <td class="center">
                                            <label class="badge badge-danger badge-pill">NO</label>
                                        </td>
                                        <td>19 Enero, 2020</td>
                                    </tr>
                                    <tr>
                                        <td>3
                                        </td>
                                        <td> SEO </td>
                                        <td class="center">
                                            <label class="badge badge-success badge-pill">SI</label>
                                        </td>
                                        <td> 9 Marzo, 2021</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td> Otro Item</td>
                                        <td class="center">
                                            <label class="badge badge-warning badge-pill">PENDIENTE</label>
                                        </td>
                                        <td> 15 Marzo, 2021</td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="objetivos">

                        <div class="accordion accordion-bordered" id="accordion-2" role="tablist">
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-4">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-4" aria-expanded="false"
                                            aria-controls="collapse-4">
                                            Objetivo N°1
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-4" class="collapse" role="tabpanel" aria-labelledby="heading-4"
                                    data-parent="#accordion-2">
                                    <div class="card-body">
                                        Aca iria toda la descripcion del objetivo numero uno que no se me ocurre que
                                        poner asi que pongo todo este texto largo por aqui
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="accordion accordion-bordered" id="accordion-2" role="tablist">

                            <div class="card">
                                <div class="card-header" role="tab" id="heading-2">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-2"
                                            aria-expanded="false" aria-controls="collapse-2">
                                            Objetivo N°2
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        If while signing in to your account you see an error message, you can do the
                                        following
                                        <ol class="pl-3 mt-4">
                                            <li>Check your network connection and try again</li>
                                            <li>Make sure your account credentials are correct while signing in</li>
                                            <li>Check whether your account is accessible in your region</li>
                                        </ol>
                                        <br>
                                        <p class="text-success">
                                            <i class="fa fa-exclamation-triangle-octagon mr-2"></i>If the problem
                                            persists, you can contact our support.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="accordion accordion-bordered" id="accordion-3" role="tablist">

                            <div class="card">
                                <div class="card-header" role="tab" id="heading-3">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-3"
                                            aria-expanded="false" aria-controls="collapse-3">
                                            Objetivo N°3
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-3" class="collapse" role="tabpanel" aria-labelledby="heading-3"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        If you wish to deactivate your account, you can go to the Settings page of your account. Click on Account Settings and then click on Deactivate. You can join again as and when you wish.
                                    </div>
                                </div>
                            </div>
                        </div>


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
