import Splide from '@splidejs/splide';

window.splide = new Splide('.splide', {
  classes: {
    arrow: 'splide__arrow bg-naranja',
  },
}).mount();

  new Splide('#splidePrincipal',{
    type: 'loop',
    autoplay: true,
    resetProgress: false,
    classes: {
      page: 'splide__pagination__page bg-splide',
    },
  }).mount();

  new Splide ('#splidePromo' ,{
    type: 'loop',
    perPage: 4,
    perMove: 1,
    gap: 10,
    pagination: false,
    classes: {
      arrow: 'splide__arrow bg-naranja',
    },
    breakpoints: {
      480: {
        perPage: 1,
      },
      768: {
        perPage: 2,
      },
    }
  } ).mount();