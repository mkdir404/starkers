
	jQuery(document).ready(function($) {

   var  navegaW = $(this).width(),
        navegaH = $(this).height();
      

    $('.siguele').click(function(){
        var y = - (navegaH / 2 ) * .02;
         var x = $(document).scrollTop();
          var result = x + y;
            var resultAjax = '';

          // $.ajax({
          //   type: "POST",
          //   dataType : "json",
          //   url: "wp-content/themes/starkers/ajaxrequest.php",
          //   data: { name: "John", location: "Boston" } 
          // }).done(function( resultAjax ) {
          //   console.log( resultAjax );  
          //   
        
          // });

      idPost = $(this).attr('id');
      $('div.screen').removeClass('noneDisplay');
      $('html').addClass('no_scroll')
      $('.apend').fadeIn(3000).css({'position':'fixed','top':'30px','left':'15%','right':'15%','width':'800px','height':'600','padding':'10px','background-color':'#FFF','z-index':'100000','boder':'3px solid #DDD','overflow':'scroll'}).load('http://localhost:8888/wordpress/?p='+idPost);

        


      });

		$('.cat-item').find('ul.children').addClass('displayNone');
		$('#contenido_pestanas div').css('position', 'absolute').not(':first').hide();
    	$('#contenido_pestanas ul li:first a').addClass('aqui');

		$('.cat-item').hover(function(){
			$(this).find('ul.children').removeClass('displayNone');
		},function () {
   			$(this).find('ul.children').addClass("displayNone");
 		  }
		);
	
    	$('#contenido_pestanas :first a').click(function(){
        	
        	$('#contenido_pestanas a').removeClass('aqui');
       		$(this).addClass('aqui');
       		$('#contenido_pestanas div').fadeOut(350).filter(this.hash).fadeIn(350);
       	
       		return false;
        
    	});

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

