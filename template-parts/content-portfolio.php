<!-- Start Portfolio Area -->
<div id="portfolio" class="rn-portfolio-area portfolio-style-three rn-section-gap section-separator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle"><?php if ( get_field('portfolio_section_subheading_text') ) : ?>
                        <?php echo get_field('portfolio_section_subheading_text'); ?>
                        <?php endif; ?>
                    </span>

                    <h2 class="title"><?php if ( get_field('portfolio_section_heading_text') ) : ?>
                        <?php echo get_field('portfolio_section_heading_text'); ?>
                        <?php endif; ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt--25 mt_md--5 mt_sm--5">
            <div class="col-lg-12">
                <div
                    class="portfolio-wrapper portfolio-slick-activation slick-arrow-style-one rn-slick-dot-style">

                    <?php /**
                     * Setup query to show the ‘services’ post type with ‘8’ posts.
                     * Output the title with an excerpt.
                     */
                    $args2 = array(  
                            'post_type' => 'portfolio_items',
                            'post_status' => 'publish',
                        
                    );

                    $loop2 = new WP_Query( $args2 ); 
                        
                    while ( $loop2->have_posts() ) : $loop2->the_post(); 
                
                ?>
                    <!-- Start Single Portfolio  -->
                    <div class="rn-portfolio-slick">
                        <div class="rn-portfolio">
                            <div class="inner">
                                <div class="thumbnail">



                                    <?php 
                                $image = get_field('portfolio_item_image');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>


                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">

                                            <?php 
                                    $term = get_field('portfolio_categories');
                                    if( $term ): ?>
                                            <?php esc_html_e('Project Category:', 'hummel-portfolio') ?>
                                            <?php echo esc_html( $term->name ); ?>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                    <h4 class="title">
                                        <a href="<?php if ( get_field('portfolio_item_url') ) : ?>
                                            <?php echo get_field('portfolio_item_url'); ?>
                                        <?php endif; ?>"><?php the_title(); ?><i
                                                class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio  -->

                    <?php

                        endwhile;

                        wp_reset_postdata(); 
                        
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End portfolio Area -->