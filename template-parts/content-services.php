        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left">
                            <span class="subtitle"><?php if ( get_field('about_section_subheading_text') ) : ?>
                                <?php echo get_field('about_section_subheading_text'); ?>
                            <?php endif; ?>
                            </span>
                            <h2 class="title"><?php if ( get_field('about_section_heading_text') ) : ?>
                                <?php echo get_field('about_section_heading_text'); ?>
                            <?php endif; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">


               <?php /**
 * Setup query to show the ‘services’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
                    $args = array(  
                            'post_type' => 'services_items',
                            'post_status' => 'publish',
                        
                    );

                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    
                ?>

    <!-- Start Single Service -->
    <div  class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
        <div class="rn-service">
            <div class="inner">
                <div class="icon">
                    <i data-feather="<?php if ( the_field('services_icon') ) : ?>
                        <?php echo the_field('services_icon'); ?>
                    <?php endif; ?>" ></i>
                </div>
                <div class="content">
                    <h4 class="title"><?php the_title(); ?></h4>
                    <p class="description"><?php if ( the_field('service_description_text') ) : ?>
                        <?php echo the_field('service_description_text'); ?>
                        <?php endif; ?>
                    </p>
              
                </div>
            </div>
        </div>
    </div>

    <?php

    endwhile;

    wp_reset_postdata();  ?>

         

                </div>
            </div>
        </div>
    
        <!-- End Service Area  -->


   