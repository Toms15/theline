<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$images = get_field('clienti');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Featured Image -->
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="hero__page" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center;"></div>

	<div class="content__page content__page--white">
		<h1 class="highlight__title"><?php echo the_title(); ?></h1>
		
		<div class="grid-x">
		<?php if( $images ): ?>
			<?php foreach( $images as $image ): ?>
				<div class="large-2 medium-2 small-12 column" data-aos="fade-up" data-aos-delay="300">
					<div class="image__client" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;"></div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
		</div>

	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
