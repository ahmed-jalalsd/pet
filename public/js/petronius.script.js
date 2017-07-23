jQuery(document).ready(function($) {

// initiliazing the slider
$('.my-slider').unslider();

//<!-- to make the text slide with the image -->
  var slider = $('.my-slider').unslider();
  $('#slider-text').html($('.unslider-active > .caption').html());
  slider.on('unslider.change', function(event, index, slide) {
    $('#slider-text').html($('.unslider-active > .caption').html());
  });


// to make the text slide with the image

/*-- change color depending on the HUE of the image--*/

// $(function() {
//   var colorThief = new ColorThief();
//   var slider = $('.my-slider').unslider();
//   slider.on('unslider.change', function(event, index, slide) {
//     image = slide.find('img')[0];
//     color = colorThief.getColor(image,5);
//     var colornum = {r: color[0], g: color[1], b: color[2]};
//     var yiq = ((colornum.r*299)+(colornum.g*587)+(colornum.b*114))/1000;
//     if (yiq >= 128) {
//       $('.svg-icon-color').css('fill', '#faf9f7');
//       $('.svg-icon-color-2').css('stroke', '#faf9f7');
//       $('.color-change').css('color', '#faf9f7');
//       $('nav.unslider-nav ol li').css('background-image', 'url("/icons/icon_position_01_white.svg")');
//       $('.unslider-nav ol li.unslider-active ').css('background-image', 'url("/icons/icon_position_03.svg")');
//       $('h1').removeClass('line').addClass('change');
//       $('.summary-line').addClass('change-summary-line');
//     }else {
//       $('.svg-icon-color').css('fill', '#255083');
//       $('.svg-icon-color-2').css('stroke', '#255083');
//       $('.color-change').css('color', '#255083');
//       $('nav.unslider-nav ol li').css('background-image', 'url("/icons/icon_position_01.svg")');
//       $('.unslider-nav ol li.unslider-active ').css('background-image', 'url("/icons/icon_position_02.svg")');
//       $('h1').removeClass('change').addClass('line');
//       $('.summary-line').removeClass('change-summary-line');
//     }
//   })
// });

/*---end of changing color depending on the HUE of the image--*/

//the color again dark after scrolling
var inview = new Waypoint.Inview({
  element: $('#home')[0],
  exited: function(direction) {
    $('.svg-icon-color').css('fill', '#255083');
    $('.svg-icon-color-white').css('fill', '#faf9f7');
    $('.svg-icon-color-2').css('stroke', '#255083');
    $('.color-change').css('color', '#255083');
    $('h1').removeClass('change').addClass('line');
    $('.summary-line').addClass('change-summary-line');
    // $('nav.unslider-nav ol li').css('background-image', 'url("/icons/icon_position_01.svg")');
    // $('.unslider-nav ol li.unslider-active ').css('background-image', 'url("/icons/icon_position_02.svg")');
  },
  enter: function(direction) {
    $('.svg-icon-color-white').css('fill', '#255083');
  }
});


// waypoint code for navigation marker

var ourstory = $('#our-story').waypoint({
	handler: function(direction) {
		if (direction == 'down') {
			$(".track-nav-first").removeClass("animated fadeOut");
			$(".track-nav-first").addClass("animated fadeIn");
      $('.change-summary-line:after').addClass('change-summary-line');
      slider.data('unslider').stop(); //stop slider on scroll
		}
		else {
			$(".track-nav-first").removeClass("animated fadeIn");
			$(".track-nav-first").addClass("animated fadeOut");
      $('.svg-icon-color').css('fill', '#faf9f7');
      $('.svg-icon-color-2').css('stroke', '#faf9f7');
      $('.color-change').css('color', '#faf9f7');
      $('.summary-line').removeClass('change-summary-line');
      slider.data('unslider').start();
		}
	},
   offset: "0"
});

var how = $('#how').waypoint({
	handler: function(direction) {
		if (direction == 'down') {
			$(".track-nav-second").removeClass("animated fadeOut");
			$(".track-nav-second").addClass("animated fadeIn");
      // $("#how").addClass("animated fadeInUp");
		}
		else {
			$(".track-nav-second").removeClass("animated fadeIn");
			$(".track-nav-second").addClass("animated fadeOut");
		}
	},
  offset: "3%"
});

var how = $('#collection').waypoint({
	handler: function(direction) {
		if (direction == 'down') {
			$(".track-nav-third").removeClass("animated fadeOut");
			$(".track-nav-third").addClass("animated fadeIn");
		}
		else {
			$(".track-nav-third").removeClass("animated fadeIn");
			$(".track-nav-third").addClass("animated fadeOut");
		}
	},
  offset: "5%"
});

var how = $('#contact').waypoint({
	handler: function(direction) {
		if (direction == 'down') {
			$(".track-nav-fourth").removeClass("animated fadeOut");
			$(".track-nav-fourth").addClass("animated fadeIn");
			$(".track-nav-fifth").removeClass("animated fadeOut");
			$(".track-nav-fifth").addClass("animated fadeIn");
      $(".map-line").removeClass("animated fadeOut");
      $(".contact-nav-first").removeClass("animated fadeOut");
      $(".contact-nav-second").removeClass("animated fadeOut");
      $(".contact-nav-third").removeClass("animated fadeOut");
      $(".contact-nav-fourth").removeClass("animated fadeOut");
      $(".contact-nav-fifth").removeClass("animated fadeOut");
      $(".map-line").removeClass("animated fadeOut");
      $(".contact-nav-first").addClass("animated fadeIn");
      $(".contact-nav-second").addClass("animated fadeIn");
      $(".contact-nav-third").addClass("animated fadeIn");
      $(".contact-nav-fourth").addClass("animated fadeIn");
      $(".contact-nav-fifth").addClass("animated fadeIn");
			$(".map-line").addClass("animated fadeIn");
		}
		else {
			$(".track-nav-fourth").removeClass("animated fadeIn");
			$(".track-nav-fourth").addClass("animated fadeOut");
			$(".track-nav-fifth").removeClass("animated fadeIn");
			$(".track-nav-fifth").addClass("animated fadeOut");
			$(".contact-nav-first").removeClass("animated fadeIn");
			$(".contact-nav-second").removeClass("animated fadeIn");
			$(".contact-nav-third").removeClass("animated fadeIn");
			$(".contact-nav-fourth").removeClass("animated fadeIn");
			$(".contact-nav-fifth").removeClass("animated fadeIn");
			$(".map-line").removeClass("animated fadeIn");
      $(".contact-nav-first").addClass("animated fadeOut");
			$(".contact-nav-second").addClass("animated fadeOut");
			$(".contact-nav-third").addClass("animated fadeOut");
			$(".contact-nav-fourth").addClass("animated fadeOut");
			$(".contact-nav-fifth").addClass("animated fadeOut");
			$(".map-line").addClass("animated fadeOut");
		}
	},
  offset: "7%"
});

// for smooth scrolling
$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		var target = this.hash,
		$target = $(target);
      if (target.length) {
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top-0
		},
		900, 'swing', function () {
			window.location.hash = target;
		  });
    }
  });

// add class for the active link
		$('ul li a.navbar-nav-links-item-link').click(function(){
				$(' li a.navbar-nav-links-item-link').removeClass('active');
				$(this).addClass('active');

	});


  $('#accordion > li > div').click(function() {
 var $content = $(this).next();
 var $hideText = $(this).find('.address-text');
     $hideText.toggleClass('hide')
     $content.slideToggle('fast', function() {
         if ($(this).is(':visible'))
             $(this).css('display','block');
             return false;
 });
});


// $("#accordion > li > div").click(function(){
//   var $hideText = $(this).find('.address-text');
//   if(false == $(this).next().is(':visible')) {
//     $('#accordion ul').slideUp(300);
//   }
//   $(this).next().slideToggle(300);
//   $hideText.toggleClass('hide');
// });


});
