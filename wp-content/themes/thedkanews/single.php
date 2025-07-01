<?php
get_header();
?>
<!-- section banner start -->
<div class="banner-section banner-image-overlay" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2025/06/img-2.png);">
    <div class="container text-center">
        <a href="<?php echo site_url('blog') ?>" class="back-to-blog back-to-blog-white">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog-arrow-icon.svg" alt="arrow icon">
            Back To Blog
        </a>
        <h6 class="heading-style-6"><?php the_title() ?></h6>
    </div>
</div>
<!-- section banner close -->

<!-- section blog detail start -->
<section class="section-blog-detail padding-block comman-bg-pattern">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10">
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid bg-subpage-top-shape" alt="Shape">
                </figure>
                	<?php the_content(); ?>

					<p>Share this article using: </p>
					 <?php 
                            $post_url = get_permalink();
                            echo get_social_share_buttons($post_url);
                        ?>
                <a href="<?php echo site_url('blog') ?>" class="back-to-blog back-to-blog-black">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog-arrow-icon.svg" alt="arrow icon">
                    Back To Blog
                </a>
            </div>
        </div>
    </div>
</section>
<!-- section blog detail close -->


<?php
get_footer();
?>