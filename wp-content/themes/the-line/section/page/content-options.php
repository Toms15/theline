<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$title_1 = get_sub_field('titolo_1');
$title_2 = get_sub_field('titolo_2');
$text_1 = get_sub_field('testo_1');
$text_2 = get_sub_field('testo_2');
?>

<!-- Section Content -->
<div class="grid-x">
	<div class="large-6 medium-6 small-12 column">
		<div class="option__content">
			<h2><?php echo $title_1; ?></h2>
			<?php echo $text_1; ?>
		</div>
	</div>
	<div class="large-6 medium-6 small-12 column">
		<div class="option__content">
			<h2><?php echo $title_2; ?></h2>
			<?php echo $text_2; ?>
		</div>
	</div>
</div>