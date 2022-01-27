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
    <base href="{{ url('/') }}/public/assets/">
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

                            <H3>Tindakan</H3>
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
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div class="card shadow mb-4">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <h5>INV{{ date('Ymd') }}{{ $id }}</h5>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <h6>{{ $biodata[0]->nama }}</h6>
                                                </div>
                                            </div>
                                            <form action="{{ route('tindakan.store') }}" method="post" name="form1"
                                                autocomplete="off">
                                                {{ csrf_field() }}
                                                <div class="form-group row">
                                                    <input type="hidden" name="id_pasien" value="{{ $biodata[0]->id }}">
                                                    <input type="hidden" name="no_trans" value="{{ $id }}"
                                                        autocomplete="off"><label for="namatindakan"
                                                        class="col-lg-2 col-form-label">Jenis
                                                        Tindakan</label>
                                                    <div class="col-lg-3">
                                                        <select class="form-control select2" id="kt_select2_4"
                                                            name="id_tindakan" required>
                                                            <option label="Label"></option>
                                                            @for ($i = 0 ; $i < count($data) ; $i++) @if ($i==0)
                                                                <optgroup label="{{ $data[$i]->header }}">
                                                                <option value="{{ $data[$i]->id }}">{{ $data[$i]->nama}}
                                                                </option>

                                                                @else
                                                                @if ($data[$i]->header==$data[$i-1]->header)
                                                                <option value="{{ $data[$i]->id }}">{{ $data[$i]->nama}}
                                                                </option>
                                                                @else
                                                                <optgroup label="{{ $data[$i]->header }}">
                                                                    <option value="{{ $data[$i]->id }}">{{
                                                                        $data[$i]->nama}}</option>
                                                                    @endif
                                                                    @endif

                                                                    @endfor

                                                        </select>
                                                    </div><label for="jumlahtindakan"
                                                        class="col-lg-1 col-form-label text-right">Jumlah</label>
                                                    <div class="col-lg-2"><input type="number" class="form-control"
                                                            name="jumlah" value="1" id="jumlahtindakan" required=""
                                                            autocomplete="off"></div>
                                                    <div class="col-lg-2"><button type="submit" name="simpantindakan"
                                                            class="btn btn-primary">OK</button></div>
                                                </div>
                                            </form>

                                            <div class="table table-bordered table-checkable">
                                                <table class="tabel-keranjang" id="tabel_keranjang" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Aksi</th>
                                                            <th>Jenis</th>
                                                            <th>Nama</th>

                                                            <th>Harga/Biaya</th>
                                                            <th>Jumlah</th>

                                                            <th>Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        @php
                                                        $nomor = 1;
                                                        $item = 0;
                                                        $total =0;
                                                        @endphp
                                                        @foreach ($layanan as $d)
                                                        <tr id="tr{{$d->id}}">

                                                            <td nowrap="nowrap">
                                                                <form action="{{ route('tindakan.destroy', $d->id) }}"
                                                                    method="POST">


                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger btn-icon"
                                                                        title="Delete"> <i class="la la-trash">
                                                                        </i>
                                                                    </button>

                                                                </form>
                                                            </td>
                                                            <td>{{ $d->header }}</td>
                                                            <td>{{ $d->nama }}</td>

                                                            <td>{{ $d->biaya }}</td>
                                                            <td align="center">{{ $d->jumlah }}</td>


                                                            <td align="right">{{$d->jumlah*$d->biaya }}</td>


                                                        </tr>

                                                        @php
                                                        $nomor++;
                                                        $item+=$d->jumlah;
                                                        $subtotal=$d->jumlah*$d->biaya;
                                                        $total+=$subtotal;
                                                        @endphp
                                                        @endforeach

                                                    </tbody>

                                                    <tbody>

                                                        <tr style="margin-top: 20px">
                                                            <td colspan="4" align="right"><strong>Total</strong></td>
                                                            <td align="center"><strong>{{ $item }} Items</strong></td>

                                                            <td align="right"><strong></strong></td>
                                                        </tr>
                                                        <form
                                                            action="https://demo-sisfonet.xyz/klinik-gigi/layanan/simpantransaksi"
                                                            method="post" id="formbayar"></form>
                                                        <tr>
                                                            <td colspan="5" align="right"><strong>Total Harus
                                                                    Dibayar</strong></td>
                                                            <td align="right"><strong>{{ $total }}</strong></td>
                                                        </tr>

                                                        {{-- <tr>
                                                            <td colspan="5" align="right"><strong>Bayar
                                                                    Sekarang</strong></td>
                                                            <td align="right"><input type="text" size="12"
                                                                    class="ml-auto pl-0 uang text-right garis-bawah"
                                                                    name="bayarsekarang" id="bayarsekarang" value="0"
                                                                    onclick="this.select();" required=""
                                                                    autocomplete="off"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" align="right"><strong>Sisa</strong></td>
                                                            <td align="right"><input type="text" size="12"
                                                                    class="ml-auto pl-0 text-right garis-bawah"
                                                                    name="sisabayar" id="sisabayar" readonly="on"
                                                                    autocomplete="off"></td><input type="hidden"
                                                                id="sisaclear" autocomplete="off">
                                                        </tr> --}}
                                                    </tbody>
                                                </table><button type="submit" name="simpantransaksi"
                                                    id="btnsimpantransaksi"
                                                    class="btn btn-primary mt-4 mb-2 float-right">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

    <script src="assets/plugins/custom/gmaps/gmaps.js"></script>
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
</body>
<!--end::Body-->

</html>