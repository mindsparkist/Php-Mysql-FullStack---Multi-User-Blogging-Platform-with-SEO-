/*====================================================
  TABLE OF CONTENT
  1. function declearetion
  2. Initialization
====================================================*/
(function ($) {
    /*===========================
    1. function declearetion
    ===========================*/
    var themeApp = {
        fixedNavbar: function () {
            var body = $('body');
            var navbar = $(".site-navbar-wrap");
            var navOffset = navbar.offset();
            var fixedNav = $(".fixed-nav-wrap");
            $(window).scroll(function () {
                scroll = $(window).scrollTop();
                if (scroll > navOffset.top + 112) {
                    fixedNav.addClass("show");
                } else {
                    fixedNav.removeClass("show");
                }
            })
        },
        responsiveIframe: function () {
            $('.single-post-wrap').fitVids();
        },
        highlighter: function () {
            $('pre code').each(function (i, block) {
                hljs.highlightBlock(block);
            });
        },
        menuChild: function () {
            var li = $(".main-menu").find('li');
            $(li).has('ul').addClass('menu-item-has-children').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>');
        },
        mobileMenu: function () {
            $('.menu-open').on('click', function (e) {
                e.preventDefault();
                $('body').toggleClass('mobile-menu-opened');
            });
            $('#backdrop').on('click', function () {
                $('body').toggleClass('mobile-menu-opened');
            });
            var li = $(".mobile-menu").find('li');
            $(li).has('ul').addClass('menu-item-has-children').prepend('<span class="submenu-toggle-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></span>');
            $('.menu-item-has-children').find('.submenu-toggle-button').on('click', function () {
                $(this).toggleClass('opened');
                $(this).siblings('ul').slideToggle();
            });
        },
        SearchProcess: function () {
            $('.search-open').on('click', function (e) {
                e.preventDefault();
                $('.search-popup').addClass('visible');
                $('#search-input').css('visibility', 'visible').focus();
            });
            $('.close-button').on('click', function (e) {
                e.preventDefault();
                $('.search-popup').removeClass('visible');
                $('#search-input').val("");
                $('#search-results').empty();
            });
            $('#search-input').on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $.ajax({
                    url: "getResult.php",
                    type: 'POST',
                    data: { search: value },
                    beforeSend: function () {
                        $('#loader').addClass('visible');
                        //$('#search-results').css('opacity', 0);
                    },
                    success: function (data) {
                        $('#search-results').html(data);
                    },
                    error: function (error) {
                        console.log(error);
                    },
                    complete: function () {
                        $('#loader').removeClass('visible');
                        if ($('#search-input').val().length < 1) {
                            $('#search-results').empty();
                        }
                    },
                });
            });
            $('#search-form').on('submit', function (e) {
                e.preventDefault();
            })
        },
        gallery: function () {
            mediumZoom('.wp-block-gallery img', {
                margin: 30
            });
        },
        init: function () {
            themeApp.fixedNavbar();
            themeApp.responsiveIframe();
            themeApp.highlighter();
            themeApp.menuChild();
            themeApp.mobileMenu();
            themeApp.SearchProcess();
            themeApp.gallery();
        }
    }
    /*===========================
    2. Initialization
    ===========================*/
    $(document).ready(function () {
        themeApp.init();
    });
}(jQuery));

// darkmode
const options = {
    bottom: '500px', // default: '32px'
    right: '100px', // default: '32px'
    left: 'unset', // default: 'unset'
    time: '0.3s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff',  // default: '#fff'
    buttonColorDark: '#100f2c',  // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: true, // default: true,
    label: '🌓', // default: ''
    autoMatchOsTheme: true // default: true
}
const darkmode = new Darkmode(options);
darkmode.showWidget();

// cookie consent
var cookieSettings = new BootstrapCookieConsentSettings({

    // the language, in which the modal is shown
    lang: navigator.language,

    // supported languages (in ./content/)
    languages: ["en", "de"],

    // dialog content
    contentURL: "./content/",

    // cookie name stored as JSON
    cookieName: "cookie-consent-settings",

    // 365 days
    cookieStorageDays: 365,

    // callback function, called after the user has made his selection
    postSelectionCallback: undefined

});

$(".accept").click(function(){
        $(".cookie").hide();
  //Enter your code hear...
    });

new GreenAudioPlayer('.gap-example');
