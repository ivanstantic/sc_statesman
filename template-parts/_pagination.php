<?php
global $wp_query;

$pagination_args = [
    'total' => isset($custom_query) ? $custom_query->max_num_pages : $wp_query->max_num_pages,
    'current' => (get_query_var('paged')) ? get_query_var('paged') : 1,
    'mid_size'  => 2,
    'prev_text' => __( '« Previous', 'textdomain' ),
    'next_text' => __( 'Next »', 'textdomain' ),
    'before_page_number' => '<span class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] rounded border border-gray-300 dark:border-gray-600">',
    'after_page_number'  => '</span>',
];
?>

<nav class="pagination flex flex-wrap flex-col sm:flex-row items-center lg:justify-start justify-center mt-8 mb-8 space-y-4 sm:space-y-0 text-[#1B2228] dark:text-[#F2F3F4]">
    <span class="text-[#1B2228] dark:text-white md:mr-4 mr-0 md:mb-0 mb-4">
        Page <?php echo $pagination_args['current']; ?> of <?php echo $pagination_args['total']; ?>
    </span>
    <nav class="flex flex-wrap justify-center sm:justify-start space-x-2">
        <?php echo paginate_links( $pagination_args ); ?>
    </nav>
</nav>
