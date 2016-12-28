<?php /**
 * Template Name: Full Width Page
 *
 * @package Wordpress*/

get_header('clean'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page-clean' );
            endwhile; // End of the loop.
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
