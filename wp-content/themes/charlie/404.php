<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <h1 class="entry-title"><?php _e( 'Ops! Page can´t be found' ); ?></h1>
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a new search?', 'cha' ); ?></p>

            </div>

            <!-- gets the sidebar -->
            <div class="col-md-3">

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>



<?php get_footer(); ?>


