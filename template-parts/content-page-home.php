<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mysticeti
 */

?>
<div id="post-<?php the_ID(); ?>" class="entry-content">
    <?php //the_content(); ?>
</div><!-- .entry-content -->

<div id="home-banner">
    <div class="container">
        <div class="col-md-6">
            <h2 class="home-title">We are not a traditional company<br class="hide-xs"/> We are a <span>Team</span></h2>
            <a href="#" class="btn btn-darkblue">See our works</a>
        </div>
    </div>

    <div class="waves-container">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 464.7 66" style="enable-background:new 0 0 464.7 66;" xml:space="preserve">
            <path d="M464.6,66c0,0-73.6-3.8-164.1-23.1c-77.5-16.5-78.8,4-104.8,6.6c-24.7,2.4-45.8-8.1-75.3-23.5  C104.7,17.8,71-2.3,0,0.6V66H464.6z"></path>
        </svg>
    </div>
</div>

<div id="service-box">
    <div class="container">
        <div class="row">
            <div class="expertise-box">
                <div class="col-md-5">
                    <h3 class="expertise-box--title">Expertise and talent you need</h3>
                    <p>This is a service description number 1 and we can provide to your
                        company this service with hight quality. This is a service description
                        number 1 and we can provide to your company this service with
                        hight quality.</p>

                    <img src="" alt="">
                </div>
            </div>
            <div class="col-md-7">

            <ul class="services-icon-list">
                <li class="icon-item item-white">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-development.svg"/>
                    <h2 class="service-title">Software Development</h2>
                    <p>This is a service description number 1 and we can provide to your company this.</p>
                </li>
                <li class="icon-item item-white">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-web-development.svg"/>
                    <h2 class="service-title">Web Development</h2>
                    <p>This is a service description number 1 and we can provide to your company this.</p>
                </li>
                <li class="icon-item item-white">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-ux-ui.svg"/>
                    <h2 class="service-title">UX and UI Design</h2>
                    <p>This is a service description number 1 and we can provide to your company this.</p>
                </li>
                <li class="icon-item item-white">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-ecommerce.svg"/>
                    <h2 class="service-title">E-commerce</h2>
                    <p>This is a service description number 1 and we can provide to your company this.</p>
                </li>
                <li class="icon-item item-white">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-mobile-development.svg"/>
                    <h2 class="service-title">Mobile Development</h2>
                    <p>This is a service description number 1 and we can provide to your company this.</p>
                </li>
                <li class="icon-item item-white">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-consulting.svg"/>
                    <h2 class="service-title">Consulting</h2>
                    <p>This is a service description number 1 and we can provide to your company this.</p>
                </li>
            </ul>

            <div class="services-btn-box">
                <a href="#" class="btn btn-white">See all services</a>
            </div>
        </div>
        </div>
    </div>

    <div class="waves-container">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1184.9 93.5" style="enable-background:new 0 0 1184.9 93.5;" xml:space="preserve">
            <path d="M1184.9,2.6c0,0-143,77.6-402,79.5c-203.3,1.5-249.5-17.1-380-26.8 c-99.8-7.4-223.6,16.5-287.2,26.9C101.5,84.5,37,93.5,37,93.5h1147.9V2.6z"></path>
        </svg>
    </div>
</div>

<div id="case-studies-box">
    <div class="container">

        <h3 class="case-studies--title">Case Study</h3>

        <div class="case-study-box row">

            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() ?>/images/case-studys/7preneurs.png" alt="7preneurs" class="case-study-box--img img-responsive">
            </div>
            <div class="col-md-6">

                <h3 class="case-study-box--title">7preneurs: Creation of educational tools for entrepreneurs</h3>
                <p class="case-study-box--desc">This is a service description number 1 and we can provide to your
                    company this service with hight quality. This is a service description
                    number 1 and we can provide to your company this service with
                    hight quality. </p>
                <ul class="case-study-tags list-unstyled">
                    <li class="tag-item">Software Development</li>
                    <li class="tag-item">Web Development</li>
                    <li class="tag-item">UX and UI Design</li>
                    <li class="tag-item">Consulting</li>
                </ul>

                <div class="case-study-btn-box">
                    <a href="#" class="btn btn-white">Read full Case Study</a>
                </div>

            </div>
        </div>

    </div>


</div>

<div id="clients-box">
    <div class="container">

        <h3 class="clients-box--title">We would be happy to work with you</h3>

        <div class="row">
            <div class="col-md-6">
                <p class="clients-box--desc">
                    We are really proud of work with this awsome clients, it has been
                    an honor and pleasure working with them.
                </p>
                <p class="clients-box--desc">
                    We are really proud of work with this awsome clients, it has been
                    an honor and pleasure working with them.
                </p>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <div class="clients-btn-box">
            <button class="btn btn-primary-blue">Let’s make something great together</button>
        </div>
    </div>
</div>