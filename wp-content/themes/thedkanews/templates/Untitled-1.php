$articles_args = array( 
    'post_type' => 'news', 
    'post_status' => 'publish', 
    'posts_per_page' => 3, 
    'order' => 'DESC',
    'orderby' => 'date', 
    'meta_key' => 'post_views_count', 
    'orderby' => 'meta_value_num', 
    'order' => 'DESC', 
    'tax_query' => array( 
        array( 
            'taxonomy' => 'news-category', 
            'field' => 'slug', 
            'terms' => 'news', 
            ) 
        ) 
    ); 
$articles = new WP_Query($articles_args); 
