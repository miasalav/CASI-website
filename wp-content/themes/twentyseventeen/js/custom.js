jQuery(document).ready(function($){

	$('.hamburger').on('click', function(){
       $('.mobile-nav-container').fadeIn('600');
       $('.mobile-nav-container').css('display', 'flex');
    });

    $('.close-btn').on('click', function(){
      $('.mobile-nav-container').fadeOut('600')
      $('.mobile-nav-container').css('display', 'none');
    });

    $('.landing-content').backstretch([
     "wp-content/uploads/2017/09/1.jpg",
     "wp-content/uploads/2017/09/3.jpg",
  
    ], {duration: 2000, fade: 1050});

   


});