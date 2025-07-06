<?php
    /* Template Name: Home */
    get_header();
?>  
<section class="hero-news container ">
    <div class="row ">
        <!-- Left Slider -->
        <div class="col-lg-8">
            <div class="swiper mySwiper banner-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-news-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png" alt="Slide 1" class="banner-slider-img">
                            <div class="banner-news-card-data">
                                <div class="tag">Technology</div>
                                <h2 class="mt-2">Game Changing Virtual Reality Console Technololows Profit To Serve The Community</h2>
                                <div class="meta  d-flex align-items-center gap-3 flex-wrap">
                                    <span><i class="fa-solid fa-user"></i> By Admin</span>
                                    <span><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</span>
                                    <span><i class="fa-solid fa-clock"></i> 20 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-news-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" alt="Slide 1" class="banner-slider-img">
                            <div class="banner-news-card-data">
                                <div class="tag">Technology</div>
                                <h2 class="mt-2">Game Changing Virtual Reality Console Technololows Profit To Serve The Community</h2>
                                <div class="meta  d-flex align-items-center gap-3 flex-wrap">
                                    <span><i class="fa-solid fa-user"></i> By Admin</span>
                                    <span><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</span>
                                    <span><i class="fa-solid fa-clock"></i> 20 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-news-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-3.png" alt="Slide 1" class="banner-slider-img">
                            <div class="banner-news-card-data">
                                <div class="tag">Technology</div>
                                <h2 class="mt-2">Game Changing Virtual Reality Console Technololows Profit To Serve The Community</h2>
                                <div class="meta  d-flex align-items-center gap-3 flex-wrap">
                                    <span><i class="fa-solid fa-user"></i> By Admin</span>
                                    <span><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</span>
                                    <span><i class="fa-solid fa-clock"></i> 20 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination or Navigation if needed -->
            </div>
        </div>
        <!-- Right Side Cards -->
        <div class="col-lg-4 mt-4 mt-lg-0  right-side-tab-container">
            <h3 class="section-title">News Feed</h3>
            <div class="d-flex flex-column gap-3 mt-2">
                <a href="/" class="news-card small-card d-flex flex-column justify-content-end p-2 text-white  position-relative" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" alt="Slide 1" class="banner-slider-img">
                    <span class="tag">Mobile</span>
                    <h6 class="mt-2">New Modern Iphone 14pro Max Extrea Revolutionary Features</h6>
                    <small class="meta "><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</small>
                </a>
                <a href="/" class="news-card small-card d-flex flex-column justify-content-end p-3 text-white rounded position-relative" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-3.png" alt="Slide 1" class="banner-slider-img">
                    <span class="tag">Gadget</span>
                    <h6 class="mt-2">A Guide To Image Optimization On Jamstack Sites</h6>
                    <small class="meta "><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</small>
                </a>
                <a href="/" class="news-card small-card d-flex flex-column justify-content-end p-3 text-white rounded position-relative" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="banner-slider-img">
                    <span class="tag">News</span>
                    <h6 class="mt-2">Using Automated Test Results To Improve Accessibility</h6>
                    <small class="meta "><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</small>
                </a>
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
        <div class="swiper editors-choice-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <a href="#" class="common-card">
                        <div class="common-card-img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png" class="common-card-img" alt="">
                            <div class="tag tag-outline">Mobile</div>
                        </div>
                        <div class="common-card-data">
                            <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                            <div class="card-footer">
                                <p class="source-name sm">by someone</p>
                                <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <a href="#" class="common-card">
                        <div class="common-card-img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                            <div class="tag tag-outline">Gadget</div>
                        </div>
                        <div class="common-card-data">
                            <h6 class=" card-title base">How To Search For A Developer Job Abroad</h6>
                            <div class="card-footer">
                                <p class="source-name sm">by someone</p>
                                <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <a href="#" class="common-card">
                        <div class="common-card-img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-3.png" class="common-card-img" alt="">
                            <div class="tag tag-outline">Technology</div>
                        </div>
                        <div class="common-card-data">
                            <h6 class=" card-title base">New Smashing Front-End & UX Workshops</h6>
                            <div class="card-footer">
                                <p class="source-name sm">by someone</p>
                                <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <a href="#" class="common-card">
                        <div class="common-card-img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" class="common-card-img" alt="">
                            <div class="tag tag-outline">Technology</div>
                        </div>
                        <div class="common-card-data">
                            <h6 class=" card-title base">New Smashing Front-End & UX Workshops</h6>
                            <div class="card-footer">
                                <p class="source-name sm">by someone</p>
                                <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
<section class="common-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
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
                            <div class="col-md-6">
                                <a href="#" class="big-card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png" alt="Slide 1" class="big-card-img">
                                    <div class="big-card-data">
                                        <div class="tag">Technology</div>
                                        <p class="">Game Changing Virtual Reality Console Technololows Profit To Serve The Community</p>
                                        <div class="meta  d-flex align-items-center gap-3 flex-wrap">
                                            <span><i class="fa-solid fa-user"></i> By Admin</span>
                                            <span><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</span>
                                            <span><i class="fa-solid fa-clock"></i> 20 mins</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column gap-3 mt-2">
                                    <a href="#" class="horizontal-card transition">
                                        <div class="left">
                                            <div class="tag">Technology</div>
                                            <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                            <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                        </div>
                                        <div class="img-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                        </div>
                                    </a>
                                    <a href="#" class="horizontal-card transition">
                                        <div class="left">
                                            <div class="tag">Technology</div>
                                            <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                            <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                        </div>
                                        <div class="img-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" alt="Slide 1" class="">
                                        </div>
                                    </a>
                                    <a href="#" class="horizontal-card transition">
                                        <div class="left">
                                            <div class="tag">Technology</div>
                                            <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                            <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                        </div>
                                        <div class="img-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png" alt="Slide 1" class="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="ad-banner"></div> -->
                    <div>
                        <div class=" common-header">
                            <h3 class="section-title">Trending News</h3>
                            <div class="">
                                <button class="button-primary">
                                    View All
                                </button>
                            </div>
                        </div>
                        <div class="tranding-news-section">
                            <a href="" class="horizontal-big-card">
                                <div class="left">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="transition" alt="">
                                </div>
                                <div class="right">
                                    <div class="tag ">Mobile</div>
                                    <div class="data">
                                        <h3>Iphone Devices Are Going To Incredible Now a days</h3>
                                        <p>Browned butter and brown sugar area caramelly goodness, crispy edgesick and soft centers rare melty little puddles of chocolate first favorite thing about these browned butter.</p>
                                    </div>
                                    <button class="button-primary">View More</button>
                                </div>
                            </a>
                            <div class="lower">
                                <a href="#" class="common-card">
                                    <div class="common-card-img-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                                        <div class="tag tag-outline">Mobile</div>
                                    </div>
                                    <div class="common-card-data">
                                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                                        <div class="card-footer">
                                            <p class="source-name sm">by someone</p>
                                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="common-card">
                                    <div class="common-card-img-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-3.png" class="common-card-img" alt="">
                                        <div class="tag tag-outline">Mobile</div>
                                    </div>
                                    <div class="common-card-data">
                                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                                        <div class="card-footer">
                                            <p class="source-name sm">by someone</p>
                                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="common-card">
                                    <div class="common-card-img-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" class="common-card-img" alt="">
                                        <div class="tag tag-outline">Mobile</div>
                                    </div>
                                    <div class="common-card-data">
                                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                                        <div class="card-footer">
                                            <p class="source-name sm">by someone</p>
                                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="vertical-right-section">
                    <div class="">
                        <div class=" common-header">
                            <h3 class="section-title">Connect with us</h3>
                        </div>
                        <div class="social-media-container">
                            <a href="" class="social-media-link transition">
                                <p><i class="fa-brands fa-facebook-f"></i></p>
                                <p>facebook</p>
                            </a>
                            <a href="" class="social-media-link transition">
                                <p><i class="fa-brands fa-x-twitter"></i></p>
                                <p>twitter</p>
                            </a>
                            <a href="" class="social-media-link transition">
                                <p><i class="fa-brands fa-youtube"></i></p>
                                <p>youtube</p>
                            </a>
                            <a href="" class="social-media-link transition">
                                <p><i class="fa-brands fa-instagram"></i></p>
                                <p>instagram</p>
                            </a>
                            <a href="" class="social-media-link transition">
                                <p><i class="fa-brands fa-linkedin"></i></p>
                                <p>LinkedIn</p>
                            </a>
                            <a href="" class="social-media-link transition">
                                <p><i class="fa-brands fa-pinterest"></i></p>
                                <p>Pinterest</p>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=" common-header">
                            <h3 class="section-title">Categories</h3>
                        </div>
                        <div class="catagories-container">
                            <a href="" class="catagories-link transition">
                                <p>Technology</p>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="" class="catagories-link transition">
                                <p>Mobile</p>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="" class="catagories-link transition">
                                <p>Gadget</p>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="" class="catagories-link transition">
                                <p>News</p>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=" common-header">
                            <h3 class="section-title">Popular Posts</h3>
                        </div>
                        <div class="sidebar-news-container">
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
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
            <div class="">
                <button class="button-primary">
                    View All
                </button>
            </div>
        </div>
        <div class="row common-outlet-container">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="common-card">
                    <div class="common-card-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="common-card-img" alt="">
                        <div class="tag tag-outline">Mobile</div>
                    </div>
                    <div class="common-card-data">
                        <h6 class=" card-title base">Using Automated Test Results To Improve</h6>
                        <div class="card-footer">
                            <p class="source-name sm">by someone</p>
                            <p class="date sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="common-section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
               <div class=" common-header">
                    <h3 class="section-title">Weekly Best News</h3>
                    <div class="">
                        <button class="button-primary">
                            View All
                        </button>
                    </div>
                </div>
                <div class="weekly-news-section">
                    <a href="" class="horizontal-big-card">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="transition" alt="">
                        </div>
                        <div class="right">
                            <div class="tag ">Mobile</div>
                            <div class="data">
                                <h3>Iphone Devices Are Going To Incredible Now a days</h3>
                                <p>Browned butter and brown sugar area caramelly goodness, crispy edgesick and soft centers rare melty little puddles of chocolate first favorite thing about these browned butter.</p>
                            </div>
                            <button class="button-primary">View More</button>
                        </div>
                    </a>
                    <a href="" class="horizontal-big-card">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="transition" alt="">
                        </div>
                        <div class="right">
                            <div class="tag ">Mobile</div>
                            <div class="data">
                                <h3>Iphone Devices Are Going To Incredible Now a days</h3>
                                <p>Browned butter and brown sugar area caramelly goodness, crispy edgesick and soft centers rare melty little puddles of chocolate first favorite thing about these browned butter.</p>
                            </div>
                            <button class="button-primary">View More</button>
                        </div>
                    </a>
                    <a href="" class="horizontal-big-card">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="transition" alt="">
                        </div>
                        <div class="right">
                            <div class="tag ">Mobile</div>
                            <div class="data">
                                <h3>Iphone Devices Are Going To Incredible Now a days</h3>
                                <p>Browned butter and brown sugar area caramelly goodness, crispy edgesick and soft centers rare melty little puddles of chocolate first favorite thing about these browned butter.</p>
                            </div>
                            <button class="button-primary">View More</button>
                        </div>
                    </a>
                    <a href="" class="horizontal-big-card">
                        <div class="left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="transition" alt="">
                        </div>
                        <div class="right">
                            <div class="tag ">Mobile</div>
                            <div class="data">
                                <h3>Iphone Devices Are Going To Incredible Now a days</h3>
                                <p>Browned butter and brown sugar area caramelly goodness, crispy edgesick and soft centers rare melty little puddles of chocolate first favorite thing about these browned butter.</p>
                            </div>
                            <button class="button-primary">View More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div>
                        <div class=" common-header">
                            <h3 class="section-title">Popular Tech</h3>
                        </div>
                        <div class="sidebar-news-container">
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
                            <a href="#" class="sidebar-news-link transition">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-4.png" alt="Slide 1" class="">
                                </div>
                                <div class="right">
                                    <div class="tag">Technology</div>
                                    <p class="transition    ">World Needs to Better Reflect People of Color</p>
                                    <p class="sm"><i class="fa-solid fa-calendar-days"></i> 27 August, 2024</p>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
    ?>