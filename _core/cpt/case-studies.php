<?php

function custom_case_studies_rewrite_rules() {
    // Get the page ID for the slug 'case-studies'
    $page = get_page_by_path('case-studies');
    if ($page) {
        $page_id = $page->ID;

        // Redirect pagination URLs to the custom page
        add_rewrite_rule(
            '^case-studies/page/([0-9]{1,})/?$',
            'index.php?page_id=' . $page_id . '&paged=$matches[1]',
            'top'
        );
    }
}
add_action( 'init', 'custom_case_studies_rewrite_rules' );
