<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$highlight__title = get_sub_field('titolo_sezione');
$text = get_sub_field('testo');
$link = get_sub_field('link');
$quote__text = get_sub_field('quote');
$image__background_1 = get_sub_field('immagine_1');
$image__background_2 = get_sub_field('immagine_2');
?>

<!-- Section Content -->
<div class="section__container">
	<?php if($image__background_1): ?>
	<img src="<?php echo $image__background_1['url']; ?>" alt="<?php echo $image__background_1['alt']; ?>" data-aos="fade-up" class="image__background">
	<?php endif; ?>
	<?php if($image__background_2): ?>
	<img src="<?php echo $image__background_2['url']; ?>" alt="<?php echo $image__background_2['alt']; ?>" data-aos="fade-up" class="image__background">
	<?php endif; ?>
	<?php if($highlight__title): ?>
	<h1 class="highlight__title"><?php echo $highlight__title; ?></h1>
	<?php endif; ?>
	<?php if($text): ?>
	<div class="section__container--text-column">
		<?php echo $text; ?>
		<?php if($link): ?>
		<a class="read__more">
			Scopri di più
		</a>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	<?php if($quote__text): ?>
	<div class="quote__text">
		<h2>
			Affidabilità, creatività e passione per il successo della vostra azienda
		</h2>
	</div>
	<?php endif; ?>
</div>