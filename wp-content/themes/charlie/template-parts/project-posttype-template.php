<?php /*Template name: Projects Template where your Post types displays */ ?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row projects-post-wrapper">
            <div class="col-md-12 projects-header-content">
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_title('<h1>', '</h1>'); ?>
                        <?php the_content();?>

                    <?php endwhile; ?>  
                <?php endif; ?> 

                <?php wp_reset_postdata(); ?>
            </div>
        </div>

        <?php $args = array( 'post_type' => 'projects' ); ?>  
        <?php $loop = new WP_Query( $args ); ?>  

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="row post-types-projects-wrapper">       
                <div class="col-md-2 projects-post">

                    <?php if ( has_post_thumbnail() ) {

                        the_post_thumbnail( 'thumbnail' );

                    }

                    ?>
                </div>
                <div class="col-md-10 project-post-content">

                    <?php the_title( '<h2>', '</h2>' ); ?>  
                    <?php the_content(); ?> 

                    <?php $mylink = get_post_meta($post->ID, 'link', true );

                    if ($mylink) { ?>

                        <a href="<?php echo $mylink ?>" title="View Website" target="_blank">View Website</a>

                    <?php

                    }
                    ?>
                </div>
            </div>
        <?php endwhile; ?>  
        <?php wp_reset_postdata(); ?> 
    </div>



<?php get_footer(); ?>