<?php /* Template Name: Full Width Page with sidebar */ ?>
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 full-width-image">

           <?php while ( have_posts() ) : the_post(); ?>

           <div class="template-part-image">

                <?php the_post_thumbnail(); ?>

            </div>
        </div>
     </div>

    <div class="row full-width-wrapper-content">
        <div class="col-sm-12 col-md-9">

            <?php the_title( '<h1 class="full-width-title">', '</h1>' ); ?>

            <div class="separator"></div>

            <div class="subtitle-page"><?php echo get_post_meta($post->ID, 'subtitle-page', true) ; ?></div>

            <div class="full-width-content">

                <?php the_content(); ?>
                <?php endwhile ?>


            </div>

        </div>
        <div class="col-sm-12 col-md-3">

            <?php get_sidebar(); ?>

        </div>
    </div>


</div>

<?php get_footer(); ?>