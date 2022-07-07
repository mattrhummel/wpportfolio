    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.html">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?>                         
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription"><?php if ( get_field('profile_description') ) : ?>
                    <?php echo get_field('profile_description', 'options'); ?>
                <?php endif; ?>
                </p>
            </div>
            <div class="content">
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

                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">
                        <?php if ( get_field('find_me_on_text', 'option') ) : ?>
                        <?php echo get_field('find_me_on_text', 'option'); ?>
                    <?php endif; ?>
                    </span>
                    <ul class="social-share d-flex liststyle">

                        <li class="linkedin"><a href="https://www.linkedin.com/in/mattrhummel"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->