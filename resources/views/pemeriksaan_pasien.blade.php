<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>

    <meta charset="utf-8" />
    <title>Edental Clinic | Dashboard</title>
    <meta name="description" content="Aside light theme example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ url('/') }}/public/assets/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ url('/') }}/public/assets/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/public/assets/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/public/assets/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ url('/') }}/public/assets/assets/css/themes/layout/header/base/dark.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/public/assets/assets/css/themes/layout/header/menu/dark.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/public/assets/assets/css/themes/layout/brand/dark.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/public/assets/assets/css/themes/layout/aside/light.css" rel="stylesheet"
        type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ url('/') }}/public/assets/assets/img/logo2.png" />
    <link href="{{ url('/') }}/public/assets/assets/plugins/custom/datatables/datatables.bundle.css"
        rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <?php
            function active($currect_page)
            {
                $url_array = explode('/', $_SERVER['REQUEST_URI']);
                $url = $url_array[2];
            
                if ($currect_page == $url) {
                    echo 'menu-item-active'; //class name in css
                }
            }
            
            function open($currect_page)
            {
                $url_array = explode('/', $_SERVER['REQUEST_URI']);
                $url = $url_array[2];
            
                if ($currect_page == $url) {
                    echo 'menu-item-open'; //class name in css
                }
            }
            ?>

            <style type="text/css">
                /* .menu-link {
                    background-color: #6c6c71;
                } */

            </style>
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="{{ url('/') }}/" class="brand-logo">
                        <img alt="Logo" src="{{ url('/') }}/public/assets/assets/img/logo3.png"
                            style="width:150px;" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!--begin::Menu Container-->
                    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
                        data-menu-dropdown-timeout="500">
                        <!--begin::Menu Nav-->
                        <ul class="menu-nav">


                            <li class="menu-item <?php active(''); ?>" aria-haspopup="true">
                                <a href="{{ url('/') }}" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        <i class="nav-icon fas fa-paste"></i>

                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-item <?php active('pasien'); ?>" aria-haspopup="true">
                                <a href="{{ url('/') }}/pasien" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        <i
                                            class="nav-icon 
                                        fas fa-hospital-user"></i>

                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Pasien</span>
                                </a>
                            </li>

                            <li class="menu-item menu-item-submenu <?php open('data-tindakan'); ?>" aria-haspopup="true"
                                data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                        <i class="nav-icon fas fa-database"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Master</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                            <span class="menu-link">
                                                <span class="menu-text">Master</span>
                                            </span>
                                        </li>
                                        <li class="menu-item <?php active('data-tindakan'); ?>" aria-haspopup="true">
                                            <a href="{{ url('/') }}/data-tindakan" class="menu-link">
                                                <span class="svg-icon menu-icon">
                                                    <i class="nav-icon fas fa-book-medical"></i>

                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-text">Data Tindakan</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>


                            <li class="menu-item menu-item-submenu <?php open('simbol'); ?>" aria-haspopup="true"
                                data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                        <i class="nav-icon fas fa-cog"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Tools</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu">
                                    <i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                            <span class="menu-link">
                                                <span class="menu-text">Tools</span>
                                            </span>
                                        </li>
                                        <li class="menu-item <?php active('simbol'); ?>" aria-haspopup="true">
                                            <a href="{{ url('/') }}/simbol" class="menu-link">
                                                <span class="svg-icon menu-icon">
                                                    <i class="nav-icon fas fa-hospital-symbol"></i>

                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-text">Simbol Odontogram</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            {{-- <li class="menu-item" aria-haspopup="true">
                                <a href="../../" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        <i class="nav-icon fas fa-notes-medical"></i>
            
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Rekam Medis</span>
                                </a>
                            </li>
            
                            <li class="menu-item" aria-haspopup="true">
                                <a href="../../" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        <i class="nav-icon fas fa-notes-medical"></i>
            
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Pemeriksaan Pasien</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">

                    <div class="container-fluid d-flex align-items-stretch justify-content-between">

                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">

                            </div>

                        </div>

                        <div class="topbar">

                            <div class="topbar-item">
                                <div
                                    class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2">
                                    <div class="image">
                                        <img src="{{ url('/') }}/public/assets/assets/img/doctor.png"
                                            style="width: 30px;" alt="User Image">
                                    </div>
                                </div>
                            </div>
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                        <?php echo session()->get('nama'); ?>
                                    </span>

                                </div>
                            </div>

                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <a class="nav-link" href="{{ url('/') }}/keluar" role="button">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div
                            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            Odontogram Pasien {{ $biodata->norm }} / {{ $biodata->nama }}
                            <!--end::Info-->
                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->

                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">


                            @include('alert')
                            @include('modal_add_rm')


                            <div class="card card-custom">
                                <div class="card-header card-header-tabs-line">
                                    <div class="card-toolbar">
                                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tab1">
                                                    <span class="nav-icon"><i
                                                            class="flaticon-grid-menu"></i></span>
                                                    <span class="nav-text">Riwayat Medis</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab2">
                                                    <span class="nav-icon"><i
                                                            class="
                                                       fa la-briefcase-medical"></i></span>
                                                    <span class="nav-text">Pemeriksaan Ekstra Oral</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab3">
                                                    <span class="nav-icon"><i
                                                            class="fa la-book-medical"></i></span>
                                                    <span class="nav-text">Pemeriksaan Intra Oral</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab4">
                                                    <span class="nav-icon"><i
                                                            class="fas fa-teeth-open"></i></span>
                                                    <span class="nav-text">Odontogram</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab5">
                                                    <span class="nav-icon"><i
                                                            class="fa la-notes-medical"></i></span>
                                                    <span class="nav-text">Rencana Perawatan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab6">
                                                    <span class="nav-icon"><i
                                                            class="
                                                        fas fa-file-invoice-dollar"></i></span>
                                                    <span class="nav-text">Invoice</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-toolbar">

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                            aria-labelledby="tab1">
                                            @include('tab_riwayat_medis')
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
                                            @include('tab_ekstra_oral')
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3">
                                            @include('tab_intra_oral')
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4">
                                            <div class="card card-custom" id="kt_card_3">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h3 class="card-label">Odontogram</h3>
                                                    </div>

                                                </div>
                                                <div class="card-body">


                                                    @include('odontogram')

                                                </div>


                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5">
                                            @include('tab_rencana_perawatan')
                                        </div>
                                        <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6">
                                            @include('tab_invoice')
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card-footer">
                                    <a href="{{ route('tindakan.show',$biodata->id) }}" class="btn btn-primary">Lanjut
                                        Ke Tindakan dan Obat</a>
                                </div> --}}
                            </div>




                            <br>
                            <div class="card card-custom">
                                <div class="card-header flex-wrap py-5">
                                    <div class="card-title">
                                        <h3 class="card-label">Riwayat Pemeriksaan Odontogram
                                            <span class="text-muted pt-2 font-size-sm d-block"></span>
                                        </h3>
                                    </div>
                                    <div class="card-toolbar">

                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Gigi</th>
                                                <th>Kondisi</th>
                                                <th>Anamnesa</th>
                                                <th>Diagnosis</th>
                                                <th>Tindakan</th>
                                                <th>Pemeriksa</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            @php
                                                $nomor = 1;
                                            @endphp
                                            @foreach ($dataall as $d)
                                                <tr id="tr{{ $d->id }}">
                                                    <td style=" width:5%">{{ $nomor }}</td>

                                                    <td>{{ $d->tanggal }}</td>
                                                    <td>{{ $d->gigi }}</td>

                                                    <td><span style="background-color:{{ $d->warna }}">&nbsp;
                                                            &nbsp;&nbsp;</span>
                                                        {{ $d->kondisi }}({{ $d->singkatan }})
                                                    </td>
                                                    <td>{{ $d->anamnesa }}</td>
                                                    <td>{{ $d->diagnosis }}</td>
                                                    <td>{{ $d->tindakan }}</td>
                                                    <td>{{ $d->pemeriksa }}</td>


                                                </tr>

                                                @php
                                                    $nomor++;
                                                @endphp
                                            @endforeach




                                        </tbody>
                                    </table>
                                </div>

                                </form>
                            </div>


                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>

    <script>

    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ url('/') }}/public/assets/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ url('/') }}/public/assets/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="{{ url('/') }}/public/assets/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ url('/') }}/public/assets/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>


    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ url('/') }}/public/assets/assets/js/pages/widgets.js"></script>
    <!--end::Page Scripts-->

    <script src="{{ url('/') }}/public/assets/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ url('/') }}/public/assets/assets/js/pages/crud/datatables/basic/headers.js"></script>
    <script src="{{ url('/') }}/public/assets/assets/js/pages/crud/datatables/basic/headers1.js"></script>
    <script src="{{ url('/') }}/public/assets/assets/js/pages/crud/datatables/basic/headers2.js"></script>
    <script src="{{ url('/') }}/public/assets/assets/js/pages/crud/datatables/basic/headers3.js"></script>

    {{-- <script src="https://demo-sisfonet.xyz/klinik-gigi/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://demo-sisfonet.xyz/klinik-gigi/assets/js/sb-admin-2.min.js"></script> --}}


    <script>
        $(document).ready(function() {
            var warna = 'navy';
            var ket = "--"
            $('polygon').attr('stroke', warna);
            $('polygon').attr('data-ket', ket);
            $('text').attr('stroke', warna);
            $('text').attr('fill', warna);



            var data = @json($data);

            console.log(data);

            for (var i = 0; i < data.length; i++) {
            
                var gigi = data[i]['gigi'].split("-");
                var tes = document.getElementById(gigi[0]);
                var temp = tes.querySelector('#' + gigi[1]);
                temp.style.fill = data[i]['warna'];
                temp.setAttribute('data-ket', data[i]['kondisi'] + '(' + data[i]['singkatan'] + ')');
            }
            $('polygon').mouseover(function(evt) {
                //  var svg = $('#svgselect').svg('get');
                var sector = $(evt.target);
                var gigi = sector.attr('id');
                var warna = sector.attr('fill');
                var nomor = sector.parent().attr('id');
                var kondisi = sector.attr('data-ket');
                var urlb = '{{ url('/') }}';
                $('#nomorgigi').html(nomor);
                $('#posisigigi').html(gigi);
                $('#kposisi').html(nomor + '-' + gigi);

                $('#kondisi-gigi').html(kondisi);

            });

            $('polygon').mouseout(function(evt) {
                $('#nomorgigi').html('XX');
                $('#posisigigi').html('X');
                $('#kondisi-gigi').html('--');
                $('#kposisi').html('');
            });

            $('polygon').click(function(evt) {
                const idpasien = {{ $biodata->norm }};
                var baseurl = '{{ url('') }}';
                var sector = $(evt.target);
                var judul = document.getElementById('judulgigi');

                var posisigigi = sector.parent().attr('id') + '-' + sector.attr('id')
                judul.innerHTML = posisigigi;
                $('#addrm').modal('show')
                $('#gigiid').val(posisigigi);
                // window.location.href = baseurl+'/addrekammedis/'+idpasien+'/'+posisigigi;
            });

        });
    </script>

    <script>
        // Class definition


        // Class definition
        var KTSelect2 = function() {
            // Private functions
            var demos = function() {
                // basic
                $('#kt_select2_4').select2({
                    placeholder: "Jenis Tindakan",
                    allowClear: true
                });
                $('#kt_select2_4').change(function() {
                    // alert($(this).find(':selected').data('harga'));
                    var value = $(this).find(':selected').data('harga');
                    $('#harga').val(value);
                });

            }



            // Public functions
            return {
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            KTSelect2.init();
        });
    </script>
    <script>
        $(document).ready(function() {

            if (location.hash) {
                $('a[href=' + window.location.pathname + '\'' + location.hash + '\']').tab('show');
            }
            var activeTab = localStorage.getItem('activeTab2');
            if (activeTab) {
                $('a[href="' + activeTab + '"]').tab('show');
            }

            $('body').on('click', 'a[data-toggle=\'tab\']', function(e) {
                e.preventDefault()
                var tab_name = this.getAttribute('href')
                if (history.pushState) {
                    history.pushState(null, null, tab_name)
                } else {
                    location.hash = tab_name
                }
                localStorage.setItem('activeTab2', tab_name)

                $(this).tab('show');
                return false;
            });
            $(window).on('popstate', function() {
                var anchor = location.hash ||
                    $('a[data-toggle=\'tab\']').first().attr('href');
                $('a[href=\'' + anchor + '\']').tab('show');
            });

        });
    </script>
</body>
<!--end::Body-->

</html>
