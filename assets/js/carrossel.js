$('.carrossel-slide').slick({
  responsive: [
      {
          breakpoint: 1024,
          settings: {
              autoplay: true,
              autoplaySpeed: 3000,
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
          }
      },
  {
      breakpoint: 10000,
      settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
      }
  }
]
});