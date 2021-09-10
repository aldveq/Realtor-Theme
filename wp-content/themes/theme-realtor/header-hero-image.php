<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Olly_Olly_Realtor_Theme
 */

 // Contact Information Settings
 $contact_information_settings_contact_information_group = get_field('contact_information_settings_contact_information_group', 'option');
 $contact_information_group_phone_number_title = !empty($contact_information_settings_contact_information_group['contact_information_group_phone_number_title']) ? $contact_information_settings_contact_information_group['contact_information_group_phone_number_title'] : 'Call Now!';
 $contact_information_group_phone_number = !empty($contact_information_settings_contact_information_group['contact_information_group_phone_number']) ? $contact_information_settings_contact_information_group['contact_information_group_phone_number'] : '(000) 000-0000';

 $accent_color = get_field('color_palette_settings_accent_color', 'option'); // Accent Color -> Pico Pink -> #f44e65
 $secondary_color = get_field('color_palette_settings_secondary_color', 'option'); // Secondary Color -> Imperial Primer -> #210b2c
 $tertiary_color = get_field('color_palette_settings_tertiary_color', 'option'); // Tertiary Color -> Light Blue Ballerina -> #f7f9ff

 // Google Tag Manager Settings
 $google_tag_manager_settings_head_script = get_field('google_tag_manager_settings_head_script', 'option');
 $google_tag_manager_settings_body_script = get_field('google_tag_manager_settings_body_script', 'option');

 // Legal Settings
 $legal_settings_is_legal_settings_available = get_field('legal_settings_is_legal_settings_available', 'option');

 // Social Networks Group
$contact_information_settings_social_networks_group = get_field('contact_information_settings_social_networks_group', 'option');

if(!empty($contact_information_settings_social_networks_group)):
	$contact_information_settings_social_networks_group_facebook = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_facebook'];	
	$contact_information_settings_social_networks_group_linkedin = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_linkedin'];
	$contact_information_settings_social_networks_group_instagram = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_instagram'];
	$contact_information_settings_social_networks_group_google_my_business = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_google_my_business'];
	$contact_information_settings_social_networks_group_yelp = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_yelp'];	
endif;

$home_hero_settings_title = get_field('home_hero_settings_title', 'option');
$home_hero_settings_link = get_field('home_hero_settings_link', 'option');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php 
		if(!empty($google_tag_manager_settings_head_script)):
			echo $google_tag_manager_settings_head_script;
		endif;
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
		:root {
			--support-color-pure-white: #ffffff;
		}		

		/** 
		* Olly Olly Realtor Theme Styles 
		*/

		.olly-olly-realtor-theme-header__cta-link,
		.olly-olly-realtor-theme-header__cta-link:hover,
		.olly-olly-realtor-theme-header__cta-link:focus,
		.olly-olly-realtor-theme-header__cta-link:visited,
		.olly-olly-realtor-theme-header__cta-link:active {
			color: <?php echo $secondary_color; ?>;
		}

		.olly-olly-realtor-theme-header__cta-number {
			color: <?php echo $accent_color; ?>;
    		border: 2px solid <?php echo $accent_color; ?>;
		}

		.olly-olly-realtor-theme-header__nav-list a {
			color: <?php echo $secondary_color; ?>;
		}

		.olly-olly-realtor-theme-header__nav-list li.current-menu-item a {
			color: <?php echo $accent_color; ?>;
		}

		.olly-olly-realtor-theme-header__nav-list li.current-menu-parent.menu-item-has-children>a {
			color: <?php echo  $accent_color; ?>;
		}

		.hamburger.is-active .hamburger-inner,
		.hamburger.is-active .hamburger-inner::before,
		.hamburger.is-active .hamburger-inner::after {
			background-color: <?php echo $accent_color; ?>;
		}

		.hamburger-inner, 
		.hamburger-inner::before, 
		.hamburger-inner::after {
			background-color: <?php echo $accent_color; ?>;
		}

		.hero-image-section h5 {
			color: <?php echo $secondary_color; ?>;
		}

		.dream-houses-container__main-title {
			color: <?php echo $secondary_color; ?>;
		}

		.card__flexible p {
			color: <?php echo $secondary_color; ?>;
		}

		.button__outline {
			border: 2px solid <?php echo $accent_color; ?>;
		}

		.button__outline:hover {
			border: 2px solid <?php echo $accent_color; ?>;
			background-color: <?php echo $accent_color; ?>;
			color: var(--support-color-pure-white) !important;
		}

		.button__outline:active, 
		.button__outline:focus {
			color: var(--support-color-pure-white) !important;
			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
			background-color: <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
		}

		.button__outline--right-arrow-icon {
			fill: <?php echo $accent_color; ?> !important;
		}

		.button__filled {
			background-color: <?php echo $accent_color; ?> !important;
    		border: 2px solid <?php echo $accent_color; ?> !important;
		}

		.button__filled:hover {
			background-color: <?php echo adjust_brightness_darkness_color($accent_color, 25); ?> !important;
			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, 25); ?> !important;
		}

		.button__filled:active, 
		.button__filled:focus, 
		.button__filled:visited {
			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, -16); ?> !important;
    		background-color: <?php echo adjust_brightness_darkness_color($accent_color, -16); ?> !important;
		}

		.button__text:hover {
			background-color: <?php echo adjust_brightness_darkness_color($accent_color, 25); ?> !important;
			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, 25); ?> !important;
		}

		.button__text:active, 
		.button__text:focus {
			background-color: <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
		}

		.properties-container__main-title {
			color: <?php echo $secondary_color; ?>; 
		}

		.properties-container div.swiper-button-next::after, 
		.properties-container div.swiper-button-prev::after {
			color: <?php echo $accent_color; ?>;
		}

		.properties-container div.swiper-pagination {
			background-color: <?php echo convert_hex_to_rgba($accent_color, 0.92); ?>;
		}

		.properties-container__address-one {
			color: <?php echo $secondary_color; ?>;
		}

		.properties-container__price {
			color: <?php echo $accent_color; ?>;
		}

		.properties-container__details-text {
			color: <?php echo $secondary_color; ?>;
		}

		.our-neighborhoods-container__title {
			color: <?php echo $secondary_color; ?>;
		}

		.our-neighborhoods-container__info-column-title {
			color: <?php echo $secondary_color; ?>;
		}

		.other-neighborhoods-container__info-container.bg-enabled::before {
			background-color: <?php echo $tertiary_color; ?>;
		}

		.free-consultation-form {
			background-color: <?php echo $tertiary_color; ?>;
		}

		.free-consultation-form__title {
			color: <?php echo $secondary_color; ?>;
		}

		.free-consultation-form__phone-number,
		.free-consultation-form__area-item {
			color: <?php echo $accent_color; ?>;
		}

		.free-consultation-form__phone-number:hover, 
		.free-consultation-form__phone-number:visited {
			color: <?php echo $accent_color; ?>;
		}

		.free-consultation-form__form-container form.wpcf7-form p label {
			color: <?php echo $secondary_color; ?>;
		}

		.testimonials-container__title {
			color: <?php echo $secondary_color; ?>;
		}

		.testimonials-container__rating-star {
			color: <?php echo adjust_brightness_darkness_color($accent_color, 100); ?>;
		}

		.testimonials-container__rating-star.active {
			color: <?php echo $accent_color; ?>;
		}

		.testimonials-container__source-text {
			color: <?php echo $secondary_color; ?>;
		}

		.testimonials-container__name {
			 color: <?php echo $accent_color; ?>;
		}

		.testimonial-modal-window-wrapper {
			background-color: <?php echo convert_hex_to_rgba($secondary_color, 0.52); ?>;
		}

		.testimonial-modal-window-wrapper__close-icon-container span {
			color: <?php echo $accent_color; ?>;
		}

		.testimonial-modal-window-wrapper__source {
			color: <?php echo $secondary_color; ?>;
		}

		.testimonial-modal-window-wrapper__author {
			color: <?php echo $accent_color; ?>;
		}

		.testimonials-container__quote {
			fill: <?php echo $accent_color; ?>;
		}
		
		.testimonials-container__swiper-pagination span.swiper-pagination-bullet {
			border: 1px solid <?php echo $secondary_color; ?>;
		}

		.testimonials-container__swiper-pagination span.swiper-pagination-bullet-active {
			background: <?php echo $secondary_color; ?>;
		}

		.olly-olly-realtor-theme-footer {
			background-color: <?php echo $secondary_color; ?>;
		}

		.title-description-cta-container__title {
			color: <?php echo $secondary_color; ?>;
		}

		.leaflet-popup-content-wrapper, 
		.leaflet-popup-tip {
			background: <?php echo $accent_color; ?> !important;
		}

		.accordion-container__main-title,
		.accordion label,
		.about-us-profile-container__title,
		.contact-container__main-title,
		.contact-container__address-label, 
		.contact-container__email-label, 
		.contact-container__hours-label, 
		.contact-container__phone-label,
		.error-404-container__title {
			color: <?php echo $secondary_color; ?>;
		}

		.accordion label .accordion__svg {
			fill: <?php echo $accent_color; ?>;
		}

		.impress-omnibar-search-container button.idx-omnibar-extra-button {
			background-color: <?php echo $accent_color; ?>;
    		border: 2px solid <?php echo $accent_color; ?>;
		}

		.impress-omnibar-search-container button.idx-omnibar-extra-button:hover {
			background-color: <?php echo adjust_brightness_darkness_color($accent_color, 25); ?> !important;
   			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, 25); ?> !important;
		}

		.impress-omnibar-search-container button.idx-omnibar-extra-button:active, 
		.impress-omnibar-search-container button.idx-omnibar-extra-button:focus, 
		.impress-omnibar-search-container button.idx-omnibar-extra-button:visited {
			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
    		background-color: <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
		}

		.button__outline-hamburguer:hover {
			border: 2px solid <?php echo $accent_color; ?>;
    		background-color: <?php echo $accent_color; ?>;
		}

		.button__outline-hamburguer:active, 
		.button__outline-hamburguer:focus, 
		.button__outline-hamburguer:visited {
			border: 2px solid <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
			background-color: <?php echo adjust_brightness_darkness_color($accent_color, -16); ?>;
		}

		.button__outline-hamburguer-icon {
			fill: <?php echo $accent_color; ?>;
		}

		.mortgage-calculator-container__estimated-payment-number {
			color: <?php echo $accent_color; ?>;
		}

		.mortgage-calculator-container__insurance-number, 
		.mortgage-calculator-container__pmi-number, 
		.mortgage-calculator-container__taxes-number,
		.mortgage-calculator-container__form-control label {
			color: <?php echo $secondary_color; ?>;
		}

		.switch-dollar-icon,
		input:checked+.slider svg.switch-percentage-icon {
			fill: <?php echo $accent_color; ?>;
		}

		.badges-container__title {
			color: <?php echo $secondary_color; ?>;
		}

		.badges-container__swiper-pagination span.swiper-pagination-bullet {
			border: 1px solid <?php echo $secondary_color; ?>;
		}

		.badges-container__swiper-pagination span.swiper-pagination-bullet-active {
			background: <?php echo $secondary_color; ?>;
		}

		.featured-services-swiper-button-next, 
		.featured-services-swiper-button-prev {
			color: <?php echo $accent_color; ?> !important;
		}

		.olly-olly-hero-image-container__body-button {
			background-color: #fff !important;
    		border: 2px solid #fff !important;
		}

		.olly-olly-hero-image-container__body-button:hover {
			border: 2px solid #f2f2f2 !important;
    		background-color: #f2f2f2 !important;
		}

		.olly-olly-hero-image-container__nav-list li:hover {
			background-color: transparent !important;
		}

		.olly-olly-hero-image-container__theme-header.fixed {
			background-color: <?php echo convert_hex_to_rgba($secondary_color, 0.95); ?> !important;
		}

		.hamburger-inner, 
		.hamburger-inner::before, 
		.hamburger-inner::after {
			background-color: #fff;
		}

		.hamburger.is-active .hamburger-inner, 
		.hamburger.is-active .hamburger-inner::before, 
		.hamburger.is-active .hamburger-inner::after {
			background-color: #fff;
		}

		.blog-container__post-category-text {
			color: <?php echo $accent_color; ?> !important;
		}

		.blog-search-template-container__title,
		.blog-search-template-container__subtitle,
		.blog-search-template-container__desc {
			color: <?php echo convert_hex_to_rgba($secondary_color, 0.87); ?>;
		}

		.blog-container__post-time-read,
		.blog-container__blog-card-title,
		article.post .post-body .entry-content h1,
		.blog-container__author-text,
		.blog-search-template-container__posts-search-result-text {
			color: <?php echo $secondary_color; ?> !important;
		}

		.blog-container__time-read-svg,
		.blog-container .card .addtoany_share_save_container.addtoany_content.addtoany_content_bottom svg path,
		article.post .post-body .post-share .addtoany_share_save_container.addtoany_content.addtoany_content_bottom svg path {
			fill: <?php echo $secondary_color; ?> !important;
		}
		
		.blog-container__share-button.share-button-selected svg path,
		.blog-container .card .addtoany_share_save_container.addtoany_content.addtoany_content_bottom.addtoany_selected .a2a_button_close span svg path {
			fill: <?php echo $accent_color; ?> !important;
		}

		.blog-search-template-container__subtitle,
		.blog-search-template-container__desc {
			color: <?php echo convert_hex_to_rgba($secondary_color, 0.87); ?> !important;
		}

		/* Max width */
		
		@media screen and (max-width: 1365px) {
			.olly-olly-realtor-theme-header__nav-list li ul.sub-menu li.current-menu-item>a {
				color: <?php echo $accent_color; ?>;
			}
		}

		/* Min width */

		@media screen and (min-width: 1024px) {
			.hero-image-section::before {
				background-color: <?php echo convert_hex_to_rgba($secondary_color, 0.48); ?>;
			}
			.hero-image-section h5, .hero-image-section p {
				color: var(--support-color-pure-white);
			}
		}

		@media screen and (min-width: 1366px) {
			.olly-olly-realtor-theme-header__nav-list li:hover {
				background-color: <?php echo $accent_color; ?>;
			}

			.olly-olly-realtor-theme-header__nav-list li.menu-item-has-children:hover {
				background-color: <?php echo $accent_color; ?>;
			}

			.olly-olly-realtor-theme-header__nav-list li ul.sub-menu li.current-menu-item {
				background-color: <?php echo $accent_color; ?>;
			}
			.olly-olly-hero-image-container__nav-list li ul.sub-menu {
				background-color: <?php echo convert_hex_to_rgba($secondary_color, 0.82); ?>;
			}
		}

		/** 
		* Olly Olly Realtor Theme Styles 
		*/

		/** 
		* IDX Broker Pages Styles - Desktop 
		*/

		.IDX-map .leaflet-tooltip, 
		.IDX-map .leaflet-label, 
		.IDX-map .leaflet-label--active {
			background: <?php echo $accent_color; ?> !important;
		}

		.leaflet-label--active,
		.IDX-map .leaflet-tooltip, 
		.IDX-map .leaflet-label, 
		.IDX-map .leaflet-label--active,
		#IDX-map  .leaflet-tooltip, 
		#IDX-map .leaflet-label, 
		#IDX-map .leaflet-label--active{
			background: <?php echo $accent_color; ?> !important;
		}

		div.IDX-mapWidgetWrap {
			padding: 50px 0;
		}

		@media screen and (min-width: 1200px) {
			div.IDX-mapWidgetWrap {
				padding: 50px 0 70px;
			}
		}

		#IDX-main .leaflet-container .leaflet-marker-pane img {
			display: block !important;
		}

		.IDX-showcaseTable .IDX-showcaseContainer {
			border: none !important;
			box-shadow: none !important;
		}

		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-btn-primary, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-btn-primary:focus, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-btn-primary:hover, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .select2-container.select2-container-multi .select2-choices .select2-search-choice, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .select2-container a.select2-search-choice-close, 
		.select2-results .select2-result-sub .select2-highlighted, 
		.select2-results .select2-result .select2-result-label, 
		.IDX-wrapper-standard #IDX-registration .IDX-btn-primary, 
		.IDX-wrapper-standard #IDX-registration .IDX-btn-primary:focus, 
		.IDX-wrapper-standard #IDX-registration .IDX-btn-primary:hover, 
		#IDX-registration .IDX-form-actions .IDX-btn-primary, 
		#IDX-registration .IDX-form-actions .IDX-btn-primary:focus, 
		#IDX-registration .IDX-form-actions .IDX-btn-primary:hover {
			background: <?php echo $accent_color; ?>;
			color: #fff;
		}

		.IDX-showcaseTable .IDX-showcaseContainer img {
			border-radius: 8px;
			min-height: 100%;
			min-width: 100%;
		}

		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell {
			min-height: 388px;
		}

		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseBeds,
		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseBaths,
		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseFull,
		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell  .IDX-showcasePartial  {
			width: 25%;
			display: inline-block !important;
			text-align: left !important;
			color: #aaadc3 !important;
			line-height: 1.5;
			vertical-align: top;
			padding-right: 6px;
		}

		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseContainer {
			border: none !important;
			box-shadow: none !important;
		}
		
		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseAddress.IDX-showcaseAddressElement,
		#IDX-detailsAddress, h3.IDX-fieldContainerTitle {
			font-family: "Lato", Sans-serif!important;
			font-weight: 700 !important;
			font-size: 18px;
			text-align: left !important;
			line-height: 1.5;
			padding-top: 8px;
			color: <?php echo $secondary_color; ?> !important;
		}

		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseCityStateZip {
			font-family: "Lato", Sans-serif!important;
			font-size: 18px;
			text-align: left !important;
			line-height: 1.5;
			color: #aaadc3  !important;
		}

		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcasePrice,
		#IDX-detailsField-listingPrice  {
			font-family: "Lato", Sans-serif!important;
			font-size: 22px;
			text-align: left !important;
			padding-top: 8px;
			color: <?php echo $accent_color; ?> !important;
		}

		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseBeds:first-letter,
		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseBaths:first-letter,
		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell .IDX-showcaseFull:first-letter,
		.IDX-showcaseTable .IDX-showcaseRow .IDX-showcaseCell  .IDX-showcasePartial:first-letter{
			font-size: 16px;
			padding-right: calc(100% - 10px);
			color: #000;
		}

		.marker-cluster-small div, 
		.marker-cluster-medium div, 
		.marker-cluster-small, 
		.marker-cluster-large, 
		.marker-cluster-medium, 
		.marker-cluster-large div {
			background-color: <?php echo $accent_color; ?> !important;
			color: #fff !important;
			font-size: 16px !important;
		}

		.IDX-mapControlContainer img.leaflet-marker-icon.leaflet-zoom-animated.leaflet-interactive {
			filter: brightness(100%) saturate(190%) hue-rotate(258deg);
		}

		.IDX-map.leaflet-container img,#IDX-detailsMap #IDX-map img {
			filter: grayscale(1);
		}

		.IDX-wrapper-standard .IDX-results-title--count,
		h4#IDX-resultsSeparatorTextActive,
		.IDX-wrapper-standard .IDX-MLSLogo,
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-resultsVirtualTour,
		.IDX-wrapper-standard .IDX-results--cell--disclaimer,
		div#IDX-nextLastPosition, 
		h4#IDX-resultsSeparatorTextFeatured,
		.IDX-wrapper-standard ul.IDX-resultsCellsContainer .IDX-propertyTypeHeader,
		h2#IDX-moreinfoHeader,
		div#IDX-previousPage, 
		h2#IDX-scheduleshowingHeader,
		h2#IDX-mortgageCalculatorHeader,
		li#IDX-propertyInfoLocationInfo,
		.IDX-shareThisContainer,
		#IDX-detailsSummary   {
			display: none;
		}

		.IDX-wrapper-standard h3.IDX-results-title {
			font-family: lato, Sans-serif!important;
			font-weight: 300;
			font-size: 34px;
			text-align: center;
			line-height: 1.5;
			padding-top: 8px;
			color: <?php echo $secondary_color; ?>;
			width: 100%;
			text-transform: none;
			margin: 0;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsPhotoLink a,
		#IDX-detailsPropertyPhoto img {
			border-radius: 8px;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--cell-inner-wrapper {
			background: transparent;
			border: none;
			overflow: visible;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content:before {
			position: relative;
			display: none;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsAddress {
			position: relative;
			top: 256px;
			max-width: 100%;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsPhotoLink {
			position: relative;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--cell-inner-wrapper:before {
			padding: 0;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsPhoto img {
			position: relative;
			height: 213px;
			border-radius: 8px;
			margin: 10px;
			width: 97%;
			left: 47%;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions {
			background: none;
			top: 44px;
		}


		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsAddress .IDX-results--details-field .IDX-field-price {
			font-family: "Lato", Sans-serif!important;
			font-size: 22px;
			color: <?php echo $accent_color; ?> !important;
			text-shadow: none;
			white-space: nowrap;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsAddress h4.IDX-results--details-field {
			font-weight: 700 !important;
			font-size: 18px;
			line-height: 1.5;
			color: <?php echo $secondary_color; ?> !important;
			text-shadow: none;
			white-space: pre-wrap;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsAddress .IDX-results--details-field span.IDX-label {
			color: #777;
			line-height: 1.5;
			text-shadow: none;
			font-size: 14px;
			font-weight: 500;
		}

		span.IDX-text {
			display: block;
			color: <?php echo $secondary_color; ?>;
			font-size: 16px;
			text-shadow: none;
			font-weight: 700;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsAddress .IDX-results--details-field .IDX-field-price>.IDX-label,
		p.IDX-results--details-field-propStatus.IDX-results--details-field {
			display: none !important;
		}

		span.IDX-resultsAddressCity::before {
			content: "\a";
			white-space: pre;
		}

		span.IDX-resultsAddressCity, 
		span.IDX-resultsEndAddressCommaTwo, 
		span.IDX-resultsAddressStateAbrv {
			font-family: "Lato", Sans-serif!important;
			font-size: 18px;
			line-height: 1.5;
			color: #aaadc3 !important;
		}

		.IDX-wrapper-standard .IDX-box-shadow--bottom {
			box-shadow: none;
			background: transparent;
		}

		div#IDX-resultsTopActions .IDX-topAction a, 
		.IDX-wrapper-standard .IDX-detailsHotAction a {
			font-size: 12px !important;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #AAADC3 !important;
			font-family: "Lato", sans-serif;
			text-decoration: none;
		}

		div#IDX-resultsTopActions {
			width: fit-content;
			margin: 0 auto;
			right: 0;
			left: 0;
			margin-right: 48px;
			margin-bottom: -55px;
			text-align: right;
		}

		#IDX-leadToolsBar {
			background: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard .IDX-results-refine-search-wrap {
			left: -146px;
		}

		.IDX-wrapper-standard .IDX-results-refinement .IDX-refine-search--toggle:after {
			border-color: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard .select2-container .select2-choice .select2-arrow b {
			border-color: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard .IDX-pagination>.IDX-active>a, 
		.IDX-wrapper-standard .IDX-pagination>.IDX-active>a:active, 
		.IDX-wrapper-standard .IDX-pagination>.IDX-active>a:focus, 
		.IDX-wrapper-standard .IDX-pagination>.IDX-active>span, 
		.IDX-wrapper-standard .IDX-pagination>.IDX-active>span:active, 
		.IDX-wrapper-standard .IDX-pagination>.IDX-active>span:focus {
			color: <?php echo $accent_color; ?>;
			background: transparent;
		}

		.IDX-wrapper-standard #IDX-results-pagination {
			margin: 37px 0;
		}

		.IDX-wrapper-standard .IDX-pagination>li>a, 
		.IDX-wrapper-standard .IDX-pagination>li>span {
			border: none;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-propertySaved.IDX-propertySaved i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-propertySaved.IDX-removeProperty i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-propertySaved.IDX-resultsCellSaved i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-propertySaved:hover i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-removeProperty.IDX-propertySaved i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-removeProperty.IDX-removeProperty i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-removeProperty.IDX-resultsCellSaved i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-removeProperty:hover i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-saveProperty.IDX-propertySaved i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-saveProperty.IDX-removeProperty i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-saveProperty.IDX-resultsCellSaved i.fa, 
		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-propertyActions .IDX-saveProperty:hover i.fa {
			color: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard .IDX-results--cell .IDX-results--card-content .IDX-resultsPhotoLink {
			height: inherit;
			position: absolute;
		}


		img.leaflet-marker-icon.leaflet-zoom-animated.leaflet-interactive {
			filter: grayscale(0) brightness(90%) saturate(190%) hue-rotate( 254deg ) !important;
		}

		.IDX-map.leaflet-container img {
			filter: grayscale(1);
		}

		.IDX-wrapper-standard #IDX-detailsAddress span {
			font-weight: 700 !important;
			font-size: 18px;
			line-height: 1.5;
			color: <?php echo $secondary_color; ?>;
			text-shadow: none;
		}

		#IDX-main #IDX-map img {
			filter: grayscale(1);
		}

		.IDX-wrapper-standard .IDX-well {
			background-color: transparent;
			border: none;
			border-radius: 0;
			box-shadow: none;
			padding: 0;
		}


		div#IDX-detailsTopActions.IDX-topActions.IDX-row-content a {
			background: <?php echo $accent_color; ?> !important;
			color: #fff !important;
			border-radius: 4px;
			border: none;
			padding: 12px;
		}


		div#IDX-nextLastButtons a {
			border: none;
			text-align: left;
			max-width: fit-content;
		}

		div#IDX-panel-body-greatSchools div,
		.map-container .gs-tab-container,
		.map-container .gs-tab.left-tab {
			border: none;
		}

		.map-container .gs-tab,
		.IDX-wrapper-standard.IDX-page-address .IDX-searchForm .IDX-btn-primary, 
		.IDX-wrapper-standard.IDX-page-address .IDX-searchForm .IDX-btn-primary:hover, 
		.IDX-wrapper-standard.IDX-page-address .IDX-navbar-default .IDX-navbar-nav>li>a:focus, 
		.IDX-wrapper-standard.IDX-page-address .IDX-navbar-default .IDX-navbar-nav>li>a:hover, 
		.IDX-wrapper-standard.IDX-page-address .IDX-navbar-default .IDX-navbar-nav > .IDX-active > .IDX-searchNavLink, 
		.IDX-wrapper-standard.IDX-page-address .IDX-navbar-default .IDX-navbar-nav > .IDX-active > .IDX-searchNavLink:hover, 
		.IDX-wrapper-standard.IDX-page-address .IDX-navbar-default .IDX-navbar-nav > .IDX-active > .IDX-searchNavLink:focus, 
		.IDX-wrapper-standard.IDX-page-address .IDX-searchForm .IDX-btn-primary:hover, 
		.IDX-wrapper-standard.IDX-page-address .IDX-searchForm .IDX-btn-primary:focus,
		.IDX-wrapper-standard.IDX-page-address .IDX-searchForm .select2-choices .select2-search-choice, 
		ul.select2-results .select2-highlighted {
			background: <?php echo $accent_color; ?> ;
			color: #fff;
		}

		.map-container .gs-tab.inactive {
			color: #777 ;
		}

		.IDX-wrapper-standard .select2-container.select2-container-multi .select2-choices, 
		.IDX-wrapper-standard .select2-container a.select2-choice, 
		.IDX-wrapper-standard .select2-container a.select2-default {
			border-radius: 4px;
		}

		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default .IDX-navbar-collapse, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default .IDX-navbar-form {
			border: none;
			background: transparent;
		}

		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default .IDX-navbar-nav > li > a {
			font-size: 12px;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #AAADC3;
			font-family: "Lato", sans-serif;
			padding: 10px;
			margin-right: 20px;
			text-align: center;
		}
				
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default .IDX-navbar-nav > li > a:hover, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default .IDX-navbar-nav > li > a:focus, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default .IDX-navbar-nav > li.IDX-active > a, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-navbar-default .IDX-navbar-nav > li.IDX-active > a:focus {
			background: <?php echo $accent_color; ?>;
			color: #fff;
			padding: 10px;
		}

		div#IDX-action-buttons button {
			border-radius: 4px !important;
			max-width: 448px;
			margin-right: 20px !important;
			padding: 14px;
			font-size: 12px;
			letter-spacing: 1px;
			text-transform: uppercase;
			font-family: "Lato", sans-serif;
		}

		.IDX-wrapper-standard .IDX-control-group {
			padding-left: 0;
		}

		.IDX-wrapper-standard .IDX-navbar-collapse {
			padding-left: 0;
		}

		.IDX-wrapper-standard.IDX-page-address .IDX-searchForm .IDX-btn-primary {
			background-color: <?php echo $accent_color; ?>;
			border-color: #ddd;
		}

		.IDX-topActions .IDX-topAction a, 
		.IDX-wrapper-standard .IDX-detailsHotAction a:hover {
			color: <?php echo $accent_color; ?> !important;
		}

		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-btn-primary, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-btn-primary:focus, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .IDX-btn-primary:hover, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .select2-container.select2-container-multi .select2-choices .select2-search-choice, 
		.IDX-wrapper-standard .IDX-mobileFirst--neutral .select2-container a.select2-search-choice-close, 
		.select2-results .select2-result-sub .select2-highlighted, 
		.select2-results .select2-result .select2-result-label, 
		.IDX-wrapper-standard #IDX-registration .IDX-btn-primary, 
		.IDX-wrapper-standard #IDX-registration .IDX-btn-primary:focus, 
		.IDX-wrapper-standard #IDX-registration .IDX-btn-primary:hover, 
		#IDX-registration .IDX-form-actions .IDX-btn-primary, 
		#IDX-registration .IDX-form-actions .IDX-btn-primary:focus, 
		#IDX-registration .IDX-form-actions .IDX-btn-primary:hover{
			background: <?php echo $accent_color; ?>;
			color: #fff;
		}

		.IDX-wrapper-standard .select2-container .select2-choice .select2-chosen,
		#IDX-main .IDX-control-label,
		.IDX-wrapper-standard .select2-container.select2-container-multi .select2-choices input,
		#IDX-main .IDX-control-group label, 
		#IDX-main .IDX-single input, 
		#IDX-main .IDX-single label {
			font-size: 12px;
			color: <?php echo $secondary_color; ?> !important;
			font-family: "Lato", sans-serif;
			letter-spacing: 0.4px;
			font-weight: 400;
		}

		#IDX-main .IDX-help-block {
			color: #AAADC3;
			font-size: 12px;
			font-family: "Lato", sans-serif;
			letter-spacing: 0.4px;
			font-weight: 400;
		}

		button#IDX-formReset {
			border: 2px solid #AAADC3 !important;
			color: #AAADC3;
			font-weight: 700;
		}

		.IDX-wrapper-standard .select2-container .select2-choice .select2-arrow b {
			border-top: 5px solid <?php echo $accent_color; ?>;
			border-left: 6px solid transparent;
			border-right: 5px solid transparent;
		}

		.IDX-wrapper-standard .IDX-panel-default>.IDX-panel-heading {
			color: #fff;
			background-color: <?php echo $accent_color; ?>;
			border-color: <?php echo $accent_color; ?>;
		}

		#IDX-loginSubmit {
			background: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard .IDX-control-group, 
		#IDX-main .IDX-control-group, 
		#IDX-main .IDX-single {
			padding-left: 0;
		}

		#IDX-leadToolsBar {
			background: <?php echo $accent_color; ?>;
			padding: 13px;
			height: fit-content;
		}

		.IDX-wrapper-standard .IDX-results-refinement .IDX-refine-search--toggle:after {
			border-top: 5px solid <?php echo $accent_color; ?>;
		}

		@media only screen and (min-width: 641px){
			.IDX-wrapper-standard #IDX-action-buttons button, 
			.IDX-wrapper-standard #IDX-action-buttons-bottom button {
				width: 23.5%;
				float: right;
			}
		}

		.IDX-wrapper-standard textarea.IDX-form-control, 
		div#IDX-moreinfoContent a {
			border-radius: 4px;
		}

		div#IDX-moreinfoFormActions button, 
		div#IDX-moreinfoFormActions button#IDX-resetBtn:hover, 
		#IDX-submitBtn {
			border-radius: 4px;
			width: 448px;
			padding: 14px;
			font-size: 12px;
			letter-spacing: 1px;
			text-transform: uppercase;
			font-family: "Lato", sans-serif;
			float: right;
			border-color: <?php echo $accent_color; ?>;
			background: <?php echo $accent_color; ?>;
			color: #fff;
		}

		div#IDX-moreinfoFormActions button#IDX-resetBtn {
			border: 2px solid #AAADC3;
			color: #AAADC3;
			font-weight: 700;
			background: #fff;
		}

		div#IDX-moreinfoFormActions .col-sm-6.IDX-form-group, 
		.IDX-form-actions.IDX-row .col-sm-6.IDX-form-group {
			width: fit-content;
			float: right;
		}

		button#IDX-resetBtn {
			border: 2px solid #AAADC3;
			color: #AAADC3;
			font-weight: 700;
			background: #fff;
			width: 448px;
			padding: 14px;
			font-size: 12px;
			letter-spacing: 1px;
			text-transform: uppercase;
			font-family: "Lato", sans-serif;
			float: right;
		}

		.IDX-wrapper-standard .IDX-form-control {
			border-radius: 4px;
			box-shadow: none;
		}

		#IDX-main .IDX-well {
			background: transparent;
			border: none;
			box-shadow: unset;
		}

		div#IDX-mortgageCalculationResults span.IDX-label, 
		ul.IDX-propertyInfoList .IDX-propertyInfoData span.IDX-label, 
		li.IDX-propertyInfoData {
			display: block;
			font-size: 10px;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #AAADC3;
			font-family: "Lato", sans-serif;
			text-align: center;
		}

		#IDX-mortgageCalculationResults .IDX-row {
			width: 25%;
			display: inline-block;
			text-align: center;
		}

		div#IDX-mortgageCalculationResults span.IDX-info, 
		ul.IDX-propertyInfoList .IDX-propertyInfoData {
			font-family: "Lato", Sans-serif!important;
			font-weight: 700 !important;
			font-size: 18px;
			line-height: 1.5;
			padding-top: 8px;
			color: <?php echo $secondary_color; ?> !important;
			text-transform: lowercase;
		}

		.IDX-well ul.IDX-propertyInfoList li.IDX-propertyInfoData {
			width: 25%;
			display: inline-block;
			vertical-align: top;
			text-align: center;
		}

		/* Form style change */
		#IDX-main .IDX-form-group .IDX-label, 
		.IDX-label.IDX-input-group,
		#IDX-main .IDX-form-control {
			font-size: 12px;
			color: <?php echo $secondary_color; ?> !important;
			font-family: "Lato", sans-serif;
			letter-spacing: 0.4px;
			font-weight: 400;
		}

		#IDX-main span.IDX-input-group-addon {
			background: #E9E9EC;
			border: none;
		}

		#IDX-main .IDX-input-group input.IDX-form-control {
			background: #fff;
		}

		#IDX-main .IDX-input-group input.IDX-form-control {
			border-radius: 4px;
		}

		#IDX-main .IDX-btn-primary {
			background: <?php echo $accent_color; ?>;
			color: #fff;
			border-radius: 4px !important;
			padding: 14px;
			font-size: 12px;
			letter-spacing: 1px;
			text-transform: uppercase;
			font-family: "Lato", sans-serif;
		}

		/* body {
			font-size: 16px;
			letter-spacing: 0.5px;
			color: #AAADC3;
			font-family: "Lato", sans-serif;
		} */

		#IDX-detailsPropertyPhoto {
			width: 100%;
		}

		#IDX-detailsSummary .IDX-detailsField:first-child, 
		#IDX-detailsSummary .IDX-detailsField {
			border: none;
			padding-bottom: 20px;
		}

		#IDX-detailsSummary .IDX-fieldLabel {
			font-size: 10px;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #AAADC3;
		}

		#IDX-detailsSummary .IDX-fieldData {
			font-size: 15px;
			text-align: center;
			line-height: 1.5;
			padding-top: 8px;
			color: <?php echo $secondary_color; ?> !important;
		}

		#IDX-main {
			font-size: 16px;
			letter-spacing: 0.5px;
			color: #AAADC3;
			font-family: "Lato", sans-serif;
			line-height: 1.5;
			max-width: 1440px;
			margin: 0 auto;
		}

		#IDX-main.IDX-wrapper-standard a {
			color: <?php echo $accent_color; ?>;
		}

		h4#IDX-resultsSeparatorTextSoldpending {
			display: none;
		}

		#IDX-main.IDX-wrapper-standard #IDX-leadToolsBar a,
		#IDX-main.IDX-wrapper-standard li.IDX-searchNavItem.IDX-active a span,
		#IDX-main.IDX-wrapper-standard li.IDX-searchNavItem a:hover span,
		.IDX-wrapper-standard .IDX-btn-default{
			color: #fff;
		}

		.IDX-cloned-soldpending img.leaflet-marker-icon.leaflet-zoom-animated.leaflet-interactive {
			filter: grayscale(0) brightness(120%) saturate(110%) hue-rotate(339deg) !important;
		}

		@media screen and (min-width: 992px){
			.IDX-wrapper-standard #IDX-resultsContent {
				height: calc(99vh - 108px);
			}
		}


		/** 
		* IDX Broker Pages Styles - Desktop 
		*/

		/** 
		* IDX Broker Pages Styles - Mobile 
		*/

		.leaflet-draw-actions li:first-child a,
		.ui-slider .ui-slider-range {
			background: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard a {
			color: #ffffff;
		}

		#IDX-criteriaWindow {
			background: rgb(145 145 135);
		}

		.IDX-label-default {
			background-color: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard .IDX-form-group {
			margin-bottom: 5px;
		}

		input[type=email], 
		input[type=number], 
		input[type=password], 
		input[type=reset], 
		input[type=search], 
		input[type=tel], 
		input[type=text], 
		input[type=url], 
		select, 
		textarea {
			border-radius: 4px;
		}

		#IDX-formSubmit {
			cursor: pointer;
			background: <?php echo $accent_color; ?>;
		}

		#IDX-userLocation, 
		#IDX-mapSearch, 
		#IDX-mapTab-criteria {
			color: <?php echo $accent_color; ?>;
		}

		select#IDX-propStatus, 
		.IDX-wrapper-standard label, 
		.IDX-wrapper-standard select, 
		input[type=text], 
		.IDX-msInput, 
		.IDX-msLabel {
			font-size: 12px;
			color: <?php echo $secondary_color; ?> !important;
			font-family: "Lato", sans-serif;
			letter-spacing: 0.4px;
			font-weight: 400;
		}

		path.leaflet-interactive {
			stroke: <?php echo $accent_color; ?>;
			stroke-opacity: 0.5;
			stroke-width: 4;
			stroke-linecap: round;
			stroke-linejoin: round;
			fill: <?php echo $accent_color; ?>;
		}

		div#IDX-resultsTopActions {
			background: #fff;
		}

		.IDX-wrapper-standard .IDX-btn.IDX-btn--results-refinement {
			background: <?php echo $accent_color; ?>;
		}

		.IDX-wrapper-standard .IDX-field-listingID.IDX-field .IDX-text {
			color: #fff;
		}

		#IDX-main #IDX-map {
			width: 100%;
			min-width: 100%;
			clear: none;
		}

		.IDX-msInput.IDX-msButtonInput {
			background: <?php echo $accent_color; ?>;
			color: #fff !important;
			border: none;
		}

		.IDX-inputGroup input {
			border-radius: 4px;
			padding: 10px;
			border: 1px solid #ddd;
		}

		.IDX-mapTab.IDX-mapHeader-Element {
			background: <?php echo $accent_color; ?>;
			margin-top: -23px;
			font-size: 12px;
			font-family: "Lato", sans-serif;
			letter-spacing: 0.4px;
			padding: 10px;
			border-radius: 4px;
			color: white;
			border: none;
		}

		.IDX-wrapper-standard .IDX-badge--success {
			background-color: <?php echo $accent_color; ?>;
			color: #fff;
		}

		@media(max-width:824px) {
			div#IDX-resultsTopActions {
				width: 100%;
				margin-right: unset;
				margin-bottom: unset;
			}

			.IDX-wrapper-standard .IDX-results-refine-search-wrap {
				left: unset;
			}

			#IDX-mortgageCalculationResults .IDX-row {
				width: 100%;
			}

			.IDX-well ul.IDX-propertyInfoList li.IDX-propertyInfoData {
				width: 100%;
			}

			div#IDX-mortgageCalculatorContainer ul.IDX-propertyInfoList {
				display: none;
			}

			#IDX-main .IDX-well {
				min-height: 0;
				margin-bottom: 0;
				padding: 0;
			}

			div#IDX-moreinfoFormActions button, 
			div#IDX-moreinfoFormActions button#IDX-resetBtn:hover, 
			#IDX-submitBtn,button#IDX-resetBtn,
			div#IDX-moreinfoFormActions .col-sm-6.IDX-form-group, 
			.IDX-form-actions.IDX-row .col-sm-6.IDX-form-group {
				width: 100%
			}
		}


		/** 
		* IDX Broker Pages Styles - Mobile 
		*/

		.mortgage-calculator-container__form-control input, 
		.mortgage-calculator-container__form-control select {
			color: #929292!important;
		}

	</style>
</head>

<body <?php body_class('olly-olly-hero-image-container-body'); ?>>
<?php
	if(!empty($google_tag_manager_settings_body_script)):
		echo $google_tag_manager_settings_body_script;
	endif;
?>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'olly-olly-realtor-theme' ); ?></a>

	<?php
		if(!empty($args['image_url'])):
	?>
		<section class="olly-olly-hero-image-container" style="background-image: url(<?php echo $args['image_url']; ?>;">
			<div class="olly-olly-hero-image-container__header">
				<div class="olly-olly-hero-image-container__social-networks-container">
					<div class="container">
						<ul class="olly-olly-hero-image-container__social-networks-nav">
							<?php
								if(!empty($contact_information_settings_social_networks_group_facebook)):
										$contact_information_settings_social_networks_group_facebook_target = !empty($contact_information_settings_social_networks_group_facebook['target']) ? $contact_information_settings_social_networks_group_facebook['target'] : '_self';
									?>
										<li>
											<a href="<?php echo $contact_information_settings_social_networks_group_facebook['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_facebook_target; ?>">
												<svg width="9" height="18" viewBox="0 0 9 18" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 5.94709H1.93171V4.14815C1.93171 3.3545 1.95366 2.1164 2.55732 1.3545C3.18293 0.550265 4.05 0 5.54268 0C7.97927 0 9 0.338624 9 0.338624L8.52805 3.08995C8.52805 3.08995 7.72683 2.86772 6.96951 2.86772C6.22317 2.86772 5.54268 3.13228 5.54268 3.85185V5.95767H8.61585L8.39634 8.6455H5.54268V18H1.92073V8.6455H0V5.94709Z"/>
												</svg>
											</a>
										</li>
									<?php
								endif;
							?>
							<?php
								if(!empty($contact_information_settings_social_networks_group_linkedin)):
										$contact_information_settings_social_networks_group_linkedin_target = !empty($contact_information_settings_social_networks_group_linkedin['target']) ? $contact_information_settings_social_networks_group_linkedin['target'] : '_self';
									?>
										<li>
											<a href="<?php echo $contact_information_settings_social_networks_group_linkedin['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_linkedin_target; ?>">
												<svg width="18" height="17" viewBox="0 0 18 17" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
													<path d="M3.95767 17H0.455026V5.45263H3.96825V17H3.95767ZM2.1164 4.00512H2.09524C0.825397 4.00512 0 3.12356 0 2.00256C0 0.859795 0.846561 0 2.13757 0C3.42857 0 4.2328 0.859795 4.25397 2.00256C4.25397 3.12356 3.43915 4.00512 2.1164 4.00512ZM18 17H14.0212V11.025C14.0212 9.45775 13.3968 8.39116 12.0317 8.39116C10.9841 8.39116 10.4021 9.10948 10.1376 9.80602C10.0317 10.0563 10.0529 10.4046 10.0529 10.7529V17H6.10582C6.10582 17 6.15873 6.41037 6.10582 5.45263H10.0423V7.25928C10.2751 6.46479 11.5344 5.33291 13.545 5.33291C16.0423 5.33291 18 6.99808 18 10.5679V17Z"/>
												</svg>
											</a>
										</li>
									<?php
								endif;
							?>
							<?php
								if(!empty($contact_information_settings_social_networks_group_instagram)):
										$contact_information_settings_social_networks_group_instagram_target = !empty($contact_information_settings_social_networks_group_instagram['target']) ? $contact_information_settings_social_networks_group_instagram['target'] : '_self';
									?>
										<li>
											<a href="<?php echo $contact_information_settings_social_networks_group_instagram['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_instagram_target; ?>">
												<svg width="18" height="18" viewBox="0 0 18 18" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.5185 0H3.48148C1.55556 0 0 1.55556 0 3.48148V7.15344V14.5185C0 16.4339 1.55556 18 3.48148 18H14.5185C16.4339 18 18 16.4444 18 14.5185V7.15344V3.48148C18 1.55556 16.4339 0 14.5185 0ZM15.5132 2.07407H15.9153V2.46561V5.12169L12.8783 5.13228L12.8677 2.08466L15.5132 2.07407ZM6.43386 7.15344C7.00529 6.34921 7.93651 5.83069 8.99471 5.83069C10.0529 5.83069 10.9947 6.34921 11.5661 7.15344C11.9471 7.67196 12.1693 8.30688 12.1693 9.00529C12.1693 10.7513 10.7513 12.1693 9.00529 12.1693C7.25926 12.1693 5.83069 10.7407 5.83069 8.99471C5.83069 8.30688 6.05291 7.67196 6.43386 7.15344ZM16.2434 14.5185C16.2434 15.4709 15.4709 16.2434 14.5185 16.2434H3.48148C2.5291 16.2434 1.75661 15.4709 1.75661 14.5185V7.15344H4.44444C4.21164 7.72487 4.07407 8.34921 4.07407 8.99471C4.07407 11.7037 6.28571 13.9153 8.99471 13.9153C11.7037 13.9153 13.9153 11.7037 13.9153 8.99471C13.9153 8.33862 13.7884 7.71429 13.5556 7.14286H16.2434V14.5185Z"/>
												</svg>
											</a>
										</li>
									<?php
								endif;
							?>
							<?php 
								if(!empty($contact_information_settings_social_networks_group_google_my_business)):
										$contact_information_settings_social_networks_group_google_my_business_target = !empty($contact_information_settings_social_networks_group_google_my_business['target']) ? $contact_information_settings_social_networks_group_google_my_business['target'] : '_self';
									?>
										<li>
											<a href="<?php echo $contact_information_settings_social_networks_group_google_my_business['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_google_my_business_target; ?>">
												<svg width="17" height="18" viewBox="0 0 17 18" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.67338 7.35982V10.6999H13.4534C13.357 11.5301 12.8369 12.7797 11.6804 13.62C10.948 14.1501 9.9648 14.52 8.67378 14.52C6.38016 14.52 4.43371 12.95 3.73979 10.7802C3.55669 10.2203 3.45056 9.62001 3.45056 9C3.45056 8.37999 3.55669 7.78016 3.73007 7.21984C4.43371 5.05002 6.38016 3.48003 8.67378 3.48003C10.3022 3.48003 11.4008 4.21017 12.0275 4.82009L14.4755 2.34006C12.9714 0.88987 11.0148 0 8.67338 0C5.28116 0 2.35155 2.01976 0.925225 4.96007C0.33744 6.17991 0 7.54981 0 9C0 10.4502 0.33744 11.8201 0.925225 13.0399C2.35155 15.9798 5.28116 18 8.67338 18C11.0152 18 12.9811 17.2001 14.4171 15.8201C16.0553 14.2501 17 11.9403 17 9.20008C17 8.46028 16.9421 7.92014 16.8169 7.36024H8.67338V7.35982Z"/>
												</svg>
											</a>
										</li>
									<?php
								endif;
							?>
							<?php
								if(!empty($contact_information_settings_social_networks_group_yelp)):
										$contact_information_settings_social_networks_group_yelp_target = !empty($contact_information_settings_social_networks_group_yelp['target']) ? $contact_information_settings_social_networks_group_yelp['target'] : '_self';
									?>
										<li>
											<a href="<?php echo $contact_information_settings_social_networks_group_yelp['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_yelp_target; ?>">
												<svg width="14" height="18" viewBox="0 0 14 18" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
													<path d="M0.356395 8.66681C0.0573264 9.13612 -0.0680656 10.6121 0.0361698 11.5906C0.0724384 11.9134 0.132812 12.1828 0.218987 12.3442C0.338334 12.5662 0.539212 12.6995 0.767365 12.7068C0.913914 12.7142 1.00606 12.6891 3.76284 11.82C3.76284 11.82 4.98794 11.4366 4.99398 11.4337C5.2991 11.3566 5.50609 11.0813 5.5257 10.7304C5.54531 10.3692 5.35652 10.0509 5.04234 9.93688C5.04234 9.93688 4.17831 9.59191 4.17676 9.59191C1.21298 8.39423 1.08007 8.34684 0.9305 8.34539C0.700799 8.33817 0.498373 8.45065 0.356395 8.66681ZM6.98485 17.5923C7.03321 17.4561 7.03925 17.3629 7.04677 14.5234C7.04677 14.5234 7.05281 13.2694 7.05429 13.2561C7.0739 12.9482 6.87147 12.6684 6.53916 12.5425C6.19623 12.4137 5.82764 12.4937 5.62072 12.7453C5.62072 12.7453 5.01647 13.4486 5.01344 13.4486C2.93788 15.838 2.8503 15.949 2.80047 16.0896C2.76877 16.1726 2.75816 16.2614 2.76722 16.3502C2.77931 16.4775 2.83821 16.6019 2.93493 16.7188C3.41682 17.2799 5.72496 18.1119 6.46212 17.9875C6.7205 17.9447 6.90627 17.804 6.98485 17.5923ZM11.6692 16.6049C12.3656 16.3325 13.8837 14.4405 13.991 13.7107C14.0287 13.4575 13.9472 13.2384 13.7689 13.0993C13.6526 13.0134 13.5635 12.9793 10.8067 12.0926C10.8067 12.0926 9.59825 11.7018 9.58159 11.6944C9.28857 11.5833 8.9547 11.687 8.73112 11.9579C8.497 12.2362 8.4622 12.6049 8.64952 12.8817L9.1359 13.6575C10.7719 16.2616 10.8972 16.4451 11.0151 16.5355C11.1964 16.676 11.4275 16.6996 11.6692 16.6049ZM10.2447 9.90148C13.3762 9.1583 13.4985 9.11834 13.6208 9.03837C13.8112 8.91252 13.9063 8.7038 13.8897 8.44914C13.8897 8.44177 13.8912 8.43288 13.8897 8.424C13.8097 7.66896 12.4622 5.70889 11.7976 5.39057C11.5619 5.27953 11.3263 5.28697 11.1314 5.41571C11.0106 5.49273 10.9215 5.60962 9.24471 7.85839C9.24471 7.85839 8.48793 8.86953 8.47886 8.87986C8.27946 9.1182 8.27644 9.45869 8.47134 9.75186C8.67377 10.0554 9.01515 10.2019 9.32786 10.1175C9.32786 10.1175 9.31577 10.1397 9.31275 10.1426C9.46674 10.0851 9.74163 10.0184 10.2447 9.90148ZM7.10117 7.36698C7.04677 6.15008 6.67369 0.733153 6.6299 0.482969C6.56643 0.254964 6.38516 0.0936404 6.12539 0.0284754C5.32475 -0.16543 2.26883 0.673913 1.70239 1.24537C1.51957 1.43191 1.45315 1.65991 1.50755 1.8627C1.59668 2.04187 5.38372 7.88064 5.38372 7.88064C5.94264 8.77041 6.40035 8.6312 6.54992 8.58532C6.6978 8.54248 7.15255 8.40326 7.10117 7.36698Z"/>
												</svg>
											</a>
										</li>
									<?php
								endif;
							?>
						</ul>
					</div>
				</div>
				<header id="masthead" class="site-header olly-olly-realtor-theme-header olly-olly-hero-image-container__theme-header">
					<div class="container">
						<div class="olly-olly-realtor-theme-header__logo-container olly-olly-realtor-theme-header__logo-container-legal">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="olly-olly-realtor-theme-header__logo-link olly-olly-hero-image-container__logo-link">
								<?php 
									$custom_logo_id = get_theme_mod( 'custom_logo' );
									$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );		
									$custom_logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', TRUE);
								?>
								<img src="<?php echo $custom_logo_url; ?>" class="olly-olly-realtor-theme-header__logo olly-olly-hero-image-container__logo" alt="<?php echo $custom_logo_alt; ?>">
							</a>				
							<!-- <button class=""></button> -->
							<button class="button button__hamburguer hamburger hamburger--spin" type="button" id="hamburguerMenuButton">
								<span class="hamburger-box">
									<span class="hamburger-inner olly-olly-hero-image-container__hamburger-inner"></span>
								</span>
							</button>
							<a href="tel:<?php echo $contact_information_group_phone_number; ?>" class="olly-olly-realtor-theme-header__cta-link olly-olly-hero-image-container__cta-phone-number-mobile"><h6><?php echo $contact_information_group_phone_number_title; ?><span class="olly-olly-realtor-theme-header__cta-number"><?php echo $contact_information_group_phone_number; ?></span></h6></a>
						</div>
						<nav class="olly-olly-realtor-theme-header__nav-container <?php echo $legal_settings_is_legal_settings_available == 'yes' ? 'olly-olly-realtor-theme-header__nav-container-legal' : ''; ?>">
							<?php
								wp_nav_menu(array(
									'menu' => '',
									'container' => false,
									'container_class' => '',
									'theme_location' => 'main-menu',
									'depth'	=> 0,
									'menu_class' => 'olly-olly-realtor-theme-header__nav-list olly-olly-hero-image-container__nav-list',
								));
							?>
							
							<a href="tel:<?php echo $contact_information_group_phone_number; ?>" class="olly-olly-realtor-theme-header__cta-link olly-olly-realtor-theme-header__cta-link--desktop olly-olly-hero-image-container__cta-link-desktop"><h6><?php echo $contact_information_group_phone_number_title; ?><span class="olly-olly-realtor-theme-header__cta-number"><?php echo $contact_information_group_phone_number; ?></span></h6></a>
									
						</nav>
					</div>	
				</header>
			</div>
			<div class="olly-olly-hero-image-container__body">
				<div class="container">
					<?php
						if(!empty($home_hero_settings_title)):
							?>
								<h1 class="olly-olly-hero-image-container__body-title"><?php echo $home_hero_settings_title; ?></h1>
							<?php
						endif;
					?>
					<?php
						if(!empty($home_hero_settings_link)):
							$home_hero_settings_link_target = $home_hero_settings_link['url'] ? $home_hero_settings_link['url'] : '_self';
							?>
								<a href="<?php echo $home_hero_settings_link['url']; ?>" target="<?php echo $home_hero_settings_link_target; ?>" class="button button__filled olly-olly-hero-image-container__body-button" style="color: <?php echo $secondary_color; ?> !important;"><?php echo $home_hero_settings_link['title']; ?></a>
							<?php
						endif;
					?>
				</div>
			</div>
		</section>
	<?php
		endif;
	?>


