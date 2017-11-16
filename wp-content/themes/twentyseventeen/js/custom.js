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

     $('.landing-events-carousel').slick({

      slidesToShow: 1,
      dots: true

    });

    $('.events-carousel').slick({

      slidesToShow: 3,
      dots: true,
      responsive: [
      
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]

    });


   


});