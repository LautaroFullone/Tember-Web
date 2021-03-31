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

                <form method="POST" action="{{ route('acuerdo.save') }}">
                    @csrf
                    <h3 style="display: inline-block; margin-right:20px">Cliente</h4>

                    <select class="form-select" name="idUser" required>
                        <option disabled>Clientes Registrados</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}" >{{ $client->name }}</option>
                            @endforeach
                    </select>
                    <br><br>

                    <label for="name"><h4>Nombre</h4></label>
                    <input type="text" name="name" id="name" required><br>
                    <br>

                    <h4>Facturacion</h4>
                    <label for="metodo">Metodo</label>
                    <input type="text" name="metodo" id="metodo" required><br>
                    <label for="desde">Desde</label>
                    <input type="date" name="desde" id="desde" required><br>
                    <label for="hasta">Hasta</label>
                    <input type="date" name="hasta" id="hasta" required>
                    <br><br>

                    <h4>Publicaciones</h4>
                    <label for="min">Cantidad Minima</label>
                    <input type="number" name="cant_min" id="min" min="0"  required><br>
                    <label for="max">Cantidad Maxima</label>
                    <input type="number" name="cant_max" id="max" min="0" required>
                    <br><br>

                    <h4>Items</h4>
                    @foreach ($items as $item)
                        <input type="checkbox" name="items[]" id="{{ $item->id }}" value="{{ $item->id }}">
                        <label for="{{ $item->id }}">{{ $item->nombre }}</label>
                        <br>
                    @endforeach
                    <br><br>

                    <button type="submit">Subir</button>

                </form>



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
