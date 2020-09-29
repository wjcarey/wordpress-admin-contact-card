<?php
/*
Plugin name: WP Admin Contact Card
Version: 0.1
Description: Let your team and users know how to contact you quickly
Author: WJ Carey
Author URI: https://wjcarey.io
Plugin URI: https://github.com/wjcarey/wordpress-admin-contact-card
License: Apache License 2.0
*/
require_once( plugin_dir_path( __FILE__ ) . '/custom_widgets.php' );

class Admin_Dashboard_Widgets {
 
    function __construct() {
        add_action( 'wp_dashboard_setup', array( $this, 'add_dashboard_widgets' ) );
    }
 
    function add_dashboard_widgets() {
        global $custom_dashboard_widgets;
     
        foreach ( $custom_dashboard_widgets as $widget_id => $options ) {
            wp_add_dashboard_widget(
                $widget_id,
                $options['title'],
                $options['callback']
            );
        }
    }
}

$adw = new Admin_Dashboard_Widgets();