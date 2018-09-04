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
					endif;
				endwhile;
			else :
			endif;
			?>

			<div class="map__incentive">
				<img id="map" src="<?php echo get_template_directory_uri() . '/images/map.png'?>" usemap="#map" border="0" width="913" height="446" alt="">
        <map id="_map" name="map">
            <area data-continent="oceania" class="cont cont-oceania" shape="poly" coords="782,387,803,394,815,381,819,367,811,347,796,330,793,319,793,316,787,324,778,329,775,321,766,321,753,327,743,333,731,342,722,344,720,365,726,382,740,380,751,375,766,375,715,357,857,408,866,397,868,385,877,392,857,421,865,411,">

            <area data-continent="asia" class="cont cont-asia" shape="poly" coords="497,180,512,179,520,178,533,177,539,176,554,170,503,189,515,195,516,201,516,216,520,225,527,228,539,247,533,241,552,254,562,250,575,240,580,235,580,227,592,224,599,229,607,240,614,252,626,272,636,274,637,264,636,253,643,245,658,235,667,241,677,252,677,270,673,275,682,290,687,293,693,302,701,309,713,310,726,310,736,311,753,318,753,313,765,308,780,311,790,311,798,311,806,314,814,315,812,312,820,303,805,301,773,287,753,286,746,275,746,259,739,249,738,236,739,218,735,196,743,189,753,206,751,218,760,209,777,198,795,183,800,170,795,145,784,130,803,122,830,135,822,119,830,148,841,127,851,118,863,113,876,105,886,94,902,86,886,79,870,74,867,74,832,73,806,61,807,54,790,48,769,50,781,60,761,66,744,58,720,55,712,43,694,34,676,18,665,17,665,30,675,32,676,39,669,41,656,44,650,50,632,58,618,60,597,64,586,74,585,86,580,98,572,115,569,129,581,138,577,148,563,144,556,156,">

            <area data-continent="africa" class="cont cont-africa" shape="poly" coords="387,229,400,212,411,205,414,199,419,197,438,194,454,195,461,201,468,206,482,207,495,207,509,206,515,212,516,222,521,229,524,239,529,246,533,253,537,259,549,262,558,262,550,274,542,288,533,299,532,312,535,325,526,340,523,359,510,368,498,377,474,375,467,360,465,346,460,339,459,327,459,316,454,294,448,284,436,280,412,279,396,270,388,259,386,247,544,330,556,322,552,340,548,356,539,348,">

            <area data-continent="europe" class="cont cont-europe" shape="poly" coords="404,140,404,134,404,125,412,122,418,116,428,115,428,131,434,143,444,139,444,129,443,116,451,102,463,89,469,82,484,77,496,71,514,71,526,78,534,85,540,84,543,80,552,73,560,76,560,64,563,54,577,49,599,39,591,48,580,55,574,62,579,67,590,78,595,79,601,88,599,98,591,105,579,123,569,135,568,149,557,156,559,175,543,179,534,177,527,168,520,161,503,167,501,174,498,182,489,183,488,190,473,193,470,189,462,184,459,178,452,184,441,177,432,187,424,192,407,186,405,173,415,169,424,167,410,155,458,29,465,22,494,20,486,32,476,44,467,39,543,16,563,17,579,13,582,23,548,24,">

            <area data-continent="south-america" class="cont cont-s-america" shape="poly" coords="230,266,239,260,257,259,265,260,271,265,282,269,294,273,302,282,309,292,326,294,341,302,336,320,331,334,326,347,315,351,308,362,295,384,274,397,263,417,261,430,266,444,241,442,238,427,238,410,241,406,244,391,245,377,248,367,252,350,252,339,239,323,225,310,220,299,227,284,">

            <area data-continent="north-america" class="cont cont-n-america" shape="poly" coords="29,133,3,141,5,132,18,130,16,121,11,109,2,101,7,81,26,71,41,68,61,70,78,79,95,73,106,65,109,53,127,37,139,36,148,28,160,28,167,21,188,14,196,7,233,3,263,5,273,6,287,6,320,4,343,2,361,4,385,9,389,18,384,32,381,45,374,61,371,72,346,88,335,95,327,109,309,110,299,95,294,78,290,64,284,55,278,48,267,46,257,46,246,37,237,39,225,53,242,64,254,74,269,89,265,108,275,125,291,145,297,154,285,165,260,175,245,189,233,203,228,213,230,229,247,231,264,243,241,242,227,241,215,240,216,252,228,265,224,270,215,266,204,257,191,255,167,246,147,226,137,215,124,192,115,174,102,146,82,129,68,118,53,125,42,128,">
						
						<?php

        		$custom_args = array(
        			'post_type' 		 => 'evento',
        			'posts_per_page' => -1,
        			'meta_key'		 	 => 'data_evento',
        			'orderby'     	 => 'meta_value',
        			'order' 				 => 'DESC',
        			'meta_query'     => array(
        				array(
        					'key'     => 'tipologia',    
        					'compare' => '==',
        					'value'   => 'incentive',
        					),
        				),
        		);
        		$custom_query = new WP_Query( $custom_args );


        		if ( $custom_query->have_posts() ) { 


        			$incentives = [];


        			$custom_query->have_posts();

        			while ( $custom_query->have_posts() ) {

        				$custom_query->the_post();


        				if(!isset($incentives[get_field('continente')])){
        					$incentives[get_field('continente')] = [];
        				}

        				$incentives[get_field('continente')][] = [
        					'permalink' => get_the_permalink(),
        					'title' => get_the_title(),
        					'continent' => get_field('continente'),
        				];
        			}


        			// var_dump($incentives);


        			// var_dump('<pre>'. var_dump($incentives) .'</pre>');


        			foreach ($incentives as $continent => $eventIncentives) { ?>
        				<div class="map__incentive--info dropdown-<?php echo $continent; ?>" data-continent="<?= $continent; ?>">
									
									<h6><?php echo $continent; ?></h6>

									<?php

        						foreach ($eventIncentives as $eventIncentive) { 

        							?>
        									<div class="map__incentive--single-item">
        										<a href="<?php echo $eventIncentive['permalink']; ?>">
        											<?php echo $eventIncentive['title']; ?>
        											<i class="fa fa-angle-right"></i>
        										</a>
        									</div>
        									<?php
        						}

        					?>
        					

        				</div>
        			
        			<?php }

        		}?>

        </map>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
