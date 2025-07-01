<?php
get_header();
$category = get_queried_object();
print_r($category);
$category_id = $category->term_id;
$category_name = $category->name;
?>
<!-- section banner start -->
<div class="banner-section banner-image-overlay" style="background-image: url(<?php echo (get_the_post_thumbnail_url(get_the_ID(), 'full') ? get_the_post_thumbnail_url(get_the_ID(), 'full') : ""); ?>">
   <div class="container text-center">
      <h2 class="heading-style-2"><?php echo $category_name; ?></h2>
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb justify-content-center align-items-center">
            <li class="breadcrumb-item p-small"><a href="<?php echo esc_url(home_url('/')) ?>" class="p-small"><?php _e('Home', 'thedkanews'); ?></a></li>
            <li class="breadcrumb-item active p-small" aria-current="page"><?php echo $category_name; ?></li>
         </ol>
      </nav>
   </div>
</div>
<!-- section banner close -->

<!-- section blog start -->
<section class="section-blog-listing padding-block comman-bg-pattern">
   <form id="meta_filter_form">
      <input type="hidden" name="action" value="thedkanews_blog_posts">
      <input type="hidden" id="thedkanews_blog_posts_page_id" name="thedkanews_blog_posts_page_id" value="1">
      <input type="hidden" id="thedkanews_blog_posts_cat_id" name="thedkanews_blog_posts_cat_id" value="<?php echo $category_id; ?>">
   </form>
   <div class="container">
      <?php
      $args = array(
         'post_type' => 'news',
         'post_status' => 'publish',
         'posts_per_page' => 3,
         'paged' => 1,
          'tax_query'      => array( 
                	array( 
                    'taxonomy' => 'news_type',
                    'field'    => 'term_id',
                    'terms'    => $category_id, 
                  ) 
                ) 
			);
      $arr_posts = new WP_Query($args);
      ?>
      <div class="row row gx-3 gx-xl-4" id="blog_post_data">
         <?php if ($arr_posts->have_posts()) : ?>
            <?php while ($arr_posts->have_posts()) : $arr_posts->the_post(); ?>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="card">
                     <a href="<?php echo get_permalink(); ?>" class="card-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="blog Image">
                     </a>
                     <div class="card-text position-relative">
                        <a href="<?php echo get_permalink(); ?>">
                           <h6 class="card-title base"><?php echo get_the_title(); ?></h6>
                        </a>
                        <p class="blog-date"><?php echo get_the_date(); ?></p>
                        <?php if (get_the_excerpt()) { ?>
                           <p><?php the_excerpt(); ?></p>
                        <?php } ?>
                        <a href="<?php echo get_permalink(); ?>" class="button-primary"><?php _e('Read MORE', 'thedkanews'); ?></a>
                     </div>
                  </div>
               </div>
         <?php endwhile;
         endif;
         ?>
         <?php wp_reset_postdata(); ?>
      </div>
      <?php if ($arr_posts->max_num_pages > 1) : ?>
         <div class="product-loader" style="display: none;">
            <div class="loader-container">
               <div class="lds-ring">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
            </div>
         </div>
         <div class="d-flex align-items-center justify-content-center mt-1 mt-md-3 loadmore-btn">
            <!-- <a href="#" class="theme-btn-fill-black" id="more_blogs"> -->
            <a href="#" class="blog-load-more button-primary" id="more_blogs">
               <?php _e('load More', 'thedkanews'); ?>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16" style="display: none;">
                  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
                  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
               </svg>
            </a>
         </div>
      <?php endif; ?>
   </div>
</section>
<!-- section blog close -->




<?php
get_footer();
?>