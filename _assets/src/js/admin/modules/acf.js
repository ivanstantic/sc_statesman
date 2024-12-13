document.addEventListener('DOMContentLoaded', () => {
  const observer = new MutationObserver((mutationsList) => {
    for (const mutation of mutationsList) {
      if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
        for (const addedNode of mutation.addedNodes) {
          if (addedNode.nodeType !== Node.ELEMENT_NODE) continue;

          // Find all post_type fields in this added node
          const postTypeElement = addedNode.querySelector('[data-name="post_type"]');

          if (postTypeElement) {
            const postTypeFieldKey = postTypeElement.getAttribute('data-key');
            if (!postTypeFieldKey) return;

            const postTypesField = acf.getField(postTypeFieldKey);
            if (!postTypesField) return;

            // Find the closest container that holds all related fields
            const container = postTypeElement.closest('.acf-fields');
            if (!container) return;

            // Now find category_list and tag_list within the same container
            const categoriesElement = container.querySelector('[data-name="category_list"]');
            const tagsElement = container.querySelector('[data-name="tag_list"]');

            if (categoriesElement) {
              const categoriesField = acf.getField(categoriesElement.getAttribute('data-key'));
              function updateCategories(selectedPostTypes) {
                const data = new FormData();
                data.append('action', acfDynamicData.fields.categories);
                data.append('post_types', JSON.stringify(selectedPostTypes));

                const previouslySelected = categoriesField.val() || [];

                fetch(acfDynamicData.ajax_url, {
                  method: 'POST',
                  body: data
                })
                .then(response => response.json())
                .then(result => {
                  if (result.success) {
                    const $select = categoriesField.$el.find('select');
                    $select.empty();

                    result.data.categories.forEach(category => {
                      const option = document.createElement('option');
                      option.value = category.term_id;
                      option.textContent = category.name;
                      $select.append(option);
                    });

                    // Reapply previously selected values
                    if (previouslySelected.length > 0) {
                      $select.val(previouslySelected).trigger('change');
                    }
                  }
                })
                .catch(error => console.error('Error:', error));
              }

              // Init
              updateCategories(postTypesField.val());
              // Trigger update on post type change
              postTypesField.on('change', () => updateCategories(postTypesField.val()));
            }

            if (tagsElement) {
              const tagsField = acf.getField(tagsElement.getAttribute('data-key'));

              function updateTags(selectedPostTypes) {
                const data = new FormData();
                data.append('action', acfDynamicData.fields.tags);
                data.append('post_types', JSON.stringify(selectedPostTypes));

                const previouslySelectedTags = tagsField.val() || [];

                fetch(acfDynamicData.ajax_url, {
                  method: 'POST',
                  body: data
                })
                .then(response => response.json())
                .then(result => {
                  if (result.success) {
                    const $select = tagsField.$el.find('select');
                    $select.empty();

                    result.data.tags.forEach(tag => {
                      const option = document.createElement('option');
                      option.value = tag.term_id;
                      option.textContent = tag.name;
                      $select.append(option);
                    });

                    // Reapply previously selected tags
                    if (previouslySelectedTags.length > 0) {
                      $select.val(previouslySelectedTags).trigger('change');
                    }
                  }
                })
                .catch(error => console.error('Error:', error));
              }

              // Init
              updateTags(postTypesField.val());
              // Trigger update on post type change
              postTypesField.on('change', () => updateTags(postTypesField.val()));
            }
          }
        }
      }
    }
  });

  // Observe the entire document
  if (document.body) {
    observer.observe(document.body, {
      childList: true,
      subtree: true
    });
  }
});
