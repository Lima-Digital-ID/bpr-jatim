<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bank BPR Jawa Timur</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="{{ asset('') }}main.css" rel="stylesheet">
    <link href="{{ asset('') }}custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    @yield('extraCSS')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">


                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ auth()->user()->name }}
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg"
                                                alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">
                                                <i
                                                    class="metismenu-icon fa fa-fingerprint icon-gradient bg-arielle-smile mr-1"></i>
                                                Ganti Password
                                            </a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <i
                                                    class="metismenu-icon fa fa-sign-out-alt icon-gradient bg-love-kiss mr-1"></i>
                                                Logout
                                            </a>
                                            {{-- <button type="button" tabindex="0" class="dropdown-item">Logout</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="{{ url('administrator/dashboard') }}"
                                    class="{{ Request::segment(2) == 'dashboard' ? 'mm-active' : '' }}">
                                    {{-- <i class="metismenu-icon pe-7s-rocket"></i> --}}
                                    <i class="metismenu-icon fa fa-tachometer-alt icon-gradient bg-arielle-smile"></i>
                                    Dashboard
                                </a>
                            </li>

                            <li class="app-sidebar__heading">Master</li>
                            <li>
                                <a href="{{ url('administrator/user') }}"
                                    class="{{ Request::segment(2) == 'user' ? 'mm-active' : '' }}">
                                    {{-- <i class="metismenu-icon pe-7s-rocket"></i> --}}
                                    <i class="metismenu-icon fa fa-users icon-gradient bg-arielle-smile"></i>
                                    User
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('administrator/profil') }}"
                                    class="{{ Request::segment(2) == 'profil' ? 'mm-active' : '' }}">
                                    {{-- <i class="metismenu-icon pe-7s-rocket"></i> --}}
                                    <i class="metismenu-icon fa fa-address-card icon-gradient bg-arielle-smile"></i>
                                    Profil Perusahaan
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('administrator/kebijakan-privasi') }}"
                                    class="{{ Request::segment(2) == 'kebijakan-privasi' ? 'mm-active' : '' }}">
                                    {{-- <i class="metismenu-icon pe-7s-rocket"></i> --}}
                                    <i class="metismenu-icon fa fa-user-shield icon-gradient bg-arielle-smile"></i>
                                    Kebijakan Privasi
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('administrator/sk') }}"
                                    class="{{ Request::segment(2) == 'sk' ? 'mm-active' : '' }}">
                                    {{-- <i class="metismenu-icon pe-7s-rocket"></i> --}}
                                    <i class="metismenu-icon fa fa-handshake icon-gradient bg-arielle-smile"></i>
                                    Syarat dan Ketentuan
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('administrator/bunga') }}"
                                    class="{{ Request::segment(2) == 'bunga' ? 'mm-active' : '' }}">
                                    {{-- <i class="metismenu-icon pe-7s-rocket"></i> --}}
                                    <i class="metismenu-icon fa fa-file-invoice-dollar icon-gradient bg-arielle-smile"></i>
                                    Bunga
                                </a>
                            </li>

                            <li class="app-sidebar__heading">Tentang BPR</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fa fa-landmark icon-gradient bg-arielle-smile"></i>
                                    Tentang BPR
                                    <i class="metismenu-state-icon
                                            pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('administrator/about?t=sejarah') }}">
                                            <i class="metismenu-icon">
                                            </i>Sejarah
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('administrator/about?t=visi-misi') }}">
                                            <i class="metismenu-icon">
                                            </i>Visi Misi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('administrator/about?t=peranan') }}">
                                            <i class="metismenu-icon">
                                            </i>Peranan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('administrator/about?t=struktur') }}">
                                            <i class="metismenu-icon">
                                            </i>Struktur Organisasi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('administrator/about?t=manajemen') }}">
                                            <i class="metismenu-icon">
                                            </i>Manajemen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('administrator/about?t=identitas') }}">
                                            <i class="metismenu-icon">
                                            </i>Identitas Perusahaan
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="app-sidebar__heading">Produk & Layanan</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fa fa-store icon-gradient bg-arielle-smile"></i>
                                    Produk & Layanan
                                    <i class="metismenu-state-icon
                                            pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('jenis-produk-layanan.index') }}">
                                            <i class="metismenu-icon">
                                            </i>Master Jenis
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('item-produk-layanan.index') }}">
                                            <i class="metismenu-icon">
                                            </i>Master Konten
                                        </a>
                                    </li>
                                    <li>
                                </ul>
                            </li>

                            <li class="app-sidebar__heading">UMKM Binaan</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fa fa-user-friends icon-gradient bg-arielle-smile"></i>
                                    UMKM Binaan
                                    <i class="metismenu-state-icon
                                            pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('kota.index') }}">
                                            <i class="metismenu-icon">
                                            </i>Master Kota
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('umkm-binaan.index') }}">
                                            <i class="metismenu-icon">
                                            </i>Master Konten
                                        </a>
                                    </li>
                                    <li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                @yield('content')
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            &copy; Bank BPR Jawa Timur 2021
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('') }}assets/scripts/main.js"></script>
    {{-- logout modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Pilih tombol logout untuk melanjutkan.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    @yield('extraJS')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ck-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
