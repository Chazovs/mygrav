jQuery(document).ready(function($) {

    if(mintwp_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var mintwpstickyNavTop = $('.mintwp-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var mintwpstickyNav = function(){
        var mintwpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if(mintwp_ajax_object.sticky_menu_mobile){
            if (mintwpscrollTop > mintwpstickyNavTop) {
                $('.mintwp-primary-menu-container').addClass('mintwp-fixed');
            } else {
                $('.mintwp-primary-menu-container').removeClass('mintwp-fixed'); 
            }
        } else {
                if(window.innerWidth > 1112) {
                    if (mintwpscrollTop > mintwpstickyNavTop) {
                        $('.mintwp-primary-menu-container').addClass('mintwp-fixed');
                    } else {
                        $('.mintwp-primary-menu-container').removeClass('mintwp-fixed'); 
                    }
                }
        }
    };

    mintwpstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        mintwpstickyNav();
    });
    }

    $(".mintwp-nav-primary .mintwp-nav-primary-menu").addClass("mintwp-primary-responsive-menu").before('<div class="mintwp-primary-responsive-menu-icon"></div>');

    $(".mintwp-primary-responsive-menu-icon").click(function(){
        $(this).next(".mintwp-nav-primary .mintwp-nav-primary-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".mintwp-nav-primary .mintwp-nav-primary-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".mintwp-primary-responsive-menu > li").removeClass("mintwp-primary-menu-open");
        }
    });

    $(".mintwp-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("mintwp-primary-menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("mintwp-primary-menu-open");
        });
    });

    $("div.mintwp-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("mintwp-primary-menu-open");
        });
    });

    $(".mintwp-social-icon-search").on('click', function (e) {
        e.preventDefault();
        document.getElementById("mintwp-search-overlay-wrap").style.display = "block";
    });

    $(".mintwp-search-closebtn").on('click', function (e) {
        e.preventDefault();
        document.getElementById("mintwp-search-overlay-wrap").style.display = "none";
    });

    $(".post").fitVids();

    $( 'body' ).prepend( '<div class="mintwp-scroll-top"></div>');
    var scrollButtonEl = $( '.mintwp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.mintwp-scroll-top' ).fadeOut();
        } else {
            $( '.mintwp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if(mintwp_ajax_object.sticky_sidebar){
    $('.mintwp-main-wrapper, .mintwp-sidebar-one-wrapper').theiaStickySidebar({
        containerSelector: ".mintwp-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 890,
    });
    }

    // init Masonry
    var $mintwp_grid = $('.mintwp-posts').masonry({
      itemSelector: '.mintwp-grid-post',
      columnWidth: mintwp_ajax_object.columnwidth,
      gutter: mintwp_ajax_object.gutter,
      percentPosition: true
    });
    // layout Masonry after each image loads
    $mintwp_grid.imagesLoaded().progress( function() {
      $mintwp_grid.masonry('layout');
    });


    $(".mintwp-grid-posts").each(function(){
    var $thisgrid = $(this);

    // init Masonry
    var $mintwp_grid_widget = $thisgrid.masonry({
      itemSelector: '.mintwp-grid-post',
      columnWidth: $thisgrid.find(".mintwp-col-sizer")[0],
      gutter: $thisgrid.find(".mintwp-col-gutter")[0],
      percentPosition: true
    });
    // layout Masonry after each image loads
    $mintwp_grid_widget.imagesLoaded().progress( function() {
      $mintwp_grid_widget.masonry('layout');
    });

    });

});