<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$title_1 = get_sub_field('titolo_colonna_1');
$title_2 = get_sub_field('titolo_colonna_2');
$text_1 = get_sub_field('testo_colonna_1');
$text_2 = get_sub_field('testo_colonna_2');
$link_1 = get_sub_field('link_colonna_1');
$link_2 = get_sub_field('link_colonna_2');
?>

<!-- Section Content -->
<div class="section__container section__container--marketing has--no-padding">
	<div class="grid-x">
		<div class="large-6 medium-6 small-12 column">
			<?php if($title_1): ?>
			<div class="title__section">
				<hr data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<h3><?php echo $title_1; ?></h3>
			</div>
			<?php endif; ?>
			<?php if($text_1):
				echo $text_1;
			endif; ?>
		</div>
		<div class="large-6 medium-6 small-12 column">
			<?php if($title_2): ?>
			<div class="title__section">
				<hr data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine">
				<h3><?php echo $title_2; ?></h3>
			</div>
			<?php endif; ?>
			<?php if($text_2):
				echo $text_2;
			endif; ?>
		</div>
	</div>
</div>