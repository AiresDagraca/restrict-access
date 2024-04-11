# Restrict Page Access for Guests in WordPress

This WordPress function enhances site security and user experience by restricting access to the site's pages for guests (non-logged-in users). Only specified pages, such as registration, login, and lost password pages, remain accessible to guests. This ensures that your site's content is protected while still allowing users to access essential functionalities.

## Features

- **Guest Restriction**: Automatically redirects non-logged-in users to the login page when they attempt to access restricted pages.
- **Customizable Exceptions**: Easily specify pages that remain accessible to guests, including custom registration and lost password pages.
- **Seamless User Experience**: Guides guests to login or register, enhancing the overall user experience and site security.

## Installation

1. **Navigate to Your Theme**: Open your WordPress theme directory, located at `/wp-content/themes/your-theme-name/`.
2. **Edit functions.php**: Add the provided PHP code to your theme's `functions.php` file. If you're using a child theme, ensure you're editing the child theme's `functions.php`.

Replace 'login', 'registration', and 'lostpassword' with the actual slugs of your pages.

## Usage
Once installed, the function automatically checks each page request by non-logged-in users. If the requested page is not in the list of exceptions, the user is redirected to the login page.

## Customizing Redirect URL
By default, users are redirected to the default WordPress login page. To redirect to a custom login page, replace wp_redirect(wp_login_url()); with the URL of your custom login page, like so:

```php
wp_redirect(home_url('/custom-login/'));
```
