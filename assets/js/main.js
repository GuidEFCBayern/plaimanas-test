window.onload = function() {
    $(".preload").delay(400).fadeOut("200", function () {
        $('#preload').addClass('move');
        $('#preload').fadeOut(200);
    });
};

$(document).ready(function () {
    new WOW().init();

    $(function() {
        AOS.init({
            duration: 2000,
            once: true,
            offset: 0,
        });
    });

    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });

    $('[data-toggle="menu-mobile"]').click(function(){
        $(this).toggleClass('close');
        $('.global-container').toggleClass('sidebar-open');
        $('nav.menu').toggleClass('open');
    });
    $('[data-toggle="menu-overlay"]').click(function(){
        $('[data-toggle="menu-mobile"]').removeClass('close');
        $('.global-container').removeClass('sidebar-open');
        $('nav.menu').removeClass('open');
    });


    $("nav.menu .dropdown-toggle").hover(
        function () {
            $('.site-header').addClass("box-hover");
        },
        function () {
            $('.site-header').removeClass("box-hover");
        }
    );
    $("nav.menu .dropdown-menu .link").hover(
        function () {
            $('.site-header').addClass("box-hover");
            $(this).closest('dropdown').addClass('show');
        },
        function () {
            $('.site-header').removeClass("box-hover");
            $(this).closest('dropdown').removeClass('show');
        }
    );

    function toggleDropdown (e) {
        const _d = $(e.target).closest('.dropdown'),
          _m = $('.dropdown-menu', _d);
        setTimeout(function(){
          const shouldOpen = e.type !== 'click' && _d.is(':hover');
          _m.toggleClass('show', shouldOpen);
          _d.toggleClass('show', shouldOpen);
          $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
        }, e.type === 'mouseleave' ? 300 : 0);
    }

    $('body')
        .on('mouseenter mouseleave','.dropdown',toggleDropdown)
        .on('click', '.dropdown-menu a', toggleDropdown);

    $('.accept-pdpa').click(function() {
        $('.site-footer .pdpa').addClass('hide');
    });


    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({triggerElement: "#triggerHead", duration: $(".section-animate").height()})
    .setTween("#animate", {scale: 0.2, top:50})
    .addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: $(".section-pin1").height()})
    .setPin("#pin1")
    .addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: $(".section-pin2").height()})
    .setPin("#pin2")
    .addTo(controller);

});