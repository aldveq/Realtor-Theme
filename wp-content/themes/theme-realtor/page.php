<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Olly_Olly_Realtor_Theme
 */

 $home_hero_settings_is_hero_feature_enabled = get_field('home_hero_settings_is_hero_feature_enabled', 'option');

 if(!empty($home_hero_settings_is_hero_feature_enabled) && $home_hero_settings_is_hero_feature_enabled == 'yes'):

	
	$home_hero_settings_video_url = get_field('home_hero_settings_video_url', 'option');
	$home_hero_settings_image = get_field('home_hero_settings_image', 'option');
	
	if(!empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_front_page()): // Hero Video

		$home_hero_settings_image_url = $home_hero_settings_image['url'];
		get_header('hero-video', array('video_url' => $home_hero_settings_video_url, 'image_url' => $home_hero_settings_image_url));

	elseif (empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_front_page()): // Hero Image

		$home_hero_settings_image_url = $home_hero_settings_image['url'];
		get_header('hero-image', array('image_url' => $home_hero_settings_image_url));

	elseif (!empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && !is_front_page()): // Hero Video activated - Hero Header for other pages

		get_header('hero');

	elseif(empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && !is_front_page()): // Hero Image activated - Hero Header for other pages

		get_header('hero');
	else:

		get_header();
	endif;

else: 
	get_header();
endif;

?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
