<?php
$custom_dashboard_widgets = array(
    'admin-contact-card' => array(
        'title' => 'Support And Training',
        'callback' => 'dashboardWidgetContent'
    )
);

function dashboardWidgetContent() {
    $user = wp_get_current_user();
    echo '
		<p>Hello <strong>' . $user->user_login . '</strong>, for assistance, support, and training. Please contact with your questions via phone or email.</p>
		<p>
            <strong>Admin Name</strong>
            <br>
            Admin Title
            <br>
            <strong>
                <a href="mailto:contact@emailaddress">contact@emailaddress</a>
            </strong>
            <br>
            <strong>
                <a href="tel:number">phone number</a>
            </strong>
            <br>
            Denver, CO
            <br>
		</p>
	';
}