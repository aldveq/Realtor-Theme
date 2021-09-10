<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Olly_Olly_Realtor_Theme
 */

$post_id = $args['data']['post_id'];
$post_title =  $args['data']['post_title'];
$post_content =  $args['data']['post_content'];
$post_category_name =  $args['data']['post_category_name'];
$post_permalink =  $args['data']['post_permalink'];

?>

<article id="post-<?php echo $post_id; ?>" <?php post_class('posts-item-container'); ?>>
	<div class="blog-container__header-details-container" style="margin-bottom: 0 !important;">
		<span class="blog-container__post-category-text"><?php echo $post_category_name; ?></span>
		<span class="blog-container__post-time-read">
			<svg width="14" height="17" viewBox="0 0 14 17" xmlns="http://www.w3.org/2000/svg" class="blog-container__time-read-svg">
				<path d="M9.25 0.75H4.75V2.25H9.25V0.75ZM6.25 10.5H7.75V6H6.25V10.5ZM12.2725 5.5425L13.3375 4.4775C13.015 4.095 12.6625 3.735 12.28 3.42L11.215 4.485C10.0525 3.555 8.59 3 7 3C3.2725 3 0.25 6.0225 0.25 9.75C0.25 13.4775 3.265 16.5 7 16.5C10.735 16.5 13.75 13.4775 13.75 9.75C13.75 8.16 13.195 6.6975 12.2725 5.5425ZM7 15C4.0975 15 1.75 12.6525 1.75 9.75C1.75 6.8475 4.0975 4.5 7 4.5C9.9025 4.5 12.25 6.8475 12.25 9.75C12.25 12.6525 9.9025 15 7 15Z"/>
			</svg>
			<?php echo post_estimated_reading_time($post_content); ?>
		</span>
	</div>
	<header class="entry-header">
		<div class="blog-container__flexible">
			<a href="<?php echo esc_url( $post_permalink ); ?>" target="_self"><h1 class="blog-container__blog-card-title" style="margin: 0 !important;"><?php echo $post_title; ?></h1></a>
		</div>
	</header><!-- .entry-header -->
</article><!-- #post-<?php echo $post_id; ?> -->
