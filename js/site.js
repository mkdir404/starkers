
	jQuery(document).ready(function($) {

		$('.cat-item').find('ul.children').addClass('displayNone');
		$('#contenido_pestanas div').css('position', 'absolute').not(':first').hide();
    	$('#contenido_pestanas ul li:first a').addClass('aqui');

		$('.cat-item').hover(function(){
			$(this).find('ul.children').removeClass('displayNone');
		},function () {
   			$(this).find('ul.children').addClass("displayNone");
 		  }
		);
	
    	$('#contenido_pestanas a').click(function(){
        	
        	$('#contenido_pestanas a').removeClass('aqui');
       		$(this).addClass('aqui');
       		$('#contenido_pestanas div').fadeOut(350).filter(this.hash).fadeIn(350);
       	
       		return false;
        
    	});

	});

