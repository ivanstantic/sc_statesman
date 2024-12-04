document.addEventListener('DOMContentLoaded', () => {
  function findPostTypeElement(node) {
    if (node.nodeType !== Node.ELEMENT_NODE) return null;
    return node.matches('[data-name="post_type"]') ? node : node.querySelector('[data-name="post_type"]');
  }

  const observer = new MutationObserver((mutationsList) => {
    for (const mutation of mutationsList) {
      if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
        for (const node of mutation.addedNodes) {
          const postTypeElement = findPostTypeElement(node);
          if (postTypeElement) {
            
            // Prepare fields
            const postTypeFieldKey = postTypeElement.getAttribute('data-key');
            if (postTypeFieldKey) {
              const postTypesField = acf.getField(postTypeFieldKey);

              const categoriesElement = document.querySelector('[data-name="category_list"]');
              if (categoriesElement) {
                const categoriesField = acf.getField(categoriesElement.getAttribute('data-key'));

                  // Function to update categories based on selected post types
                function updateCategories(selectedPostTypes) {
                  const data = new FormData();
                  data.append('action', acfDynamicData.fields.categories); // Use the localized action for categories
                  data.append('post_types', JSON.stringify(selectedPostTypes));

                  fetch(acfDynamicData.ajax_url, {
                    method: 'POST',
                    body: data
                  })
                  .then(response => response.json())
                  .then(result => {
                    if (result.success) {
                      categoriesField.$el.find('select').empty();
                      result.data.categories.forEach(category => {
                        const option = document.createElement('option');
                        option.value = category.term_id;
                        option.textContent = category.name;
                        categoriesField.$el.find('select').append(option);
                      });
                    }
                  })
                  .catch(error => console.error('Error:', error));
                }

                // Init
                const selectedPostTypes = postTypesField.val();
                updateCategories(selectedPostTypes);

                // Trigger updates on post type selection change
                postTypesField.on('change', function() {
                  const selectedPostTypes = postTypesField.val();
                  updateCategories(selectedPostTypes);
                });
              }
              
              const tagsElement = document.querySelector('[data-name="tag_list"]');
              if (tagsElement) {
                const tagsField = acf.getField(tagsElement.getAttribute('data-key'));

                // Function to update tags based on selected post types
                function updateTags(selectedPostTypes) {
                  const data = new FormData();
                  data.append('action', acfDynamicData.fields.tags); // Use the localized action for tags
                  data.append('post_types', JSON.stringify(selectedPostTypes));

                  fetch(acfDynamicData.ajax_url, {
                    method: 'POST',
                    body: data
                  })
                  .then(response => response.json())
                  .then(result => {
                    if (result.success) {
                      tagsField.$el.find('select').empty();
                      result.data.tags.forEach(tag => {
                        const option = document.createElement('option');
                        option.value = tag.term_id;
                        option.textContent = tag.name;
                        tagsField.$el.find('select').append(option);
                      });
                    }
                  })
                  .catch(error => console.error('Error:', error));
                }

                // Init
                const selectedPostTypes = postTypesField.val();
                updateTags(selectedPostTypes);

                // Trigger updates on post type selection change
                postTypesField.on('change', function() {
                  const selectedPostTypes = postTypesField.val();
                  updateTags(selectedPostTypes);
                });
              }
            }

          }
        }
      }
    }
  });

  // Observe the entire document for changes
  observer.observe(document.body, {
    childList: true,
    subtree: true
  });
});
