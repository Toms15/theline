<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

wp_reset_postdata();
$category = get_the_category();
foreach($category as $cat_string_item):
	$cat_string .= $cat_string_item->term_id;
endforeach;
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<!-- Featured Image -->
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div class="hero__page" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center;"></div>

		<div class="content__page">
			<h1 class="highlight__title"><?php echo the_title(); ?></h1>

			<div class="categories__events">
				<hr data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<h3 data-filter='all'><?php echo $cat_string; ?></h3>
				<h3 data-filter='.eventi'><?php echo __('Eventi'); ?></h3>
				<h3 data-filter='.comunicazione'><?php echo __('Comunicazione'); ?></h3>
				<h3 data-filter='.incentive'><?php echo __('Incentive'); ?></h3>
			</div>
			
			<div class="grid" style="color: white;">
				<div id="all_events" class="grid-x">
					<?php
					$custom_args = array(
						'post_type' 		 => 'evento',
						'posts_per_page' => -1,
						'meta_key'    	 => 'data_evento', 
						'orderby'     	 => 'meta_value',
						'order' 				 => 'DESC',
						'tax_query' 		 => array(
							array(
								'taxonomy' => 'category',
								'field' => 'id',
								'terms' => 12
							),
						),
					);
					$custom_query = new WP_Query( $custom_args );
					if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			    <div class="large-4 medium-4 small-12 column mix <?php echo the_field('tipologia'); ?>">
			    	<div class="grid_item effect__hover">
			    		<?php echo the_post_thumbnail(); ?>
			    		<div class="grid_item-info">
			    			<div class="grid_item-info--text">
			    				<a href="<?php echo the_permalink(); ?>">
			    					<h3><?php echo the_title(); ?></h3>
			    				</a>
			    				<div class="grid_item-info--category">
			    					<hr>
			    					<?php
			    					$categories = get_the_category();
			    					$separator = ' > ';
			    					$output = '';
			    					if($categories){
			    						foreach($categories as $category) {
			    							$output .= $category->cat_name.$separator;
			    						}
			    						echo trim($output, $separator);
			    					}
			    					?>
			    				</div>
			    				<a class="read__more" href="<?php echo the_permalink(); ?>">
			    					Scopri di più
			    				</a>
			    			</div>
			    		</div>
			    	</div>	
			    </div>
			  	<?php endwhile; endif; ?>
				</div>
			</div>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
