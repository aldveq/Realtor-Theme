<?php
/**
 * ACF Option Page Registry
 *
 *
 * @package Olly_Olly_Realtor_Theme
 */
function register_acf_options_page() {
    if( function_exists('acf_add_options_page') ) {
        
        acf_add_options_page(array(
            'page_title'    => 'Contact Form Content',
            'menu_title'    => 'Contact Form Content',
            'menu_slug'     => 'contact-form-content',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-forms',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Google Tag Manager Settings',
            'menu_title'    => 'Google Tag Manager Settings',
            'menu_slug'     => 'google-tag-manager-settings',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-google',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Neighborhoods Settings',
            'menu_title'    => 'Neighborhoods Settings',
            'menu_slug'     => 'neighborhoods-options',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-admin-multisite',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Featured Services',
            'menu_title'    => 'Featured Services',
            'menu_slug'     => 'featured-services',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-admin-multisite',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Brand Logo, Contact Information & Footer Settings',
            'menu_title'    => 'Brand Logo, Contact Information & Footer Settings',
            'menu_slug'     => 'contact-info-footer-options',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-admin-generic',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Location Settings',
            'menu_title'    => 'Location Settings',
            'menu_slug'     => 'location-options',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-location',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Third Party Source Keys',
            'menu_title'    => 'Third Party Source Keys',
            'menu_slug'     => 'third-party-source-keys',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-admin-network',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Color Palette Settings',
            'menu_title'    => 'Color Palette Settings',
            'menu_slug'     => 'color-palette-settings',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-color-picker',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Badges Settings',
            'menu_title'    => 'Badges Settings',
            'menu_slug'     => 'badges-settings',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-awards',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Legal Settings',
            'menu_title'    => 'Legal Settings',
            'menu_slug'     => 'legal-settings',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-media-document',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Home Hero Settings',
            'menu_title'    => 'Home Hero Settings',
            'menu_slug'     => 'home-hero-settings',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-cover-image',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));

        acf_add_options_page(array(
            'page_title'    => 'Blog Page Settings',
            'menu_title'    => 'Blog Page Settings',
            'menu_slug'     => 'blog-page-settings',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-welcome-write-blog',
            'redirect'      => false,
            'parent_slug' => 'contact-form-content',
        ));
    }
}
add_action('acf/init', 'register_acf_options_page');