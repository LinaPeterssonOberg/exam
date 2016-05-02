<!DOCTYPE>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <!-- This hook allows you to output custom-generated CSS so that your changes show up correctly on the live website-->
            <?php wp_head(); ?>

    </head>

        <body <?php if (is_front_page() ) body_class(); ?> >

        <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="navbar-header">
                                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?php if ( $head_logo = get_theme_mod( 'cha_head_options_logo' ) ) : ?>

                                    <a class="navbar-logo" href="<?php echo esc_url( home_url() ); ?>">

                                        <img class="bild" src="<?php echo esc_url( $head_logo ); ?>">

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="navbar" class="navbar-collapse pull-right">
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'nav navbar-nav'
                                ) ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
