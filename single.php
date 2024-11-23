<?php
use Theme\Template;
?>

<?php get_header(); ?>

    <!-- Entry -->
    <article>
        <?php while (have_posts()) : the_post(); ?>
            <?php Template::include('template-parts/single/_entry.php'); ?>
        <?php endwhile; ?>
    </article>

<?php get_footer(); ?>
