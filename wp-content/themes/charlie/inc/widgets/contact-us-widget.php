<?php
class Contact_Us_Widget extends WP_Widget {
    //This function registers the widget with WordPress
    //Register the widget and set the widget name
    public function __construct() {
        parent:: __construct(
        //base id of widget
            'contact-us-widget',
            // Widget name will appear in UI
            __('Contact Us Widget', 'cha'),

            // Widget description
            array('description' => __('Contact Widget that sets the name, jobtitle, phonenumber, email', 'cha'))
        );
    }

    //This function is responsible for the front-end display of the widget. It outputs the content of the widget
    public function widget ( $args, $instance ) {

        ?>
        <?php

        global $sidebars_widgets;
        global $class;
        $count = count ($sidebars_widgets['contact-us-widget-sidebar']);
        switch ( $count ) {
            case '1':
                $class = 'col-md-12';
                break;
            case '2':
                $class = 'col-md-6 col-sm-6';
                break;
            case '3':
                $class = 'col-md-4 col-sm-6';
                break;
            case '4':
                $class = 'col-md-3 col-sm-6';
                break;
            default:
                $class = 'col-md-4 col-sm-6';
                break;
        }

        ?>
        <div class="<?php echo $class ?> contact-us-widget">

            <?php if ( ! empty( $instance['contact_logo'] ) ) : ?>

                <img src="<?php echo esc_url( $instance['contact_logo'] ); ?>" alt="<?php if ( ! empty( $instance['title']) ) echo $instance['title']; ?>">

            <?php endif ?>

            <?php if( $contact_name = @$instance[ 'contact-name' ] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->

                <div class="contact-name-widget"><h4><?php echo $contact_name; ?></h4></div>

            <?php endif; ?>

            <?php if( $job_description = @$instance[ 'job-description' ] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->

                <div class="job-description-widget"><h4><?php echo $job_description; ?></h4></div>

            <?php endif; ?>

            <?php if( $contact_number = @$instance[ 'contact-number' ] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->

                <div class="contact-number-widget"><h4><?php echo $contact_number; ?></h4></div>

            <?php endif; ?>

            <?php if( $contact_email = @$instance[ 'contact-email' ] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->
                <!-- <div class="contact-email-widget"><h2><?php echo $contact_email; ?></h2></div>-->

                <a class="contact-email-widget btn-black glyphicon glyphicon-send" href="mailto:<?php echo $contact_email; ?>" target="_top"> Send</a>

            <?php endif; ?>

        </div>

    <?php
    }

    public function update ( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance['contact_logo'] = esc_url_raw( $new_instance['contact_logo'] );
        $instance['contact-name'] = strip_tags( $new_instance['contact-name'] );
        $instance['job-description'] = strip_tags( $new_instance['job-description'] );
        $instance['contact-number'] = strip_tags( $new_instance['contact-number'] );
        $instance['contact-email'] = strip_tags( $new_instance['contact-email'] );


        return $instance;

    }


    //The form() method/function is used to define the back-end widget form
    // –which you see in the widgets panel in the dashboard
    //  This form enables a user to set up the title and other options for the widget.
    //This function takes the following parameter(s):
    //$instance – Previously saved values from the database

    public function form ( $instance ) {

        /* Set up some default widget settings. */
       // $defaults = array( 'contact-name' => 'Your Name', 'job-description' => 'Where do you work', 'contact-number' => 'Your phone number', 'contact-email' => 'Your e-mail' );
        //$instance = wp_parse_args( (array) $instance, $defaults );

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'contact_logo' ); ?>"><?php _e( 'Contact Logo', 'cha' ); ?></label>
             <span class="image-container">
                 <?php if (! empty( $instance['contact_logo'] ) ) : ?>
                     <img src="<?php echo $instance['contact_logo']; ?>" style="max-width: 100%; margin: 5px 0; display: block">
                 <?php endif; ?>
             </span>
            <input type="text" name="<?php echo $this->get_field_name('contact_logo'); ?>" id="<?php echo $this->get_field_id( 'contact_logo' ); ?>" value="<?php if ( ! empty( $instance['contact_logo'] ) ) echo $instance['contact_logo']; ?>" class="widefat media-input">
            <input type="button" class="upload-media-button button" value="Upload Image" style="margin-top: 5px">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('contact-name'); ?>"><?php _e('Contact Name:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('contact-name'); ?>" name="<?php echo $this->get_field_name('contact-name'); ?>" type="text" value="<?php if ( ! empty($instance['contact-name'] ) ) echo $instance['contact-name']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('job-description'); ?>"><?php _e('Job Description:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('job-description'); ?>" name="<?php echo $this->get_field_name('job-description'); ?>" type="text" value="<?php if ( ! empty($instance['job-description'] ) ) echo $instance['job-description']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('contact-number'); ?>"><?php _e('Contact number:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('contact-number'); ?>" name="<?php echo $this->get_field_name('contact-number'); ?>" type="text" value="<?php if ( ! empty($instance['contact-number'] ) ) echo $instance['contact-number']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('contact-email'); ?>"><?php _e('Contact Email:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('contact-email'); ?>" name="<?php echo $this->get_field_name('contact-email'); ?>" type="text" value="<?php if ( ! empty($instance['contact-email'] ) ) echo $instance['contact-email']; ?>" />
        </p>

    <?php

    }


}





