<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href=" <?= asset('img/seodashlogo.png') ?> " />
    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href=" <?= asset('libs/simplebar.min.css') ?> ">
    <link rel="stylesheet" href=" <?= asset('css/filtro-formulario.css') ?> " />
    {{-- CUSTOM ICONS --}}
    <script src="https://kit.fontawesome.com/f9271409cf.js" crossorigin="anonymous"></script>
    {{-- BOOSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href=" {{ route('home') }} " class="text-nowrap logo-img">
                        <img src=" <?= asset('img/logo-light.svg') ?> " alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav" class="">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href=" {{ route('home') }} " aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Secciones del sistema</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href=" {{ route('home.create') }} " aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Formulario</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href=" {{ route('home.index') }} " aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:layers-minimalistic-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Filtros</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href=" {{ route('history.index') }} " aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Historial</span>
                            </a>
                        </li>
                    </ul>
                    <div class="unlimited-access hide-menu bg-primary-subtle mb-7 mt-7 rounded-3">
                        <div class="d-flex">
                            <div class="unlimited-access-title me-3">
                                <h6 class="fw-semibold fs-4 mb-6 text-dark w-75">✧ Navega libremente ✧</h6>
                                
                            </div>
                            <div class="unlimited-access-img">
                                <img src=" <?= asset('img/rocket.png') ?> " alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src=" <?= asset('img/user-1.jpg') ?> " alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href=" {{ route('login') }} "
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Cerrar sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->

            <div class="container-fluid">
                <div class="card w-100">
                    <div class="card-body w-100">

                        <div class="back-container">
                            <a href=" {{ route('home') }} ">
                                <i class="bi bi-arrow-left-square-fill"></i> VOLVER
                            </a>
                        </div>

                        <div class="title-container w-100 d-flex justify-content-center ">

                            <h5 class="card-title text-center fw-semibold mt-3">HISTORIAL</h5>
                            <i class="fa fa-question-circle icon mt-3" aria-hidden="true" data-bs-toggle="tooltip"
                                title="Aquí podrás realizar busquedas de los movimientos que hayas realizado en el sistema como los registros, las descargas y la actualización de los documentos."></i>
                        </div>

                        <div class="card-body w-100">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif


                            <div class="title w-100 d-flex justify-content-center ">
                                <h5 class="title-table text-center fw-semibold mt-5 mb-4">REGISTROS DE CAMBIO A
                                    INACTIVOS</h5>
                            </div>

                            <div class="table-responsive w-100 mb-4">
                                <table id="historial" class="table w-100 table-hover text-center">

                                    <thead class="table-dark">
                                        <tr class="text-center">
                                            <th scope="col">id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Fecha vigencia</th>
                                            <th scope="col">Tipo de documento</th>
                                            <th scope="col">Documento PDF</th>
                                            <th scope="col">Fecha de actualización</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($documentos as $documento)
                                            <tr>
                                                <td>{{ $documento->id_documento }}</td>
                                                <td>{{ $documento->nombre_documento }}</td>
                                                <td>{{ $documento->estado }}</td>
                                                <td class="text-wrap" style="max-width: 240px;">
                                                    {{ $documento->descripcion }}</td>
                                                <td>{{ $documento->area }}</td>
                                                <td>{{ $documento->fecha_vigencia }}</td>
                                                <td>{{ $documento->tipo_documento }}</td>
                                                <td class="text-wrap" style="max-width: 240px; ">
                                                    {{ $documento->documento }}</td>
                                                <td>{{ $documento->updated_at }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>


                            <div class="table-responsive w-100">
                                <table id="historial-two" class="table w-100 table-hover text-center">


                                    <div class="title w-100 d-flex justify-content-center ">
                                        <h5 class="title-table text-center fw-semibold mt-5 mb-4">REGISTROS DE CAMBIO
                                            DE DOCUMENTO PDF</h5>
                                    </div>

                                    <thead class="table-dark">
                                        <tr class="text-center">
                                            <th scope="col">Numero</th>
                                            <th scope="col">id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Número versión</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Fecha vigencia</th>
                                            <th scope="col">Tipo de documento</th>
                                            <th scope="col">Documento PDF</th>
                                            <th scope="col">Fecha de actualización</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>

                                        @foreach ($documentosTwo as $documento)
                                            <tr>

                                                <td>{{ $i }}</td>
                                                <td>{{ $documento->documento_id }}</td>
                                                <td>{{ $documento->nombre_documento }}</td>
                                                <td>{{ $documento->version }}</td>
                                                <td class="text-wrap" style="max-width: 200px;">
                                                    {{ $documento->descripcion }}</td>
                                                <td>{{ $documento->area }}</td>
                                                <td>{{ $documento->fecha_vigencia }}</td>
                                                <td>{{ $documento->tipo_documento }}</td>
                                                <td class="text-wrap" style="max-width: 200px; ">
                                                    {{ $documento->documento }}</td>
                                                <td>{{ $documento->updated_at }}</td>

                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <div class="py-9 px-6 text-center">
                        <p class="mb-0 fs-4"> Copyright &copy; {{ date('Y') }}. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=" <?= asset('libs/home/jquery.min.js') ?> "></script>
    <script src=" <?= asset('libs/home/bootstrap.bundle.min.js') ?> "></script>
    <script src=" <?= asset('libs/home/simplebar.js') ?> "></script>
    <script src=" <?= asset('js/home/sidebarmenu.js') ?> "></script>
    <script src=" <?= asset('js/home/app.min.js') ?> "></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

    <style>
        .page-item.active .page-link {
            background-color: #000000
        }

        .table th,
        .table td,
        {
        vertical-align: middle;
        text-align: center;
        }
    </style>

    <script class="mb-4">
        new DataTable('#historial', {
            "lengthMenu": [
                [5, 10, 20, -1],
                [5, 10, 50, "Todo"]
            ],
            "pageLength": 5,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando _START_ a _END_ de _TOTAL_",
                "infoEmpty": "Mostrando 0 a 0 de 0",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar",

            }
        });
    </script>

    <script class="mb-4">
        new DataTable('#historial-two', {
            "lengthMenu": [
                [5, 10, 20, -1],
                [5, 10, 50, "Todo"]
            ],
            "pageLength": 5,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando _START_ a _END_ de _TOTAL_",
                "infoEmpty": "Mostrando 0 a 0 de 0",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar",
                "emptyTable": "No hay datos para mostrar"
            }
        });
    </script>

    <!-- Tooltips Initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>

</body>

</html>
