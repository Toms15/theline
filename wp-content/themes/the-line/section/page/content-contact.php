<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$maps = get_field('google_maps');
$address = get_field('indirizzo');
$phone = get_field('telefono');
$fax = get_field('fax');
$email = get_field('email');
$form = get_field('form');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Google Maps -->
	<div id="map-theline" class="hero__page"></div>

	<div class="content__page">
		<h1 class="highlight__title"><?php echo the_title(); ?></h1>
		
		<div class="grid-x">
			<?php if($address): ?>
			<div class="large-3 medium-3 small-12 column">
				<div class="info__text">
					<h6><?php echo __('Indirizzo'); ?></h6>
					<p><?php echo $address; ?></p>
				</div>
			</div>
			<?php endif; ?>
			<?php if($phone): ?>
			<div class="large-3 medium-3 small-12 column">
				<div class="info__text">
					<h6><?php echo __('Telefono'); ?></h6>
					<p><?php echo $phone; ?></p>
				</div>
			</div>
			<?php endif; ?>
			<?php if($fax): ?>
			<div class="large-3 medium-3 small-12 column">
				<div class="info__text">
					<h6><?php echo __('Fax'); ?></h6>
					<p><?php echo $fax; ?></p>
				</div>
			</div>
			<?php endif; ?>
			<?php if($email): ?>
			<div class="large-3 medium-3 small-12 column">
				<div class="info__text">
					<h6><?php echo __('E-mail'); ?></h6>
					<p><?php echo $email; ?></p>
				</div>
			</div>
			<?php endif; ?>
		</div>
		
		<?php echo do_shortcode($form); ?>
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
