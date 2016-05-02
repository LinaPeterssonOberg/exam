<?php /* Template Name: Contact Us Page */ ?>
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-12 contact-header">
            <?php if ( $contact_title = get_theme_mod( 'cha_head_contact_title' ) ) : ?>
                <h2><?php echo $contact_title; ?></h2>
            <?php endif; ?>

            <?php if ( $contact_subtitle = get_theme_mod( 'cha_head_contact_subtitle' ) ) : ?>
                <h2><?php echo $contact_subtitle; ?></h2>
            <?php endif; ?>

            <div class="separator-contact"></div>

        </div>
    </div>


    <div class="row contacts-widgets">

        <?php

            if( is_active_sidebar( 'contact-us-widget-sidebar' ) ) :

                dynamic_sidebar( 'contact-us-widget-sidebar' );

            else :

                the_widget( 'Contact_Us_Widget', 'contact-name=Lina Petersson Öberg&job-description=Student&contact-number=+46 (0) 70 459 65 62&contact-email=linapeterssonoberg@gmail.com&contact_logo='.get_stylesheet_directory_uri()."/assets/images/Lina.png", array('before_widget' => '', 'after_widget' => '') );
                the_widget( 'Contact_Us_Widget', 'contact-name=Lina Petersson Öberg&job-description=Student&contact-number=+46 (0) 70 459 65 62&contact-email=linapeterssonoberg@gmail.com&contact_logo='.get_stylesheet_directory_uri()."/assets/images/Lina.png", array('before_widget' => '', 'after_widget' => '') );
                the_widget( 'Contact_Us_Widget', 'contact-name=Lina Petersson Öberg&job-description=Student&contact-number=+46 (0) 70 459 65 62&contact-email=linapeterssonoberg@gmail.com&contact_logo='.get_stylesheet_directory_uri()."/assets/images/Lina.png", array('before_widget' => '', 'after_widget' => '') );
                the_widget( 'Contact_Us_Widget', 'contact-name=Lina Petersson Öberg&job-description=Student&contact-number=+46 (0) 70 459 65 62&contact-email=linapeterssonoberg@gmail.com&contact_logo='.get_stylesheet_directory_uri()."/assets/images/Lina.png", array('before_widget' => '', 'after_widget' => '') );
                the_widget( 'Contact_Us_Widget', 'contact-name=Lina Petersson Öberg&job-description=Student&contact-number=+46 (0) 70 459 65 62&contact-email=linapeterssonoberg@gmail.com&contact_logo='.get_stylesheet_directory_uri(). "/assets/images/Lina.png", array('before_widget' => '', 'after_widget' => '') );

            endif;

        ?>
    </div>

</div> <!-- </div contact-wrapper>  -->

<?php get_footer(); ?>











