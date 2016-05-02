<?php
class Contact_Us_Adress extends WP_Widget {

    public function __construct() {
        parent:: __construct(
             //base id of widget
            'company_adress',
            //Widget name will appear in UI
            __('Company Adress Widget', 'cha'),

            // Widget description
            array('description' => __('Contact Company adress', 'cha') )
        );
    }

    public function widget( $args, $instance ) {

        if ( $company_adress = @$instance['company_adress'] ) : ?>
            <p><?php echo $company_adress; ?></p>
        <?php endif;

        if ($company_postadress = $instance['company_postadress'] ) : ?>
            <p><?php echo $company_postadress; ?></p>
        <?php endif;

    }

    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance['company_adress'] = strip_tags( $new_instance['company_adress'] );
        $instance['comapany_postadress'] = strip_tags( $instance['company_postadress'] );

        return $instance;

    }

    public function form( $instance ) {

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('company_adress'); ?>"><?php _e('Company adress:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('company_adress'); ?>" name="<?php echo $this->get_field_name('company_adress'); ?>" type="text" value="<?php if ( ! empty($instance['company_adress'] ) ) echo $instance['company_adress']; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('company_postadress'); ?>"><?php _e('Company postadress:', 'cha'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('company_postadress'); ?>" name="<?php echo $this->get_field_name('company_postadress'); ?>" type="text" value="<?php if ( ! empty($instance['company_postadress'] ) ) echo $instance['company_postadress'];  ?>" />
        </p>

        <?php

    }
}



