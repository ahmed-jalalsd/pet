jQuery(function() {
	jQuery('.ss_button').on('click',function() {
  var $content = $(this).next();
      $content.slideToggle('fast', function() {
          if ($(this).is(':visible'))
              $(this).css('display','block');

	});
});
});

$('.milano-address-btn').click(function(){
    $(this).data('clicked', true);
$('div#map-line .track-nav-first span.address-text').toggleClass('disappear');
$('div#map-line .track-nav-first span.bottom-text').toggleClass('show');
});

$('.tokyo-address-btn').click(function(){
    $(this).data('clicked', true);
$('div#map-line .track-nav-second span.address-text').toggleClass('disappear');
$('div#map-line .track-nav-second span.bottom-text').toggleClass('show');
});

$('.york-address-btn').click(function(){
    $(this).data('clicked', true);
$('div#map-line .track-nav-third span.address-text').toggleClass('disappear');
$('div#map-line .track-nav-third span.bottom-text').toggleClass('show');
});

$('.madrid-address-btn').click(function(){
    $(this).data('clicked', true);
$('div#map-line .track-nav-fourth span.address-text').toggleClass('disappear');
$('div#map-line .track-nav-fourth span.bottom-text').toggleClass('show');
});

$('.north-address-btn').click(function(){
    $(this).data('clicked', true);
$('div#map-line .track-nav-fifth span.address-text').toggleClass('disappear');
$('div#map-line .track-nav-fifth span.bottom-text').toggleClass('show');
});
