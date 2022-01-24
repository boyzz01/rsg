/******/
(() => { // webpackBootstrap
    /******/
    "use strict";
    var __webpack_exports__ = {};
    /*!*****************************************************!*\
      !*** ../demo1/src/js/pages/features/cards/tools.js ***!
      \*****************************************************/


    var KTCardTools = function () {
        // Toastr
        var initToastr = function () {
            toastr.options.showDuration = 1000;
        }

        // Demo 1


        // Demo 2
        var demo2 = function () {
            // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
            var card = new KTCard('kt_card_2');

            // Toggle event handlers


            // Reload event handlers
            card.on('reload', function (card) {
                toastr.info('Leload event fired!');

                KTApp.block(card.getSelf(), {
                    overlayColor: '#000000',
                    type: 'spinner',
                    state: 'primary',
                    opacity: 0.05,
                    size: 'lg'
                });

                // update the content here

                setTimeout(function () {
                    KTApp.unblock(card.getSelf());
                }, 2000);
            });
        }

        var demo3 = function () {
            // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
            var card = new KTCard('kt_card_3');

            // Toggle event handlers


            // Reload event handlers
            card.on('reload', function (card) {
                toastr.info('Leload event fired!');

                KTApp.block(card.getSelf(), {
                    overlayColor: '#000000',
                    type: 'spinner',
                    state: 'primary',
                    opacity: 0.05,
                    size: 'lg'
                });

                // update the content here

                setTimeout(function () {
                    KTApp.unblock(card.getSelf());
                }, 2000);
            });
        }

        // Demo 3

        return {
            //main function to initiate the module
            init: function () {
                initToastr();

                // init demos

                demo2();
                demo3();

            }
        };
    }();

    jQuery(document).ready(function () {
        KTCardTools.init();
    });

    /******/
})();
//# sourceMappingURL=tools.js.map
