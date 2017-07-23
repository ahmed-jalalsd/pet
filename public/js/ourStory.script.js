jQuery(document).ready(function($) {

// waypoint code for navigation marker
var ourstory = $('#our-story').waypoint({
	handler: function(direction) {
		if (direction == 'down') {
			$(".track-nav-first").removeClass("animated fadeOut");
			$(".track-nav-first").addClass("animated fadeIn");
    }
		else {
			$(".track-nav-first").removeClass("animated fadeIn");
			$(".track-nav-first").addClass("animated fadeOut");
    }
	},
   offset: "30%"
});

var how = $('#how').waypoint({
	handler: function(direction) {
		if (direction == 'down') {
			$(".track-nav-second").removeClass("animated fadeOut");
			$(".track-nav-second").addClass("animated fadeIn");
		}
		else {
			$(".track-nav-second").removeClass("animated fadeIn");
			$(".track-nav-second").addClass("animated fadeOut");
		}
	},
  offset: "35%"
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
  offset: "38%"
});

var how = $('#contact').waypoint({
	handler: function(direction) {
		if (direction == 'down') {
			$(".track-nav-fourth").removeClass("animated fadeOut");
			$(".track-nav-fourth").addClass("animated fadeIn");
		}
		else {
			$(".track-nav-fourth").removeClass("animated fadeIn");
			$(".track-nav-fourth").addClass("animated fadeOut");
		}
	},
  offset: "42%"
});

// for smooth scrolling
$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		var target = this.hash,
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top-0
		},
		900, 'swing', function () {
			window.location.hash = target;
		});

// add class for the active link
		$('ul li a.navbar-nav-links-item-link').click(function(){
				$(' li a.navbar-nav-links-item-link').removeClass('active');
				$(this).addClass('active');
	 });
	});
});
