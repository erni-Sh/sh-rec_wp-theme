"use strict";

(function($) { 
	$(document).ready(function() {

		$('.waveform-wrapper').each(function() {
			// console.log(this);
			let target = $(this);
			// let release_BD = $(this).data('release-bd');
			let release_slug = $(this).attr('id');
			// console.log(release_slug);
			// let winHeight = $(window).height();
		 //  let scrollToElem = target.offset().top - $(window).height() + 150;

		  initWaveForm(release_slug);

		 //  if($(document).scrollTop() > scrollToElem) {

		 //  	// alert('загружаю' + target);
		 //  	initWaveForm(release_slug);
			//   $(target).addClass("wave-loaded");
		 //  };

		 //  $(window).scroll(function(){
		 //    if($(document).scrollTop() > scrollToElem && !($(target).hasClass("wave-loaded"))){

		 //    	// alert('загружаю' + target);
			//     initWaveForm(release_slug);
			//   	$(target).addClass("wave-loaded");
		 //    }
			// });

		})

		function initWaveForm(release_slug) {
			// запрашиваем базу данных
			let send = new FormData;
			send.append('release_slug', release_slug);
			send.append('action', 'get_music_BD_ajax');

			fetch('/wp-admin/admin-ajax.php', {
			  method: 'POST',
			  // headers: {
     //    	'Content-Type': 'Content-Type: text/html; charset=utf-8'
    	// 	},
			  cache : 'no-cache',
			  // action: 'get_music_BD_ajax',
			  body: send
			})
			.then(res=>res.json())
			// .then(console.log)
			// .then(fastPlayer)
			.then(musicAlbum)

     //  $.ajax({
     //    type: "POST",
     //    url: '/wp-admin/admin-ajax.php',
     //    // data: $(send).serialize(),
     //    data: 'release_slug=' + release_slug + '&action=get_music_BD_ajax',
     //    // error: function(request,error) {
     //    //   if (error == "timeout") {
     //    //     // $('#feedback_err-timedout').slideDown('slow');
     //    //   }
     //    //   else {
     //    //     // $('#feedback_err-state').slideDown('slow');
     //    //     // $("#feedback_err-state").html('An error occurred: ' + error + '');
     //    //   }
     //    // },
     //    success: function(data) {
     //    	console.log(data);
					// musicAlbum(data.json());
     //    }
     //  })


		};

	});	
})(jQuery);
