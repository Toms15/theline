<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$quote = get_sub_field('testo');
?>

<!-- Section Content -->
<div class="quote__page">
	<hr data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine">
	<h3><?php echo $quote; ?></h3>
</div>