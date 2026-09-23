(function ($) {
  "use strict"

  /* 1. Proloder */
  $(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow');
    $('body').delay(450).css({
      'overflow': 'visible'
    });
  });


  /* 2. Mobile Responsive Off-Canvas Sidebar Drawer & SlickNav */
  var menu = $('ul#navigation');
  if (menu.length) {
    menu.slicknav({
      prependTo: ".mobile_menu",
      closedSymbol: '+',
      openedSymbol: '-',
      allowParentLinks: true
    });

    // Detect actual DOZO logo source from the page
    var logoImg = $('.main-header .logo .big-logo img').first().attr('src') ||
                  $('.main-header .logo img').first().attr('src') ||
                  'assets/img/logo/logo.png';

    // Clone nav items HTML
    var navItemsHtml = '';
    menu.children('li').each(function () {
      var $li = $(this).clone();
      // Remove any unwanted desktop dropdown formatting
      navItemsHtml += '<li class="dozo-drawer-item">' + $li.html() + '</li>';
    });

    // Build the standalone Mobile Sidebar Drawer & Backdrop attached directly to body
    if (!$('#dozo-mobile-drawer').length) {
      var drawerMarkup = 
        '<div class="dozo-drawer-backdrop" id="dozo-drawer-backdrop"></div>' +
        '<aside class="dozo-mobile-drawer" id="dozo-mobile-drawer" aria-label="Mobile Navigation Drawer">' +
          '<div class="dozo-drawer-header">' +
            '<div class="dozo-drawer-logo">' +
              '<a href="/"><img src="' + logoImg + '" alt="DOZO Logo"></a>' +
            '</div>' +
            '<button type="button" class="dozo-drawer-close-btn" id="dozo-drawer-close-btn" aria-label="Close Menu">' +
              '<i class="fa-solid fa-xmark"></i>' +
            '</button>' +
          '</div>' +
          '<div class="dozo-drawer-body">' +
            '<ul class="dozo-drawer-nav-list">' +
              navItemsHtml +
            '</ul>' +
          '</div>' +
          '<div class="dozo-drawer-footer">' +
            '<div class="dozo-drawer-btn-group">' +
              '<a href="/catelogue.pdf" target="_blank" class="dozo-drawer-btn-cat">' +
                '<i class="fa-solid fa-file-pdf"></i> Download Catalogue' +
              '</a>' +
              '<a href="/amc" class="dozo-drawer-btn-amc">' +
                '<i class="fa-solid fa-shield-halved"></i> Window AMC' +
              '</a>' +
            '</div>' +
            '<div class="dozo-drawer-contact">' +
              '<a href="tel:8981444141"><i class="fa-solid fa-phone"></i> +(91)-8981444141</a>' +
              '<a href="mailto:info@dozowindows.com"><i class="fa-solid fa-envelope"></i> info@dozowindows.com</a>' +
            '</div>' +
          '</div>' +
        '</aside>';

      $('body').append(drawerMarkup);
    }

    // Function to open sidebar
    function openMobileSidebar() {
      $('body').addClass('dozo-sidebar-active');
      $('#dozo-mobile-drawer').addClass('active');
      $('#dozo-drawer-backdrop').addClass('active');
      $('.slicknav_btn').addClass('slicknav_open').removeClass('slicknav_collapsed');
      $('#scrollUp').hide();
    }

    // Function to close sidebar
    function closeMobileSidebar() {
      $('body').removeClass('dozo-sidebar-active');
      $('#dozo-mobile-drawer').removeClass('active');
      $('#dozo-drawer-backdrop').removeClass('active');
      $('.slicknav_btn').removeClass('slicknav_open').addClass('slicknav_collapsed');
      $('#scrollUp').show();
    }

    // Toggle sidebar when clicking the hamburger button
    $(document).on('click', '.slicknav_btn', function (e) {
      e.preventDefault();
      e.stopPropagation();
      if ($('body').hasClass('dozo-sidebar-active')) {
        closeMobileSidebar();
      } else {
        openMobileSidebar();
      }
    });

    // Close on close button click
    $(document).on('click', '#dozo-drawer-close-btn', function (e) {
      e.preventDefault();
      e.stopPropagation();
      closeMobileSidebar();
    });

    // Close on backdrop click
    $(document).on('click', '#dozo-drawer-backdrop', function (e) {
      e.preventDefault();
      closeMobileSidebar();
    });

    // Close on clicking any navigation link
    $(document).on('click', '.dozo-drawer-nav-list a', function () {
      closeMobileSidebar();
    });

    // Close on Escape key
    $(document).on('keydown', function (e) {
      if (e.key === 'Escape' && $('body').hasClass('dozo-sidebar-active')) {
        closeMobileSidebar();
      }
    });
  };


  /* Apply data-background immediately */
  $("[data-background]").each(function () {
    $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
  });

  /* 3. MainSlider-1 */
  // h1-hero-active
  function mainSlider() {
    var BasicSlider = $('.slider-active');
    BasicSlider.on('init', function (e, slick) {
      $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
      });
      var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);
    });
    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);
    });
    BasicSlider.slick({
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 1200,
      dots: false,
      fade: true,
      arrows: false,
      infinite: true,
      pauseOnHover: false,
      pauseOnFocus: false,
      prevArrow: '<button type="button" class="slick-prev"><img src="img/hero_thumb/arrow-left.png" alt=""><img class="secondary-img" src="img/hero_thumb/left-white.png" alt=""></button>',
      nextArrow: '<button type="button" class="slick-next"><img src="img/hero_thumb/arrow-right.png" alt=""><img class="secondary-img" src="img/hero_thumb/right-white.png" alt=""></button>',
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
      ]
    });

    function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function () {
          $this.removeClass($animationType);
        });
      });
    }
  }
  mainSlider();

  /* 4. Testimonial Active*/
  var testimonial = $('.h1-testimonial-active');
  if (testimonial.length) {
    testimonial.slick({
      dots: false,
      infinite: true,
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 6000,
      pauseOnHover: true,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrow: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          }
        }
      ]
    });
  }

  /* 4.1 Blog / Latest News Slider Active */
  var blogSlider = $('.latest-news-active');
  if (blogSlider.length) {
    blogSlider.slick({
      dots: false,
      infinite: true,
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 4500,
      pauseOnHover: true,
      arrows: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  }

  /* 5. Gallery Active */
  var client_list = $('.gallery-active');
  if (client_list.length) {
    client_list.owlCarousel({
      slidesToShow: 3,
      slidesToScroll: 1,
      loop: true,
      autoplay: true,
      speed: 3000,
      smartSpeed: 2000,
      nav: false,
      dots: false,
      margin: 0,

      autoplayHoverPause: true,
      responsive: {
        0: {
          nav: false,
          items: 2,
        },
        768: {
          nav: false,
          items: 3,
        }
      }
    });
  }


  /* 6. Nice Selectorp  */
  var nice_Select = $('select');
  if (nice_Select.length) {
    nice_Select.niceSelect();
  }

  /* 7.  Custom Sticky Menu  */
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
      $(".header-sticky").removeClass("sticky-bar");
    } else {
      $(".header-sticky").addClass("sticky-bar");
    }
  });

  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
      $(".header-sticky").removeClass("sticky");
    } else {
      $(".header-sticky").addClass("sticky");
    }
  });



  /* 8. sildeBar scroll */
  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="ti-arrow-up"></i>', // Text for element
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });


  /* 9. data-background */
  $("[data-background]").each(function () {
    $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
  });


  /* 10. WOW active */
  new WOW().init();



  /* 13. counterUp*/
  $('.counter').counterUp({
    delay: 10,
    time: 3000
  });



  // 11. ---- Mailchimp js --------//  
  function mailChimp() {
    $('#mc_embed_signup').find('form').ajaxChimp();
  }
  mailChimp();



  // 12 Pop Up Img
  var popUp = $('.single_gallery_part, .img-pop-up');
  if (popUp.length) {
    popUp.magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }




})(jQuery);
