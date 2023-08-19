<?php

function elearning_academy_education_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'elearning_education_color_option' );

    $wp_customize->remove_setting( 'elearning_education_login_button' );
    $wp_customize->remove_control( 'elearning_education_login_button' );

    $wp_customize->remove_setting( 'elearning_education_login_button_link' );
    $wp_customize->remove_control( 'elearning_education_login_button_link' );

    $wp_customize->remove_setting( 'elearning_education_header_teacher' );
    $wp_customize->remove_control( 'elearning_education_header_teacher' );

    $wp_customize->remove_setting( 'elearning_education_header_wishlist_url' );
    $wp_customize->remove_control( 'elearning_education_header_wishlist_url' );

    $wp_customize->remove_setting( 'elearning_education_footer_widget_image' );
    $wp_customize->remove_control( 'elearning_education_footer_widget_image' );
}
add_action( 'customize_register', 'elearning_academy_education_remove_customize_register', 11 );

function elearning_academy_education_customize_register( $wp_customize ) {

    // Services Section
    $wp_customize->add_section( 'elearning_academy_education_category_section' , array(
        'title'      => __( 'Services Section Settings', 'elearning-academy-education' ),
        'priority' => 60,
        'panel' => 'elearning_education_panel_id'
    ) );

    for ($i=1; $i <= 4 ; $i++) {

        $wp_customize->add_setting('elearning_academy_education_services_box_icon'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('elearning_academy_education_services_box_icon'.$i,array(
            'label' => esc_html__('Icon ','elearning-academy-education').$i,
            'description' => esc_html__('Ex: fab fa-500px','elearning-academy-education'),
            'section'   => 'elearning_academy_education_category_section',
            'type'      => 'text'
        ));

        $wp_customize->add_setting('elearning_academy_education_services_box_title'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('elearning_academy_education_services_box_title'.$i,array(
            'label' => esc_html__('Title ','elearning-academy-education').$i,
            'section'   => 'elearning_academy_education_category_section',
            'type'      => 'text'
        ));
    }
}
add_action( 'customize_register', 'elearning_academy_education_customize_register' );
