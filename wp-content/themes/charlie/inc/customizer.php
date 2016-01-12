<?php
/**
 * Register customizer
 *
 * @param WP_Customize_Manager $wp_customize
 */
function cha_customize_register( $wp_customize ) {

    /**
     * ---------------------------------------
     * THEME OPTIONS
     * ---------------------------------------
     *
     */

    //PANEL: THEME OPTIONS
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
    $wp_customize->add_setting( 'cha_head_options_logo', array('sanitize_callback' => 'esc_url_raw') );
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

    //SETTING AND CONTROL
    $wp_customize->add_setting( 'cha_head_options_title', array(
        'sanitize_callback' => 'cha_sanitize_text'

    ) );
    $wp_customize->add_control('cha_head_options_title', array(
        'label' =>__('Heading', 'cha'),
        'section' =>'cha_head_options_heading',
        'setting' => 'cha_head_options_title'
    ) );

    //SETTING AND CONTROL
    $wp_customize->add_setting( 'cha_head_options_subtitle', array(
        'sanitize_callback' => 'cha_sanitize_text'

    ) );
    $wp_customize->add_control('cha_head_options_subtitle', array(
        'label' =>__('Subtitle', 'cha'),
        'section' =>'cha_head_options_heading',
        'setting' => 'cha_head_options_subtitle'
    ) );

}
add_action( 'customize_register', 'cha_customize_register' );

// The force_balance_tags() function ensures that no tags are left unclosed,
// while the wp_kses_post() ensures that only safe tags make
// it into the database (the same tags that are allowed in a standard WordPress post.
function cha_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}