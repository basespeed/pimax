<?php
function sort_dashboard_widgets() {

    // Global the $wp_meta_boxes variable (this will allow us to alter the array)
    global $wp_meta_boxes;

    // Then unset everything in the array
    unset($wp_meta_boxes['dashboard']['normal']['core']);
    unset($wp_meta_boxes['dashboard']['side']['core']);

    wp_add_dashboard_widget( 'dashboard_widget', 'Pitagon Contacts', 'pitagon_intro_widget_function' );

    /**
     * Output the contents of the dashboard widget
     */
    function pitagon_intro_widget_function( $post, $callback_args ) {
        esc_html_e( "Hello World, this is my first Dashboard Widget!", "textdomain" );
    }

}

add_action('wp_dashboard_setup', 'sort_dashboard_widgets');



