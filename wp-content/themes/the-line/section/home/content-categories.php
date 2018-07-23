<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$events = get_sub_field('eventi');
$communications = get_sub_field('comunicazione');
$incentive = get_sub_field('incentive');
$image = get_sub_field('immagine_background');
?>

<!-- Section Content -->
<div class="section__container section__container--background has--no-padding" style="background: url('<?php echo $image['url']?>') no-repeat center center;">
	<div class="title__section title__section--categories">
		<hr data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine">
		<h3><a href="/portfolio/.eventi"><?php echo __('Eventi'); ?></a></h3>
		<h3><a href=""><?php echo __('Comunicazione'); ?></a></h3>
		<h3><a href=""><?php echo __('Incentive'); ?></a></h3>
	</div>
</div>