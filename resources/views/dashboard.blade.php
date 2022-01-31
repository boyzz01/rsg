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
    <base href="{{ url('/') }}/">
    <meta charset="utf-8" />
    <title>Edental Clinic | Dashboard</title>
    <meta name="description" content="Aside light theme example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="public/assets/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="public/assets/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="public/assets/assets/css/themes/layout/header/base/dark.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/assets/css/themes/layout/header/menu/dark.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/assets/css/themes/layout/aside/light.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="public/assets/assets/img/logo2.png" />
    <link href="public/assets/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
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
            @include('sidebar')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                @include('topbar')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div
                            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->

                            <H3>Dashboard</H3>
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
                            @include('modal_cari_pasien')
                            @include('modal_add_pasien3')
                            @include('modal_masukkan')
                            <div class="card card-custom">
                                <div class="card-header card-header-tabs-line">
                                    <div class="card-toolbar">
                                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tab1">
                                                    <span class="nav-icon"><i class="flaticon2-hourglass-1"></i></span>
                                                    <span class="nav-text">Antrian Pasien</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab2">
                                                    <span class="nav-icon"><i class="
                                                        far fa-arrow-alt-circle-right"></i></span>
                                                    <span class="nav-text">Masukkan Pasien Keruangan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab3">
                                                    <span class="nav-icon"><i class="fa fa-person-booth"></i></span>
                                                    <span class="nav-text">Pasien dalam Ruangan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab4">
                                                    <span class="nav-icon"><i class="fa fa-clipboard-check"></i></span>
                                                    <span class="nav-text">Pasien Selesai</span>
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
                                            @include('tab_antrian')
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
                                            @include('tab_masukkan_ruangan')
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3">
                                            @include('tab_pasien_in_room')
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4">
                                            @include('tab_pasien_selesai')
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br>




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
    <script src="public/assets/assets/plugins/global/plugins.bundle.js"></script>
    <script src="public/assets/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="public/assets/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="public/assets/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

    <script src="public/assets/assets/plugins/custom/gmaps/gmaps.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="public/assets/assets/js/pages/widgets.js"></script>
    <!--end::Page Scripts-->

    <script src="public/assets/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="public/assets/assets/js/pages/crud/datatables/basic/headers.js"></script>
    <script src="public/assets/assets/js/pages/crud/datatables/basic/headers1.js"></script>
    <script src="public/assets/assets/js/pages/crud/datatables/basic/headers2.js"></script>
    <script src="public/assets/assets/js/pages/crud/datatables/basic/headers3.js"></script>

    <script src="public/assets/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
    <script>
        $(document).ready(function() 
        {
            
            if (location.hash) {
                    $('a[href=\'' + location.hash + '\']').tab('show');
                    }
                    var activeTab = localStorage.getItem('activeTab');
                    if (activeTab) {
                    $('a[href="' + activeTab + '"]').tab('show');
                    }

                    $('body').on('click', 'a[data-toggle=\'tab\']', function (e) {
                    e.preventDefault()
                    var tab_name = this.getAttribute('href')
                    if (history.pushState) {
                        history.pushState(null, null, tab_name)
                    }
                    else {
                        location.hash = tab_name
                    }
                    localStorage.setItem('activeTab', tab_name)

                    $(this).tab('show');
                    return false;
                    });
                    $(window).on('popstate', function () {
                    var anchor = location.hash ||
                        $('a[data-toggle=\'tab\']').first().attr('href');
                    $('a[href=\'' + anchor + '\']').tab('show');
                    });
            console.log("1");
            $('#kt_datatable tbody').on('click', 'tr', function () {
          
            var data =  $('#kt_datatable').DataTable().row(this).data();
           // console.log(data);
            var idp = data[1];
            var nmp = data[2];
            var almt = data[4];
            $('#caripasien').modal('hide');
            $('#idpasienc').val(idp);
            $('#idc').val(idp);
            $('#namapasienc').val(nmp);
            $('#alamatpasienc').val(almt);
            });
        });
    </script>


    <script>
        $(document).on('click', '.edit_btn2', function () {

var id = $(this).attr('id');
$('#modalmasukkan').modal('show')
console.log(id);

// var data = $("tr"+id).children("td").map(function() {
//    return $(this).text();
// }).get();

//       console.log('#tr'+id);
var data = Array();
var tr = document.getElementById("tr" + id);
var td = tr.getElementsByTagName("td");
for (var i = 0; i < td.length; i++) {
    data[i] = td[i].innerHTML;
    //  console.log(data[i]);
}




$('#idantrian').val(id);


});
    </script>
</body>
<!--end::Body-->

</html>