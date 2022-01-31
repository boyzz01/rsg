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

                            <H3>Master Data Pasien</H3>
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
                            @include('modal_add_pasien')
                            @include('modal_edit_pasien')
                            <div class="card card-custom">
                                <div class="card-header flex-wrap py-5">
                                    <div class="card-title">
                                        <h3 class="card-label">Data Pasien
                                            <span class="text-muted pt-2 font-size-sm d-block"></span>
                                        </h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <!--begin::Dropdown-->

                                        <!--end::Dropdown-->
                                        <!--begin::Button-->
                                        <a data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn btn-primary font-weight-bolder">
                                            <i class="la la-plus"></i>Tambah Pasien Baru</a>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <table class="table table-bordered table-checkable " id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th style="width:5%">ID Pasien</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Pekerjaan</th>
                                                <th>No HP</th>
                                                <th>Alamat</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            @php
                                            $nomor = 1;
                                            @endphp
                                            @foreach ($data as $d)
                                            <tr id="tr{{$d->id}}">
                                                <td style=" width:5%">{{ $nomor }}</td>
                                                <td nowrap="nowrap">
                                                    <form action="{{ route('pasien.destroy', $d->id) }}" method="POST">

                                                        <a href="javascript:;"
                                                            class="btn btn-sm btn-info btn-icon edit_btn"
                                                            id="{{$d->id}}" title=" Edit Data Pasien"
                                                            data-tgl="{{ $d->tgl_lahir }}">
                                                            <i class="la la-edit"></i>
                                                        </a>

                                                        <a href="{{ route('riwayat-medis.show',$d->id) }}"
                                                            class="btn btn-sm btn-success btn-icon"
                                                            title="Riwayat Medis">
                                                            <i class="fas fa-history"></i>
                                                        </a>

                                                        <a href="{{ url('/') }}/odontogram/{{ $d->id }}"
                                                            class="btn btn-sm btn-success btn-icon" title="Odontogram">
                                                            <i class="fas fa-teeth-open"></i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger btn-icon"
                                                            title="Delete"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                                class="la la-trash">
                                                            </i>
                                                        </button>

                                                    </form>
                                                </td>
                                                <td>{{ $d->id }}</td>
                                                <td>{{ $d->nama }}</td>

                                                <td>{{ $d->jk }}</td>
                                                <td>{{ $d->pekerjaan }}</td>
                                                <td>{{ $d->hp }}</td>
                                                <td>{{ $d->alamat }}</td>


                                            </tr>

                                            @php
                                            $nomor++;
                                            @endphp
                                            @endforeach




                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
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
        $(document).on('click', '.edit_btn', function () {

        var id = $(this).attr('id');
        $('#updateModal').modal('show')


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


        var tgl = $(this).attr('data-tgl')
        // console.log(data);

        $('#idpasien').val(id);
       
        var datatgl = tgl.split('-');
        $('#namapasien').val(data[3]);
        $('.picker').datepicker('setDate', datatgl[1]+'/'+datatgl[2]+'/'+datatgl[0]);
        $('#pekerjaan').val(data[5]);
        $('#hp').val(data[6]);
        $('#alamat').val(data[7]);

        if(data[4]=='Laki-Laki'){
                    $("#check1").attr("checked", true);
                    $("#check2").attr("checked", false);
                }else{
                    $("#check1").attr("checked", false);
                    $("#check2").attr("checked", true);
                }

        });
    </script>

</body>
<!--end::Body-->

</html>