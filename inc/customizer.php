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
          'title'        => __('Copyright Settings' , 'cherki-dev'),
          'description'  => __('Copyright Section' , 'cherki-dev')
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
          'title'        => __('Slider Settings' , 'cherki-dev'),
          'description'  => __('Slider Section' , 'cherki-dev')
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


	/*--------------------------------------------------------------------------------*/
	// Home Page Settings

	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> __( 'Home Page Products and Blog Settings' , 'cherki-dev' ),
			'description'	=> __( 'Home Page Section' , 'cherki-dev' )
		)
	);	

		// We're gonna show the following options if WooCommerce is active
		if( class_exists( 'WooCommerce' )):

			// Field 1 - Popular Products Title
			$wp_customize->add_setting(
				'set_popular_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_popular_title', array(
					'label' 		=> __( 'Popular Products Title' , 'Popular Products'),
					'description' 	=> __( 'Popular Products Description' , 'Popular Products'),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 2 - Popular Products Limit
			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label'			=> __( 'Popular Products Max Number' ),
					'description'	=> __( 'Popular Products Max Number' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Field 3 - Popular Products Columns
			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'			=> __( 'Popular Products Max Columns' ),
					'description'	=> __( 'Popular Products Max Columns' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 4 - New Arrivals Title
			$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		=> __( 'New Arrivals Title' ),
					'description' 	=> __( 'New Arrivals Title' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 5 - New Arrivals Limit
			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			=> __( 'New Arrivals Max Number' ),
					'description'	=> __( 'New Arrivals Max Number' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Field 6 - New Arrivals Columns
			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			=> __( 'New Arrivals Max Columns' ),
					'description'	=> __( 'New Arrivals Max Columns' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 7 - Deal of the Week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> __( 'Deal of the Week Title' ),
					'description' 	=> __( 'Deal of the Week Title' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 8 - Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'fancy_lab_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> __( 'Show Deal of the Week?' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			// Field 9 - Deal of the Week Product ID
			$wp_customize->add_setting(
				'set_deal', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'			=> __( 'Deal of the Week Product ID' ),
					'description'	=> __( 'Product ID to Display' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			/*---------------------------------------------------------------------------------------*/

			// Field 7 - Deal of the Week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> __( 'Deal of the Week Title' ),
					'description' 	=> __( 'Deal of the Week Title' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 8 - Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'cherki_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> __( 'Show Deal of the Week?' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			// Field 9 - Deal of the Week Product ID
			$wp_customize->add_setting(
				'set_deal', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'			=> __( 'Deal of the Week Product ID' ),
					'description'	=> __( 'Product ID to Display' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

		endif; // End Class Exists WooCommerce

			/*---------------------------------------------------------------------------------------*/			 

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//				 


	// end sliders section ---------------------------------------------------------------------------//		 

}
add_action( 'customize_register' , 'cherki_customizer');


// custom function to sanitize chekbox
function cherki_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}