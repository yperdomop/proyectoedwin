import Splide from '@splidejs/splide';

window.splide = new Splide( '.splide', {
    autoplay    : true,
    rewind      : true,
    pauseOnHover: false,
    perPage      : 2,
    gap: 10,
    fixedHeight: 320,
    pauseOnFocus: false,
    breakpoints: {
      320: {
        fixedHeight: 80
      },
      375: {
        fixedHeight: 100
      },
      425: {
        fixedHeight: 110
      },
      768: {
        fixedHeight: 200
      },
      1024: {
        fixedHeight: 280
      },
    }
  } );
  
  splide.mount();