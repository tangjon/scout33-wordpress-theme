<?php
/**
 * Sample implementation of the Custom Header feature
 *
 *
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package tangyjon
 */

/**
 * Custom notice message.
 *
 * @uses tangyjon_header_style()
 */

function scout33_notice_msg(){

}

add_action( 'wp_head', 'scout33_notice_msg' );
