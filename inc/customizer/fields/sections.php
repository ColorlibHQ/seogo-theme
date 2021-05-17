<?php 
/**
 * @Packge     : Seogo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'seogo_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'seogo' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'seogo_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'seogo_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'seogo_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'seogo_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'seogo_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'seogo_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'seogo_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'seogo_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'seogo' ),
            'panel'    => 'seogo_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>