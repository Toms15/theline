<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$nowDate = current_time('Ymd');
?>

<!-- Event Navigation (Last - Future) -->
<div class="event__navigation">
	<?php
	$custom_args = array(
		'post_type' 		 => 'evento',
		'posts_per_page' => 1,
		'meta_key'    	 => 'data_evento', 
		'orderby'     	 => 'meta_value',
		'order' 				 => 'DESC',
		'meta_query'  	 => array(
			'relation' 	 	 => 'AND',
			array(
				'key'     => 'data_evento',    
				'compare' => '<',
				'value'   => $nowDate,
				'type'		=> 'DATE'
			),
		),
	);
	$custom_query = new WP_Query( $custom_args );
	if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	<div class="event__navigation--last">
		<a href="<?php echo the_permalink(); ?>">
			<span><?php echo __('Ultimo evento'); ?></span>
			<h6><?php echo the_title(); ?></h6>
		</a>
	</div>
	<?php endwhile; endif;
	$custom_args = array(
		'post_type' 		 => 'evento',
		'posts_per_page' => 1,
		'meta_key'    	 => 'data_evento', 
		'orderby'     	 => 'meta_value',
		'order' 				 => 'ASC',
		'meta_query'  	 => array(
			'relation' 	 	 => 'AND',
			array(
				'key'     => 'data_evento',    
				'compare' => '>',
				'value'   => $nowDate,
				'type'		=> 'DATE'
			),
		),
	);
	$custom_query = new WP_Query( $custom_args );
	if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	<div class="event__navigation--future">
		<a href="<?php echo the_permalink(); ?>">
			<span><?php echo __('Prossimo evento'); ?></span>
			<h6><?php echo the_title(); ?></h6>
		</a>
	</div>
	<?php endwhile; endif; ?>
</div>