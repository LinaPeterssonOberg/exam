<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div id="page" class="col-xs-12 col-sm-12 col-md-12">
            <?php while ( have_posts() ) : the_post(); ?>

                <article>

                    <?php

                    if (is_single() || is_page() ) :
                        the_title( '<h1 class="article-title">', '</h1>' );

                    else :
                        the_title( '<h3><a href="' .esc_url( get_permalink() ) . '">', '</a></h3>' );

                    endif;
                    ?>
                    <?php the_content(); ?>

                </article>


            <?php endwhile ?>

        </div>

    </div>
</div>

<?php get_footer(); ?>






