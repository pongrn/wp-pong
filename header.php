<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title><?php wp_title(); ?></title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <?php if ( is_singular() && comments_open() && get_option( 'thread_comments' )) wp_enqueue_script( 'comment-reply' ); ?>
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="area-logo row">
                <div class="logo small-11 small-centered medium-3 medium-uncentered large-3 large-uncentered column">
                    <?php
                        function pong_the_custom_logo() {
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        }
                        pong_the_custom_logo();
                    ?>
                </div>
                <div class="banner small-12 medium-9 large-9 column show-for-medium-up">

                </div>
            </div>
        </header>

        <section class="navegacao">
            <div class="row collapse">
                <div class="small-12 medium-12 large-12 column">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area show-for-small-only">
                            <li class="name">
                                <!-- <h1><a href="#">My Site</a></h1> -->
                            </li>
                            <li class="toggle-topbar menu-icon"><a href="#"><span><!--Menu--></span></a></li>
                        </ul>

                        <section class="top-bar-section">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'main-menu',
                                'container'         => false,
                                'menu_class'        => 'links-menu left',
                                'walker'            => new Foundation_Walker_Nav_Menu(),
                                'fallback_cb'       => 'wp_page_menu();'
                            ));
                        ?>
                        </section>
                    </nav>
                </div>
            </div>
        </section>