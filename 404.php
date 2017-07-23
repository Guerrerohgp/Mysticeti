<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mysticeti
 */

get_header(); ?>

    <div class="container">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Sorry we don\'t dive so deep.', 'mysticeti' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like the page you\'re looking for was deleted, never existed, or mysteriously plunged into the ocean floor.', 'mysticeti' ); ?></p>

                <br><br>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-white btn-primaryX">Go to home</a>

            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </div>
<?php
get_footer('clean');
