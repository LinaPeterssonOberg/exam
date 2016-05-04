<?php
/**
 * Register customizer
 *
 * @param WP_Customize_Manager $wp_customize
 */
function cha_customize_register( $wp_customize ) {

    /**
     * ---------------------------------------
     * HEAD OPTIONS
     * ---------------------------------------
     *
     */

    //PANEL: HEAD OPTIONS
    $wp_customize->add_panel( 'cha_head_options_panel', array(
        'title' => __( 'Head options' ),
        'capability' => 'edit_theme_options',
        'priority' => 1
    ) );

    //SECTION:LOGOTYPE
    $wp_customize->add_section( 'cha_head_options_logotype', array(
        'title' => __( 'Logotype', 'cha' ),
        'panel' => 'cha_head_options_panel'
    ) );

    //SETTING ADD CONTROL
    $wp_customize->add_setting( 'cha_head_options_logo', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => get_template_directory_uri() . '/assets/images/logo.png',

    ) );
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'cha_head_options_logo',
        array(
            'label'=>__('Logotype', 'cha'),
            'section' => 'cha_head_options_logotype',
            'setting' => 'cha_head_options_logo'
        )
    ) );

    //SECTION:LOGOTYPE
    $wp_customize->add_section( 'cha_head_options_heading', array(
        'title' => __( 'Image Heading', 'cha' ),
        'panel' => 'cha_head_options_panel'
    ) );

    //SETTING AND CONTROL FOR SUBTITLE 1
    $wp_customize->add_setting( 'cha_head5_options_title', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' => 'TEST Strategy  / Brandeing / Design / Interactive'
    ) );

    $wp_customize->add_control('cha_head5_options_title', array(
        'label' =>__('Subtitle 1', 'cha'),
        'section' =>'cha_head_options_heading',
        'setting' => 'cha_head5_options_title'
    ) );

    //SETTING AND CONTROL FOR HEADING
    $wp_customize->add_setting( 'cha1_head_options_title', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' => 'TEST URBAN DELI'
    ) );

    $wp_customize->add_control('cha1_head_options_title', array(
        'label' =>__('Heading', 'cha'),
        'section' =>'cha_head_options_heading',
        'setting' => 'cha1_head_options_title'
    ) );

    //SETTING AND CONTROL FOR SUBTITLE 2
    $wp_customize->add_setting( 'cha1_head_options_subtitle', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' => 'TEST Creating kick-ass brands since 2016'
    ) );

    $wp_customize->add_control('cha1_head_options_subtitle', array(
        'label' =>__('Subtitle 2', 'cha'),
        'section' =>'cha_head_options_heading',
        'setting' => 'cha1_head_options_subtitle'
    ) );

    /*
  * --------------------------------
  *
  * CONTENT PANEL
  *
  * ---------------------------------
  *
  * */
    $wp_customize->add_panel('cha_charlie_content1_panel', array (
        'priority' => 32,
        'capability' => 'edit_theme_options',
        'title'=> __( 'Charlie Section 1', 'cha'),
        'description' => 'Add text widget'
    ));

    $wp_customize->add_panel('cha_charlie_content2_panel', array (
        'priority' => 32,
        'capability' => 'edit_theme_options',
        'title'=> __( 'Charlie Section 2', 'cha')
    ));


    $wp_customize->add_panel('cha_charlie_content3_panel', array (
        'priority' => 32,
        'capability' => 'edit_theme_options',
        'title'=> __( 'Charlie Content 3', 'cha')
    ));

    /*
   * --------------------------------
   *
   * FOOTERS PANEL
   *
   * ---------------------------------
   *
   * */

    $wp_customize->add_panel('cha_footer_panel', array (
        'title'=> __( 'Footer Section', 'cha'),
        'capability' => 'edit_theme_options',
        'priority' => 32
    ) );

    /*
     * CONTENT FOR EMAIL ADRESS & PHONENUMBER SECTION
     *
     *  */

    $wp_customize->add_section('cha_footer_contact_section', array(
        'title' =>__('Content Footer Section', 'cha'),
        'panel' => 'cha_footer_panel'
    ) );

    /* Setting and control for email title ex Email Us*/
    $wp_customize->add_setting('cha_footer_email_title', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' =>__('Ex. Email Us', 'cha')
    ) );

    $wp_customize->add_control('cha_footer_email_title', array(
        'label' =>__('Title for your Email adress', 'cha'),
        'section' =>'cha_footer_contact_section',
        'setting' =>'cha_footer_email_title'
    ) );
    /* Setting and control for Your Email ex lina@gmail.com*/

    $wp_customize->add_setting('cha_footer_email_content', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' =>__('contact@yoursite.com', 'cha')
    ) );

    $wp_customize->add_control('cha_footer_email_content', array(
        'label' =>__('Your Email', 'cha'),
        'section' =>'cha_footer_contact_section',
        'setting' =>'cha_footer_email_content'
    ) );

    $wp_customize->add_setting('cha_footer_adress_title', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' =>__('Ex Visit us', 'cha')
    ) );

    $wp_customize->add_control('cha_footer_adress_title', array(
        'label' =>__('Title for your adress', 'cha'),
        'section' =>'cha_footer_contact_section',
        'setting' => 'cha_footer_adress_title'
    ) );

    $wp_customize->add_setting('cha_footer_adress_content', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' =>__('Tranebergsvägen 37', 'cha')
    ) );

    $wp_customize->add_control('cha_footer_adress_content', array(
        'label' =>__('Your Adress', 'cha'),
        'section' =>'cha_footer_contact_section',
        'setting' => 'cha_footer_adress_content'
    ) );

    /* SOCIAL ICONS */

    //Facebook Link
    $wp_customize->add_setting( 'cha_footer_social_facebook', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ) );

    $wp_customize->add_control( 'cha_footer_social_facebook', array(
        'label' =>__('Facebook Link', 'cha'),
        'section' =>'cha_footer_contact_section',
        'setting' => 'cha_footer_social_facebook'
    ) );

    //Twitter Link
    $wp_customize->add_setting( 'cha_footer_social_twitter', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ) );

    $wp_customize->add_control( 'cha_footer_social_twitter', array(
        'label' =>__('Twitter Link', 'cha'),
        'section' =>'cha_footer_contact_section',
        'setting' => 'cha_footer_social_twitter'
    ) );

    //Linkedin Link
    $wp_customize->add_setting('cha_footer_social_linkedin', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ) );

    $wp_customize->add_control('cha_footer_social_linkedin', array(
        'label' =>__('Linkedin Link', 'cha'),
        'section' =>'cha_footer_contact_section',
        'setting' =>'cha_footer_social_linkedin'
    ) );

    /*
  *--------------------------------
  *
  * CONTACT PAGE
  *
  * ---------------------------------
  *
  * */

    //PANEL: CONTACT PAGE
    $wp_customize->add_panel( 'cha_contact_panel', array(
        'title'=> __( 'Contact page', 'cha'),
        'capability' => 'edit_theme_options',
        'priority' => 32
    ) );

    // Title & subtitle to contact page
    $wp_customize->add_section( 'cha_contact_section', array(
        'title' => __( 'Contact Title and Subtitle', 'cha' ),
        'panel' => 'cha_contact_panel',
        'priority' => 1
    ) );

    // SETTING AND CONTROL
    $wp_customize->add_setting( 'cha_head_contact_title', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' => __('We’re situated on Hälsingegatan 49 in Stockholm, Sweden.','cha')
    ) );

    $wp_customize->add_control('cha_head_contact_title', array(
        'label' =>__('Heading', 'cha'),
        'section' =>'cha_contact_section',
        'setting' => 'cha_head_contact_title'
    ) );

    //SETTING AND CONTROL SUBTITLE
    $wp_customize->add_setting( 'cha_head_contact_subtitle', array(
        'sanitize_callback' => 'cha_sanitize_text',
        'default' => __('Don’t hesitate to get in touch, we’re always up for a fika', 'cha')
    ) );

    $wp_customize->add_control('cha_head_contact_subtitle', array(
        'label' => __('Subtitle', 'cha'),
        'section' =>'cha_contact_section',
        'setting' => 'cha_head_contact_subtitle'
    ) );

}
add_action( 'customize_register', 'cha_customize_register' );

// The force_balance_tags() function ensures that no tags are left unclosed,
// while the wp_kses_post() ensures that only safe tags make
// it into the database (the same tags that are allowed in a standard WordPress post.
function cha_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );
}

function cha_customize_enqueue_scripts() {

    wp_enqueue_script( 'cha-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery'), 'v1', true);

}

add_action( 'customize_controls_enqueue_scripts', 'cha_customize_enqueue_scripts');