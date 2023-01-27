<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from laravel.spruko.com/spruha/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:07:12 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('acstemplate/assets/img/brand/acs1.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>ACS Management</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('acstemplate/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />



    <!-- Icons css-->
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />


    <!-- Light Box -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <!-- Style css-->
    <link href="{{ asset('acstemplate/assets/css/style/style.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/colors/default.css') }}" rel="stylesheet">

    <!-- Sweet Alert Rationship -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.7/dist/sweetalert2.all.min.js"></script>




    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('acstemplate/assets/css/colors/color.css') }}">

    <!-- Owl-carousel css-->
    <link href="{{ asset('acstemplate/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />


    <!-- Select2 css-->
    <link href="{{ asset('acstemplate/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="{{ asset('acstemplate/assets/plugins/multipleselect/multiple-select.css') }}">

    <!-- Internal DataTables css-->
    <link href="{{ asset('acstemplate/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('acstemplate/assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" />

    {{-- Sweet Alert --}}
    <link href="{{ asset('acstemplate/assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">


    <!-- Sidemenu css-->
    <link href="{{ asset('acstemplate/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

    <!-- Switcher css-->
    <link href="{{ asset('acstemplate/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/switcher/demo.css') }}" rel="stylesheet">
</head>

<body class="main-body leftmenu">


    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('acstemplate/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <!-- Sidemenu -->
        <div class="main-sidebar main-sidebar-sticky side-menu">
            <div class="sidemenu-logo">
                <a class="main-logo" href="#">
                    <img src="{{ asset('acstemplate/assets/img/brand/acs1.png') }}"
                        class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('acstemplate/assets/img/brand/icon-light.png') }}"
                        class="header-brand-img icon-logo" alt="logo">
                    <img src="{{ asset('acstemplate/assets/img/brand/acs1.png') }}"
                        class="header-brand-img desktop-logo theme-logo" alt="logo">
                    <img src="{{ asset('acstemplate/assets/img/brand/icon.png') }}"
                        class="header-brand-img icon-logo theme-logo" alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body">
                <ul class="nav">
                    <li class="nav-item {{ Route::is('welcome') ? 'active' : '' }}">
                        <a class="nav-link" href="/welcome"><span class="shape1"></span><span class="shape2"></span><i
                                class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                    </li>
                </ul>
                <li class="nav-header"><span class="nav-label">Goods</span></li>
                <li class="nav-item {{ Route::is('suratmasuk', 'tambahbarang', 'editbarang') ? 'active' : '' }}">
                    <a class="nav-link" href="/suratmasuk"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Siswa/Siswi</span></a>
                </li>
                <li class="nav-item {{ Route::is('suratkeluar', 'tambahbarang', 'editbarang') ? 'active' : '' }}">
                    <a class="nav-link" href="/suratkeluar"><span class="shape1"></span><span
                            class="shape2"></span><i class="ti-package sidemenu-icon"></i><span
                            class="sidemenu-label">Absen</span></a>
                </li>
                <li class="nav-item {{ Route::is('sekolah', 'tambah_sekolah', 'edit_sekolah') ? 'active' : '' }}">
                    <a class="nav-link" href="/sekolah"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Sekolah</span></a>
                </li>
                <li class="nav-item {{ Route::is('disposisi', 'tambahbarang', 'editbarang') ? 'active' : '' }}">
                    <a class="nav-link" href="/logout"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Logout</span></a>
                </li>
            </div>
        </div>
        <!-- End Sidemenu -->
        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="#" id=" "><span></span></a>
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link" href="#">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                </div>
                <div class="main-header-right">

                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user"><img alt="avatar" class="image-previewer"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">Ipan</h6>
                                <p class="main-notification-text">Admin</p>
                            </div>
                            <a class="dropdown-item border-top" href="/profil">
                                <i class="fe fe-user"></i> Profil
                            </a>
                            {{-- <a class="dropdown-item" href="/editprofil">
                            <i class="fe fe-edit"></i> Edit Profil
                        </a> --}}
                            <a class="dropdown-item" href="/logout">
                                <i class="fe fe-power"></i> Keluar
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button><!-- Navresponsive closed -->
                </div>
            </div>
        </div>
        <!-- End Main Header-->
        <!-- Mobile-header -->
        <div class="mobile-main-header">
            <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown main-header-notification flag-dropdown">
                            <a class="nav-link icon country-Flag">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle cx="256" cy="256" r="256" fill="#f0f0f0" />
                                    <g fill="#0052b4">
                                        <path
                                            d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z" />
                                    </g>
                                    <g fill="#d80027">
                                        <path
                                            d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z" />
                                        <path
                                            d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="dropdown ">
                            <a class="nav-link icon full-screen-link">
                                <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                                <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                            </a>
                        </div>
                        <div class="dropdown main-header-notification">
                            <a class="nav-link icon" href="#">
                                <i class="fe fe-bell header-icons"></i>
                                <span class="badge badge-danger nav-link-badge">4</span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <p class="main-notification-text">You have 1 unread notification<span
                                            class="badge badge-pill badge-primary ml-3">View all</span></p>
                                </div>
                                <div class="main-notification-list">
                                    <div class="media new">
                                        <div class="main-img-user online"><img alt="avatar"
                                                src="{{ asset('acstemplate/assets/img/users/5.jpg') }}"></div>
                                        <div class="media-body">
                                            <p>Congratulate <strong>Olivia James</strong> for New template start</p>
                                            <span>Oct 15 12:32pm</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="main-img-user"><img alt="avatar"
                                                src="{{ asset('acstemplate/assets/img/users/2.jpg') }}"></div>
                                        <div class="media-body">
                                            <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13
                                                02:56am</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="main-img-user online"><img alt="avatar"
                                                src="{{ asset('acstemplate/assets/img/users/3.jpg') }}"></div>
                                        <div class="media-body">
                                            <p><strong>Elizabeth Lewis</strong> added new schedule realease</p>
                                            <span>Oct
                                                12 10:40pm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-footer">
                                    <a href="#">View All Notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-header-notification mt-2">
                            <a class="nav-link icon" href="chat.html">
                                <i class="fe fe-message-square header-icons"></i>
                                <span class="badge badge-success nav-link-badge">6</span>
                            </a>
                        </div>
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="#">
                                <span class="main-img-user"><img alt="avatar" class="image-previewer"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">Ipan</h6>
                                    <p class="main-notification-text">Admin</p>
                                </div>
                                <a class="dropdown-item border-top" href="/profil">
                                    <i class="fe fe-user"></i> Profil
                                </a>
                                {{-- <a class="dropdown-item" href="/editprofil">
                                <i class="fe fe-edit"></i> Edit Profil
                            </a> --}}
                                <a class="dropdown-item" href="/logout">
                                    <i class="fe fe-power"></i> Keluar
                                </a>
                            </div>
                        </div>
                        <div class="dropdown  header-settings">
                            <a href="#" class="nav-link icon" data-toggle="sidebar-right"
                                data-target=".sidebar-right">
                                <i class="fe fe-align-right header-icons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header closed -->
        <!-- Main Content-->
        <div class="main-content side-content pt-0">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- End Main Content-->

        <!-- Main Footer-->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('acstemplate/assets/plugins/jquery/jquery.min.js') }}"></script>


    <!-- Bootstrap js-->
    <script src="{{ asset('acstemplate/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('acstemplate/assets/plugins/select2/js') }}/select2.min.js"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('acstemplate/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Sidemenu js -->
    <script src="{{ asset('acstemplate/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('acstemplate/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Peity js-->
    <script src="{{ asset('acstemplate/assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Internal Data Table js -->
    <script src="{{ asset('acstemplate/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/jszip.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/pdfmake.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/vfs_fonts.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.print.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/js/table-data.js') }}"></script>


    <!-- Internal Chartjs charts js-->
    <script src="{{ asset('acstemplate/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/js/chart.chartjs.js') }}"></script>

    <!-- Owl Carousel js -->
    <script src="{{ asset('acstemplate/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Internal Apexchart js-->
    <script src="{{ asset('acstemplate/assets/js/apexcharts.js') }}"></script>

    <!-- Sparkline js-->
    <script src="{{ asset('acstemplate/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Internal Polyfills js-->
    <script src="{{ asset('acstemplate/assets/plugins/polyfill/polyfill.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/polyfill/classList.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/polyfill/polyfill_mdn.js') }}"></script>

    <!-- Internal Morris js -->
    <script src="{{ asset('acstemplate/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/morris.js/morris.min.js') }}"></script>


    <!-- Internal Morris js -->
    <script src="{{ asset('acstemplate/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/morris.js/morris.min.js') }}"></script>

    <!-- Internal Bootstrap -->
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            red="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="red">
    @endpush

    <!-- Circle Progress js-->
    <script src="{{ asset('acstemplate/assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/js/chart-circle.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('acstemplate/assets/js/index.js') }}"></script>

    <!-- Internal Sweet-Alert js-->
    <script src="{{ asset('acstemplate/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/sweet-alert/jquery.sweet-alert.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('acstemplate/assets/js/sticky.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('acstemplate/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('acstemplate/assets/switcher/js/switcher.js') }}"></script>



    <!-- Modal js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

    @yield('charts')



    <script></script>


</body>

<!-- Mirrored from laravel.spruko.com/spruha/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:07:12 GMT -->

</html>
