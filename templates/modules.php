<?php 
	/* Template Name: Modules */ 
?>

<?php get_header(); ?>

    <!-- Main Content -->
    <main class="max-w-[1920px]">
        <!-- Entry -->
        <?php while (have_posts()) : the_post(); ?>
            <div class="mt-16">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>
