<?php
/*
1. Replace 'login', 'register', and 'lostpassword' with the actual slugs of your login, registration, and lost password pages.
2. If you're using the default WordPress login page (wp-login.php), users trying to access it directly will not be redirected. 
*/

function restrict_access_for_guests() {
    if (!is_user_logged_in() && !is_page(array('login', 'registration', 'lostpassword'))) {
        // Replace 'your-login-page-slug' with the slug of your custom login page
        // If you're using the default WP login, you might not need to set this
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('template_redirect', 'restrict_access_for_guests');

