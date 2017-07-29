<?php
	/**
	 * Template Name: Header Title
	 */

get_header();
?>
    <style type="text/css">

        #main-nav {
            border-bottom: 1px solid rgba(255, 255, 255, 0.28);
        }

        #main-nav a{
            color: #fff;
        }

        #main-nav .navbar-nav > .active > a, #main-nav .navbar-nav > .active > a:hover, #main-nav .navbar-nav > .active > a:focus{
            color: #0A1921;
        }

        #main-nav a:hover, #main-nav a:focus{
            opacity: 0.8;
        }

        #main-nav .navbar-collapse.collapse.in{
            border-bottom: 1px solid <?php the_field('header_color') ?>;
        }

        .main-nav-back{
            background: <?php the_field('header_color') ?>;
        }

        .page-template-page-header header > nav.navbar, .page-header-title{
            background: <?php the_field('header_color') ?>;
        }

        .page-header-title {
            position: relative;
            padding: 50px 0 110px;
        }

        .page-header-title .entry-title{
            font-weight: bold;
        }

        .page-template-page-header header > nav.navbar, .page-header-title .entry-title{
            margin-top: 0;
        }
        .page-template-page-header header > nav.navbar, .page-header-title .entry-desc{
            font-size: 1.2em;
        }

        header > nav.navbar .container .navbar-header .navbar-toggle{
            border-color: #ddd;
        }

        header > nav.navbar .container .navbar-header .navbar-toggle:hover, header > nav.navbar .container .navbar-header .navbar-toggle:focus{
            background-color: #ddd;
        }

        header > nav.navbar .container .navbar-header .navbar-toggle .icon-bar{
            background-color: #fff;
        }

        .page-header-title .large-waves{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: url(<?php echo get_template_directory_uri() ?>/images/page-header-waves-blue5.svg) top left repeat-x;
            opacity: 0.3;
        }
    </style>

    <div class="page-header-title text-center">
        <div class="container">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <div class="entry-desc">
                <?php the_field('title_description'); ?>
            </div>
        </div>
        <div class="large-waves">

        </div>
    </div>
    <?php while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'page-services' );
    endwhile; // End of the loop. ?>
<?php
get_footer();

