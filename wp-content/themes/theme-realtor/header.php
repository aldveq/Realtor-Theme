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

<body <?php body_class(); ?>>
<?php
	if(!empty($google_tag_manager_settings_body_script)):
		echo $google_tag_manager_settings_body_script;
	endif;
?>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'olly-olly-realtor-theme' ); ?></a>

	<header id="masthead" class="site-header olly-olly-realtor-theme-header">
		<div class="container">
			<div class="olly-olly-realtor-theme-header__logo-container olly-olly-realtor-theme-header__logo-container-legal">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="olly-olly-realtor-theme-header__logo-link">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );		
						$custom_logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', TRUE);
					?>
					<img src="<?php echo $custom_logo_url; ?>" class="olly-olly-realtor-theme-header__logo" alt="<?php echo $custom_logo_alt; ?>">
				</a>				
				<!-- <button class=""></button> -->
				<button class="button button__hamburguer hamburger hamburger--spin" type="button" id="hamburguerMenuButton">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<a href="tel:<?php echo $contact_information_group_phone_number; ?>" class="olly-olly-realtor-theme-header__cta-link"><h6><?php echo $contact_information_group_phone_number_title; ?><span class="olly-olly-realtor-theme-header__cta-number"><?php echo $contact_information_group_phone_number; ?></span></h6></a>
			</div>
			<nav class="olly-olly-realtor-theme-header__nav-container <?php echo $legal_settings_is_legal_settings_available == 'yes' ? 'olly-olly-realtor-theme-header__nav-container-legal' : ''; ?>">
				<?php
					wp_nav_menu(array(
						'menu' => '',
						'container' => false,
						'container_class' => '',
						'theme_location' => 'main-menu',
						'depth'	=> 0,
						'menu_class' => 'olly-olly-realtor-theme-header__nav-list',
					));
				?>
				
				<a href="tel:<?php echo $contact_information_group_phone_number; ?>" class="olly-olly-realtor-theme-header__cta-link olly-olly-realtor-theme-header__cta-link--desktop"><h6><?php echo $contact_information_group_phone_number_title; ?><span class="olly-olly-realtor-theme-header__cta-number"><?php echo $contact_information_group_phone_number; ?></span></h6></a>
						
			</nav>
		</div>	
	</header><!-- #masthead -->
