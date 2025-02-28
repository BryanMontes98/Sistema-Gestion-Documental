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
                    <ul id="sidebarnav">
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

                            <h5 class="card-title text-center fw-semibold mt-3">FILTRO DEL REGISTRO</h5>
                            <i class="fa fa-question-circle icon mt-3" aria-hidden="true" data-bs-toggle="tooltip"
                                title="Aquí podrás realizar busquedas o filtros de los documentos que han sido creados."></i>
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

                            <form action=" {{ route('home.index') }} " method="GET">

                                <div class="section-filter d-flex justify-content-between mt-4 mb-5">

                                    <div class="section-one d-flex">

                                        {{-- {{ session($oldDocument) }} --}}

                                        <div class="form-group me-3">
                                            <input wire:model.live="$busqueda_nombre" type="text" name="nombre"
                                                placeholder="Nombre: " class="form-control col-md-3" id="input-1"
                                                value="">
                                        </div>

                                        <div class="form-group me-3">
                                            <select name="area" id="area" class="form-select">
                                                <option value="" selected disabled> Selecciona un area: </option>
                                                <option value="Todo"
                                                    {{ request('area') == 'Todo' ? 'selected' : '' }}> Mostrar todo
                                                </option>
                                                <option value="Contabilidad"
                                                    {{ request('area') == 'Contabilidad' ? 'selected' : '' }}>
                                                    Contabilidad
                                                </option>
                                                <option value="Deporte"
                                                    {{ request('area') == 'Deporte' ? 'selected' : '' }}> Deporte
                                                </option>
                                                <option value="Finanzas"
                                                    {{ request('area') == 'Finanzas' ? 'selected' : '' }}> Finanzas
                                                </option>
                                                <option value="Gestion_humana"
                                                    {{ request('area') == 'Gestion humana' ? 'selected' : '' }}>
                                                    Gestión humana
                                                </option>
                                                <option value="General"
                                                    {{ request('area') == 'General' ? 'selected' : '' }}> General
                                                </option>
                                                <option value="Sistemas"
                                                    {{ request('area') == 'Sistemas' ? 'selected' : '' }}> Sistemas
                                                </option>
                                                <option value="Otro"
                                                    {{ request('area') == 'Otro' ? 'selected' : '' }}> Otro
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group me-3">
                                            <select name="tipo_documento" id="tipo_documento" class="form-select">
                                                <option value="" selected disabled> Tipo de documento: </option>
                                                <option value="Todo"
                                                    {{ request('tipo_documento') == 'Todo' ? 'selected' : '' }}>
                                                    Mostrar todo
                                                </option>
                                                <option value="Formato"
                                                    {{ request('tipo_documento') == 'Formato' ? 'selected' : '' }}>
                                                    Formato
                                                </option>
                                                <option value="Procedimiento"
                                                    {{ request('tipo_documento') == 'Procedimiento' ? 'selected' : '' }}>
                                                    Procedimiento
                                                </option>
                                                <option value="Instructivo"
                                                    {{ request('tipo_documento') == 'Instructivo' ? 'selected' : '' }}>
                                                    Instructivo
                                                </option>
                                                <option value="Otro"
                                                    {{ request('tipo_documento') == 'Otro' ? 'selected' : '' }}> Otro
                                                </option>
                                            </select>
                                        </div>

                                        <div class="form-group me-3">
                                            <input type="date" name="fecha_vigencia" class="form-control col-md-3"
                                                id="input-1" value="">
                                        </div>

                                    </div>

                                    <div
                                        class="section-two d-flex flex-column justify-content-center align-items-center ">
                                        <button class="btn btn-filter" type="submit"> <i class="bi bi-search"></i>
                                        </button>
                                    </div>

                                </div>
                            </form>

                            <div class="table-responsive w-100">
                                <table class="table w-100 table-hover text-center">
                                    <thead class="table-dark">
                                        <tr class="text-center">
                                            <th scope="col">id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Fecha vigencia</th>
                                            <th scope="col">Tipo de documento</th>
                                            <th scope="col">Documento PDF</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($documentos as $documento)
                                        <tr>
                                                <td>{{ $documento->id_documento }}</td>
                                                <td>{{ $documento->nombre_documento }}</td>
                                                <td class="text-wrap" style="max-width: 240px;" >{{ $documento->descripcion }}</td>
                                                <td>{{ $documento->area }}</td>
                                                <td>{{ $documento->fecha_vigencia }}</td>
                                                <td>{{ $documento->tipo_documento }}</td>
                                                <td class="text-wrap" style="max-width: 200px;" >{{ $documento->documento }}</td>

                                                <td>
                                                    <div class="btn btn-descargar">
                                                        <a
                                                            href=" {{ route('filter.download', ['documento' => $documento->id_documento]) }} ">
                                                            Descargar </a>
                                                    </div>
                                                    <div class="btn btn-actualizar" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $documento->id_documento }}">
                                                        <a> Actualizar </a>
                                                    </div>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $documento->id_documento }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel">

                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="w-100 text-center">
                                                                        <h1 class="modal-title fs-5"
                                                                            id="exampleModalLabel">Actualizar</h1>
                                                                    </div>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estas seguro de que quieres actualizar el
                                                                    registro?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-cerrar"
                                                                        data-bs-dismiss="modal">Cerrar</button>

                                                                    <form action=" {{ route('filter.destroy', ['documento'=>$documento->id_documento]) }} " method="post">

                                                                        @csrf
                                                                        @method('DELETE')

                                                                        <button type="submit" class="btn btn-modal-actualizar">Inactivar registro</button>

                                                                    </form>

                                                                    <div class="btn btn-modal-actualizar">
                                                                        <a href=" {{ route('home.edit', ['documento'=>$documento->id_documento] ) }} ">Actualizar documento PDF</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach
                                        </tbody>
                                </table>

                            </div>

                            {{ $documentos->links() }}

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
