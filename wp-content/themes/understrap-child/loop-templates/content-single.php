<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<header class="entry-header"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?><div class="entry-meta">
<?php /*understrap_posted_on();*/ ?></div><!-- .entry-meta -->
</header><!-- .entry-header -->
<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
<div class="entry-content">




						<?php if ( get_field('tv_ploshchad') ) { ?> 
							<div class="table-responsive  py-5">
								<table class="w-100   mytabl">
									<tbody>
										<tr>
										<td>Площадь :</td>
										<td><?php the_field('tv_ploshchad'); ?></td>
										</tr>
										<tr>
										<td>Жилая площадь :</td>
										<td><?php the_field('tv_ploshchad_z'); ?></td>
										</tr>
										<tr>
										<td>Адрес :</td>
										<td><?php the_field('tv_adress'); ?></td>
										</tr>
										<tr>
										<td>Этаж :</td>
										<td><?php the_field('tv_etaz'); ?></td>
										</tr>
										<tr>
										<td>Стоимость :</td>
										<td><?php the_field('tv_stoit'); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						<?php } ?>
	
<?php
the_content();
?>

						<div class="section-1 d-flex f-row f-wrap">
						<?php 

						$nedvizhimosts = get_posts(array( 'post_type'=>'nedvizhimost', 'post_parent'=>$post->ID, 'posts_per_page'=>-1, 'orderby'=>'post_title', 'order'=>'ASC' ));
						if( $nedvizhimosts ){
							global $post;
							foreach( $nedvizhimosts as $post ){
								setup_postdata($post);
								/*the_title(); */     // выводим имя недвижемости
								echo '<div class="section-1-item-mini">';
								echo  get_the_post_thumbnail($post->ID);   
								echo '<h4>'.get_the_title().'</h4>';
								echo '<p>'.get_the_excerpt().'</p>';  
								echo '</div>';
							}
							// вернем $post Обратно
							wp_reset_postdata();
						}
						?>
						</div>
		
		
<?php
understrap_link_pages();
?>
</div><!-- .entry-content -->
<footer class="entry-footer">
<?php understrap_entry_footer(); ?>
</footer><!-- .entry-footer -->
</article><!-- #post-## -->