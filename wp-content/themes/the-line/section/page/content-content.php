<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$image = get_sub_field('immagine_background');
$text = get_sub_field('testo');
?>

<!-- Section Content -->
<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-aos="fade-up" class="image__background is--centered">
<div class="paragraph">
	<?php echo $text; ?>
</div>