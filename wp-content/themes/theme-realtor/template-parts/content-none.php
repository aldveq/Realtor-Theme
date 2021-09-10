<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Olly_Olly_Realtor_Theme
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title blog-search-template-container__subtitle"><?php esc_html_e( 'Nothing Found', 'olly-olly-realtor-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'olly-olly-realtor-theme' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="blog-search-template-container__desc"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'olly-olly-realtor-theme' ); ?></p>
			<?php

		else :
			?>

			<p class="blog-search-template-container__desc"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'olly-olly-realtor-theme' ); ?></p>
			<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
