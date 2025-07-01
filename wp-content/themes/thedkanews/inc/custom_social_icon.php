<?php
/**
 * Add a social share button group.
 */
function get_social_share_buttons($url)
{
    ob_start(); ?>
    <div class="newsinner-social-icons d-flex gap-2 align-items-center">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/06/Facebook-Logo-1.svg')); ?>" alt="Facebook" width="25" height="25">
        </a>
        <a href="https://wa.me/?text=<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/06/whatsapp-icon.svg')); ?>" alt="WhatsApp" width="25" height="25">
        </a>
        <a href="https://twitter.com/share?url=<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/06/x_logo_twitter_icon.svg')); ?>" alt="Twitter (X)" width="25" height="25">
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/06/LinkedIn-Logo-1.svg')); ?>" alt="LinkedIn" width="25" height="25">
        </a>
    </div>
    <?php
    return ob_get_clean();
}

/**
 * Social Share Widget Class
 */
class Social_Share_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'social_share_widget',
            __('Social Share Widget', 'text_domain'),
            array('description' => __('Widget to share the post on social media', 'text_domain'))
        );
    }

    public function widget($args, $instance)
    {
        if (!is_single()) return;

        global $post;
        $url = get_permalink($post->ID);
        echo $args['before_widget'];
        echo get_social_share_buttons($url);
        echo $args['after_widget'];
    }
}

function register_social_share_widget()
{
    register_widget('Social_Share_Widget');
}
add_action('widgets_init', 'register_social_share_widget');
