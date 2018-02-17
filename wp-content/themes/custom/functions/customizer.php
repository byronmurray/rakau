<?php

function mytheme_customize_register( $wp_customize ) {

  /*-----------------------------------------------------------------------*/
  /*                   HOME PAGE CALL TO ACTION*/
  /*-----------------------------------------------------------------------*/

    /*Add cover page section*/ 
    $wp_customize->add_section( 'featured_content' , array(
      'title'      => __( 'Cover Page', 'cover-section' ),
      'priority'   => 30,
    ) );

    /*----------------------------------------------------------------------*/

    /*add settings image for Background*/
    $wp_customize->add_setting( 'cover-image' , array(
      'default'   => get_template_directory_uri() .  '/images/cover-bg-1.jpg',
      'type'    => 'theme_mod',
    ) );
   
    /*Add image controls*/
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cover-image', array(
      'label' => __( 'Cover background image. For best results upload an image greater than 1900x1000 pixels', 'cover-section' ),
      'section' => 'featured_content',
      'mime_type' => 'image',
    ) ) );
 
    /*add settings for mission box*/
    $wp_customize->add_setting( 'brand-name' , array(
      'default'     => 'Mission',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('brand-name', array(
      'label'        => __( 'Website Title', 'cover-section' ),
      'section'    => 'featured_content',
      'type'   => 'text',
    ) );

    /*add settings for text box*/
    $wp_customize->add_setting( 'brand-tagline' , array(
      'default'     => 'Our College motto is “Through Faith and Love”. This reflects our Lasallian philosophy which is built on the four pillars of Faith, Compassion, Prayer and Action.

	     To develop lifelong learners with a commitment to excellence, and a desire to contribute to society and the church’s mission.',
      'transport'   => 'refresh',
    ) );
   
    /*Add textarea controls*/
    $wp_customize->add_control('brand-tagline', array(
      'label'        => __( 'Mission Statement', 'cover-section' ),
      'section'    => 'featured_content',
      'type'   => 'textarea',
    ) );
 
   
    /*add settings for call to action button 1*/
    $wp_customize->add_setting( 'main-call-link' , array(
      'default'     =>  get_bloginfo( 'url' ),
      'transport'   => 'refresh',
  ) );

    /*Add link controls*/
    $wp_customize->add_control('main-call-link', array(
    'label'        => __( 'Main call to action link', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
  ) );


    /*add settings for text box*/
    $wp_customize->add_setting( 'main-call-text' , array(
      'default'     => 'Heading',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('main-call-text', array(
    'label'        => __( 'Main call to action text', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
    ) );



      /*add settings for call to action button 2*/
    $wp_customize->add_setting( 'secondary-call-link' , array(
      'default'     =>  get_bloginfo( 'url' ),
      'transport'   => 'refresh',
  ) );

    /*Add link controls*/
    $wp_customize->add_control('secondary-call-link', array(
    'label'        => __( 'Secondary call to action link', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
  ) );


    /*add settings for text box*/
    $wp_customize->add_setting( 'secondary-call-text' , array(
      'default'     => 'Heading',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('secondary-call-text', array(
    'label'        => __( 'Secondary call to action text', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
    ) );

    /* ------------------------------------------------------------------------*/


    /*CONTACT PAGE*/ 
    $wp_customize->add_section( 'contact_details' , array(
      'title'      => __( 'Contact Details', 'contact_details' ),
      'priority'   => 30,
    ) );


    /*add settings for email box*/
    $wp_customize->add_setting( 'email' , array(
      'default'     => 'hello@example.co.nz',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('email', array(
      'label'        => __( 'Email', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for phone box*/
    $wp_customize->add_setting( 'phone' , array(
      'default'     => '07 3462 760',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('phone', array(
      'label'        => __( 'Phone', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for street box*/
    $wp_customize->add_setting( 'street' , array(
      'default'     => '1304 Ranolf Street',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('street', array(
      'label'        => __( 'Street', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for city box*/
    $wp_customize->add_setting( 'city' , array(
      'default'     => 'Rotorua',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('city', array(
      'label'        => __( 'City', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for post box*/
    $wp_customize->add_setting( 'post' , array(
      'default'     => '3010',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('post', array(
      'label'        => __( 'Post Code', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for country box*/
    $wp_customize->add_setting( 'country' , array(
      'default'     => 'New Zealand',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('country', array(
      'label'        => __( 'Country', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*Social media*/

    /*add settings for Facebook box*/
    $wp_customize->add_setting( 'facebook' , array(
      'default'     => 'https://www.facebook.com/DubzzDigitalMarketing/',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('facebook', array(
      'label'        => __( 'Facebook', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for Twitter box*/
    $wp_customize->add_setting( 'twitter' , array(
      'default'     => 'https://twitter.com/dubzzdmarketing',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('twitter', array(
      'label'        => __( 'Twitter', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for Google+ box*/
    $wp_customize->add_setting( 'google' , array(
      'default'     => 'https://plus.google.com/u/0/b/115246935560925901449/+DubzzCoNz',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('google', array(
      'label'        => __( 'Google', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for Instagram box*/
    $wp_customize->add_setting( 'instagram' , array(
      'default'     => 'https://www.instagram.com/dubzzdigital/',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('instagram', array(
      'label'        => __( 'Instagram', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for pinterest box*/
    $wp_customize->add_setting( 'pinterest' , array(
      'default'     => 'https://nz.pinterest.com/dubzzdmarketing/',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('pinterest', array(
      'label'        => __( 'Pinterest', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

    /*add settings for directions box*/
    $wp_customize->add_setting( 'directions' , array(
      'default'     => 'https://www.google.co.nz/maps/place/Dubzz+Digital+Marketing/@-38.1396099,176.2451556,17z/data=!3m1!4b1!4m5!3m4!1s0x6d6c276e405e6af9:0xe5421c618ee14c67!8m2!3d-38.1396099!4d176.2473443',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('directions', array(
      'label'        => __( 'directions', 'contact_details' ),
      'section'    => 'contact_details',
      'type'   => 'text',
    ) );

}


add_action( 'customize_register', 'mytheme_customize_register' );