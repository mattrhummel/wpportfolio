<!-- Start Slider Area -->
<div id="home" class="rn-slide-area">
    <div class="slide slider-style-3">
        <div class="container">
            <div class="row slider-wrapper">
                <div class="order-2 order-xl-1 col-lg-12 col-xl-5  mt_sm--50">
                    <div class="slider-info">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-12">
                                <div class="user-info-top">
                                    <div class="user-info-header">
                                        <div class="user">
                                            <i data-feather="user"></i>
                                        </div>
                                        <h1 class="title">
                                            <?php if ( get_field('intro_text', 'option') ) : ?>
                                            <?php echo get_field('intro_text', 'option'); ?>
                                            <?php endif; ?>

                                        </h1>
                                        <p class="disc">
                                            <?php if ( get_field('profile_description', 'option') ) : ?>
                                            <?php echo get_field('profile_description', 'option'); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="user-info-footer">
                                        <div class="info">
                                            <i data-feather="file"></i>
                                            <span><?php if ( get_field('profile_title_text', 'option') ) : ?>
                                                <?php echo get_field('profile_title_text', 'option'); ?>
                                                <?php endif; ?></span>
                                        </div>
                                        <div class="info">
                                            <i data-feather="mail"></i>
                                            <span><?php if ( get_field('profile_email_address_text', 'option') ) : ?>
                                                <?php echo get_field('profile_email_address_text', 'option'); ?>
                                                <?php endif; ?></span></span>
                                        </div>
                                        <div class="info">
                                            <i data-feather="map-pin"></i>
                                            <span><?php if ( get_field('profile_location_text', 'option') ) : ?>
                                                <?php echo get_field('profile_location_text', 'option'); ?>
                                                <?php endif; ?></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-12">
                                <div class="user-info-bottom">
                                    <span><?php if ( get_field('resume_box_text', 'option') ) : ?>
                                        <?php echo get_field('resume_box_text', 'option'); ?>
                                        <?php endif; ?>
                                    </span>
                                    <div class="button-wrapper d-flex">
                                        <a class="rn-btn mr--30" href="
                                            <?php if ( get_field('view_resume_button_url', 'option') ) : ?>
                                                <?php echo get_field('view_resume_button_url', 'option'); ?>
                                            <?php endif; ?>">
                                            <span>
                                                <?php if ( get_field('view_resume_button_text', 'option') ) : ?>
                                                <?php echo get_field('view_resume_button_text', 'option'); ?>
                                                <?php endif; ?>
                                            </span>
                                        </a>
                                        <a class="rn-btn smoth-animation" href="
                                        <?php if ( get_field('resume_contact_box_url', 'option') ) : ?>
                                            <?php echo get_field('resume_contact_box_url', 'option'); ?>
                                        <?php endif; ?>">
                                            <span>
                                                <?php if ( get_field('resume_box_contact_box_text', 'option') ) : ?>
                                                <?php echo get_field('resume_box_contact_box_text', 'option'); ?>
                                                <?php endif; ?>
                                            </span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="order-1 order-xl-2 col-lg-12 col-xl-7 d-none d-sm-block">
                    <div class="background-image-area">
                        <div class="thumbnail-image">
                            <?php if ( get_field('hero_box_image', 'option') ) : $image = get_field('hero_box_image', 'option'); ?>

                            <!-- Full size image -->
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->