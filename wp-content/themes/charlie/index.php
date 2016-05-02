<?php get_header(); ?>

<div class="first-content container">
    <div class="row">
        <div class="col-md-12">
            <div class="image-text">
                <?php if ( $head_title = get_theme_mod( 'cha_head_options_title' ) ) : ?>
                    <h1><?php echo $head_title; ?></h1>
                <?php endif; ?>

                <?php if ( $head_subtitle = get_theme_mod( 'cha_head_options_subtitle' ) ) : ?>
                    <p><?php echo $head_subtitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="second-content">

    <?php if ( dynamic_sidebar('description-widget-sidebar') ) : else : endif; ?>

</div>

<div class="third-content">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <?php if ( dynamic_sidebar('text-widget-sidebar') ) : else : endif; ?>

        </div>
        <div class="col-md-2"></div>

    </div>
</div>
<div class="fourth-content">
    <div class="row">
        <div class="col-md-6">
            <?php if ( dynamic_sidebar( 'service-widget-left-sidebar' ) ) : else : endif; ?>
        </div>
        <div class="col-md-6">
            <?php if ( dynamic_sidebar( 'service-widget-right-sidebar' ) ) : else : endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

