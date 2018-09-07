<?php
add_action( 'customize_register', 'cd_customizer_settings' ); 

function cd_customizer_settings( $wp_customize ) {
    // SECTION TEST
    $wp_customize->add_section( 'test' , array(
        'title'      => __( 'Test', 'dev01' ),
        'priority'   => 161,
    ) );
        // Color
       $wp_customize->add_setting( 'background_color' , array(
            'default'     => '#43C6E4',
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
            'label'        => 'Background Color',
            'section'    => 'test',
            'settings'   => 'background_color',
        ) ) );

        $wp_customize->add_setting( 'background_color2' , array(
            'default'     => '#43C6E4',
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color2', array(
            'label'        => 'Background Color2',
            'section'    => 'test',
            'settings'   => 'background_color2',
        ) ) );


        // Data    
        $wp_customize->add_setting('custom[text_test]', array(
            'default'        => 'value_xyz',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
     
        ));

        $wp_customize->add_control( new WP_Customize_Control(  $wp_customize, 'custom_theme_css1', array(
            'label' => __( 'Custom Theme CSS' ),
            'type' => 'text',
            'section' => 'test',
            'settings' => 'custom[text_test]'
          ) ) );

      /*  $wp_customize->add_control( 'input', array(
            'type' => 'date',
            'priority' => 10, // Within the section.
            'section' => 'test', // Required, core or custom.
            'label' => __( 'Date' ),
            'description' => __( 'This is a date control with a red border.' ),
            'input_attrs' => array(
                'class' => 'my-custom-class-for-js',
                'style' => 'border: 1px solid #900',
                'placeholder' => __( 'mm/dd/yyyy' ),
            ),
            'active_callback' => 'is_front_page',
            ) );
        */


}   
//add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
             h1 { color: #<?php echo get_theme_mod('background_color', '#43C6E4'); ?>; }
         </style>
    <?php
}

?>