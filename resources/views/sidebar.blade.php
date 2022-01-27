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
        <a href="{{ url('/') }}" class="brand-logo">
            <img alt="Logo" src="public/assets/assets/img/logo3.png" style="width:150px;" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
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


                <li class="menu-item <?php active("");?>" aria-haspopup="true">
                    <a href="../../" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <i class="nav-icon fas fa-paste"></i>

                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item <?php active ('pasien');?>" aria-haspopup="true">
                    <a href="{{ url('/') }}/pasien" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <i class="nav-icon 
                            fas fa-hospital-user"></i>

                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Pasien</span>
                    </a>
                </li>

                <li class="menu-item menu-item-submenu <?php open ('data-tindakan');?>" aria-haspopup="true"
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
                            <li class="menu-item <?php active ('data-tindakan');?>" aria-haspopup="true">
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


                <li class="menu-item menu-item-submenu <?php open ('simbol');?>" aria-haspopup="true"
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
                            <li class="menu-item <?php active ('simbol');?>" aria-haspopup="true">
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