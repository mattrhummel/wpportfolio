<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hummel_portfolio
 */

?>

	<footer id="colophon" class="site-footer">
	        <!-- Start Footer Area -->
			<div class="rn-footer-area rn-section-gap section-separator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-area text-center">
                            <p class="description"><?php if ( get_field('footer_text', 'option') ) : ?>
                                <?php echo get_field('footer_text', 'option'); ?>
                            <?php endif; ?>
                            <br/>
                            <?php if ( get_field('footer_copyright_text', 'option') ) : ?>
                                <?php echo get_field('footer_copyright_text', 'option'); ?>
                            <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
