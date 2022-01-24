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

    <base href="../public/assets/">
    <meta charset="utf-8" />
    <title>Edental Clinic | Dashboard</title>
    <meta name="description" content="Aside light theme example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/img/logo2.png" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
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
                            Odontogram Pasien {{ $biodata->id }} / {{ $biodata->nama }}
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

                            <div class="card card-custom" id="kt_card_3">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">Odontogram</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-icon btn-sm btn-primary mr-1" data-card-tool="toggle"
                                            data-toggle="tooltip" data-placement="top" title="Toggle Card">
                                            <i class="ki ki-arrow-down icon-nm"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="card-body">


                                    @include('odontogram')

                                </div>
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-primary mr-2">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>

                            </div>
                            <br>
                            {{-- @include('pemeriksaan_oral') --}}



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
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>


    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/widgets.js"></script>
    <!--end::Page Scripts-->

    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/crud/datatables/basic/headers.js"></script>
    <script src="assets/js/pages/crud/datatables/basic/headers1.js"></script>
    <script src="assets/js/pages/crud/datatables/basic/headers2.js"></script>
    <script src="assets/js/pages/crud/datatables/basic/headers3.js"></script>

    <script src="https://demo-sisfonet.xyz/klinik-gigi/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://demo-sisfonet.xyz/klinik-gigi/assets/js/sb-admin-2.min.js"></script>
    {{-- <script src="assets/js/pages/features/cards/tools.js"></script> --}}

    <script>
        $(document).ready(function () {
        var warna = 'navy';
        $('polygon').attr('stroke', warna);
        $('text').attr('stroke', warna);
        $('text').attr('fill', warna);

    $('polygon').mouseover(function (evt) {
      //  var svg = $('#svgselect').svg('get');
        var sector = $(evt.target);
        var gigi = sector.attr('id');
        var warna = sector.attr('fill');
        var nomor = sector.parent().attr('id');
        $('#nomorgigi').html(nomor);
        $('#posisigigi').html(gigi);
        $('#kposisi').html(nomor+'-'+gigi);
        // $.ajax({
        //     type : "POST",
        //     url  : {{ url('/') }}+"/medis/getnamasimbol",
        //     dataType : "JSON",
        //     data : {warna: warna},
        //     cache:false,
        //     success: function(data){
        //     $('#kondisi-gigi').html(data.nama+' ('+data.singkatan+')');
        //     },
        //     error: function(jqXHR, textStatus, errorThrown){
        //     $('#kondisi-gigi').html('Data tidak ditemukan');
        //     }

        // })
    });

    $('polygon').mouseout(function (evt) {
      $('#nomorgigi').html('XX');
      $('#posisigigi').html('X');
      $('#kondisi-gigi').html('--');
      $('#kposisi').html('');
    });

      $('polygon').click(function (evt) {
      const idpasien = {{ $biodata->id }};
      var baseurl = '{{ url('') }}';
      var sector = $(evt.target);
      var posisigigi = sector.parent().attr('id') + '-' + sector.attr('id');
    
      window.location.href = baseurl+'/addrekammedis/'+idpasien+'/'+posisigigi;
    });
    // $('polygon').mouseover(function (evt) {
    //   var svg = $('#svgselect').svg('get');
    //   var sector = $(evt.target);
    //   var gigi = sector.attr('id');
    // //  var warna = sector.attr('fill');
    //   var nomor = sector.parent().attr('id');
    //   $.ajax({
    //       type : "POST",
    //       url  : baseurl+"/medis/getnamasimbol",
    //       dataType : "JSON",
    //       data : {warna: warna},
    //       cache:false,
    //     success: function(data){
    //       $('#kondisi-gigi').html(data.nama+' ('+data.singkatan+')');
    //     },
    //     error: function(jqXHR, textStatus, errorThrown){
    //       $('#kondisi-gigi').html('Data tidak ditemukan');
    //     }

    //   })
    //   $('#nomorgigi').html(nomor);
    //   $('#posisigigi').html(gigi);
    //   $('#kposisi').html(nomor+'-'+gigi);
    // });
    // $('polygon').mouseout(function (evt) {
    //   $('#nomorgigi').html('XX');
    //   $('#posisigigi').html('X');
    //   $('#kondisi-gigi').html('--');
    //   $('#kposisi').html('');
    // });
    // $('polygon').click(function (evt) {
    //   const idpasien = $('.id-pasien').data('id');
    //   var sector = $(evt.target);
    //   var posisigigi = sector.parent().attr('id') + '-' + sector.attr('id');
    //   window.location.href = baseurl+'medis/addrekammedis/'+idpasien+'/'+posisigigi+'.html';
    // });
});
    </script>
</body>
<!--end::Body-->

</html>