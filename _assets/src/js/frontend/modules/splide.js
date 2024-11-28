import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

document.addEventListener('DOMContentLoaded', () => {
  const sliders = document.getElementsByClassName('carousel');

  for (let i = 0; i < sliders.length; i += 1) {
    new Splide(sliders[i], {
      type: 'loop',
      autoplay: true,
      interval: 5000,
      arrows: true,
      pagination: false,
      gap: 16,
    }).mount();
  }
});
