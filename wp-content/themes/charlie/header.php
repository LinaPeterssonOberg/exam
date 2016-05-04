<!DOCTYPE>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <!-- This hook allows you to output custom-generated CSS so that your changes show up correctly on the live website-->
            <?php wp_head(); ?>

    </head>

    <body <?php if (is_front_page() ) body_class(); ?> >

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <?php if ( $head_logo = get_theme_mod( 'cha_head_options_logo' ) ) : ?>
                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <img class="image-header-logo" src="<?php echo esc_url( $head_logo ); ?>">
                        </a>
                    <?php endif; ?>

                </div>

                <div class="collapse navbar-collapse">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav navbar-nav pull-right' )
                    ); ?>

                </div>
        </nav>














