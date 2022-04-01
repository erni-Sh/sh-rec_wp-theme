'use strict';

// window.addEventListener("hashchange",  function() {
// 		console.log(window.location.hash);
// }, false);

jQuery(document).ready(function ($) {

  $('.js-scroll').each(function(){
    $(this).on( 'click', function(){ 

    	// console.log('click!');

      let el = $(this);
      let dest = el.attr('href');
      // console.log(dest);
      if(dest !== undefined && dest !== '') {
        // $('#mobile-menu').removeClass("active");
        // $("body").removeClass("fixed");
        
        $('html').animate({ 
          scrollTop: $(dest).offset().top - 80// учитывая menu
          }, 500
        );
      }
      // не надо перехватывать всплытие
      // return false; 

    });
  });

	// $(window).bind('hashchange', function() {
	// 	console.log(window.location.hash);
	// });

  $('.vimeo a,.youtube a').click(function (e) {
    e.preventDefault();
    var videoLink = $(this).attr('href');
    var classeV = $(this).parent();
    var PlaceV = $(this).parent();

    if ($(this).parent().hasClass('youtube')) {
      $(this).parent().wrapAll('<div class="video-wrapper">');
      $(PlaceV).html('<iframe frameborder="0" height="333" src="' + videoLink + '?autoplay=1&showinfo=0" title="YouTube video player" width="547"></iframe>');
    
    } else {
      $(this).parent().wrapAll('<div class="video-wrapper">');
      $(PlaceV).html('<iframe src="' + videoLink + '?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;color=cfa144" width="500" height="281" frameborder="0"></iframe>');
    }
  });
});


