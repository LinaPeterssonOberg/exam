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

        //wordpress passes the widget() method two arguments,
        // the first is $args which is an array detailing information
        //about the widget. and the second is $instance which you can use to get the output the data associateed
        //with the widget

         extract( $args );

        //before_widget
        //(string) the text or HTML befor the widget.
        //Default： <div class="widget {widget's classname}">

        echo $before_widget;

        ?>

        <div class="big-intro-text container">
            <hr>
            <?php if( $description_head = @$instance[ 'description-head' ] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->
                <h2><?php echo $description_head; ?></h2>
            <?php endif; ?>
            <?php if( $description_textarea = @$instance[ 'description-textarea' ] ) : ?>
                <p><?php echo $description_textarea; ?></p>
            <?php endif; ?>
        </div>

        <?php

        echo $after_widget;

    }

    public function update ( $new_instance, $old_instance ) {

        $instance = $old_instance;

        //$instance['description-image'] = strip_tags( $new_instance['description-image'] );
        $instance['description-head'] = strip_tags( $new_instance['description-head'] );
        $instance['description-textarea'] = strip_tags( $new_instance['description-textarea'] );


        return $instance;


    }

    //The form() method/function is used to define the back-end widget form
    // –which you see in the widgets panel in the dashboard
    //  This form enables a user to set up the title and other options for the widget.
    //This function takes the following parameter(s):
    //$instance – Previously saved values from the database

    public function form ( $instance ) {

        //$description_image = $instance['description-image'];
        $description_head = esc_attr( $instance['description-head'] );
        $description_textarea = esc_attr( $instance['description-textarea'] );


        ?>

        <p>
            <label for="<?php echo $this->get_field_id('description-head'); ?>"><?php _e('Description Head:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('description-head'); ?>" name="<?php echo $this->get_field_name('description-head'); ?>" type="text" value="<?php echo $description_head; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('description-textarea'); ?>"><?php _e('Description Textarea:', 'cha'); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('description-textarea'); ?>" name="<?php echo $this->get_field_name('description-textarea'); ?>"><?php echo $description_textarea; ?></textarea>
        </p>

        <?php

    }



}





