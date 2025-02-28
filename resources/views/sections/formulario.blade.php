<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href=" <?= asset('img/seodashlogo.png') ?> " />
    <link rel="stylesheet" href=" <?= asset('libs/simplebar.min.css') ?> ">
    <link rel="stylesheet" href=" <?= asset('css/styles.min.css') ?> " />
    <script src="https://kit.fontawesome.com/f9271409cf.js" crossorigin="anonymous"></script>
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
                            <a class="sidebar-link" href=" <?php route('home.create'); ?> " aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Formulario</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('home.index') }} " aria-expanded="false">
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
                <div class="card">
                    <div class="card-body">

                        <div class="back-container">
                            <a href=" {{ route('home') }} ">
                                <i class="bi bi-arrow-left-square-fill"></i> VOLVER
                            </a>
                        </div>

                        <div class="title-container w-100 d-flex justify-content-center ">


                            <h5 class="card-title text-center fw-semibold mt-3 mb-4">FORMULARIO</h5>
                            <i class="fa fa-question-circle icon mt-3" aria-hidden="true" data-bs-toggle="tooltip"
                                title="Aquí podrás registrar o crear la administración de documentos."></i>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <form action=" <?= route('home.store') ?> " method="post"
                                    enctype="multipart/form-data">

                                    @csrf

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

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del documento:
                                        </label>
                                        <input type="text" name="nombre_documento" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">Un nombre que describa bien el documento.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tipo de documento:
                                        </label><br>
                                        <select name="tipo_documento" class="form-select" id="area" required>
                                            <option value="" disabled selected>Seleccione una opción</option>
                                            <option value="formato">Formato</option>
                                            <option value="procedimiento">Procedimiento</option>
                                            <option value="instructivo">Instructivo</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Descripción corta: </label>
                                        <textarea type="text-area" name="descripcion" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Área a la que
                                            pertenece:</label><br>
                                        <select name="area" class="form-select" id="area" required>
                                            <option value="" disabled selected>Seleccione una opción</option>
                                            <option value="contabilidad">Contabilidad</option>
                                            <option value="deporte">Deporte</option>
                                            <option value="finanzas">Finanzas</option>
                                            <option value="gestion_humana">Gestión humana</option>
                                            <option value="general">General</option>
                                            <option value="sistemas">Sistemas</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Fecha de vigencia del
                                            documento: </label>
                                        <input type="date" name="fecha_vigencia" class="form-control"
                                            id="fecha_vigencia" min="">
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> --}}

                                    <div class="mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Cargar documento:
                                        </label>
                                        <input type="file" name="documento" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ old('documento') }}">
                                    </div>

                                    <div class="btn-container">
                                        <button type="submit" class="btn btn-form mb-3">Enviar</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        {{-- <h5 class="card-title fw-semibold mb-4">Disabled forms</h5>
                        <div class="card mb-0">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <legend>Disabled fieldset example</legend>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Disabled input</label>
                                            <input type="text" id="disabledTextInput" class="form-control"
                                                placeholder="Disabled input">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledSelect" class="form-label">Disabled select
                                                menu</label>
                                            <select id="disabledSelect" class="form-select">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="disabledFieldsetCheck" disabled>
                                                <label class="form-check-label" for="disabledFieldsetCheck">
                                                    Can't check this
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div> --}}



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


    {{-- Establecer el valor mínimo del campo de fecha al día de hoy --}}
    <script>
        const fechaVigenciaInput = document.getElementById('fecha_vigencia');
        const hoy = new Date().toISOString().split('T')[0]; // Obtiene la fecha en formato 'YYYY-MM-DD'
        fechaVigenciaInput.setAttribute('min', hoy);
    </script>


</body>

</html>
