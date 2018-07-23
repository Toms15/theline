<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$highlight__title = get_sub_field('titolo_sezione');
$events = get_sub_field('portfolio');
?>

<!-- Portfolio Grid -->
<div class="section__container has--no-padding">
	<?php if($highlight__title): ?>
	<h2 class="highlight__title"><?php echo $highlight__title; ?></h2>
	<?php endif; ?>
	<div class="grid">
		<div class="grid-x">
			<?php if( $events ): $count = 0; ?>
				<?php foreach( $events as $p ):  $count++; // variable must NOT be called $post (IMPORTANT) ?>
				<div class="large-4 medium-4 small-12 column">
					<div class="grid_item effect__hover">
						<?php echo get_the_post_thumbnail( $p->ID ); ?>
							<div class="grid_item-info">
								<div class="grid_item-info--text">
									<a href="<?php echo get_permalink( $p->ID ); ?>">
										<h3><?php echo get_the_title( $p->ID ); ?></h3>
									</a>
									<div class="grid_item-info--category">
										<hr>
										<?php
										$categories = get_the_category( $p->ID );
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
									<a class="read__more" href="<?php echo get_permalink( $p->ID ); ?>">
										Scopri di più
									</a>
								</div>
							</div>
					</div>
				</div>
				<?php if ($count == 8) :
					get_template_part( 'section/home/content', 'contact' );
					else : ?><?php endif; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>