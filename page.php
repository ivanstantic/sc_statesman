<?php
use Theme\Template;
?>

<?php get_header(); ?>

    <!-- Main Content -->
    <main class="flex-1 pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
        <div class="max-w-screen-xl mx-auto px-4">

            <!-- Entry -->
            <?php while (have_posts()) : the_post(); ?>
                <?php Template::include('template-parts/page/_entry.php'); ?>
            <?php endwhile; ?>

        </div>
    </main>

<?php get_footer(); ?>
