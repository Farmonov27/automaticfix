$(function(){


  $('.carousel__inner').slick({
   arrows: false,
   dots: true,
   slidesToShow: 3,
   responsive: [
      {
        breakpoint: 1140,
        settings: {
          slidesToShow: 4   
        }
      },
      {
        breakpoint: 841,
        settings: {
          slidesToShow: 2   
        }
      },
      {
          breakpoint:601,
          settings: {
            slidesToShow: 3  
        }
      },
      {
          breakpoint:400,
          settings: {
            slidesToShow: 2  
        }
      },
      {
        breakpoint:350,
        settings: {
          slidesToShow: 1  
      }
    },
    ]
  });

});