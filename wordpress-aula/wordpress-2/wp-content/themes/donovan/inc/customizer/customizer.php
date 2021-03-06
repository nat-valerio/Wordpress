<?php
/**
 * Implement theme options in the Customizer
 *
 * @package Donovan
 */

// Load Sanitize Functions.
require( get_template_directory() . '/inc/customizer/sanitize-functions.php' );

// Load Custom Controls.
require( get_template_directory() . '/inc/customizer/controls/headline-control.php' );
require( get_template_directory() . '/inc/customizer/controls/links-control.php' );
require( get_template_directory() . '/inc/customizer/controls/plugin-control.php' );
require( get_template_directory() . '/inc/customizer/controls/upgrade-control.php' );

// Load Customizer Sections.
require( get_template_directory() . '/inc/customizer/sections/customizer-layout.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-blog.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-post.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-info.php' );

/**
 * Registers Theme Options panel and sets up some WordPress core settings
 *
 * @param object $wp_customize / Customizer Object.
 */
function donovan_customize_register_options( $wp_customize ) {

	// Add Theme Options Panel.
	$wp_customize->add_panel( 'donovan_options_panel', array(
		'priority'       => 180,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Theme Options', 'donovan' ),
	) );

	// Change default background section.
	$wp_customize->get_control( 'background_color' )->section = 'background_image';
	$wp_customize->get_section( 'background_image' )->title   = esc_html__( 'Background', 'donovan' );

	// Add postMessage support for site title and description.
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	// Add selective refresh for site title and description.
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector'        => '.site-title a',
		'render_callback' => 'donovan_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector'        => '.site-description',
		'render_callback' => 'donovan_customize_partial_blogdescription',
	) );

	// Add Display Site Title Setting.
	$wp_customize->add_setting( 'donovan_theme_options[site_title]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'donovan_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'donovan_theme_options[site_title]', array(
		'label'    => esc_html__( 'Display Site Title', 'donovan' ),
		'section'  => 'title_tagline',
		'settings' => 'donovan_theme_options[site_title]',
		'type'     => 'checkbox',
		'priority' => 10,
	) );

	// Add Display Tagline Setting.
	$wp_customize->add_setting( 'donovan_theme_options[site_description]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'donovan_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'donovan_theme_options[site_description]', array(
		'label'    => esc_html__( 'Display Tagline', 'donovan' ),
		'section'  => 'title_tagline',
		'settings' => 'donovan_theme_options[site_description]',
		'type'     => 'checkbox',
		'priority' => 11,
	) );
}
add_action( 'customize_register', 'donovan_customize_register_options' );


/**
 * Render the site title for the selective refresh partial.
 */
function donovan_customize_partial_blogname() {
	bloginfo( 'name' );
}


/**
 * Render the site tagline for the selective refresh partial.
 */
function donovan_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


/**
 * Embed JS file to make Theme Customizer preview reload changes asynchronously.
 */
function donovan_customize_preview_js() {
	wp_enqueue_script( 'donovan-customize-preview', get_template_directory_uri() . '/assets/js/customize-preview.js', array( 'customize-preview' ), '20180609', true );
}
add_action( 'customize_preview_init', 'donovan_customize_preview_js' );


/**
 * Embed JS for Customizer Controls.
 */
function donovan_customizer_controls_js() {
	wp_enqueue_script( 'donovan-customizer-controls', get_template_directory_uri() . '/assets/js/customizer-controls.js', array(), '20180609', true );
}
add_action( 'customize_controls_enqueue_scripts', 'donovan_customizer_controls_js' );


/**
 * Embed CSS styles Customizer Controls.
 */
function donovan_customizer_controls_css() {
	wp_enqueue_style( 'donovan-customizer-controls', get_template_directory_uri() . '/assets/css/customizer-controls.css', array(), '20180609' );
}
add_action( 'customize_controls_print_styles', 'donovan_customizer_controls_css' );
