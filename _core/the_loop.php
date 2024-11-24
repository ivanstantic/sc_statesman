<?php

// function the_loop_customization( $query ) {
//     if ( ! is_admin() && $query->is_main_query() ) {

//         if ( $query->is_archive() ) {

//             // Get the current page number, defaulting to 1 if not set
//             $paged = max( 1, get_query_var( 'paged' ) );

//             if ( $paged === 1 ) {
//                 $query->set( 'posts_per_page', 19 );
//             } else {
//                 $query->set( 'posts_per_page', 10 );
//             }
//         }
//     }
// }

// add_action( 'pre_get_posts', 'the_loop_customization' );
