import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

(function () {
  const splideSelector = '.carousel';

  // Map to store Splide instances and their observers
  const splideInstances = new Map();

  // Function to initialize Splide on an element
  function initSplide(element) {
    if (!splideInstances.has(element)) {
      console.log('Initializing Splide on:', element);
      const splide = new Splide(element, {
        type: 'loop',
        autoplay: true,
        interval: 5000,
        arrows: true,
        pagination: false,
        gap: 16,
      });
      splide.mount();

      // Get the slides list element
      const slidesList = element.querySelector('.splide__list');

      // Set up a MutationObserver on the slides list
      const observer = new MutationObserver(function () {
        // Disconnect the observer to prevent infinite loops
        observer.disconnect();

        console.log('Slides list changed, refreshing Splide:', element);
        splide.refresh();

        // Reconnect the observer after refreshing
        observer.observe(slidesList, { childList: true });
      });

      // Observe child list changes in the slides list
      observer.observe(slidesList, { childList: true });

      // Store both the Splide instance and its observer
      splideInstances.set(element, { splide: splide, observer: observer });
    }
  }

  // Function to destroy Splide on an element
  function destroySplide(element) {
    const instanceData = splideInstances.get(element);
    if (instanceData) {
      const { splide, observer } = instanceData;
      console.log('Destroying Splide on:', element);

      // Disconnect the observer
      observer.disconnect();

      // Destroy the Splide instance
      splide.destroy();

      // Remove the entry from the Map
      splideInstances.delete(element);
    }
  }

  // Observe the document body for additions and removals of Splide elements
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

  // Start observing the document body for changes
  observer.observe(document.body, { childList: true, subtree: true });

  // Initialize any existing Splide elements
  const initialElements = document.querySelectorAll(splideSelector);
  initialElements.forEach(initSplide);
})();
