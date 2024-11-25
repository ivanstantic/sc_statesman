wp.domReady(() => {
  const { select, subscribe } = wp.data;

  // Subscribe to changes
  subscribe(() => {
    checkPageTemplate();
  });

  // Initial load of styles based on the current post
  function checkPageTemplate() {
    const currentTemplate = select('core/editor').getEditedPostAttribute('template');
    updateEditorStyles(currentTemplate);
  }

  // Function to update editor styles
  function updateEditorStyles(template) {
    if (template) {
      // Toggle custom page template body class
      document.body.classList.add('is-scs-page-template');
      document.body.classList.remove('is-core-page-template');
      // Add custom page template styles
      addPageStylesheet();
      const link = document.getElementById('scs-admin-prose-css');
      if (link) {
        link.remove();
      }
    } else {
      // Toggle custom page template body class
      document.body.classList.add('is-core-page-template');
      document.body.classList.remove('is-scs-page-template');
      // Add prose styles
      addProseStylesheet();
      const link = document.getElementById('scs-admin-page-css');
      if (link) {
        link.remove();
      }
    }
  }
});

const addPageStylesheet = () => {
  if ( !document.getElementById('hc-admin-page-css') ) {
    const link = document.createElement('link');
    link.id = 'scs-admin-page-css';
    link.rel = 'stylesheet';
    link.href = '/wp-content/themes/scs/_assets/public/css/admin/page.css';
    document.head.appendChild(link);
  }
};

const addProseStylesheet = () => {
  if ( !document.getElementById('hc-admin-prose-css') ) {
    const link = document.createElement('link');
    link.id = 'scs-admin-prose-css';
    link.rel = 'stylesheet';
    link.href = '/wp-content/themes/scs/_assets/public/css/admin/prose.css';
    document.head.appendChild(link);
  }
};
  