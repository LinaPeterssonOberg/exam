<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php if ( have_posts() ) : ?>

                <ul class="archive-articles">

                    <?php while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'archive' );

                    endwhile;

                    ?>

                </ul>

                <?php

                the_posts_pagination( array(
                    'prev_text' => __('previouse page', 'cha'),
                    'next_text' => __('next page', 'cha')

                ) );

                ?>

            <?php else: ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </div>

        <div class="col-md-3">

            <?php get_sidebar(); ?>

        </div>

    </div>
</div>

<?php get_footer(); ?>
