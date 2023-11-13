jQuery(document).ready(function ($) {

    var slider_auto, slider_loop, rtl;

    if (yummy_bites_data.auto == '1') {
        slider_auto = true;
    } else {
        slider_auto = false;
    }

    if (yummy_bites_data.loop == '1') {
        slider_loop = true;
    } else {
        slider_loop = false;
    }

    if (yummy_bites_data.rtl == '1') {
        rtl = true;
    } else {
        rtl = false;
    }

    //slider One
    $('.banner-slider.style-one .item-wrapper').owlCarousel({
        items: 1,
        autoplay: slider_auto,
        loop: slider_loop,
        nav: true,
        dots: false,
        autoplaySpeed: 800,
        rtl: rtl,
        autoplayTimeout: yummy_bites_data.speed,
        animateOut: yummy_bites_data.animation,
    });

    //back to top
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').addClass('active');
        } else {
            $('.back-to-top').removeClass('active');
        }
    });

    $('.back-to-top').on('click', function () {
        $('body,html').animate({
            scrollTop: 0,
        }, 600);
    });

    /* Header Search toggle
  --------------------------------------------- */
    $('.header-search .search-toggle').on( 'click', function () {
        $(this).siblings('.header-search-wrap').fadeIn();
        $('.header-search-wrap form .search-field').focus();
    });

    $('.header-search .close').on('click', function () {
        $(this).parents('.header-search-wrap').fadeOut();
    });

    $('.header-search-wrap').keyup(function (e) {
        if (e.key == 'Escape') {
            $('.header-search .header-search-wrap').fadeOut();
        }
    });
    $('.header-search .header-search-inner .search-form').on('click', function (e) {
        e.stopPropagation();
    });

    $('.header-search .header-search-inner').on('click',function (e) {
        $(this).parents('.header-search-wrap').fadeOut();
    });

    /* Desktop Navigation
   --------------------------------------------- */
    $('.site-header .menu-item-has-children:not(.mobile-header .menu-item-has-children), .footer-navigation .menu-item-has-children:not(.mobile-header .menu-item-has-children)').find('> a').after('<button  tabindex="-1" class="submenu-toggle-btn"><svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.978478 0.313439C1.15599 0.135928 1.43376 0.11979 1.62951 0.265027L1.68558 0.313439L5.9987 4.62632L10.3118 0.313439C10.4893 0.135928 10.7671 0.11979 10.9628 0.265027L11.0189 0.313439C11.1964 0.49095 11.2126 0.768726 11.0673 0.964466L11.0189 1.02055L6.35225 5.68721C6.17474 5.86472 5.89697 5.88086 5.70122 5.73562L5.64514 5.68721L0.978478 1.02055C0.783216 0.825283 0.783216 0.508701 0.978478 0.313439Z" fill="currentColor"/></svg></button>');
    
    $('.mobile-header .menu-item-has-children').find('> a').after('<button class="submenu-toggle-btn"><svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.978478 0.313439C1.15599 0.135928 1.43376 0.11979 1.62951 0.265027L1.68558 0.313439L5.9987 4.62632L10.3118 0.313439C10.4893 0.135928 10.7671 0.11979 10.9628 0.265027L11.0189 0.313439C11.1964 0.49095 11.2126 0.768726 11.0673 0.964466L11.0189 1.02055L6.35225 5.68721C6.17474 5.86472 5.89697 5.88086 5.70122 5.73562L5.64514 5.68721L0.978478 1.02055C0.783216 0.825283 0.783216 0.508701 0.978478 0.313439Z" fill="currentColor"/></svg></button>');
    $('.main-navigation').prepend('<button class="close-btn"></button>');

    $('.submenu-toggle-btn').on('click', function () {
        $(this).siblings('.sub-menu').stop().slideToggle();
        $(this).toggleClass('active');
    });

    $('.header-main .toggle-btn').on('click', function () {
        $(this).siblings('.main-navigation').animate({
            width: 'toggle'
        });
    });
    $('.main-navigation .close-btn').on('click', function () {
        $('.main-navigation').animate({
            width: 'toggle'
        });
    });

    /* Mobile Navigation
--------------------------------------------- */

    var adminbarHeight = $('#wpadminbar').outerHeight();
    if (adminbarHeight) {
        $('.site-header .mobile-header .header-bottom-slide .header-bottom-slide-inner ').css("top", adminbarHeight);
    } else {
        $('.site-header .mobile-header .header-bottom-slide .header-bottom-slide-inner ').css("top", 0);
    }

    $('.sticky-header .toggle-btn,.site-header .mobile-header .toggle-btn-wrap .toggle-btn').on( 'click', function () {
        $('body').addClass('mobile-menu-active');
        $('.site-header .mobile-header .header-bottom-slide .header-bottom-slide-inner ').css("transform", "translate(0,0)");
    });
    $('.site-header .mobile-header .header-bottom-slide .header-bottom-slide-inner .container .mobile-header-wrap > .close').on( 'click', function () {
        $('body').removeClass('mobile-menu-active');
        $('.site-header .mobile-header .header-bottom-slide .header-bottom-slide-inner ').css("transform", "translate(-100%,0)");
    });

    /*  Navigation Accessiblity
    --------------------------------------------- */
    $(document).on('mousemove', 'body', function (e) {
        $(this).removeClass('keyboard-nav-on');
    });
    $(document).on('keydown', 'body', function (e) {
        if (e.which == 9) {
            $(this).addClass('keyboard-nav-on');
        }
    });

    $('.nav-menu li a, .nav-menu li .submenu-toggle-btn').on('focus', function () {
        $(this).parents('li').addClass('focus');
    }).blur(function () {
        $(this).parents('li').removeClass('focus');
    });


    /*  Scroll top
    --------------------------------------------- */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').addClass('active');
        } else {
            $('.back-to-top').removeClass('active');
        }
    });

    $('.back-to-top').on('click', function () {
        $('body,html').animate({
            scrollTop: 0,
        }, 600);
    });

    //Ajax for Add to Cart
    $('.btn-simple').on('click', function () {
        $(this).addClass('adding-cart');
        var product_id = $(this).attr('id');

        $.ajax({
            url: yummy_bites_data.ajax_url,
            type: 'POST',
            data: 'action=yummy_bites_add_cart_single&product_id=' + product_id,
            success: function (results) {
                $('#' + product_id).replaceWith(results);
            }
        }).done(function () {
            var cart = $('#cart-' + product_id).val();
            $('.cart .number').html(cart);
        });
    });

    //Ajax Blog Section load more
    function blogPaginationAjax( maxpageNum, next_num,  ){
        $.ajax({
            url: yummy_bites_data.ajax_url, 
            type: 'POST',
            data: {
                action: 'yummy_bites_blog_section_pagination', 
                paged: next_num,
            },
            success: function( response ) {         
                $('.blog-sec__content-wrapper .blog-sec__inner-wrapper').append(response);
                var postShareBtns = $('.post .ajax-social-share .share-posts .post-share-icon');
                $.each(postShareBtns, function(index, value){
                    $(value).on('click', function(){
                        var shareModal = $(value).next();
                        shareModal.slideToggle();
                    })
                })
            }
        });
        if( maxpageNum == next_num ){
            $('.blog-load-more').addClass('inactive');
            $('.blog-load-more.inactive').text('No More Posts');
        }
    }
    
    $(".blog-load-more").on('click',function(e) {
        var pageNum = 1;
        pageNum     = Number($(this).attr('data-pagenum'));
        var maxpageNum  = $(this).attr('data-pages');
        pageNum   = pageNum+1;
        $(this).attr('data-pagenum', pageNum);
        e.preventDefault(); // don't trigger page reload
        blogPaginationAjax( maxpageNum, pageNum );
    });

});