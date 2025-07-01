<?php
// Register Custom Post Type: news
function custom_post_type_news() {

    $labels = array(
        'name'                  => 'News',
        'singular_name'         => 'News',
        'menu_name'             => 'News',
        'name_admin_bar'        => 'News',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New News',
        'edit_item'             => 'Edit News',
        'new_item'              => 'New News',
        'view_item'             => 'View News',
        'view_items'            => 'View Newses',
        'search_items'          => 'Search Newses',
        'not_found'             => 'No Newses found',
        'not_found_in_trash'    => 'No Newses found in Trash',
        'all_items'             => 'All Newses',
        'archives'              => 'News Archives',
    );

    $args = array(
        'label'                 => 'News',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions'),
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'newses'),
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_rest'          => true,
    );

    register_post_type('news', $args);
}
add_action('init', 'custom_post_type_news');

// Register Custom Taxonomy: news Type
function custom_taxonomy_news_type() {

    $labels = array(
        'name'              => 'News Types',
        'singular_name'     => 'News Type',
        'search_items'      => 'Search news Types',
        'all_items'         => 'All news Types',
        'edit_item'         => 'Edit news Type',
        'update_item'       => 'Update news Type',
        'add_new_item'      => 'Add New news Type',
        'new_item_name'     => 'New News Type Name',
        'menu_name'         => 'News Types',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true, // true = categories, false = tags
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'news-type'),
    );

    register_taxonomy('news_type', array('news'), $args);
}
add_action('init', 'custom_taxonomy_news_type');


// 1. Add custom columns to the admin post list
function add_custom_news_columns($columns) {
    $columns['news_taxonomy'] = __('news_type'); // replace with your taxonomy name
    $columns['editor_choice'] = __('Editor Choice');
    $columns['trending_news'] = __('Trending News');
    return $columns;
}
add_filter('manage_news_posts_columns', 'add_custom_news_columns');

// 2. Show data in the custom columns
function show_custom_news_column_data($column, $post_id) {
    switch ($column) {
        case 'news_taxonomy':
            $terms = get_the_term_list($post_id, 'news_type', '', ', ');
            echo $terms ? $terms : __('No category');
            break;

        case 'editor_choice':
            $editor = get_post_meta($post_id, '_editor_choice', true);
            echo $editor === 'yes' ? '✅' : '—';
            break;

        case 'trending_news':
            $trending = get_post_meta($post_id, '_trending_news', true);
            echo $trending === 'yes' ? '🔥' : '—';
            break;
    }
}
add_action('manage_news_posts_custom_column', 'show_custom_news_column_data', 10, 2);

// 3. (Optional) Make the custom columns sortable
function make_custom_news_columns_sortable($columns) {
    $columns['editor_choice'] = 'editor_choice';
    $columns['trending_news'] = 'trending_news';
    return $columns;
}
add_filter('manage_edit-news_sortable_columns', 'make_custom_news_columns_sortable');
