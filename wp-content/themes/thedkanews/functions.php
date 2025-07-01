<?php
/**
 * thedkanews functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thedkanews
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function thedkanews_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on thedkanews, use a find and replace
		* to change 'thedkanews' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'thedkanews', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'custom-menu' => esc_html__( 'Primary', 'thedkanews' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'thedkanews_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'thedkanews_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thedkanews_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thedkanews_content_width', 640 );
}
add_action( 'after_setup_theme', 'thedkanews_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thedkanews_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'thedkanews' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'thedkanews' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'thedkanews_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thedkanews_scripts() {
	wp_enqueue_style( 'thedkanews-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'boostrap-css', get_template_directory_uri().'/css/bootstrap.min.css', array(), _S_VERSION );
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
	wp_enqueue_style( 'header-footer-css', get_template_directory_uri().'/css/header-footer.css', array(), 	_S_VERSION );
	wp_enqueue_style( 'home-css', get_template_directory_uri().'/css/home.css', array(), _S_VERSION );
	wp_enqueue_style( 'style-css', get_template_directory_uri().'/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'blog-css', get_template_directory_uri().'/css/blog.css', array(), _S_VERSION );

    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.4.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'thedkanews-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'boostrap-navigation', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	 wp_localize_script('custom', 'news_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'ajax_nonce' => wp_create_nonce('load_more_news_nonce'),
    ));
wp_enqueue_script(
    'custom-swiper-init',
    get_template_directory_uri() . '/js/swiper-init.js', // Make sure this file exists
    array('swiper-js'),
    _S_VERSION,
    true
);

}
add_action( 'wp_enqueue_scripts', 'thedkanews_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/cpt-thedkanews.php';
require get_template_directory() . '/inc/meta-boxes-thedkanews.php';
require get_template_directory() . '/inc/custom_social_icon.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'  => 'Theme General Settings',
        'menu_title'  => 'Theme Options',
        'menu_slug'   => 'theme-general-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
}


function ajax_load_more_news() {
    check_ajax_referer('load_more_news_nonce', 'security');

    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'post_type' => 'news',
		'post_status' => 'publish',
        'posts_per_page' => 8,
        'paged' => $paged,
    );

    $news_query = new WP_Query($args);

    ob_start();

    if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <div class="col-md-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" class="common-card-img" alt="">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'news_type');
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                echo '<div class="tag tag-outline">' . esc_html($term->name) . '</div>';
                                break;
                            }
                        }
                        ?>
                    </div>
                    <div class="common-card-data">
                        <h6 class="card-title base"><?php echo wp_trim_words(get_the_title(), 6); ?></h6>
                        <div class="card-footer">
                            <p class="source-name sm">by <?php the_author(); ?></p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile;
        wp_reset_postdata();

        $html = ob_get_clean();
        wp_send_json_success(array(
            'html' => $html,
            'max_page' => $news_query->max_num_pages
        ));
    else :
        wp_send_json_error('No more posts');
    endif;
}

add_action('wp_ajax_load_more_news', 'ajax_load_more_news');
add_action('wp_ajax_nopriv_load_more_news', 'ajax_load_more_news');



// Increase view count function 
function set_post_view_count($post_id) { 
    $key = 'post_views_count'; 
    $views = (int) get_post_meta($post_id, $key, true); 
    $views++; update_post_meta($post_id, $key, $views); 
} 

// Call this function on single post load 
function track_post_views($post_id) { 
    if (!is_single() || empty($post_id)) return; 
    set_post_view_count($post_id); 
} 
add_action('wp_head', function () { 
    if (is_single()) { 
        global $post;
         if (isset($post->ID)) { 
            track_post_views($post->ID);
        }
    }
});

function allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');


function ajax_thedkanews_blog_posts() {
	ob_start();

	// Sanitize and fetch POST data
	$pagination_data = isset($_POST['thedkanews_blog_posts_page_id']) ? intval($_POST['thedkanews_blog_posts_page_id']) : 1;
	$cat_name = isset($_POST['thedkanews_blog_posts_cat_id']) ? intval($_POST['thedkanews_blog_posts_cat_id']) : '';

	$args = array(
		'post_type'      => 'news',
		'post_status'    => 'publish',
		'posts_per_page' => 3,
		'paged'          => $pagination_data,
	);

	// Add taxonomy filter if category ID is provided
	if (!empty($cat_name)) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'news_type',
				'field'    => 'term_id',
				'terms'    => $cat_name,
			)
		);
	}

	$arr_posts = new WP_Query($args);
	?>

	<?php if ($arr_posts->have_posts()) : ?>
		<?php while ($arr_posts->have_posts()) : $arr_posts->the_post(); ?>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card">
					<a href="<?php echo esc_url(get_permalink()); ?>" class="card-img">
						<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: get_template_directory_uri() . '/images/default.jpg'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
					</a>
					<div class="card-text position-relative">
						<a href="<?php echo esc_url(get_permalink()); ?>">
							<h6 class="card-title base"><?php echo esc_html(get_the_title()); ?></h6>
						</a>
						<p class="blog-date"><?php echo esc_html(get_the_date()); ?></p>
						<?php if (get_the_excerpt()) : ?>
							<p><?php echo esc_html(get_the_excerpt()); ?></p>
						<?php endif; ?>
						<a href="<?php echo esc_url(get_permalink()); ?>" class="button-primary">
							<?php esc_html_e('Read MORE', 'thedkanews'); ?>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php esc_html_e('No posts found.', 'thedkanews'); ?></p>
	<?php endif; ?>

	<?php
	wp_reset_postdata();

	$response = array(
		'max_num_page'         => $arr_posts->max_num_pages,
		'pagination_data_blog' => ob_get_clean(),
	);

	wp_send_json($response);
}

add_action('wp_ajax_thedkanews_blog_posts', 'ajax_thedkanews_blog_posts');
add_action('wp_ajax_nopriv_thedkanews_blog_posts', 'ajax_thedkanews_blog_posts');


