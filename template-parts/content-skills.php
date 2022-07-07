                          <!-- Start Single Progressbar  -->
                          <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">

                                                    <?php if ( have_rows('skills_column_1', 'option') ) : ?>
                                                    
                                                        <?php while( have_rows('skills_column_1', 'option') ) : the_row(); ?>

                                                                <!-- Start Single Progress Charts -->
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6"><?php the_sub_field('skill_name'); ?></h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: <?php the_sub_field('skill_percentage'); ?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="<?php the_sub_field('skill_percentage'); ?>"><span
                                                                        class="percent-label"><?php the_sub_field('skill_percentage'); ?>%</span></div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Single Progress Charts -->
                                                                                                        
                                                        <?php endwhile; ?>
                                                    
                                                    <?php endif; ?>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                   
                                                <?php if ( have_rows('skills_column_2', 'option') ) : ?>
                                                    
                                                    <?php while( have_rows('skills_column_2', 'option') ) : the_row(); ?>

                                                            <!-- Start Single Progress Charts -->
                                                            <div class="progress-charts">
                                                                <h6 class="heading heading-h6"><?php the_sub_field('skill_name'); ?></h6>
                                                                <div class="progress">
                                                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: <?php the_sub_field('skill_percentage'); ?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="<?php the_sub_field('skill_percentage'); ?>"><span
                                                                    class="percent-label"><?php the_sub_field('skill_percentage'); ?>%</span></div>
                                                                </div>
                                                            </div>
                                                            <!-- End Single Progress Charts -->
                                                                                                
                                                    <?php endwhile; ?>
                                                
                                                <?php endif; ?>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->