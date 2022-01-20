 <div id="kt_header" class="header header-fixed">

     <div class="container-fluid d-flex align-items-stretch justify-content-between">

         <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

             <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">

             </div>

         </div>

         <div class="topbar">

             <div class="topbar-item">
                 <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2">
                     <div class="image">
                         <img src="assets/img/doctor.png" style="width: 30px;" alt="User Image">
                     </div>
                 </div>
             </div>
             <div class="topbar-item">
                 <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                     id="kt_quick_user_toggle">
                     <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                     <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo session()->get('nama') ?></span>

                 </div>
             </div>

             <div class="topbar-item">
                 <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                     id="kt_quick_user_toggle">
                     <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                         <a class="nav-link" href="../../keluar" role="button">
                             <i class="fas fa-sign-out-alt"></i>
                         </a>
                     </span>
                 </div>
             </div>

         </div>

     </div>

 </div>
