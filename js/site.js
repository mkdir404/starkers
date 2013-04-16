
	jQuery(document).ready(function($) {
  
/*widget*/

		  $('#contenido_pestanas div').css('position', 'absolute').not(':first').hide();
    	$('#contenido_pestanas ul li:first a').addClass('aqui');

        $('#contenido_pestanas :first a').click(function(){
          
          $('#contenido_pestanas a').removeClass('aqui');
          $(this).addClass('aqui');
          $('#contenido_pestanas div').fadeOut(350).filter(this.hash).fadeIn(350);
        
          return false;
        
      });

/*Menu Cat*/

		$('.cat-item').hover(function(){
			$(this).find('ul.children').css('display','inline');
		},function () {
   			$(this).find('ul.children').css('display','none');
 		  }
		);
	
/*Data and Author info */

    	$('.loop-post').hover(function(){
    		
    		find = $(this).find('.infoPost').attr('class');
    		find = find.split(' ');
    		findId = find[1];

    		 $("."+findId).animate({"left": "-=90px"}, "slow");
		},function () {
			   $("."+findId).delay(800).animate({"left": "+=90px"}, "slow");
 		  }
		);

	});

