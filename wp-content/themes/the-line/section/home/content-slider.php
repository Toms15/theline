<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

?>

<!-- Hero Portfolio -->
<div class="hero__portfolio">
	<?php if(have_rows('slide')): ?>
	<div class="swiper-container swiper--hero">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<?php while( have_rows('slide') ): the_row();
				$title = get_sub_field('titolo');
				$image = get_sub_field('immagine');
				$link = get_sub_field('link'); ?>
			<!-- Slides -->
			<div class="swiper-slide" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;">
				<a href="<?php echo $link; ?>">
					<h6><?php echo $title; ?></h6>
					<div class="swiper--shadow"></div>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>
	</div>
	<?php endif; ?>
</div>

<?php
	get_template_part( 'section/home/content', 'event_navigation' );
?>