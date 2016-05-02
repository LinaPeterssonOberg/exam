<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h3 class="your-search"><?php _e('Search results for : ', 'cha'); ?></h3>
            <p class="search-results"><?php echo get_search_query(); ?></p>

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                <?php endwhile ?>

            <?php else: ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>
        </div>
        <div class="col-md-4">

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>




