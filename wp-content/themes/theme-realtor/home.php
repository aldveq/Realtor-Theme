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

    if (!empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_home()): // Hero Video activated - Hero Header for blog page
        get_header('hero');
    
    elseif(empty($home_hero_settings_video_url) && !empty($home_hero_settings_image) && is_home()): // Hero Image activated - Hero Header for blog page
        get_header('hero');
    else:
        get_header();
    endif;
else:
    get_header();
endif;

?>

    <section class="blog-container">
        <div class="container">

            <?php get_template_part( 'template-parts/blog', 'search-template' ); ?>
            
            <div class="card__wrap--outer our-neighborhoods-container__wrap-outer blog-container__wrap-outer" id="posts-parent-container">
                <?php 

                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                    $the_posts_query = new WP_Query( array( 
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'paged' => $paged
                    ));

                    if($the_posts_query->have_posts()) {

                        while($the_posts_query->have_posts()) { 
                            $the_posts_query->the_post(); 
                            $categories_posts = get_the_category();
                            $category_name = $categories_posts[0]->{'name'};
                            $author_id = get_the_author_meta('ID');
                            $author_avatar = get_avatar_url($author_id, array('size' => 450));
                            $post_content = get_the_content();
                            ?>
                                <div class="card__wrap--inner our-neighborhoods-container__wrap--inner blog-container__wrap--inner posts-item-container">
                                    <div class="card">
                                        <div class="blog-container__header-details-container">
                                            <span class="blog-container__post-category-text"><?php echo $category_name; ?></span>
                                            <span class="blog-container__post-time-read">
                                                <svg width="14" height="17" viewBox="0 0 14 17" xmlns="http://www.w3.org/2000/svg" class="blog-container__time-read-svg">
                                                    <path d="M9.25 0.75H4.75V2.25H9.25V0.75ZM6.25 10.5H7.75V6H6.25V10.5ZM12.2725 5.5425L13.3375 4.4775C13.015 4.095 12.6625 3.735 12.28 3.42L11.215 4.485C10.0525 3.555 8.59 3 7 3C3.2725 3 0.25 6.0225 0.25 9.75C0.25 13.4775 3.265 16.5 7 16.5C10.735 16.5 13.75 13.4775 13.75 9.75C13.75 8.16 13.195 6.6975 12.2725 5.5425ZM7 15C4.0975 15 1.75 12.6525 1.75 9.75C1.75 6.8475 4.0975 4.5 7 4.5C9.9025 4.5 12.25 6.8475 12.25 9.75C12.25 12.6525 9.9025 15 7 15Z"/>
                                                </svg>
                                                <?php echo post_estimated_reading_time($post_content); ?>
                                            </span>
                                        </div>
                                        <a href="<?php echo the_permalink(); ?>" target="_self"><img class="card__image our-neighborhoods-container__card-image blog-container__card-image" src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/default-image.png'; ?>" alt="Mineral, VA"></a>
                                        <div class="blog-container__author-container">
                                            <div class="blog-container__author-col-container">
                                                <img src="<?php echo !empty($author_avatar) ? $author_avatar : get_template_directory_uri() . '/images/default-image.png'; ?>" alt="<?php echo get_the_author_meta('user_firstname') . '  ' . get_the_author_meta('user_lastname'); ?>" class="blog-container__picture-profile">
                                                <span class="blog-container__author-text"><?php echo get_the_author_meta('user_firstname') . '  ' . get_the_author_meta('user_lastname'); ?></span>
                                                <span class="blog-container__date-text"><?php echo the_time('F j, Y'); ?></span>
                                            </div>
                                            <div class="blog-container__tools-container">
                                                <button class="blog-container__share-button">
                                                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 14.58C14.24 14.58 13.56 14.88 13.04 15.35L5.91 11.2C5.96 10.97 6 10.74 6 10.5C6 10.26 5.96 10.03 5.91 9.8L12.96 5.69C13.5 6.19 14.21 6.5 15 6.5C16.66 6.5 18 5.16 18 3.5C18 1.84 16.66 0.5 15 0.5C13.34 0.5 12 1.84 12 3.5C12 3.74 12.04 3.97 12.09 4.2L5.04 8.31C4.5 7.81 3.79 7.5 3 7.5C1.34 7.5 0 8.84 0 10.5C0 12.16 1.34 13.5 3 13.5C3.79 13.5 4.5 13.19 5.04 12.69L12.16 16.85C12.11 17.06 12.08 17.28 12.08 17.5C12.08 19.11 13.39 20.42 15 20.42C16.61 20.42 17.92 19.11 17.92 17.5C17.92 15.89 16.61 14.58 15 14.58Z" fill="#AAADC3"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card__item card__flexible our-neighborhoods-container__flexible blog-container__flexible">
                                            <a href="<?php echo the_permalink(); ?>" target="_self"><h1 class="blog-container__blog-card-title"><?php echo the_title(); ?></h1></a>
                                            <?php echo the_excerpt(); ?>
                                        </div>
                                        <?php echo do_shortcode("[addtoany]"); ?>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    wp_reset_query();
                ?>
            </div>

            <?php
                echo get_the_posts_navigation();                   
            ?>
            
        </div>  
    </section>

<?php
get_footer();