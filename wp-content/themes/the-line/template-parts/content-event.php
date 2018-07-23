<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$client = get_field('cliente');
$event = get_field('evento');
$location = get_field('luogo');
$people = get_field('partecipanti');
$images = get_field('gallery');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- Featured Image -->
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="hero__page" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center;"></div>
	
	<div class="content__event">
		<!-- Back to all events -->
		<div class="back__to-events">
			<a href="/portfolio/">
				<i class="fa fa-angle-left"></i>
				<?php echo __('Tutti gli eventi'); ?>
			</a>
		</div>
		
		<!-- Title event -->
		<div class="title__event">
			<hr data-aos="fade-right">
			<h1><?php echo the_title(); ?></h1>
		</div>
		
		<!-- Info event -->
		<div class="grid-x">
			<div class="large-6 medium-6 small-12 column">
				<div class="grid-x">
					<?php if($client || $event): ?>
					<div class="large-6 medium-6 small-12 column">
						<?php if($client): ?>
							<div class="info__text">
								<h6><?php echo __('Cliente'); ?></h6>
								<p><?php echo $client; ?></p>
							</div>
						<?php endif; ?>
						<?php if($event): ?>
							<div class="info__text">
								<h6><?php echo __('Evento'); ?></h6>
								<p><?php echo $event; ?></p>
							</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<?php if($location || $people): ?>
					<div class="large-6 medium-6 small-12 column">
						<?php if($location): ?>
							<div class="info__text">
								<h6><?php echo __('Luogo'); ?></h6>
								<p><?php echo $location; ?></p>
							</div>
						<?php endif; ?>
						<?php if($people): ?>
							<div class="info__text">
								<h6><?php echo __('Partecipanti'); ?></h6>
								<p><?php echo $people; ?> <?php echo __('persone'); ?></p>
							</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="large-6 medium-6 small-12 column">
				<div class="info__text">
					<h6><?php echo __('Servizi'); ?></h6>
					<?php echo the_content(); ?>
				</div>
			</div>
		</div>

	</div>
	
	<div class="share__event">
		<h6><?php echo __('Condividi'); ?></h6>
		<div class="social__icon">
			<a class="pop" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>">
				<i class="fa fa-facebook"></i>
			</a>
			<a class="pop" href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php echo the_title(); ?>">
				<i class="fa fa-twitter"></i>
			</a>
			<a class="pop" href="http://www.linkedin.com/shareArticle?url=<?php echo the_permalink(); ?>&title=<?php echo the_title(); ?>">
				<i class="fa fa-linkedin"></i>
			</a>
		</div>
	</div>

	<!-- Gallery event -->
	<div class="grid images__event">
		<div class="grid-x">
			<?php if( $images ): ?>
				<?php foreach( $images as $image ): ?>
					<div class="large-6 medium-6 small-12 column" data-aos="fade-up" data-aos-delay="300">
						<a href="<?php echo $image['url']; ?>">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
		
</article><!-- #post-<?php the_ID(); ?> -->
