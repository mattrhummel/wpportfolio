        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Getting in touch with me</span>
                            <h2 class="title">Contact Info</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5 mx-auto">
                        <div class="contact-about-area text-center">
                            <div class="title-area">
                                <h4 class="title"><?php bloginfo('name'); ?></h4>
                                <span><?php bloginfo('description'); ?></span>
                            </div>
                            <div class="description">
                                <p><?php if ( get_field('contact_box_text') ) : ?>
                                    <?php echo get_field('contact_box_text'); ?>
                                <?php endif; ?>                               
                                </p>
                                <span class="phone"> <?php esc_html_e('Phone', 'hummel-portfolio') ?><a href="tel:<?php if ( get_field('profile_phone_tel_text', 'option') ) : ?>
                                    <?php echo get_field('profile_phone_tel_text', 'option'); ?>
                                <?php endif; ?>">
                                    <?php if ( get_field('profile_phone_text', 'option') ) : ?>
                                    <?php echo get_field('profile_phone_text', 'option'); ?>
                                <?php endif; ?>
                                </a></span>
                                <span class="mail"><?php esc_html_e('Email', 'hummel-portfolio') ?> 
                                <a href="mailto:
                                <?php if ( get_field('profile_email_address_text', 'option') ) : ?>
                                    <?php echo get_field('profile_email_address_text', 'option'); ?>
                                <?php endif; ?>">
                                    <?php if ( get_field('profile_email_address_text', 'option') ) : ?>
                                    <?php echo get_field('profile_email_address_text', 'option'); ?>
                                <?php endif; ?>
                               </a></span>
                            </div>
                            <div class="social-area">
                                <div class="name"><?php if ( get_field('profile_find_me_on_text', 'option') ) : ?>
                                    <?php echo get_field('profile_find_me_on_text', 'option'); ?>
                                <?php endif; ?>
                                </div>
                                <div class="social-icone">
                                    <a href="https://www.linkedin.com/in/mattrhummel"><i data-feather="linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                                
                            <?php echo do_shortcode('[wpforms id="67"]') ?>
       
                        </div>
                    </div>
                </div>
            </div>
        </div>