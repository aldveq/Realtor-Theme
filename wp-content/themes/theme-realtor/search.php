<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Olly_Olly_Realtor_Theme
 */

$home_hero_settings_is_hero_feature_enabled = get_field('home_hero_settings_is_hero_feature_enabled', 'option');

if(!empty($home_hero_settings_is_hero_feature_enabled) && $home_hero_settings_is_hero_feature_enabled == 'yes'):
    
    
    $home_hero_settings_video_url = get_field('home_hero_settings_video_url', 'option');
    $home_hero_settings_image = get_field('home_hero_settings_image', 'option');

    if (!empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_search()): // Hero Video activated - Hero Header for blog page
        get_header('hero');
    
    elseif(empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_search()): // Hero Image activated - Hero Header for blog page
        get_header('hero');
    else:
        get_header();
    endif;
else:
    get_header();
endif;

$search_term = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
?>

	<main id="primary" class="site-main">

		<div class="container">

			<?php get_template_part( 'template-parts/blog', 'search-template' ); ?>

			<?php 

				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$the_search_posts_query = new WP_Query( array( 
					'post_type' => 'post',
					's' => $search_term,
					'paged' => $paged
				));

				get_template_part( 'template-parts/posts', 'search-result-text', array('data' => array(
					'search_term' => $search_term,
					'posts_search_count' => $the_search_posts_query->found_posts
				))); 
			?>

			<?php if ( $the_search_posts_query->have_posts() ) : ?>

			<div id="posts-parent-container">
			
				<?php
						/* Start the Loop */
						while ( $the_search_posts_query->have_posts() ) :
							$the_search_posts_query->the_post(); 

							$post_content = get_the_content();
							$categories_posts = get_the_category();
							$category_name = $categories_posts[0]->{'name'};

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search', array('data' => array(
								'post_id' => get_the_ID(),
								'post_title' => get_the_title(),
								'post_content' => $post_content,
								'post_category_name' => $category_name,
								'post_permalink' => get_permalink()
							)));

						endwhile;

						wp_reset_postdata();
                    	wp_reset_query();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>
				
			</div>

			<?php
				echo get_the_posts_navigation();                    
			?>
			
		</div>

	</main><!-- #main -->

<?php
get_footer();
