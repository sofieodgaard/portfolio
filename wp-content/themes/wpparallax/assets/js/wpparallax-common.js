jQuery(document).ready(function($) {
    var headerHeight = $('#masthead').outerHeight();
    /**
     * For Parallax Background
     **/
    $('.parallax-section').jarallax();

    /**
     * Sticky menu
     */
    var IsSticky = wpparallax_option.is_sticky;
    if (IsSticky == 'show') {
        $(".header-wrap").sticky({
            topSpacing: 0
        });
    }

    $('body').on('click', '.plx-nav li', function() {
        $('.main-navigation').removeClass('toggled');
    });

    /**
     * Wow Animation
     */
    var WowOptionVal = wpparallax_option.mode;
    if (WowOptionVal == 'show' && $('body').hasClass('home')) {
        new WOW().init();
    }

    /**
     * For Parallax Menu
     **/
    $('.home .plx-nav.nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 1500,
        scrollOffset: headerHeight,
        scrollThreshold: 0.5,
    });

    /**
     * Search Option
     **/

    $('.search-icon').on('click', function() {
        $('.full-search-container').addClass('search_on');
    });
    $('.closebtn').on('click', function() {
        $('.full-search-container').removeClass('search_on');
    });



    /*For main Slider */

    $('.wpop-slider').lightSlider({
        adaptiveHeight: false,
        item: 1,
        slideMargin: 0,
        loop: true,
        pager: false,
        auto: true,
        speed: 1500,
        pause: 4200,
        enableDrag: true,
        onSliderLoad: function() {
            $('.wpop-slider').removeClass('cS-hidden');
        }
    });

    /* Portfolio */

    var $grid = $('.portfolio-postse').imagesLoaded(function() {
        // init Isotope after all images have loaded
        $grid.isotope({
            itemSelector: '.portfolio-post-wrape',
            layoutMode: 'packery'
        });
    });

    $('.portfolio-post-filter').on('click', '.filter', function() {
        $('.portfolio-post-filter .filter').removeClass('active');
        $(this).addClass('active');
        var filterValue = $(this).attr('data-filter');
        $('.portfolio-postse').isotope({
            filter: filterValue
        });
    });

    /* Team section */
    $('.team-content:first').show();
    $('.team-thumb:first').addClass('active');
    $('.team-thumb').click(function() {
        $('.team-thumb').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('id');
        $('.team-content').hide();
        $('.' + id).fadeIn();
        return false;
    });

    /**
     * Testimonial Section
     */
    $(".testimonialwrap").lightSlider({
        item: 1,
        pager: true,
        loop: true,
        controls: false,
    });

    /**
     * Google map Toggle
     */
    $(window).bind('load', function() {
        $('.googlemap-content').hide();
    });

    var open = false;
    $('.googlemap-toggle').on('click', function() {
        if (!open) {
            open = true;
        }
        $('.googlemap-content').slideToggle();
        $(this).toggleClass('active');
    });

    /**
     * Gallery Lightbox
     */
    $("a[rel^='prettyPhoto']").prettyPhoto({
        show_title: false,
        deeplinking: false,
        social_tools: ''
    });

    /* Submenu toggle */
/*    if ($(window).width() < 768) {
        var submenuItem = $('ul.nav-menu li.menu-item-has-children');
        submenuItem.find('ul.sub-menu').hide();
        submenuItem.on('click', function() {
            $(this).find('ul.sub-menu').slideToggle();
        });
    }*/
    if ($(window).width() < 766) {

        $('<div class="wplx-sub-toggle"></div>').insertBefore('li.menu-item-has-children ul');
        $('<div class="wplx-sub-toggle-children"></div>').insertBefore('li.page_item_has_children ul');

        $('body').on('vclick touchstart','.wplx-sub-toggle', function()  {
          $(this).next('ul.sub-menu').slideToggle();
          $(this).parent('li').toggleClass('wplx-mob-menu-toggle');
        });

        $('body').on('vclick touchstart','.wplx-sub-toggle-children',function() {
            $(this).next('ul').slideToggle();
        });

    }else{
        $('.wplx-sub-toggle,.wplx-sub-toggle-children').remove();
    }


});

/**
 * Back to top button
 **/
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 1000) {
        jQuery('#wpop-top').fadeIn();
    } else {
        jQuery('#wpop-top').fadeOut();
    }
});

jQuery('#wpop-top').click(function() {
    jQuery("html, body").animate({
        scrollTop: 0
    }, 2000);
    return false;
});