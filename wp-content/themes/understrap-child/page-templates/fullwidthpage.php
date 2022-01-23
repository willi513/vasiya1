<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'understrap_container_type' );
if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>
<div class="wrapper" id="full-width-page-wrapper"><div class="<?php echo esc_attr( $container ); ?>" id="content"><div class="row">
<div class="col-md-12 content-area" id="primary"><main class="site-main" id="main" role="main">

<!--------------------------------------для главной этот шаблон использую----------------------------------------->		
			
			
					
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>
					
					
				<div class="section-1 d-flex f-row f-wrap">		
					<h2>Недвижемость</h2>
					<?php  
					$stati_children = new WP_Query(array( 
							'post_type' => 'nedvizhimost', 
							'posts_per_page' => 2
						) 
					);
					if($stati_children->have_posts()) :
					  while($stati_children->have_posts()): $stati_children->the_post();
						  echo '<div class="section-1-item">';
						   echo  get_the_post_thumbnail($post->ID);   
						   echo '<h4>'.get_the_title().'</h4>';
						  echo '<p>'.get_the_excerpt().'</p>';  
						  echo '</div>';
					  endwhile;
					endif; wp_reset_query();
					 ?>			
				</div>			
				<div class="section-1 d-flex f-row f-wrap">		
					<h2>Города</h2>
					<?php  
					$town_children = new WP_Query(array( 
							'post_type' => 'town', 
							'posts_per_page' => 2
						) 
					);
					if($town_children->have_posts()) :
					  while($town_children->have_posts()): $town_children->the_post();
						  echo '<div class="section-1-item">';
						   echo  get_the_post_thumbnail($post->ID);   
						   echo '<h4>'.get_the_title().'</h4>';
						  echo '<p>'.get_the_excerpt().'</p>';  
						  echo '</div>';
					  endwhile;
					endif; wp_reset_query();
					 ?>			
				</div>							
					

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- .row end -->
</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->
<?php get_footer();