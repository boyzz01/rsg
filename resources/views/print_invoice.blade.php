<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="{{ url('/') }}/public/assets/">
    <meta charset="utf-8" />
    <title>.</title>
    <meta name="description" content="Invoice example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->

</head>
<!--end::Head-->
<!--begin::Body-->

<style>
    .text-white {
        color: #ffffff !important;
        color: #000 !important;
    }

</style>

<body id="kt_body">
    <!--begin::Main-->
    <!--begin::Header Mobile-->

    <!--end::Header Mobile-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->

                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->

                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="" style="width: 100%;">
                            <!-- begin::Card-->
                            <div class="card card-custom overflow-hidden">
                                <div class="card-body p-0">
                                    <!-- begin: Invoice-->
                                    <!-- begin: Invoice header-->
                                    <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0"
                                        style="">
                                        <div class="col-md-9">
                                            <div
                                                class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                                <h1 class="display-4 text-white font-weight-boldest mb-10">
                                                    INV{{ $id }}
                                                </h1>


                                            </div>
                                            <div class="border-bottom w-100 opacity-20"></div>
                                            <div class="d-flex justify-content-between text-white pt-6">
                                                <div class="d-flex flex-column flex-root">
                                                    <span class="font-weight-bolde mb-2"
                                                        style="font-size: 40px">Tanggal</span>
                                                    <span class="opacity-70"
                                                        style="font-size: 40px">{{ $tgl }}</span>
                                                </div>
                                                <div class="d-flex flex-column flex-root">
                                                    <span class="font-weight-bolder mb-2"
                                                        style="font-size: 40px">Dokter</span>
                                                    <span class="opacity-70"
                                                        style="font-size: 40px">{{ $antri->dokter_p }}</span>
                                                </div>
                                                <div class="d-flex flex-column flex-root">
                                                    <span class="font-weight-bolder mb-2"
                                                        style="font-size: 40px">Pasien</span>
                                                    <span class="opacity-70"
                                                        style="font-size: 40px">{{ $biodata->nama }}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: Invoice header-->
                                    <!-- begin: Invoice body-->
                                    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                        <div class="col-md-9">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="font-weight-boldest font-size-lg text-uppercase "
                                                                style="font-size: 30px ;width:60%">
                                                                Tindakan/Layanan Medis</th>
                                                            <th class="font-weight-boldest font-size-lg text-uppercase"
                                                                style="font-size: 30px ;width:5%">
                                                                Jumlah</th>
                                                            <th class="text-right font-weight-boldest font-size-lg text-uppercase"
                                                                style="font-size: 30px ;width:25%">
                                                                Biaya</th>
                                                            {{-- <th class="text-right pr-0 font-weight-bold text-muted text-uppercase"
                                                                style="font-size: 30px">
                                                                Subtotal</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($layanan as $d)
                                                            <tr class="font-weight-boldest font-size-lg"
                                                                style="font-size: 25px">
                                                                <td class="pl-0 pt-7">{{ $d->header }}
                                                                    ({{ $d->nama }})
                                                                </td>
                                                                <td class="text-right pt-7" style="font-size: 30px">
                                                                    {{ 1 }}</td>
                                                                <td class="text-right pt-7">Rp
                                                                    {{ number_format($d->harga, 0, ',', '.') }}
                                                                </td>
                                                                {{-- <td class="text-danger pr-0 pt-7 text-right"
                                                                    style="font-size: 30px">Rp
                                                                    {{ number_format($d->harga, 0, ',', '.') }}
                                                                </td> --}}
                                                            </tr>
                                                        @endforeach

                                                    </tbody>

                                                    <tbody>



                                                        <tr>
                                                            <td colspan="2" align="right"> <span
                                                                    class="font-size-lg font-weight-bolder mb-1"
                                                                    style="font-size: 30px">TOTAL
                                                                    PEMBAYARAN</span>
                                                            <td align="right"> <span
                                                                    class="font-size-lg font-weight-boldest text-danger mb-1"
                                                                    style="font-size: 40px">Rp
                                                                    {{ number_format($invoice->total, 0, ',', '.') }}
                                                                </span></td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: Invoice body-->
                                    <!-- begin: Invoice footer-->

                                    <!-- end: Invoice footer-->
                                    <!-- begin: Invoice action-->

                                    <!-- end: Invoice action-->
                                    <!-- end: Invoice-->
                                </div>
                            </div>
                            <!-- end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->

                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->



    <!--end::Demo Panel-->
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
</body>
<!--end::Body-->
<script type="text/javascript">
    // window.print();
</script>

</html>
