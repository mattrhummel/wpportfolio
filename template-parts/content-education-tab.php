<?php /**
 * Setup query to show the ‘services’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
    $args = array(  
            'post_type' => 'education_items',
            'post_status' => 'publish',
        
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
    
 ?>
<!-- Start Skill List Area  -->
<div class="col-lg-6 col-md-12 col-12">
    <div class="content">

        <div class="experience-list">

            <!-- Start Single List  -->
            <div class="resume-single-list">
                <div class="inner">
                    <div class="heading">
                        <div class="title">
                            <h4><?php the_title(); ?></h4>
                            <span><?php if ( the_field('education_program_text') ) : ?>
                                <?php echo the_field('education_program_text'); ?>
                                <?php endif; ?>
                            </span>
                        </div>
                        <div class="date-of-time">
                            <span><?php if ( the_field('education_date_text') ) : ?>
                                <?php echo the_field('education_date_text'); ?>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single List  -->

        </div>
    </div>
</div>
<!-- End Skill List Area  -->


<?php

endwhile;
wp_reset_postdata();  
                                        
?>