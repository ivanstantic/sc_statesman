import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

(function () {
  const splideSelector = '.carousel';

  // Map to store Splide instances
  const splideInstances = new Map();

  // Function to initialize Splide on an element
  function initSplide(element) {
    if (!splideInstances.has(element)) {
      console.log('Initializing Splide on:', element);
      const splide = new Splide(element, {
        type: 'loop',
        autoplay: true,
        interval: 3000,
        arrows: true,
        gap: 16,
      });
      splide.mount();
      splideInstances.set(element, splide);
    }
  }

  // Function to destroy Splide on an element
  function destroySplide(element) {
    const splide = splideInstances.get(element);
    if (splide) {
      console.log('Destroying Splide on:', element);
      splide.destroy();
      splideInstances.delete(element);
    }
  }

  // Observe the editor DOM for additions and removals of Splide elements
  const observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
      // Handle added nodes
      mutation.addedNodes.forEach(function (node) {
        if (node.nodeType === Node.ELEMENT_NODE) {
          if (node.matches(splideSelector)) {
            initSplide(node);
          } else {
            const splideElements = node.querySelectorAll(splideSelector);
            splideElements.forEach(initSplide);
          }
        }
      });
      // Handle removed nodes
      mutation.removedNodes.forEach(function (node) {
        if (node.nodeType === Node.ELEMENT_NODE) {
          if (node.matches(splideSelector)) {
            destroySplide(node);
          } else {
            const splideElements = node.querySelectorAll(splideSelector);
            splideElements.forEach(destroySplide);
          }
        }
      });
    });
  });

  // Start observing
  observer.observe(document, { childList: true, subtree: true });

  // Initialize any existing Splide elements
  const initialElements = document.querySelectorAll(splideSelector);
  initialElements.forEach(initSplide);
})();
