<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hummel_portfolio
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

<body <?php body_class( 'template-color-1 spybody white-version'); ?> data-spy="scroll" data-bs-target=".navbar-example2" data-offset="100">
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hummel-portfolio' ); ?></a>

	<header id="masthead" class="rn-header haeder-default black-logo-version header--fixed header--sticky">
		<div class="site-branding">
		<div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a class="logo" href="/">

                                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                                echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?>                         
                        
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                        <!-- Start Mainmanu Nav -->
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                            wp_nav_menu ([
                                    'theme_location'  => 'primary',
                                    'menu_class'      => 'primary-menu nav nav-pills',
                                    'container'            => 'nav',
                                    'container_class'      => 'mainmenu-nav navbar-example2 d-none d-xl-block onepagenav',
                                    'container_id'         => 'sideNav',
                                    'container_aria_label' => '',
                                    'walker'  => new MenuNavWalker()
                                 ]);
                                ?>
                    <?php endif; ?>
                
                    <!-- Start Header Right  -->
                    <div class="header-right">

                        <?php if ( get_field('call_to_action_button_url', 'option') ) : ?>

                            <a class="rn-btn smoth-animation"  href="<?php echo get_field('call_to_action_button_url', 'option'); ?>"><span><?php echo get_field('call_to_action_button_text', 'option'); ?></span></a>

                        <?php endif; ?>
                     
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>

                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->