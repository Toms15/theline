<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$gallery = get_sub_field('gallery');
?>

<?php if( $gallery ): ?>
<div class="swiper-container page__slider">
	<div class="swiper-wrapper">
		<?php foreach( $gallery as $image ): ?>
			<div class="swiper-slide">
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>">
			</div>
		<?php endforeach; ?>
	</div>
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>
<?php endif; ?>