<?php
/**
 * tangyjon Theme Customizer
 *
 * @package tangyjon
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tangyjon_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    // $wp_customize->add_setting('notice_msg', array(
    // 	'default' => 'nothing to see here',
    // 	'transport' => 'refresh'
    // ));
    $wp_customize->add_setting('scout33_notice_msg_setting', array(
        'capability' => 'edit_theme_options',
        'default' => 'Lorem Ipsum'
    ));

    // NOTICE SECTION
    $wp_customize->add_section('notice_msg_section', array(
        'title' => 'Notice Message',
        'prority' => 1000
    ));

    $wp_customize->add_control('scout33_notice_msg_setting', array(
        'type' => 'textarea',
        'section' => 'notice_msg_section', // Add a default or your own section
        'label' => __('Notice Message Box'),
        'description' => __('This message will display on the front page'),
    ));


    // SPONSOR SECTION

    // Add Section
    $wp_customize->add_section('sponsor-image', array(
        'title' => __('Sponsor Image'),
        'priority' => 900,
    ));


    // Add settings
    $wp_customize->add_setting('sponsor_image_setting', array(
        'default' => ''
    ));

    $wp_customize->add_setting('sponsor_image_title_setting', array(
        'default' => ''
    ));

    // Add Controls

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'sponsor_image_title_setting',
            array(
                'label' => __('Sponsor Section Title'),
                'section' => 'sponsor-image',
                'settings' => 'sponsor_image_title_setting',
                'type' => 'text',
            )
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sponsor_image_setting', array(
        'label' => __('Sponsor Image', 'name-theme'),
        'section' => 'sponsor-image',
        'settings' => 'sponsor_image_setting',
    )));


    // Remove Existing Exisitng Custimizer Sections
    //=============================================================
    // Remove header image and widgets option from theme customizer
    //=============================================================
    $wp_customize->remove_control("header_image");
    $wp_customize->remove_panel("widgets");

    //=============================================================
    // Remove Colors, Background image, and Static front page
    // option from theme customizer
    //=============================================================
    $wp_customize->remove_section("colors");
    $wp_customize->remove_section("background_image");
    $wp_customize->remove_section("static_front_page");
    $wp_customize->remove_section("custom_css");


}

add_action('customize_register', 'tangyjon_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tangyjon_customize_preview_js()
{
    wp_enqueue_script('tangyjon_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'tangyjon_customize_preview_js');
