jQuery(function( $ ) {
    wp.customize.section( 'sidebar-widgets-description-widget-sidebar').panel('cha_charlie_content3_panel');
    wp.customize.section( 'sidebar-widgets-description-widget-sidebar').priority('32');
    wp.customize.section( 'sidebar-widgets-text-widget-sidebar').panel('cha_charlie_content2_panel');
    wp.customize.section( 'sidebar-widgets-text-widget-sidebar').priority('32');
    wp.customize.section( 'sidebar-widgets-service-widget-left-sidebar').panel('cha_charlie_content1_panel');
    wp.customize.section( 'sidebar-widgets-service-widget-left-sidebar').priority('32');
    wp.customize.section( 'sidebar-widgets-service-widget-right-sidebar').panel('cha_charlie_content1_panel');
    wp.customize.section( 'sidebar-widgets-service-widget-right-sidebar').priority('32');
    wp.customize.section( 'sidebar-widgets-contact-us-widget-sidebar').panel('cha_contact_panel');
    wp.customize.section( 'background_image' ).panel( 'cha_head_options_panel' );
    wp.customize.section( 'background_image' ).priority( '3' );
});
