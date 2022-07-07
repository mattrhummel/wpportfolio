<?php
/**
* Template Name: Dev Home Page
*
* @package WordPress
* @subpackage hummel_portfolio
* @since Hummel Portfolio
*/

get_header();
?>

<main class="main-page-wrapper">

		<?php
		while ( have_posts() ) :
			the_post();

			
            
			get_template_part( 'template-parts/content', 'hero' ); 
			get_template_part( 'template-parts/content', 'services' ); 
			get_template_part( 'template-parts/content', 'resume' ); 
			get_template_part( 'template-parts/content', 'portfolio' ); 
			get_template_part( 'template-parts/content', 'contact' ); 

?>

		<!-- Back to  top Start -->
		<div class="backto-top">
			<div>
				<i data-feather="arrow-up"></i>
			</div>
		</div>
		<!-- Back to top end -->

<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
