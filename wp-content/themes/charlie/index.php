<?php get_header(); ?>

<div class="first-content container">

    <?php if ( $head_title = get_theme_mod( 'cha_head_options_title' ) ) : ?>
        <h1><?php echo $head_title; ?></h1>
    <?php endif; ?>

    <?php if ( $head_subtitle = get_theme_mod( 'cha_head_options_subtitle' ) ) : ?>
        <h2><?php echo $head_subtitle; ?></h2>
    <?php endif; ?>

</div>

<div class="second-content">

                <?php if ( dynamic_sidebar('description-widget-sidebar') ) : else : endif; ?>

                <?php get_sidebar(); ?>
</div>

<div class="third-content">

</div>






<!--When you're ready you can display that Widget Area by inserting the following code into whichever Theme file you desire:-->




<?php get_footer(); ?>

