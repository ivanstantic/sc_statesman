import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

document.addEventListener('DOMContentLoaded', () => {
  const sliders = document.getElementsByClassName('carousel');

  for (let i = 0; i < sliders.length; i += 1) {
    new Splide(sliders[i], {
      type: 'loop',
      autoplay: true,
      interval: 3000,
      arrows: true,
      gap: 16,
    }).mount();
  }
});
