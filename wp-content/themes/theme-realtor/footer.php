<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Olly_Olly_Realtor_Theme
 */

$contact_information_settings_contact_information_group = get_field('contact_information_settings_contact_information_group', 'option');
$contact_information_settings_footer_identity_group = get_field('contact_information_settings_footer_identity_group', 'option');
$contact_information_settings_social_networks_group = get_field('contact_information_settings_social_networks_group', 'option');
$contact_information_settings_disclaimer_text = get_field('contact_information_settings_disclaimer_text', 'option');
$legal_settings_is_legal_settings_available = get_field('legal_settings_is_legal_settings_available', 'option');

// Contact Information Group
if(!empty($contact_information_settings_contact_information_group)):
	$contact_information_group_phone_number_title = $contact_information_settings_contact_information_group['contact_information_group_phone_number_title'];
	$contact_information_group_phone_number = $contact_information_settings_contact_information_group['contact_information_group_phone_number'];
	$contact_information_group_contact_email = $contact_information_settings_contact_information_group['contact_information_group_contact_email'];

	$contact_information_group_phone_number_title_render = !empty($contact_information_group_phone_number_title) ? $contact_information_group_phone_number_title : 'Phone Title';
	$contact_information_group_phone_number_render = !empty($contact_information_group_phone_number) ? $contact_information_group_phone_number : '(000) 000-0000';
	$contact_information_group_contact_email_render = !empty($contact_information_group_contact_email) ? $contact_information_group_contact_email : 'example@example.com';
endif;

// Footer Identity Group
if(!empty($contact_information_settings_footer_identity_group)):
	$contact_information_settings_footer_identity_group_logo = $contact_information_settings_footer_identity_group['contact_information_settings_footer_identity_group_logo'];
	$contact_information_settings_footer_identity_group_tagline = $contact_information_settings_footer_identity_group['contact_information_settings_footer_identity_group_tagline'];
	$contact_information_settings_footer_identity_group_copy = $contact_information_settings_footer_identity_group['contact_information_settings_footer_identity_group_copy'];

	$contact_information_settings_footer_identity_group_logo_render = !empty($contact_information_settings_footer_identity_group_logo['url']) ? $contact_information_settings_footer_identity_group_logo['url'] : get_template_directory_uri() . '/images/default-image.png';
	$contact_information_settings_footer_identity_group_copy_render = !empty($contact_information_settings_footer_identity_group_copy) ? $contact_information_settings_footer_identity_group_copy : 'Your copy here';
endif;

// Social Networks Group
if(!empty($contact_information_settings_social_networks_group)):
	$contact_information_settings_social_networks_group_facebook = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_facebook'];	
	$contact_information_settings_social_networks_group_linkedin = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_linkedin'];
	$contact_information_settings_social_networks_group_instagram = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_instagram'];
	$contact_information_settings_social_networks_group_google_my_business = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_google_my_business'];
	$contact_information_settings_social_networks_group_yelp = $contact_information_settings_social_networks_group['contact_information_settings_social_networks_group_yelp'];	

	$contact_information_settings_social_networks_group_facebook_target = !empty($contact_information_settings_social_networks_group_facebook['target']) ? $contact_information_settings_social_networks_group_facebook['target'] : '_self';
	$contact_information_settings_social_networks_group_linkedin_target = !empty($contact_information_settings_social_networks_group_linkedin['target']) ? $contact_information_settings_social_networks_group_linkedin['target'] : '_self';
	$contact_information_settings_social_networks_group_instagram_target = !empty($contact_information_settings_social_networks_group_instagram['target']) ? $contact_information_settings_social_networks_group_instagram['target'] : '_self';
	$contact_information_settings_social_networks_group_google_my_business_target = !empty($contact_information_settings_social_networks_group_google_my_business['target']) ? $contact_information_settings_social_networks_group_google_my_business['target'] : '_selft'; 
	$contact_information_settings_social_networks_group_yelp_target = !empty($contact_information_settings_social_networks_group_yelp['target']) ? $contact_information_settings_social_networks_group_yelp['target'] : '_self';
endif;


?>

	<footer id="colophon" class="site-footer olly-olly-realtor-theme-footer">
		<div class="container">
			<div class="olly-olly-realtor-theme-footer__logo-container olly-olly-realtor-theme-footer__logo-container-legal">
				<img src="<?php echo $contact_information_settings_footer_identity_group_logo_render; ?>" class="olly-olly-realtor-theme-footer__logo-img olly-olly-realtor-theme-footer__logo-img-legal" alt="<?php echo $contact_information_settings_footer_identity_group_logo['alt']; ?>">
				<?php
					if(!empty($contact_information_settings_footer_identity_group_tagline)):
						?>
							<h6 class="olly-olly-realtor-theme-footer__logo-title"><?php echo $contact_information_settings_footer_identity_group_tagline; ?></h6>
						<?php
					endif;
				?>
			</div>
			<div class="olly-olly-realtor-theme-footer__primary-nav-info-container">
				<?php
					if( ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_badges_reapeter', 'option'))) || ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_licenses_reapeter', 'option'))) || ( $legal_settings_is_legal_settings_available == 'yes' && !empty($contact_information_settings_disclaimer_text) ) ):
						wp_nav_menu(array(
							'menu' => '',
							'container' => false,
							'container_class' => '',
							'theme_location' => 'footer-primary-menu',
							'depth'	=> 0,
							'menu_class' => 'olly-olly-realtor-theme-footer__primary-nav olly-olly-realtor-theme-footer__primary-nav-legal',
						));
					else:
						wp_nav_menu(array(
							'menu' => '',
							'container' => false,
							'container_class' => '',
							'theme_location' => 'footer-primary-menu',
							'depth'	=> 0,
							'menu_class' => 'olly-olly-realtor-theme-footer__primary-nav',
						));
					endif;
				?>

				<div class="olly-olly-realtor-theme-footer__info-container 
					<?php 
						if( ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_badges_reapeter', 'option'))) || ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_licenses_reapeter', 'option')) ) || ( $legal_settings_is_legal_settings_available == 'yes' && !empty($contact_information_settings_disclaimer_text) )):
							echo 'olly-olly-realtor-theme-footer__info-container-legal';
						endif; 
					?>"
				>
					<a href="tel:<?php echo $contact_information_group_phone_number_render; ?>" class="olly-olly-realtor-theme-header__cta-link olly-olly-realtor-theme-footer__phone-number-cta"><h6><?php echo $contact_information_group_phone_number_title_render; ?><span class="olly-olly-realtor-theme-header__cta-number"><?php echo $contact_information_group_phone_number_render; ?></span></h6></a>
					<a href="mailto:<?php echo $contact_information_group_contact_email_render; ?>" class="olly-olly-realtor-theme-footer__email-cta"><?php echo $contact_information_group_contact_email_render; ?></a>
					<ul class="olly-olly-realtor-theme-footer__social-networks-container 
					<?php 
						if( ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_badges_reapeter', 'option'))) || ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_licenses_reapeter', 'option')) ) || ( $legal_settings_is_legal_settings_available == 'yes' && !empty($contact_information_settings_disclaimer_text) ) ):
							echo 'olly-olly-realtor-theme-footer__social-networks-container-legal';
						endif;
					?>"
					>
						<?php
							if(!empty($contact_information_settings_social_networks_group_facebook)):
								?>
									<li>
										<a href="<?php echo $contact_information_settings_social_networks_group_facebook['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_facebook_target; ?>">
											<svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 5.94709H1.93171V4.14815C1.93171 3.3545 1.95366 2.1164 2.55732 1.3545C3.18293 0.550265 4.05 0 5.54268 0C7.97927 0 9 0.338624 9 0.338624L8.52805 3.08995C8.52805 3.08995 7.72683 2.86772 6.96951 2.86772C6.22317 2.86772 5.54268 3.13228 5.54268 3.85185V5.95767H8.61585L8.39634 8.6455H5.54268V18H1.92073V8.6455H0V5.94709Z" fill="#FDFBF3"/>
											</svg>
										</a>
									</li>
								<?php
							endif;
						?>
						<?php
							if(!empty($contact_information_settings_social_networks_group_linkedin)):
								?>
									<li>
										<a href="<?php echo $contact_information_settings_social_networks_group_linkedin['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_linkedin_target; ?>">
											<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M3.95767 17H0.455026V5.45263H3.96825V17H3.95767ZM2.1164 4.00512H2.09524C0.825397 4.00512 0 3.12356 0 2.00256C0 0.859795 0.846561 0 2.13757 0C3.42857 0 4.2328 0.859795 4.25397 2.00256C4.25397 3.12356 3.43915 4.00512 2.1164 4.00512ZM18 17H14.0212V11.025C14.0212 9.45775 13.3968 8.39116 12.0317 8.39116C10.9841 8.39116 10.4021 9.10948 10.1376 9.80602C10.0317 10.0563 10.0529 10.4046 10.0529 10.7529V17H6.10582C6.10582 17 6.15873 6.41037 6.10582 5.45263H10.0423V7.25928C10.2751 6.46479 11.5344 5.33291 13.545 5.33291C16.0423 5.33291 18 6.99808 18 10.5679V17Z" fill="#FDFBF3"/>
											</svg>
										</a>
									</li>
								<?php
							endif;
						?>
						<?php
							if(!empty($contact_information_settings_social_networks_group_instagram)):
								?>
									<li>
										<a href="<?php echo $contact_information_settings_social_networks_group_instagram['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_instagram_target; ?>">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14.5185 0H3.48148C1.55556 0 0 1.55556 0 3.48148V7.15344V14.5185C0 16.4339 1.55556 18 3.48148 18H14.5185C16.4339 18 18 16.4444 18 14.5185V7.15344V3.48148C18 1.55556 16.4339 0 14.5185 0ZM15.5132 2.07407H15.9153V2.46561V5.12169L12.8783 5.13228L12.8677 2.08466L15.5132 2.07407ZM6.43386 7.15344C7.00529 6.34921 7.93651 5.83069 8.99471 5.83069C10.0529 5.83069 10.9947 6.34921 11.5661 7.15344C11.9471 7.67196 12.1693 8.30688 12.1693 9.00529C12.1693 10.7513 10.7513 12.1693 9.00529 12.1693C7.25926 12.1693 5.83069 10.7407 5.83069 8.99471C5.83069 8.30688 6.05291 7.67196 6.43386 7.15344ZM16.2434 14.5185C16.2434 15.4709 15.4709 16.2434 14.5185 16.2434H3.48148C2.5291 16.2434 1.75661 15.4709 1.75661 14.5185V7.15344H4.44444C4.21164 7.72487 4.07407 8.34921 4.07407 8.99471C4.07407 11.7037 6.28571 13.9153 8.99471 13.9153C11.7037 13.9153 13.9153 11.7037 13.9153 8.99471C13.9153 8.33862 13.7884 7.71429 13.5556 7.14286H16.2434V14.5185Z" fill="#FDFBF3"/>
											</svg>
										</a>
									</li>
								<?php
							endif;
						?>
						<?php
							if(!empty($contact_information_settings_social_networks_group_google_my_business)):
								?>
									<li>
										<a href="<?php echo $contact_information_settings_social_networks_group_google_my_business['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_google_my_business_target; ?>">
											<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8.67338 7.35982V10.6999H13.4534C13.357 11.5301 12.8369 12.7797 11.6804 13.62C10.948 14.1501 9.9648 14.52 8.67378 14.52C6.38016 14.52 4.43371 12.95 3.73979 10.7802C3.55669 10.2203 3.45056 9.62001 3.45056 9C3.45056 8.37999 3.55669 7.78016 3.73007 7.21984C4.43371 5.05002 6.38016 3.48003 8.67378 3.48003C10.3022 3.48003 11.4008 4.21017 12.0275 4.82009L14.4755 2.34006C12.9714 0.88987 11.0148 0 8.67338 0C5.28116 0 2.35155 2.01976 0.925225 4.96007C0.33744 6.17991 0 7.54981 0 9C0 10.4502 0.33744 11.8201 0.925225 13.0399C2.35155 15.9798 5.28116 18 8.67338 18C11.0152 18 12.9811 17.2001 14.4171 15.8201C16.0553 14.2501 17 11.9403 17 9.20008C17 8.46028 16.9421 7.92014 16.8169 7.36024H8.67338V7.35982Z" fill="#FDFBF3"/>
											</svg>
										</a>
									</li>
								<?php
							endif; 
						?>
						<?php
							if(!empty($contact_information_settings_social_networks_group_yelp)):
								?>
									<li>
										<a href="<?php echo $contact_information_settings_social_networks_group_yelp['url']; ?>" target="<?php echo $contact_information_settings_social_networks_group_yelp_target; ?>">
											<svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0.356395 8.66681C0.0573264 9.13612 -0.0680656 10.6121 0.0361698 11.5906C0.0724384 11.9134 0.132812 12.1828 0.218987 12.3442C0.338334 12.5662 0.539212 12.6995 0.767365 12.7068C0.913914 12.7142 1.00606 12.6891 3.76284 11.82C3.76284 11.82 4.98794 11.4366 4.99398 11.4337C5.2991 11.3566 5.50609 11.0813 5.5257 10.7304C5.54531 10.3692 5.35652 10.0509 5.04234 9.93688C5.04234 9.93688 4.17831 9.59191 4.17676 9.59191C1.21298 8.39423 1.08007 8.34684 0.9305 8.34539C0.700799 8.33817 0.498373 8.45065 0.356395 8.66681ZM6.98485 17.5923C7.03321 17.4561 7.03925 17.3629 7.04677 14.5234C7.04677 14.5234 7.05281 13.2694 7.05429 13.2561C7.0739 12.9482 6.87147 12.6684 6.53916 12.5425C6.19623 12.4137 5.82764 12.4937 5.62072 12.7453C5.62072 12.7453 5.01647 13.4486 5.01344 13.4486C2.93788 15.838 2.8503 15.949 2.80047 16.0896C2.76877 16.1726 2.75816 16.2614 2.76722 16.3502C2.77931 16.4775 2.83821 16.6019 2.93493 16.7188C3.41682 17.2799 5.72496 18.1119 6.46212 17.9875C6.7205 17.9447 6.90627 17.804 6.98485 17.5923ZM11.6692 16.6049C12.3656 16.3325 13.8837 14.4405 13.991 13.7107C14.0287 13.4575 13.9472 13.2384 13.7689 13.0993C13.6526 13.0134 13.5635 12.9793 10.8067 12.0926C10.8067 12.0926 9.59825 11.7018 9.58159 11.6944C9.28857 11.5833 8.9547 11.687 8.73112 11.9579C8.497 12.2362 8.4622 12.6049 8.64952 12.8817L9.1359 13.6575C10.7719 16.2616 10.8972 16.4451 11.0151 16.5355C11.1964 16.676 11.4275 16.6996 11.6692 16.6049ZM10.2447 9.90148C13.3762 9.1583 13.4985 9.11834 13.6208 9.03837C13.8112 8.91252 13.9063 8.7038 13.8897 8.44914C13.8897 8.44177 13.8912 8.43288 13.8897 8.424C13.8097 7.66896 12.4622 5.70889 11.7976 5.39057C11.5619 5.27953 11.3263 5.28697 11.1314 5.41571C11.0106 5.49273 10.9215 5.60962 9.24471 7.85839C9.24471 7.85839 8.48793 8.86953 8.47886 8.87986C8.27946 9.1182 8.27644 9.45869 8.47134 9.75186C8.67377 10.0554 9.01515 10.2019 9.32786 10.1175C9.32786 10.1175 9.31577 10.1397 9.31275 10.1426C9.46674 10.0851 9.74163 10.0184 10.2447 9.90148ZM7.10117 7.36698C7.04677 6.15008 6.67369 0.733153 6.6299 0.482969C6.56643 0.254964 6.38516 0.0936404 6.12539 0.0284754C5.32475 -0.16543 2.26883 0.673913 1.70239 1.24537C1.51957 1.43191 1.45315 1.65991 1.50755 1.8627C1.59668 2.04187 5.38372 7.88064 5.38372 7.88064C5.94264 8.77041 6.40035 8.6312 6.54992 8.58532C6.6978 8.54248 7.15255 8.40326 7.10117 7.36698Z" fill="#FDFBF3"/>
											</svg>
										</a>
									</li>
								<?php
							endif; 
						?>
					</ul>
				</div>

				<?php
					if($legal_settings_is_legal_settings_available == 'yes'):
						if( !empty(get_field('contact_information_settings_badges_reapeter', 'option')) || !empty(get_field('contact_information_settings_licenses_reapeter', 'option')) ):
							?>
								<div class="olly-olly-realtor-theme-footer__badges-wrapper">
									<div class="olly-olly-realtor-theme-footer__badges-container">
										<?php
											if( have_rows('contact_information_settings_badges_reapeter', 'option') ):
												while( have_rows('contact_information_settings_badges_reapeter', 'option') ) : the_row();
													$badge_image = get_sub_field('contact_information_settings_badges_reapeter_image');
													$badge_link_available = get_sub_field('contact_information_settings_badges_reapeter_is_link_available');
													if($badge_link_available == 'yes'):
														$badge_link = get_sub_field('contact_information_settings_badges_reapeter_link');
														$badge_link_target = $badge_link['target'] ? $badge_link['target'] : '_self'; 
														?>
															<a href="<?php echo $badge_link['url']; ?>" target="<?php echo $badge_link_target; ?>"><img src="<?php echo $badge_image['url']; ?>" class="olly-olly-realtor-theme-footer__badge-img" alt="<?php echo $badge_image['alt']; ?>"></a>
														<?php
													else:
														?>
															<img src="<?php echo $badge_image['url']; ?>" class="olly-olly-realtor-theme-footer__badge-img" alt="<?php echo $badge_image['alt']; ?>">
														<?php
													endif;
												endwhile;
											endif;
										?>
									</div>
									<div class="olly-olly-realtor-theme-footer__licenses-container">
										<?php
											if( have_rows('contact_information_settings_licenses_reapeter', 'option') ):
												while( have_rows('contact_information_settings_licenses_reapeter', 'option') ) : the_row();
													$license_text = get_sub_field('contact_information_settings_licenses_reapeter_text');
													echo $license_text;
												endwhile;
											endif;
										?>
									</div>
								</div>	
							<?php
						endif;
					endif;
				?>

				<?php
					if($legal_settings_is_legal_settings_available == 'yes'):
						if(!empty($contact_information_settings_disclaimer_text)):
							?>
								<div class="olly-olly-realtor-theme-footer__disclaimer-container">
									<?php
										echo $contact_information_settings_disclaimer_text; 
									?>
								</div>		
							<?php
						endif;
					endif;
				?>

			</div>
			<div class="olly-olly-realtor-theme-footer__secondary-nav-copy-container">
				<?php
					if( ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_badges_reapeter', 'option'))) || ($legal_settings_is_legal_settings_available == 'yes' && !empty(get_field('contact_information_settings_licenses_reapeter', 'option'))) || ( $legal_settings_is_legal_settings_available == 'yes' && !empty($contact_information_settings_disclaimer_text) ) ):
						wp_nav_menu(array(
							'menu' => '',
							'container' => false,
							'container_class' => '',
							'theme_location' => 'footer-secondary-menu',
							'depth'	=> 0,
							'menu_class' => 'olly-olly-realtor-theme-footer__secondary-nav olly-olly-realtor-theme-footer__secondary-nav-legal'
						));
					else:
						wp_nav_menu(array(
							'menu' => '',
							'container' => false,
							'container_class' => '',
							'theme_location' => 'footer-secondary-menu',
							'depth'	=> 0,
							'menu_class' => 'olly-olly-realtor-theme-footer__secondary-nav'
						));
					endif;
					
				?>
				<h6 class="olly-olly-realtor-theme-footer__copy"><?php echo $contact_information_settings_footer_identity_group_copy_render; ?></h6>		
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
