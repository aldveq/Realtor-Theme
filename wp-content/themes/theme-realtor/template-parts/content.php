<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Olly_Olly_Realtor_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		$categories_posts = get_the_category();
		$category_name = $categories_posts[0]->{'name'};
		$author_id = get_the_author_meta('ID');
		$author_avatar = get_avatar_url($author_id, array('size' => 450));
		$post_content = get_the_content();
		if ( is_singular() ) :
			?>
			<div class="blog-container__header-details-container">
				<span class="blog-container__post-category-text"><?php echo $category_name; ?></span>
				<span class="blog-container__post-time-read">
					<svg width="14" height="17" viewBox="0 0 14 17" xmlns="http://www.w3.org/2000/svg" class="blog-container__time-read-svg">
						<path d="M9.25 0.75H4.75V2.25H9.25V0.75ZM6.25 10.5H7.75V6H6.25V10.5ZM12.2725 5.5425L13.3375 4.4775C13.015 4.095 12.6625 3.735 12.28 3.42L11.215 4.485C10.0525 3.555 8.59 3 7 3C3.2725 3 0.25 6.0225 0.25 9.75C0.25 13.4775 3.265 16.5 7 16.5C10.735 16.5 13.75 13.4775 13.75 9.75C13.75 8.16 13.195 6.6975 12.2725 5.5425ZM7 15C4.0975 15 1.75 12.6525 1.75 9.75C1.75 6.8475 4.0975 4.5 7 4.5C9.9025 4.5 12.25 6.8475 12.25 9.75C12.25 12.6525 9.9025 15 7 15Z"/>
					</svg>
					<?php echo post_estimated_reading_time(get_the_content()); ?>
				</span>
			</div>
			<figure class="post-thumbnail">
			<img src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/default-image.png'; ?>" alt="">
			<figcaption><?php echo !empty(get_the_post_thumbnail_url()) ? the_post_thumbnail_caption() : "" ?></figcaption>
			</figure>
			<?php

			
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->

	<div class="post-body">
		<div class="post-share"></div>
		<div class="entry-content">
			<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'olly-olly-realtor-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			?>
			<div class="blog-container__author-col-container">
				<img src="<?php echo !empty($author_avatar) ? $author_avatar : get_template_directory_uri() . '/images/default-image.png'; ?>" alt="<?php echo get_the_author_meta('user_firstname') . '  ' . get_the_author_meta('user_lastname'); ?>" class="blog-container__picture-profile">
				<span class="blog-container__author-text"><?php echo get_the_author_meta('user_firstname') . '  ' . get_the_author_meta('user_lastname'); ?></span>				<span class="blog-container__date-text"><?php echo the_time('F j, Y'); ?></span>
			</div>
		</div><!-- .entry-content -->
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
