<?php /**
 * Setup query to show the ‘services’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
$args2 = array(  
        'post_type' => 'resume_item',
        'post_status' => 'publish',
    
);

$loop2 = new WP_Query( $args2 ); 
    
while ( $loop2->have_posts() ) : $loop2->the_post(); 

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
                            <span><?php if ( get_field('job_title_text') ) : ?>
                                <?php echo get_field('job_title_text'); ?>
                                <?php endif; ?>
                            </span>
                        </div>
                        <div class="date-of-time">
                            <span><?php if ( get_field('job_date_text') ) : ?>
                                <?php echo get_field('job_date_text'); ?>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <p class="description"><?php if ( get_field('job_description_text') ) : ?>
                        <?php echo get_field('job_description_text'); ?>
                        <?php endif; ?>
                    </p>
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