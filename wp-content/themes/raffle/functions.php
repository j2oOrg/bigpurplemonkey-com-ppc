<?php
/**
 * bigpurplemonkey theme setup and assets.
 */

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    register_nav_menus([
        'primary' => __('Primary Menu', 'bigpurplemonkey'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'bigpurplemonkey-google-fonts',
        'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Baloo+2:wght@600;700;800&display=swap',
        [],
        null
    );

    if (is_front_page()) {
        wp_enqueue_style(
            'bigpurplemonkey-home-fonts',
            'https://fonts.googleapis.com/css2?family=Baloo+2:wght@700;800&family=Nunito:wght@700;800&display=swap',
            [],
            null
        );
    }

    wp_enqueue_style(
        'bigpurplemonkey-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        [],
        '6.5.2'
    );

    wp_enqueue_style(
        'bigpurplemonkey-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3'
    );

    wp_enqueue_style(
        'bigpurplemonkey-site',
        get_theme_file_uri('/assets/css/site.css'),
        ['bigpurplemonkey-bootstrap'],
        $theme_version
    );

    if (is_front_page()) {
        wp_enqueue_style(
            'bigpurplemonkey-home',
            get_theme_file_uri('/assets/css/front-page.css'),
            ['bigpurplemonkey-site'],
            $theme_version
        );
    }

    wp_enqueue_script(
        'bigpurplemonkey-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.3',
        true
    );

    wp_enqueue_script(
        'bigpurplemonkey-main',
        get_theme_file_uri('/assets/js/main.js'),
        [],
        $theme_version,
        true
    );
});

add_filter('body_class', function ($classes) {
    $classes[] = 'nova-shell-p7q4';
    return $classes;
});

function bigpurplemonkey_publish_privacy_policy_page($page_id) {
    if (!$page_id || !current_user_can('publish_pages')) {
        return;
    }

    $status = get_post_status($page_id);
    if ($status && in_array($status, ['draft', 'pending'], true)) {
        wp_update_post([
            'ID' => $page_id,
            'post_status' => 'publish',
        ]);
    }
}

add_action('admin_init', function () {
    $page_id = (int) get_option('wp_page_for_privacy_policy');
    bigpurplemonkey_publish_privacy_policy_page($page_id);
});

add_action('update_option_wp_page_for_privacy_policy', function ($old_value, $value) {
    bigpurplemonkey_publish_privacy_policy_page((int) $value);
}, 10, 2);
