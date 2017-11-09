/*!
 * Bambang setyawan
 * Copyright 2017 www.bambangsetyawan.com
 * Licensed  GPL
 * upload ver: 1.0.1
 */

(function ($) {
    "use strict";

    $(function () {

        $(document).on('click', '.send-wa', function () {
            var wa_api = 'https://api.whatsapp.com/send?phone=6285655991221&text=Halo Cozymart.net';
            window.open(wa_api, 'WhatsApp Chat Web', 'width=500, height=400, left=24, top=24, scrollbars, resizable');
        });

        $(document).on('click', '.second-nav-toggle', function () {
            $('.second-nav').toggle();
        });

        $(document).on('click', '.menu-toggle', function () {
            $('.main-navigation').toggle();
            $('.modal').toggle();
            $(this).attr('aria-expanded','true');
        });

        $(document).on('click', '.modal', function () {
            $('.main-navigation').toggle();
            $('.modal').toggle();
            $('.menu-toggle').attr('aria-expanded', 'false');
        });

    });


})(jQuery);

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
    var isIe = /(trident|msie)/i.test( navigator.userAgent );

    if ( isIe && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false );
    }
} )();



