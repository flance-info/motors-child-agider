<?php
    define('STM_MOTORS_CHILD_VERSION', time());

    add_action( 'wp_enqueue_scripts', 'stm_enqueue_parent_styles', 99 );

    function stm_enqueue_parent_styles() {
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('stm-theme-style'), STM_MOTORS_CHILD_VERSION );
    }

	add_action( 'after_setup_theme', 'custom_listing_image_size', 99 );
	function custom_listing_image_size() {
	// Example: If the image size name is 'listings-thumb'
	remove_image_size( 'stm-img-350-205' );
	add_image_size( 'stm-img-350-205', 400, 266, true ); // 3:2 aspect ratio with cropping
	}


	add_action( 'after_setup_theme', 'custom_listing_image_size2', 99 );
	function custom_listing_image_size2() {
	// Example: If the image size name is 'listings-thumb'
	remove_image_size( 'stm-img-255-135' );
	add_image_size( 'stm-img-255-135', 400, 266, true ); // 3:2 aspect ratio with cropping
	}

	add_action( 'after_setup_theme', 'custom_listing_image_size3', 99 );
	function custom_listing_image_size3() {
	// Example: If the image size name is 'listings-thumb'
	remove_image_size( 'stm-img-796-466' );
	add_image_size( 'stm-img-796-466', 798, 531, true ); // 3:2 aspect ratio with cropping
	}

	

//    require_once get_stylesheet_directory().'/inc/user_settings.php';