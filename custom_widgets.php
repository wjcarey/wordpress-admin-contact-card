<?php

require_once( plugin_dir_path( __FILE__ ) . '/custom_widgets.php' );

$custom_dashboard_widgets = array(
    'admin-contact-card' => array(
        'title' => 'Issues and Support',
        'callback' => 'dashboardWidgetContent'
    )
);

function dashboardWidgetContent() {
    $user = wp_get_current_user();
    echo "<p>Hello <strong>" . $user->user_login . "</strong>, assistance, support and training is available. Please call me at <strong>Phone Number</strong> or email to <strong>Contact@</strong>.</p>";
    echo "<p>Admin Name</p>";

    $r = new WP_Query( apply_filters( 'widget_posts_args', array(
        'posts_per_page' => 10,
        'post_status' => 'publish',
        'author' => $user->ID
    ) ) );
}