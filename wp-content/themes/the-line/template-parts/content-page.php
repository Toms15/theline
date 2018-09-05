<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Featured Image -->
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="hero__page" style="background: url('<?php echo $thumb['0'];?>') no-repeat center center;"></div>

	<div class="content__page">
		<h1 class="highlight__title"><?php echo the_title(); ?></h1>

		<?php
		if(have_rows('sezioni')):
			while (have_rows('sezioni')) : the_row(); 
				if(get_row_layout() == 'titolo_sezione'):
					get_template_part( 'section/page/content', 'title' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'quote'):
					get_template_part( 'section/page/content', 'quote' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'contenuto_testuale'):
					get_template_part( 'section/page/content', 'text' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'contenuto'):
					get_template_part( 'section/page/content', 'content' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'opzioni'):
					get_template_part( 'section/page/content', 'options' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'video'):
					get_template_part( 'section/page/content', 'video' );
					wp_reset_postdata();
				elseif(get_row_layout() == 'slider'):
					get_template_part( 'section/page/content', 'slider' );
					wp_reset_postdata();
				endif;
			endwhile;
		else :
		endif;
		?>

	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
