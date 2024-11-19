<?php
use Theme\Template;
?>

<?php get_header(); ?>

    <!-- Main Content -->
    <main class="flex-1 pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
        <div class="max-w-screen-xl mx-auto px-4">

            <!-- Page Header -->
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header class="md:p-3.5">
                    <h1 class="mb-5 font-new-order font-bold text-3xl text-hc-gray-dark md:mb-0 sm:text-5xl lg:text-[80px]">
                        <?php single_post_title(); ?>
                    </h1>
                </header>
            <?php endif; ?>

            <!-- Resources Navigation -->
            <?php Template::include('template-parts/resources/_navigation.php'); ?>

            <!-- The Loop -->
            <div class="flex flex-wrap">
                <?php if (have_posts()) : ?>
                    <?php $post_counter = 0;  ?>
                    <?php
                        while (have_posts()) : the_post();
                            $post_counter++;
                            if ($post_counter == 1) :
                                Template::include('template-parts/archive/_entry-highlight.php');
                            else :
                    ?>
                                <article class="sm:w-1/2 lg:w-1/3 p-3.5">
                                     <?php Template::include('template-parts/archive/_entry.php', [
                                        'bg_color' => "bg-hc-gray-dark sm:bg-hc-gray-light",
                                        'text_color' => "text-white sm:text-black",
                                        'cta_bg_color' => "bg-white sm:bg-hc-gray-dark",
                                        'cta_text_color' => "text-hc-gray-dark sm:text-white",
                                    ]); ?>
                                </article>
                    <?php
                            endif;
                        endwhile;
                    ?>
                    <?php Template::include('template-parts/_pagination.php'); ?>
                <?php else : ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>

        </div>
    </main>

<?php get_footer(); ?>
