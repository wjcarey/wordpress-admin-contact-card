<?php
$custom_dashboard_widgets = array(
    'admin-contact-card' => array(
        'title' => 'Issues and Support',
        'callback' => 'dashboardWidgetContent'
    )
);

function dashboardWidgetContent() {
    $user = wp_get_current_user();
    echo "<p>Hello <strong>" . $user->user_login . "</strong>, for assistance, support, and training. Please call me at <strong>Phone Number</strong> or email to <strong>Contact@</strong>.</p>";
    echo "<p>Admin Name</p>";
}