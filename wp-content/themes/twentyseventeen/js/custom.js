jQuery(document).ready(function($){

	$('.hamburger').on('click', function(){
       $('.mobile-nav-container').fadeIn('600');
       $('.mobile-nav-container').css('display', 'flex');
    });

    $('.close-btn').on('click', function(){
      $('.mobile-nav-container').fadeOut('600')
      $('.mobile-nav-container').css('display', 'none');
    });


    $('.landing-news-carousel').slick({

    	slidesToShow: 1,
    	dots: true

    });

    

   


});