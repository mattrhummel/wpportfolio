        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle"><?php if ( get_field('resume_section_subheading_text') ) : ?>
                                <?php echo get_field('resume_section_subheading_text'); ?>
                            <?php endif; ?>
                            </span>
                            <h2 class="title"><?php if ( get_field('resume_section_heading_text') ) : ?>
                                <?php echo get_field('resume_section_heading_text'); ?>
                            <?php endif; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true"><?php esc_html_e('experience', 'hummel-portfolio') ?> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false"><?php esc_html_e('Professional
                                    Skills', 'hummel-portfolio') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false"><?php esc_html_e('Education', 'hummel-portfolio') ?></a>
                            </li>

                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            
                        <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                            
                            <div class="personal-experience-inner mt--40">
                
                                    <div class="row">
                                    
                                        <?php get_template_part( 'template-parts/content', 'experience' ); ?>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <?php get_template_part( 'template-parts/content', 'skills' ); ?>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">

                                    <?php get_template_part( 'template-parts/content', 'education-tab' ); ?>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
