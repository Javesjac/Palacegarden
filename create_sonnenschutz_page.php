<?php
// Load WordPress
require_once('wp-load.php');

$page_title = 'Sonnenschutz';
$page_slug = 'sonnenschutz';

$page_check = get_page_by_path($page_slug);
$page_id = -1;

if (isset($page_check->ID)) {
    echo "Page already exists with ID: " . $page_check->ID . "\n";
    $page_id = $page_check->ID;
} else {
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $page_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_name' => $page_slug, // slug
        'post_author' => 1,
    );

    $page_id = wp_insert_post($new_page);
    echo "Created page with ID: " . $page_id . "\n";
}

// Optional: Force template assignment if needed, though WP hierarchy usually handles it by slug
// update_post_meta($page_id, '_wp_page_template', 'page-sonnenschutz.php');
?>