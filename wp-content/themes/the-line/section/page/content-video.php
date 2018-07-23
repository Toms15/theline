<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

$video = get_sub_field('file');
?>

<div class="responsive-embed panorama">
  <?php echo $video; ?>
</div>