<?php
class Description_Widget extends WP_Widget {
     //This function registers the widget with WordPress
    //Register the widget and set the widget name
    public function __construct() {
        parent:: __construct(
        //base id of widget
            'description-widget',
            // Widget name will appear in UI
            __('Description Widget', 'cha'),

            // Widget description
            array('description' => __('Widgets that sets the description of the company and icon', 'cha'))
        );

    }
     //This function is responsible for the front-end display of the widget. It outputs the content of the widget
    public function widget ( $args, $instance ) {

        ?>
        <?php

        //$sidebars_widgets (array) An associative array of sidebars and their widgets.
        global $sidebars_widgets;
        global $class;
        //Count the number of widgets in a sidebar
        $count = count($sidebars_widgets['description-widget-sidebar']);

        switch ( $count ) {
            case '1':
                $class = 'col-md-12';
                break;
            case '2':
                $class = 'col-md-6 col-sm-6';
                break;
            case '3':
                $class = 'col-md-4 col-sm-12 col-xs-12 description-widget-extra';
                break;
            case '4':
                $class = 'col-md-3 col-sm-12';
                break;
            default:
                $class = 'col-md-4 col-sm-12';
                break;
        }

        ?>
            <div class="description-widget <?php echo $class ?>">


            <?php if ( ! empty( $instance['description_logo'] ) ) : ?>

                <img src="<?php echo esc_url( $instance['description_logo'] ); ?>" alt="<?php if ( ! empty( $instance['title']) ) echo $instance['title']; ?>">

            <?php endif ?>

            <?php if( $description_head = @$instance[ 'description-head' ] ) : ?> <!-- @ gör så att vi kollar om $instance['description-head'] finns, som en if -->
                <div class="description-widget-title"><h2><?php echo $description_head; ?></h2></div>
            <?php endif; ?>

            <div class="description-seperator"></div>

            <?php if( $description_textarea = @$instance[ 'description-textarea' ] ) : ?>
                <div class="description-widget-textarea"><p><?php echo $description_textarea; ?></p></div>
            <?php endif; ?>

            </div>

        <?php

    }

    public function update ( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance['description_logo'] = esc_url_raw( $new_instance['description_logo'] );
        $instance['description-head'] = strip_tags( $new_instance['description-head'] );
        $instance['description-textarea'] = strip_tags( $new_instance['description-textarea'] );


        return $instance;




    }
    //The form() method/function is used to define the back-end widget form
    // –which you see in the widgets panel in the dashboard
    //  This form enables a user to set up the logo and title and textarea and other options for the widget.
    //This function takes the following parameter(s):
    //$instance – Previously saved values from the database


    public function form ( $instance ) {

        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'description_logo' ); ?>"><?php _e( 'Description Logo', 'cha' ); ?></label>
             <span class="image-container">
                 <?php if (! empty( $instance['description_logo'] ) ) : ?>
                     <img src="<?php echo $instance['description_logo']; ?>" style="max-width: 100%; margin: 5px 0; display: block">
                 <?php endif; ?>
             </span>
            <input type="text" name="<?php echo $this->get_field_name('description_logo'); ?>" id="<?php echo $this->get_field_id( 'description_logo' ); ?>" value="<?php if ( ! empty( $instance['description_logo'] ) ) echo $instance['description_logo']; ?>" class="widefat media-input">
            <input type="button" class="upload-media-button button" value="Upload Image" style="margin-top: 5px">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('description-head'); ?>"><?php _e('Description Head:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('description-head'); ?>" name="<?php echo $this->get_field_name('description-head'); ?>" type="text" value="<?php if ( ! empty($instance['description-head'] ) ) echo $instance['description-head']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('description-textarea'); ?>"><?php _e('Description Textarea:', 'cha'); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('description-textarea'); ?>" name="<?php echo $this->get_field_name('description-textarea'); ?>"><?php if ( ! empty($instance['description-textarea'] ) ) echo $instance['description-textarea']; ?></textarea>
        </p>


        <?php

    }
}





