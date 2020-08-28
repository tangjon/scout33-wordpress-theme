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



    // GALLERY SECTION =====

    $wp_customize->add_section('gallery-section', array(
        'title' => __('Gallery'),
    ));

    $wp_customize->add_setting('gallery-section-settings', array(
        'default' => array()
    ));

   $wp_customize->add_control( new CustomizeImageGalleryControl\Control(
        $wp_customize,
        'gallery_control',
        array(
            'label'    => __( 'Image Gallery Field Label' ),
            'section'  => 'gallery-section',
            'settings' => 'gallery-section-settings',
            'type'     => 'image_gallery',
        )
    ) );


    // NOTICE SECTION =====
    $wp_customize->add_setting('notice_msg_setting', array(
        'capability' => 'edit_theme_options',
        'default' => 'Lorem Ipsum'
    ));

    $wp_customize->add_section('notice_msg_section', array(
        'title' => 'Notice Message',
    ));

    $wp_customize->add_control('notice_msg_control', array(
        'type' => 'textarea',
        'settings' => 'notice_msg_setting',
        'section' => 'notice_msg_section',
        'label' => __('Notice Message Box'),
        'description' => __('This message will display on the front page'),
        'priority' => 29
    ));


    // SPONSOR SECTION =====

    $wp_customize->add_section('sponsor-image', array(
        'title' => __('Sponsor Image'),
    ));

    $wp_customize->add_setting('sponsor_image_setting', array(
        'default' => ''
    ));

    $wp_customize->add_setting('sponsor_image_title_setting', array(
        'default' => ''
    ));

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


    // ANNUAL REPORT =====
    $wp_customize->add_section('annual_report_section', array(
        'title'             => __('Annual Report', 'name-theme'),
        'priority'          => 10000,
    ));

    $wp_customize->add_setting('annual_report_setting', array(
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'customizer_setting_pdf', array(
        'label'             => __('PDF Upload', 'name-theme'),
        'section'           => 'annual_report_section',
        'settings'          => 'annual_report_setting',
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
