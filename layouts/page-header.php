<?php
	/**
	 * Template Name: Header Title
	 */
?>
get_header(); ?>
    <div class="page-header-title">
        the_title( '<h1 class="entry-title">', '</h1>' );

    </div>
    <?php while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'page-services' );
    endwhile; // End of the loop. ?>
<?php
get_footer();

