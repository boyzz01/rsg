/******/
(() => { // webpackBootstrap
    /******/
    "use strict";
    var __webpack_exports__ = {};
    /*!**************************************************************!*\
      !*** ../demo1/src/js/pages/crud/datatables/basic/headers.js ***!
      \**************************************************************/

    var KTDatatablesBasicHeaders = function () {

        var initTable1 = function () {
            var table = $('#kt_datatable2');

            // begin first table
            table.DataTable({
                responsive: true,

            });
        };

        return {

            //main function to initiate the module
            init: function () {
                initTable1();
            },

        };

    }();

    jQuery(document).ready(function () {
        KTDatatablesBasicHeaders.init();
    });

    /******/
})();
//# sourceMappingURL=headers.js.map
