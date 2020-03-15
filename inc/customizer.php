<?php
/**
*  cherki theme Customizer
*
*  @package Cherki shop
*/
 
function cherki_customizer( $wp_customize ){

     // start copyright section -------------------------------------------------------------------------//
	 $wp_customize->add_section(
       'sec_copyright' , array(
          'title'        => 'Copyright Settings',
          'description'  => 'Copyright Section'
       )
	 );

				 // Field 1 Copyright Text Box
				 $wp_customize->add_setting(
			        'set_copyright'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'sanitize_text_field'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_copyright' , array(
			             'label'        => 'Copyright',
			             'description'  => 'Please add your copyright information here',
			             'section'      =>  'sec_copyright',
			             'type'         =>  'textarea'
			        )
				 );
	// end copyright section -------------------------------------------------------------------------//	
	


	// start sliders section --------------------------------------------------------------------------//	
      $wp_customize->add_section(
       'sec_slider' , array(
          'title'        => 'Slider Settings',
          'description'  => 'Slider Section'
       )
	 );


          // Field 1 slider 1 Text number Box 1 *************************************//
				 $wp_customize->add_setting(
			        'set_slider_page1'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'absint'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_page1' , array(
			             'label'        => 'Set slider page 1',
			             'description'  => 'Set slider page 1',
			             'section'      =>  'sec_slider',
			             'type'         =>  'dropdown-pages'
			        )
				 );
			//***********************************************************************//

		  // Field 2 slider button text  ******************************************//
				 $wp_customize->add_setting(
			        'set_slider_button_text1'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'sanitize_text_field'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_button_text1' , array(
			             'label'        => 'Button text for page 1',
			             'description'  => 'Button text for page 1',
			             'section'      =>  'sec_slider',
			             'type'         =>  'text'
			        )
				 );
			//**********************************************************************************//

                 // Field 3 slider button url  ******************************************//
				 $wp_customize->add_setting(
			        'set_slider_button_url1'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'esc_url_raw'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_button_url1' , array(
			             'label'        => 'URL for page 1',
			             'description'  => 'URL for page 1',
			             'section'      =>  'sec_slider',
			             'type'         =>  'url'
			        )
				 );
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//	
  // Field 1 slider 2 Text number Box 2 *************************************//
				 $wp_customize->add_setting(
			        'set_slider_page2'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'absint'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_page2' , array(
			             'label'        => 'Set slider page 2',
			             'description'  => 'Set slider page 2',
			             'section'      =>  'sec_slider',
			             'type'         =>  'dropdown-pages'
			        )
				 );
			//***********************************************************************//

		  // Field 2 slider button text  ******************************************//
				 $wp_customize->add_setting(
			        'set_slider_button_text2'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'sanitize_text_field'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_button_text2' , array(
			             'label'        => 'Button text for page 2',
			             'description'  => 'Button text for page 2',
			             'section'      =>  'sec_slider',
			             'type'         =>  'text'
			        )
				 );
			//**********************************************************************************//

                 // Field 3 slider button url  ******************************************//
				 $wp_customize->add_setting(
			        'set_slider_button_url2'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'esc_url_raw'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_button_url2' , array(
			             'label'        => 'URL for page 2',
			             'description'  => 'URL for page 2',
			             'section'      =>  'sec_slider',
			             'type'         =>  'url'
			        )
				 );

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//

      // Field 1 slider 3 Text number Box 1 *************************************//
				 $wp_customize->add_setting(
			        'set_slider_page3'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'absint'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_page3' , array(
			             'label'        => 'Set slider page 3',
			             'description'  => 'Set slider page 3',
			             'section'      =>  'sec_slider',
			             'type'         =>  'dropdown-pages'
			        )
				 );
			//***********************************************************************//

		  // Field 2 slider button text  ******************************************//
				 $wp_customize->add_setting(
			        'set_slider_button_text3'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'sanitize_text_field'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_button_text3' , array(
			             'label'        => 'Button text for page 3',
			             'description'  => 'Button text for page 3',
			             'section'      =>  'sec_slider',
			             'type'         =>  'text'
			        )
				 );
			//**********************************************************************************//

                 // Field 3 slider button url  ******************************************//
				 $wp_customize->add_setting(
			        'set_slider_button_url3'  , array(
			                 'type'     		  => 'theme_mod',
			                 'default'  		  => '',
			                 'sanitize_callback'  => 'esc_url_raw'
			        )
				 );

				 // add controle
				 $wp_customize->add_control(
			           'set_slider_button_url3' , array(
			             'label'        => 'URL for page 3',
			             'description'  => 'URL for page 3',
			             'section'      =>  'sec_slider',
			             'type'         =>  'url'
			        )
				 );

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//				 


	// end sliders section ---------------------------------------------------------------------------//		 

}
add_action( 'customize_register' , 'cherki_customizer');