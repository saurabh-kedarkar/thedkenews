<?php
    /* Template Name: Home Dev */
    get_header();
    ?>  
<section class="hero-news container ">
    <div class="row ">
        <!-- Left Slider -->
        <div class="col-lg-8">
            <div class="swiper mySwiper banner-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'news',
                        'post_status'=> 'Published',
                        'posts_per_page' => 4,
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'news_type',
                                'field'    => 'slug',
                                'terms'    => 'technology', // Add actual slug to filter by
                            ),
                        )
                    );

                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();  ?>
                    <div class="swiper-slide">
                        <div class="banner-news-card">
                             <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="banner-slider-img">
                            <?php endif; ?>
                            <div class="banner-news-card-data">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'news_type');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<div class="tag">' . esc_html($term->name) . '</div>';
                                        break; // show only the first term
                                    }
                                }
                                ?>
                                <h2 class="mt-2"><?php the_title() ?></h2>
                                <div class="meta  d-flex align-items-center gap-3 flex-wrap">
                                    <span><i class="fa-solid fa-user"></i> By <?php the_author(); ?></span>
                                    <span><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></span>
                                    <span><i class="fa-solid fa-clock"></i> 20 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                     }
                        wp_reset_postdata();
                    } ?>
                </div> 
                <!-- Add Pagination or Navigation if needed -->
            </div>
        </div>
        <!-- Right Side Cards -->
        <div class="col-lg-4 mt-4 mt-lg-0  right-side-tab-container">
            <h3 class="section-title">News Feed</h3>
            <div class="d-flex flex-column gap-3">
                <?php
                    $args = array(
                        'post_type' => 'news',
                        'post_status'=> 'Published',
                        'posts_per_page' => 3,
                    );

                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();  ?>
                        <a href="<?php the_permalink(); ?>" class="news-card small-card d-flex flex-column justify-content-end p-2 text-white  position-relative" >
                         <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="Slide 1" class="banner-slider-img">
                            <?php
                            endif;
                            $terms = get_the_terms(get_the_ID(), 'news_type');
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<div class="tag">' . esc_html($term->name) . '</div>';
                                    break; // show only the first term
                                }
                            }
                            ?>
                            <h6 class="mt-2"><?php the_title() ?></h6>
                            <small class="meta "><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></small>
                        </a>
                    <?php 
                        }
                    wp_reset_postdata();
                } ?>
            </div>
        </div>
    </div>
</section>
<!--  -->
<section class="editors-choice common-section ">
    <div class="container">
        <div class=" common-header">
            <h3 class="section-title">Editors Choice</h3>
            <div class="d-flex gap-2">
                <div class=" editors-choice-prev slider-nav-btn"><i class="fa-solid fa-arrow-left"></i></div>
                <div class=" editors-choice-next slider-nav-btn"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
        <?php
            $args = array(
                'post_type'      => 'news',
                'post_status'    => 'publish',
                'posts_per_page' => 6,
                'order'          => 'DESC',
                'meta_query'     => array(
                    array(
                        'key'     => '_editor_choice',
                        'value'   => 'yes',
                        'compare' => '='
                    )
                )
            );

    $query = new WP_Query($args); ?>
        <div class="swiper editors-choice-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <?php if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();?>
                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>" class="common-card">
                        <div class="common-card-img-container">
                             <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" class="common-card-img" alt="">
                            <?php endif ?>
                            <!-- <div class="tag tag-outline">Mobile</div> -->
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'news_type');
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<div class="tag tag-outline">' . esc_html($term->name) . '</div>';
                                    break; // show only the first term
                                }
                            }
                            ?>
                        </div>
                        <div class="common-card-data">
                            <h6 class=" card-title base"><?php the_title(); ?></h6>
                            <div class="card-footer">
                                <p class="source-name sm">by <?php the_author(); ?></p>
                                <p class="date sm"><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</section>
<!--  -->
<section class="common-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class=" vertical-right-section">
                    <div>
                        <div class=" common-header">
                            <h3 class="section-title">Recent Posts</h3>
                            <div class="">
                                <button class="button-primary">
                                    View All
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $recent_query = new WP_Query(array(
                            'post_type'      => 'news',
                            'posts_per_page' => 4,
                            'post_status'    => 'publish',
                        ));

                        if ($recent_query->have_posts()):
                            $counter = 0;
                            while ($recent_query->have_posts()):
                                $recent_query->the_post();
                                $post_id = get_the_ID();
                                $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url($post_id, 'large') : get_template_directory_uri() . '/images/img-1.png';                              
                                $date        = get_the_date('j F, Y');
                                ?>

                                <?php if ($counter == 0){ ?>
                            <div class="col-md-6">
                                <a href="<?php the_permalink(); ?>" class="big-card">
                                    <img src="<?php echo $image_url ?>" alt="Slide 1" class="big-card-img">
                                    <div class="big-card-data">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'news_type');
                                        if ($terms && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                echo '<div class="tag">' . esc_html($term->name) . '</div>';
                                                break; // show only the first term
                                            }
                                        }
                                        ?>
                                        <p class=""><?php the_title() ?></p>
                                        <div class="meta  d-flex align-items-center gap-3 flex-wrap">
                                            <span><i class="fa-solid fa-user"></i> By <?php the_author(); ?></span>
                                            <span><i class="fa-solid fa-calendar-days"></i> <?php echo esc_html($date); ?></span>
                                            <span><i class="fa-solid fa-clock"></i> <?php echo get_the_time(); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column gap-3">
                            <?php }else { 
                                ?>
                                    <a href="<?php the_permalink(); ?>" class="horizontal-card transition">
                                        <div class="left">
                                            <?php
                                        $terms = get_the_terms(get_the_ID(), 'news_type');
                                        if ($terms && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                echo '<div class="tag">' . esc_html($term->name) . '</div>';
                                                break; // show only the first term
                                            }
                                        }
                                        ?>
                                            <p class="transition    "><?php the_title() ?></p>
                                            <p class="sm"><i class="fa-solid fa-calendar-days"></i> <?php echo esc_html($date); ?></p>
                                        </div>
                                        <div class="img-container">
                                            <img src="<?php echo $image_url ?>" alt="Slide 1" class="">
                                        </div>
                                    </a>
                            <?php } ?>
                            <?php $counter++; 
                             endwhile; ?>
                             </div> <!-- .d-flex -->
                    </div> <!-- .col-md-6 -->
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="ad-banner"></div>
                    <div>
                        <div class=" common-header">
                            <h3 class="section-title">Trending News</h3>
                            <div class="">
                                <button class="button-primary">
                                    View All
                                </button>
                            </div>
                        </div>
                       <?php
                            $args = array(
                                'post_type'      => 'news',
                                'post_status'    => 'publish',
                                'posts_per_page' => 4,
                                'order'          => 'DESC',
                                'meta_query'     => array(
                                    array(
                                        'key'     => '_trending_news',
                                        'value'   => 'yes',
                                        'compare' => '='
                                    )
                                )
                            );

                            $query = new WP_Query($args);
                            if ($query->have_posts()):
                                $counter = 0;
                                ?>

                                <div class="tranding-news-section">

                                    <?php while ($query->have_posts()): $query->the_post(); 
                                        $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri().'/images/img-1.png';
                                        $terms = get_the_terms(get_the_ID(), 'news_type'); // Replace with your taxonomy slug
                                        $tag = !empty($terms) ? $terms[0]->name : 'Uncategorized';
                                        ?>

                                        <?php if ($counter == 0): ?>
                                            <a href="<?php the_permalink(); ?>" class="horizontal-big-card">
                                                <div class="left">
                                                    <img src="<?php echo esc_url($image_url); ?>" class="transition" alt="<?php the_title(); ?>">
                                                </div>
                                                <div class="right">
                                                    <div class="tag"><?php echo esc_html($tag); ?></div>
                                                    <div class="data">
                                                        <h3><?php echo wp_trim_words(get_the_title(), 12); ?></h3>
                                                        <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                                                    </div>
                                                    <button class="button-primary">View More</button>
                                                </div>
                                            </a>

                                            <div class="lower">
                                        <?php else: ?>
                                            <a href="<?php the_permalink(); ?>" class="common-card">
                                                <div class="common-card-img-container">
                                                    <img src="<?php echo esc_url($image_url); ?>" class="common-card-img" alt="<?php the_title(); ?>">
                                                    <div class="tag tag-outline"><?php echo esc_html($tag); ?></div>
                                                </div>
                                                <div class="common-card-data">
                                                    <h6 class="card-title base"><?php echo wp_trim_words(get_the_title(),6); ?></h6>
                                                    <div class="card-footer">
                                                        <p class="source-name sm">by <?php the_author(); ?></p>
                                                        <p class="date sm"><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    <?php $counter++; endwhile; ?>
                                    
                                    </div> <!-- end .lower -->
                                </div> <!-- end .tranding-news-section -->

                                <?php wp_reset_postdata(); ?>
                            <?php else: ?>
                                <p>No trending news found.</p>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vertical-right-section">
                    <div class="">
                        <div class=" common-header">
                            <h3 class="section-title">Connect with us</h3>
                        </div>
                        <?php
                        $social_media = get_field("social_media",'option');
                        
                        ?>
                        <div class="social-media-container">
                            <?php foreach($social_media as $key=>$item){ ?>
                            <a href="<?php echo $item['media_url'] ?>" target="_blank" class="social-media-link transition">
                                <p><i class="<?php echo $item['media_icon_'] ?>" ></i></p>
                                <p><?php echo $item['media_name'] ?></p>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div>
                        <div class=" common-header">
                            <h3 class="section-title">Categories</h3>
                        </div>
                        <?php
                        $terms = get_terms(array(
                        'taxonomy' => 'news_type',
                        'hide_empty' => false, // set to true to hide terms with no posts
                         )); ?>

                        <div class="catagories-container">
                            <?php
                             foreach ($terms as $term) { ?>
                            <a href="<?php echo esc_url(get_term_link($term)) ?>" class="catagories-link transition">
                                <p><?php echo esc_html($term->name) ?></p>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <?php } ?>                            
                        </div>
                    </div>
                    <div>
                        <div class=" common-header">
                            <h3 class="section-title">Popular Posts</h3>
                        </div>
                        <?php
                        $popular_query = new WP_Query(array(
                            'post_type'      => 'news',
                            'posts_per_page' => 4,
                            'post_status'    => 'publish',
                            'meta_key' => 'post_views_count', 
                            'orderby' => 'meta_value_num', 
                            'order' => 'DESC', 
                        )); ?>
                        <div class="sidebar-news-container">
                            <?php
                            if($popular_query->have_posts()):
                                while ($popular_query->have_posts()):
                                    $popular_query->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="sidebar-news-link transition">
                                        <div class="img-container">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="Slide 1" class="">
                                        </div>
                                        <div class="right">
                                              <?php
                                        $terms = get_the_terms(get_the_ID(), 'news_type');
                                        if ($terms && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                echo '<div class="tag">' . esc_html($term->name) . '</div>';
                                                break; // show only the first term
                                            }
                                        }
                                        ?>
                                            <p class="transition    "><?php echo wp_trim_words(get_the_title(),5); ?></p>
                                            <p class="sm"><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></p>
                                        </div>
                                    </a>
                                <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="common-section">
    <div class="container">
        <div class=" common-header">
            <h3 class="section-title">Dummy Posts</h3>
        </div>
             <?php
            $dummy_query = new WP_Query(array(
                'post_type'      => 'news',
                'posts_per_page' => 8,
                'post_status'    => 'publish',
                'paged' => 1,
            )); 
            ?>
            
            <div class="row common-outlet-container" id="news-posts">
                
                <?php if($dummy_query->have_posts()):
                    $max_page = $dummy_query->max_num_pages;
                    while ($dummy_query->have_posts()):
                        $dummy_query->the_post(); ?>
                    <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>" class="common-card">
                            <div class="common-card-img-container">
                                <img src=<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?> class="common-card-img" alt="">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'news_type');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<div class="tag tag-outline">' . esc_html($term->name) . '</div>';
                                        break; // show only the first term
                                    }
                                }
                                ?>
                            </div>
                            <div class="common-card-data">
                                <h6 class=" card-title base"><?php echo wp_trim_words(get_the_title(),6); ?></h6>
                                <div class="card-footer">
                                    <p class="source-name sm">by <?php the_author(); ?></p>
                                    <p class="date sm"><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
        </div>
       <?php
        // Assume $max_page is set from a query above
        if ($max_page > 1): ?>
            <div class="load-more-btn">
                <button id="load-more-news" data-max="<?php echo esc_attr($max_page); ?>" class="button-primary">
                    Load More
                </button>
            </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</section>
<section class="common-section ">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
               <div class=" common-header">
                    <h3 class="section-title">Weekly Best News</h3>
                    <div class="">
                        <button class="button-primary">
                            View All
                        </button>
                    </div>
                </div>
                <?php
                // WP Query for top viewed posts of the current week
                $args = array(
                    'post_type'      => 'news',
                    'posts_per_page' => 4,
                    'post_status'    => 'publish',
                    'meta_key'       => 'post_views_count', 
                    'orderby'        => 'meta_value_num', 
                    'order'          => 'DESC', 
                );

                $weekly_query = new WP_Query($args);
                ?>
                <?php if($weekly_query->have_posts()): ?>
                <div class="weekly-news-section">
                    <?php while($weekly_query->have_posts()): $weekly_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="horizontal-big-card">
                        <div class="left">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" class="transition" alt="">
                        </div>
                        <div class="right">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'news_type');
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<div class="tag">' . esc_html($term->name) . '</div>';
                                    break;
                                }
                            }
                            ?>
                            <div class="data">
                                <h3><?php echo wp_trim_words(get_the_title(), 12); ?></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                            </div>

                            <button class="button-primary">View More</button>
                        </div>
                    </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <div>
                    <div class=" common-header">
                        <h3 class="section-title">Popular Tech</h3>
                    </div>
                    <?php
                    $popular_query = new WP_Query(array(
                        'post_type'      => 'news',
                        'posts_per_page' => 4,
                        'post_status'    => 'publish',
                        'meta_key'       => 'post_views_count', 
                        'orderby'        => 'meta_value_num', 
                        'order'          => 'DESC', 
                        'tax_query'      => array( 
                            array( 
                                'taxonomy' => 'news_type',
                                'field'    => 'slug',
                                'terms'    => 'technology' 
                                ) 
                            ) 
                        ));  ?>
                    <div class="sidebar-news-container">
                        <?php if($popular_query->have_posts()):
                            while ($popular_query->have_posts()):
                                    $popular_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                     <?php
                                    $terms = get_the_terms(get_the_ID(), 'news_type');
                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            echo '<div class="tag">' . esc_html($term->name) . '</div>';
                                            break;
                                        }
                                    }
                                    ?>
                                    <p class="transition"><?php echo wp_trim_words(get_the_title(), 5); ?></p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></p>
                                </div>
                            </a>
                            <?php
                            endwhile; 
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
    ?>