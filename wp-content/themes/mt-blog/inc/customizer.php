<?php

function mt_customizer( $wp_customize ){

    // Volunteers
    $wp_customize   ->  add_section( 'sec_volunteers', array(
        'title'             =>  'Volunteers',
        'description'       =>  'Modify the number of volunteers here'
    )); 

    $wp_customize   ->  add_setting( 'set_volunteers', array(
        'type'              =>  'theme_mod',
        'default'           =>  50,
        'sanitize_callback' =>  'absint'
    ));

    $wp_customize   ->  add_control( 'ctrl_volunteers', array(
        'label'             =>  'Volunteers Information',
        'description'       =>  'Please insert the <b>number</b> of volunteers (<b>NOTE:</b> if you insert 50, it will be shown as 50+)',
        'section'           =>  'sec_volunteers',
        'settings'          =>  'set_volunteers',
        'type'              =>  'text'
    ));



    // Copyright
    $wp_customize   ->  add_section( 'sec_copyright', array(
        'title'             =>  'Copyright',
        'description'       =>  'Modify your copyright here'
    ));  

    $wp_customize   ->  add_setting( 'set_copyright', array(
        'type'              =>  'theme_mod',
        'default'           =>  '© 2022 | ALL RIGHTS RESERVED',
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_copyright', array(
        'label'             =>  'Copyright Information',
        'description'       =>  'Please, type your copyright here',
        'section'           =>  'sec_copyright',
        'settings'          =>  'set_copyright',
        'type'              =>  'text'
    ));


    // Map
    $wp_customize   ->  add_section( 'sec_map', array(
        'title'             =>  'Map',
        'description'       =>  'Map section'
    ));

    // MAP SHORTCODE
    $wp_customize   ->  add_setting( 'set_map_shortcode', array(
        'type'              =>  'theme_mod',
        'default'           =>  '',
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_map_shortcode', array(
        'label'             =>  'Map information',
        'description'       =>  'Please enter the <b>shortcode</b> of the map plugin and please <b>REMOVE</b> quotation marks around the number, example: <b>[wpgmza id=1]</b> (It only works with <b>WP Google Maps</b> plugin)',
        'section'           =>  'sec_map',
        'settings'          =>  'set_map_shortcode',
        'type'              =>  'text'

    ));



    // Contact
    $wp_customize   ->  add_section( 'sec_contact', array(
        'title'             =>  'Contact Info',
        'description'       =>  'Modify your contact information'
    ));  

    // Contact - Phone
    $wp_customize   ->  add_setting( 'set_contact_phone', array(
        'type'              =>  'theme_mod',
        'default'           =>  "+351",
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_contact_phone', array(
        'label'             =>  'Phone Number',
        'description'       =>  'Please insert your Phone/WhatsApp number (<b>Example</b>: +351 123 456 789 <b>only empty spaces, no hyphens!</b>)',
        'section'           =>  'sec_contact',
        'settings'          =>  'set_contact_phone',
        'type'              =>  'text'
    ));

    // Contact - Email
    $wp_customize   ->  add_setting( 'set_contact_email', array(
        'type'              =>  'theme_mod',
        'default'           =>  "example@example.com",
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_contact_email', array(
        'label'             =>  'Your E-mail',
        'description'       =>  'Please insert your e-mail',
        'section'           =>  'sec_contact',
        'settings'          =>  'set_contact_email',
        'type'              =>  'text'
    ));

    // Contact - Website
    $wp_customize   ->  add_setting( 'set_contact_website', array(
        'type'              =>  'theme_mod',
        'default'           =>  "www.example.com",
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_contact_website', array(
        'label'             =>  'Your Website',
        'description'       =>  'Please insert your website address',
        'section'           =>  'sec_contact',
        'settings'          =>  'set_contact_website',
        'type'              =>  'text'
    ));

    // Contact - Opportunity
    $wp_customize   ->  add_setting( 'set_contact_opportunity', array(
        'type'              =>  'theme_mod',
        'default'           =>  "https://www.example.com/opportunity",
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_contact_opportunity', array(
        'label'             =>  'More - Opportunity',
        'description'       =>  'If you are offering a new opportunities, please enter your link here.',
        'section'           =>  'sec_contact',
        'settings'          =>  'set_contact_opportunity',
        'type'              =>  'text'
    ));


    // Social Media
    $wp_customize   ->  add_section( 'sec_socialmedia', array(
        'title'             =>  'Social Media',
        'description'       =>  'Modify your Social Media accounts'
    ));  

    // Social Media - Facebook
    $wp_customize   ->  add_setting( 'set_socialmedia_fb', array(
        'type'              =>  'theme_mod',
        'default'           =>  "https://www.facebook.com/",
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_socialmedia_fb', array(
        'label'             =>  'Facebook',
        'description'       =>  'Please insert your Facebook account link (<b>https://www.facebook.com/example</b>)',
        'section'           =>  'sec_socialmedia',
        'settings'          =>  'set_socialmedia_fb',
        'type'              =>  'text'
    ));

    // Social Media - Instagram
    $wp_customize   ->  add_setting( 'set_socialmedia_ig', array(
        'type'              =>  'theme_mod',
        'default'           =>  "https://www.instagram.com/",
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_socialmedia_ig', array(
        'label'             =>  'Instagram',
        'description'       =>  'Please insert your Instagram account link (<b>https://www.instagram.com/example</b>)',
        'section'           =>  'sec_socialmedia',
        'settings'          =>  'set_socialmedia_ig',
        'type'              =>  'text'
    ));

    // socialmedia - YouTube
    $wp_customize   ->  add_setting( 'set_socialmedia_youtube', array(
        'type'              =>  'theme_mod',
        'default'           =>  "https://www.youtube.com/user/",
        'sanitize_callback' =>  'esc_attr'
    ));

    $wp_customize   ->  add_control( 'ctrl_socialmedia_youtube', array(
        'label'             =>  'YouTube',
        'description'       =>  'Please insert your YouTube account link (<b>https://www.youtube.com/user/example</b>)',
        'section'           =>  'sec_socialmedia',
        'settings'          =>  'set_socialmedia_youtube',
        'type'              =>  'text'
    ));
}

add_action( 'customize_register', 'mt_customizer' );