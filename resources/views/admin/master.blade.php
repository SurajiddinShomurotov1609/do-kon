<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link {{request()->routeIs('history.index') ? 'active' : ''}}" href="{{route('history.index')}}"><i class="fas fa-tachometer-alt"></i><span>Tarix</span></a></li>
                <li class="nav-item"><a class="nav-link {{request()->routeIs('product.index') ? 'active' : ''}}" href="{{route('product.index')}}"><i class="fas fa-table"></i><span>Mahsulotlar</span></a></li>
                <li class="nav-item"><a class="nav-link {{request()->routeIs('object.index') ? 'active' : ''}}" href="{{route('object.index')}}"><i class="fas fa-user"></i><span>Do'konlar</span></a></li>
                <li class="nav-item"><a class="nav-link {{request()->routeIs('user') ? 'active' : ''}}" href="{{route('user')}}"><i class="far fa-user-circle"></i><span>Xodimlar</span></a></li>
                <li class="nav-item"><a class="nav-link {{request()->routeIs('amal') ? 'active' : ''}}" href="{{route('amal')}}"><i class="fas fa-user-circle"></i><span>Amallar</span></a></li>
{{--                <li class="nav-item"><a class="nav-link {{request()->routeIs('modal.index') ? 'active' : ''}}" href="{{route('modal.index')}}"><i class="fas fa-user-plus"></i><span>Modal</span></a></li>--}}
                <li class="nav-item"><a class="nav-link {{request()->routeIs('hisobot') ? 'active' : ''}}" href="{{route('hisobot')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        <span>Hisobot</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                            <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                            <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                            <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                            <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"></span><img class="border rounded-circle img-profile" src="data:image/jpeg;base64,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"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')

        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/chart.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // In your Javascript (external .js resource or <script> tag)
    // $(document).ready(function() {
    //     $('#product').select2();
    // });
    //
    // $(document).ready(function() {
    //     $('#product2').select2();
    // });
    //
    // $(document).ready(function() {
    //     $('#product3').select2();
    // });
    //
    // $(document).ready(function() {
    //     $('#product4').select2();
    // });
    //
    // $(document).ready(function() {
    //     $('#product5').select2();
    // });
    // $(document).ready(function() {
    //     $('#product6').select2();
    // });
    // $(document).ready(function() {
    //     $('#product7').select2();
    // });

</script>

</body>

</html>
