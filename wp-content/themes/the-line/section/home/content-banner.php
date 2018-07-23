<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$text = get_sub_field('testo');
$image_bg = get_sub_field('immagine_background');
$image = get_sub_field('immagine');
?>

<!-- Section Content -->
<div class="section__container section__container--banner has--no-padding" style="background: url('<?php echo $image_bg['url']?>') no-repeat center center;">
	<div class="grid-x">
		<div class="large-6 medium-6 small-12 column">
			<div class="text">
				<?php echo $text; ?>
			</div>
		</div>
		<div class="large-6 medium-6 small-12 column">
			<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
		</div>
	</div>
</div>