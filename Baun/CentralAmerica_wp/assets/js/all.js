jQuery(document).ready(function(){
  // CAPAS DE MDB

    //BTN MENU
    $('#toggleButton').click(function(){
      $('#slide-out').addClass('showMenu');
      $('.cerrar').addClass('open');
      // $('.cerrar').fadeIn();
      $('.opacity').addClass('opacitySideNav');
      $('.drag-target').remove();
      $('#sidenav-overlay').remove();
      /*setTimeout(function(){
          $('.side-nav').css({
            'display':'block',
            'transform':'translateX(0px)'
          })
          $('.cerrar').fadeIn();
          $('.opacity').addClass('opacitySideNav');

      }, 1000);*/
    });

    $('#close-sidenav').click(function(){
      $('#slide-out').removeClass('showMenu');
      $('.opacity').removeClass('opacitySideNav');
      $('.cerrar').removeClass('open');
      // $('.cerrar').fadeOut();
      $('.drag-target').remove();
      $('#sidenav-overlay').remove();
    });
});

jQuery(document).ready(function(){
  jQuery('.type .count').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 8000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }

    });
  });
});


jQuery(document).ready(function(){
	jQuery(".description").dotdotdot({
	watch : true
	});
});

jQuery(window).on('load', function () {
  /* VARIABLES */
    size_div = jQuery("#content-post .post-recent").size();
    x = 3;
    jQuery('#content-post .post-recent:lt(' + x + ')').fadeIn(); // este muestra la cant de intem de X
    jQuery('#btn-load-more').click(function () {

        x = (x + 3 <= size_div) ? x + 3 : size_div;
        jQuery('#content-post .post-recent:lt(' + x + ')').slideDown();
        if (x == size_div) {
          jQuery('.load-more').css('display','none');
        }
    });
    if (size_div <= 3) {
      jQuery('.load-more').css('display','none');
    }
});

/* Define cual pais queda como SELECCIONADO */

jQuery(document).ready(function () {
    jQuery('#isCostaRica').addClass('ClaseActive');
    jQuery('#pathGroup .isCostaRica').attr('class', 'isCostaRica trigger ClaseActive');
});


 jQuery(document).ready(function () {
    var lastElem = jQuery('#pathGroup .isCostaRica');
    var lastElemClass = 'isCostaRica';
    var lastElemTarget = '#isCostaRica';

    jQuery('#pathGroup .trigger').on('mouseenter', function (e) {
        e.preventDefault();
        var target = '#' + jQuery(this).data('div');
        var targetIsActive = jQuery(target).hasClass('ClaseActive');
        var clase = jQuery(this).data('div');

        if (lastElem) {
            jQuery(lastElem).attr("class", lastElemClass + " trigger");
            jQuery(lastElemTarget).removeClass('ClaseActive');
        }
        if (target !== lastElemTarget || !targetIsActive) {
            jQuery(this).attr("class", clase + " trigger ClaseActive");
            jQuery(target).addClass('ClaseActive');

            lastElem = this;
            lastElemClass = clase;
            lastElemTarget = target;
        }
    });
});


    jQuery(window).on('load resize', function () {
        var source = jQuery('#MapContainer .svgMap').innerHeight(),
            target = jQuery('#MapContainer .svgContent');

        jQuery('#MapContainer .svgContent').css({
            'min-height': source
        });
    });

/* Match Elements */
jQuery(window).on('load resize ready', function () {

//Item de listado de proyectos y productos
		MatchMe('.guide', '.list-guide', 768);

});

jQuery(document).ready(function(){
	jQuery('.item-recent').matchHeight();
});

/* function Match Height
 * Autor: Francisco Chanto  - francisco@baum.digital
 * Requiere variable: var ww = window.innerWidth;
 * _c = condicion => si el selector existe
 * _s = selector  => al que se le aplica el plugin
 * _q = media query => media query donde termina */
function MatchMe(_c, _s, _q) {
    var ww = window.innerWidth;
    if ($(_c).length > 0) {
        ww > _q ? $(_s).matchHeight({byRow: true}) : $(_s).matchHeight({remove: true});
        if (ww < _q) {
            $(_s).removeAttr('style').addClass('');
        }
    }
}

jQuery(document).ready(function(){
  // SideNav init
  $('.button-collapse').sideNav({
    edge: 'right', // Choose the horizontal origin
    closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
  });

  // Custom scrollbar init
  var el = document.querySelector('.custom-scrollbar');
  Ps.initialize(el);
});

/*jQuery(document).ready(function(){
  $('.menu li').click(function(){
    $('.sub-menu').css('display','block');
  });
});*/
jQuery(window).on('load', function () {
  /* VARIABLES */
   size = jQuery("#recent-blog .post-recent").size();
   y = 3;
    jQuery('#recent-blog .post-recent:lt(' + y + ')').fadeIn(); // este muestra la cant de intem de X
    jQuery('#btn-load').click(function () {
        y = (y + 3 <= size) ? y + 3 : size;
        jQuery('#recent-blog .post-recent:lt(' + y + ')').slideDown();
        if (y == size) {
          jQuery('.load').css('display','none');
        }
    });
    if (size <= 3) {
      jQuery('.load').css('display','none');
    }
});


(function(){
  //Enable swiping...
  jQuery(".carousel-inner").swipe({
      //Generic swipe handler for all directions
      swipeLeft: function (event, direction, distance, duration, fingerCount) {
          jQuery(this).parent().carousel('next');
      },
      swipeRight: function () {
          jQuery(this).parent().carousel('prev');
      },
      //Default is 75px, set to 0 for demo so any distance triggers swipe
      threshold: 0
  });
});

jQuery(document).ready(function(){
  jQuery('.carousel').carousel({
		controls: false,
		nav: false,
	  interval: 2000
	});
});

(function(){
  new WOW().init();
});
