<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Olly_Olly_Realtor_Theme
 */

$home_hero_settings_is_hero_feature_enabled = get_field('home_hero_settings_is_hero_feature_enabled', 'option');

if(!empty($home_hero_settings_is_hero_feature_enabled) && $home_hero_settings_is_hero_feature_enabled == 'yes'):
    
    
    $home_hero_settings_video_url = get_field('home_hero_settings_video_url', 'option');
    $home_hero_settings_image = get_field('home_hero_settings_image', 'option');

    if (!empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_single()): // Hero Video activated - Hero Header for blog page
        get_header('hero');
    
    elseif(empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_single()): // Hero Image activated - Hero Header for blog page
        get_header('hero');
    else:
        get_header();
    endif;
else:
    get_header();
endif;

?>

	<main id="primary" class="site-main">

		<div class="container">
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
