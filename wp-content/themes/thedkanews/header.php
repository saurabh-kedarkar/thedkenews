<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package thedkanews
     */
    
    ?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'thedkanews' ); ?></a>
        <header id="masthead" class="site-header nav-down">
			<div class="container">
            <div class="header-container">
                <!-- logo -->
					<div class="site-branding">
						<?php
                        	the_custom_logo();
                        	if ( is_front_page() && is_home() ) :
						?>
                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    	<?php
                        	else :
						?>
                    	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    	<?php
                        	endif;
                        	$thedkanews_description = get_bloginfo( 'description', 'display' );
                        	if ( $thedkanews_description || is_customize_preview() ) :
                        ?>
                    	<p class="site-description"><?php echo $thedkanews_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    	<?php endif; ?>
                	</div>
                	<!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation d-flex align-items-center justify-content-between">
						<!-- toggler button -->
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="line"></span>
							<span class="line"></span>
                			<span class="line"></span>
                		</button>
                	
                		<?php
                    		wp_nav_menu(
								array(
									'theme_location' => 'custom-menu',
									'container_class' => 'menu-class',
									'container' => 'nav', // Wrap it in <nav>
									'container_class' => 'main-nav-container', // Custom class for nav
    								'menu_class' => 'menu-class', // Custom class for ul
    								'menu_id' => 'primary-menu', // ID for ul
            						'fallback_cb' => 'wp_page_menu'
									)
								);
                    		?>
            			</nav>
					<!-- #site-navigation -->
				</div>
            </div>
            
        </header>
        <!-- #masthead -->