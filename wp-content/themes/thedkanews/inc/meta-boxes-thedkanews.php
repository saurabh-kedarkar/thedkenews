<?php
// Add both metaboxes
function add_custom_metaboxes() {
    add_meta_box(
        'editor_choice_box',
        'Editor Choice',
        'render_editor_choice_metabox',
        'news',
        'side',
        'high'
    );

    add_meta_box(
        'trending_news_box',
        'Trending News',
        'render_trending_news_metabox',
        'news',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'add_custom_metaboxes');

// Render Editor Choice checkbox
function render_editor_choice_metabox($post) {
    $value = get_post_meta($post->ID, '_editor_choice', true);
    wp_nonce_field('save_editor_choice', 'editor_choice_nonce');
    ?>
    <label for="editor_choice_checkbox">
        <input type="checkbox" name="editor_choice_checkbox" id="editor_choice_checkbox" value="yes" <?php checked($value, 'yes'); ?> />
        Mark as Editor's Choice
    </label>
    <?php
}

// Render Trending News checkbox
function render_trending_news_metabox($post) {
    $value = get_post_meta($post->ID, '_trending_news', true);
    wp_nonce_field('save_trending_news', 'trending_news_nonce');
    ?>
    <label for="trending_news_checkbox">
        <input type="checkbox" name="trending_news_checkbox" id="trending_news_checkbox" value="yes" <?php checked($value, 'yes'); ?> />
        Mark as Trending News
    </label>
    <?php
}

// Save Editor Choice
function save_editor_choice_meta($post_id) {
    if (!isset($_POST['editor_choice_nonce']) || !wp_verify_nonce($_POST['editor_choice_nonce'], 'save_editor_choice')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['editor_choice_checkbox'])) {
        update_post_meta($post_id, '_editor_choice', 'yes');
    } else {
        delete_post_meta($post_id, '_editor_choice');
    }
}
add_action('save_post_news', 'save_editor_choice_meta');

// Save Trending News
function save_trending_news_meta($post_id) {
    if (!isset($_POST['trending_news_nonce']) || !wp_verify_nonce($_POST['trending_news_nonce'], 'save_trending_news')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['trending_news_checkbox'])) {
        update_post_meta($post_id, '_trending_news', 'yes');
    } else {
        delete_post_meta($post_id, '_trending_news');
    }
}
add_action('save_post_news', 'save_trending_news_meta');
