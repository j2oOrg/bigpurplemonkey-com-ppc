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

function bigpurplemonkey_get_meta_description() {
    if (is_front_page()) {
        return 'Licensed Alberta 50/50 raffle by Bigpurplemonkey Wildlife Foundation. Request tickets by email. Draw March 30, 2026 in Edmonton. 18+ in Alberta.';
    }

    if (is_page()) {
        $page = get_post();
        if ($page) {
            $descriptions = [
                'rules' => 'Official rules for the Bigpurplemonkey 50/50 raffle: eligibility, ticket pricing, draw details, and email-only ticket requests.',
                'faq' => 'Common questions about the Bigpurplemonkey 50/50 raffle, including ticket requests by email, eligibility, and draw details.',
                'prizes' => 'Prize details for the Bigpurplemonkey 50/50 raffle, including the 50% payout structure and draw schedule.',
                'play' => 'Info on requesting 50/50 raffle tickets by email and where to find draw details.',
                'privacy-policy' => 'Privacy Policy for the Bigpurplemonkey 50/50 raffle covering data handling for ticket requests and communications.',
                'terms-and-conditions' => 'Terms and conditions for the Bigpurplemonkey 50/50 raffle, including eligibility, ticket sales, and draw procedures.',
                'disclaimer' => 'Disclaimer for the Bigpurplemonkey 50/50 raffle covering licensing, eligibility, and limitations.',
            ];

            if (!empty($page->post_name) && isset($descriptions[$page->post_name])) {
                return $descriptions[$page->post_name];
            }

            $excerpt = trim(wp_strip_all_tags(get_the_excerpt($page)));
            if ($excerpt !== '') {
                return $excerpt;
            }

            $content = trim(wp_strip_all_tags($page->post_content));
            if ($content !== '') {
                return wp_trim_words($content, 28, '');
            }
        }
    }

    $tagline = get_bloginfo('description');
    if (!empty($tagline)) {
        return $tagline;
    }

    return 'Licensed Alberta 50/50 raffle with draw details, email ticket requests, and eligibility requirements.';
}

function bigpurplemonkey_get_meta_image_url() {
    $site_icon = get_site_icon_url(1200);
    if (!empty($site_icon)) {
        return $site_icon;
    }

    return get_theme_file_uri('/assets/images/herobackground01.jpg');
}

function bigpurplemonkey_render_meta_tags() {
    if (is_admin()) {
        return;
    }

    $title = wp_get_document_title();
    $description = bigpurplemonkey_get_meta_description();
    $image = bigpurplemonkey_get_meta_image_url();

    if (is_front_page()) {
        $url = home_url('/');
    } elseif (is_singular()) {
        $url = get_permalink();
    } else {
        $url = home_url(add_query_arg([], isset($GLOBALS['wp']) ? $GLOBALS['wp']->request : ''));
    }

    if (empty($url)) {
        $url = home_url('/');
    }

    $site_name = get_bloginfo('name');

    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    echo '<link rel="canonical" href="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta property="og:image:alt" content="Bigpurplemonkey 50/50 raffle">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
}

add_action('wp_head', 'bigpurplemonkey_render_meta_tags', 1);

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
