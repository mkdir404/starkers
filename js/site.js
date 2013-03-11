
	jQuery(document).ready(function($) {

		$('.cat-item').find('ul.children').addClass('displayNone');

		$('.cat-item').hover(function(){
			$(this).find('ul.children').removeClass('displayNone');
		},function () {
   			$(this).find('ul.children').addClass("displayNone");
 		  }
		);

	});

