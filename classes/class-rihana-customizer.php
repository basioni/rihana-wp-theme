<?php

class Rihana_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->typography_callout_section( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_number($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    /* Author Section */
    private function typography_callout_section( $wp_customize ) {

         // New panel for "Header".
        $wp_customize->add_section('rihana-header-section', array(
            'title' => 'Header',
            'priority' => 21,
            'description' => __('Website Header Settings', 'rihana'),
        ));
         $wp_customize->add_setting('rihana-header-cart-display', array(
            'default' => 'Yes',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-header-cart-control', array(
            'label' => 'Display cart icon on header?',
            'section' => 'rihana-header-section',
            'settings' => 'rihana-header-cart-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

         $wp_customize->add_setting('rihana-header-callout-text', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-header-callout-control', array(
            'label' => 'Body Text Color',
            'section' => 'rihana-header-section',
            'settings' => 'rihana-header-callout-text',
            'type' => 'text'
        )));

		// New panel for "Typography".
        $wp_customize->add_section('rihana-typography-section', array(
            'title' => 'Typography',
            'priority' => 22,
            'description' => __('The typography styles section', 'rihana'),
        ));


       // Add Headings Font-Family Setting
        $wp_customize->add_setting('rihana-typography-headings-fontfamily', array(
            'default' => '"Cabin Condensed", sans-serif',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-typography-headings-fontfamily', array(
            'label' => 'Headings Font-Family',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-headings-fontfamily',
            'type' => 'text'
        )));


       // Add Text Font-Family Setting
        $wp_customize->add_setting('rihana-typography-body-fontfamily', array(
            'default' => '"Lato", sans-serif',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-typography-body-fontfamily', array(
            'label' => 'Body Text Font-Family:',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-body-fontfamily',
            'type' => 'text'
        )));


       // Add Body Size Setting
        $wp_customize->add_setting('rihana-typography-body-size', array(
            'default' => '14',
            'sanitize_callback' => array( $this, 'sanitize_custom_number' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-body-text-size-control', array(
            'label' => 'Body Text Size:',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-body-size',
            'type' => 'number'
        )));

        // Add H1 Size Setting
        $wp_customize->add_setting('rihana-typography-hone-size', array(
            'default' => '60',
            'sanitize_callback' => array( $this, 'sanitize_custom_number' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-hone-text-size-control', array(
            'label' => 'H1',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-hone-size',
            'type' => 'number'
        )));

        // Add H2 Size Setting
        $wp_customize->add_setting('rihana-typography-htwo-size', array(
            'default' => '52',
            'sanitize_callback' => array( $this, 'sanitize_custom_number' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-htwo-text-size-control', array(
            'label' => 'H2',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-htwo-size',
            'type' => 'number'
        )));

        // Add H3 Size Setting
        $wp_customize->add_setting('rihana-typography-hthree-size', array(
            'default' => '48',
            'sanitize_callback' => array( $this, 'sanitize_custom_number' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-hthree-text-size-control', array(
            'label' => 'H3',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-hthree-size',
            'type' => 'number'
        )));

        // Add H4 Size Setting
        $wp_customize->add_setting('rihana-typography-hfour-size', array(
            'default' => '40',
            'sanitize_callback' => array( $this, 'sanitize_custom_number' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-hfour-text-size-control', array(
            'label' => 'H4',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-hfour-size',
            'type' => 'number'
        )));

        // Add H5 Size Setting
        $wp_customize->add_setting('rihana-typography-hfive-size', array(
            'default' => '32',
            'sanitize_callback' => array( $this, 'sanitize_custom_number' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-hfive-text-size-control', array(
            'label' => 'H5',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-hfive-size',
            'type' => 'number'
        )));

        // Add H6 Size Setting
        $wp_customize->add_setting('rihana-typography-hsix-size', array(
            'default' => '26',
            'sanitize_callback' => array( $this, 'sanitize_custom_number' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'rihana-hsix-text-size-control', array(
            'label' => 'H6',
            'section' => 'rihana-typography-section',
            'settings' => 'rihana-typography-hsix-size',
            'type' => 'number'
        )));

        // New panel for "Colors".
        $wp_customize->add_section('rihana-colors-section', array(
            'title' => 'Colors',
            'priority' => 23,
            'description' => __('The website colors section.', 'rihana'),
        ));

         $wp_customize->add_setting('rihana-main-color', array(
            'default' => '#EF7910',
            'transport' => 'refresh',
            'sanitize_callback' => array( $this, 'sanitize_hex_color' )
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rihana-main-colors-control', array(
            'label' => 'Main Color',
            'section' => 'rihana-colors-section',
            'settings' => 'rihana-main-color',
        )));

    }
}