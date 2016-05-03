<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-9">

                <h2 class="entry-title"><?php _e( 'Ops! Page can´t be found' ); ?></h2>
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a new search?', 'cha' ); ?></p>

            </div>

            <!-- gets the sidebar -->
            <div class="col-sm-12 col-md-3">

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>



<?php get_footer(); ?>


