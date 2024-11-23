<?php
use Theme\Template;
?>

<?php get_header(); ?>

    <?php
        if ( have_posts() ) :
            $counter = 0;
            $grid_container = false;

            while ( have_posts() ) : the_post();
                $counter++;

                if ( $counter == 1 ) :
                    Template::include('template-parts/archive/_entry-highlight.php');
                else :
                    if ( $grid_container === false ) :
                        $grid_container = true;
                    ?>
                        <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
                            <div class="w-[90%] max-w-[1344px] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">
                    <?php
                    endif;
                    ?>
                                <div>
                                    <?php Template::include('template-parts/archive/_entry.php'); ?>
                                </div>
                    <?php
                endif;
            endwhile;
            if ( $grid_container === true  ) :
                
                    ?>
                            </div>
                        </div>
                    <?php
            endif;
        else :
            ?>
                <p class="md:p-3.5">Sorry, no posts matched your criteria.</p>
            <?php
        endif;
    ?>

<?php get_footer(); ?>
