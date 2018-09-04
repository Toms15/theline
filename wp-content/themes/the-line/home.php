<?php
/**
 * Template Name: Homepage
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Line
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			if(have_rows('sezioni')):
				while (have_rows('sezioni')) : the_row(); 
					if(get_row_layout() == 'slider'):
						get_template_part( 'section/home/content', 'slider' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'contenuto'):
						get_template_part( 'section/home/content', 'text' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'due_colonne'):
						get_template_part( 'section/home/content', 'columns' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'eventi'):
						get_template_part( 'section/home/content', 'events' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'categorie'):
						get_template_part( 'section/home/content', 'categories' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'banner'):
						get_template_part( 'section/home/content', 'banner' );
						wp_reset_postdata();
					elseif(get_row_layout() == 'mondo'):
						get_template_part( 'section/home/content', 'world' );
						wp_reset_postdata();
					endif;
				endwhile;
			else :
			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
