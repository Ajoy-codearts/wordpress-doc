<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
	
	//Option Section
	
    'sections'        => array( 
	
	/*Header*/
      array(
        'id'          => 'site_header',
        'title'       => __( 'Header Settings', 'theme-text-domain' ),
      ),
	  
	  /*Footer*/
      array(
        'id'          => 'site_footer',
        'title'       => __( 'Footer Settings', 'theme-text-domain' ),
      ),
	  
	  
	  
	  
	  
    ),
	
	//Option Settings
	
    'settings'        => array( 
	
	
	//Header details 
	
	array(
        'id'          => 'header_top_msg',
        'label'       => __( 'Header Top Message', 'theme-text-domain' ),
		    'desc'        => 'Type Your Message',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_header',
      ),

	  array(
        'id'          => 'header_social',
        'label'       => __( 'Add Social Media Icons', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'site_header',
        'settings'	  => array(
          
            array(
            'id'          => 'profile_icon',
            'label'       => __( 'Add Social Icon', 'theme-text-domain' ),
            'desc'        => 'Add Social Icon',
            'std'         => '',
            'type'        => 'upload',
            'section'     => 'site_header',
            ),
            
            
            array(
            'id'          => 'icon_profile_page_url',
            'label'       => __( 'Icon Profile Page Url', 'theme-text-domain' ),
            'desc'        => 'Icon Profile Page Url',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'site_header',
            ),

      )
    ),

    array(
      'id'          => 'my_acc_icon',
      'label'       => __( 'My Account Icon', 'theme-text-domain' ),
      'desc'        => 'My Account Icon',
      'std'         => '',
      'type'        => 'upload',
      'section'     => 'site_header',
    ),

	 array(
        'id'          => 'header_logo',
        'label'       => __( 'Header Logo', 'theme-text-domain' ),
        'desc'        => 'Upload your Logo',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'site_header',
      ),

	  
	 array(
        'id'          => 'header_phone_no_text',
        'label'       => __( 'Phone Number Text', 'theme-text-domain' ),
        'desc'        => 'Type Your Phone Number Text',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_header',
      ),
	  
	 
	 array(
        'id'          => 'header_phone_no',
        'label'       => __( 'Phone Number', 'theme-text-domain' ),
        'desc'        => 'Type Your Phone Number',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_header',
      ),

	 //Header details 

	 //Footer details 
	 array(
        'id'          => 'footer_brands',
        'label'       => __( 'Add Brands', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'site_footer',
        'settings'	  => array(
          
            array(
            'id'          => 'brand_image',
            'label'       => __( 'Add Brand Image', 'theme-text-domain' ),
            'desc'        => 'Add Brand Image',
            'std'         => '',
            'type'        => 'upload',
            'section'     => 'site_footer',
            ),
            
            
            
            

        )
      ),
	 array(
        'id'          => 'footer_heading_one',
        'label'       => __( 'Footer Heading One', 'theme-text-domain' ),
        'desc'        => 'Footer Heading One',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),
	  array(
        'id'          => 'footer_heading_two',
        'label'       => __( 'Footer Heading Two', 'theme-text-domain' ),
        'desc'        => 'Footer Heading Two',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),
	  array(
        'id'          => 'footer_heading_three',
        'label'       => __( 'Footer Heading Three', 'theme-text-domain' ),
        'desc'        => 'Footer Heading Three',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),
	  array(
        'id'          => 'footer_heading_four',
        'label'       => __( 'Footer Heading Four', 'theme-text-domain' ),
        'desc'        => 'Footer Heading Four',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),
	  array(
        'id'          => 'footer_contact_msg',
        'label'       => __( 'Footer Contact Message', 'theme-text-domain' ),
        'desc'        => 'Footer Contact Message',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
    ),

	  array(
        'id'          => 'add_footer_contact_info',
        'label'       => __( 'Add Footer Contact Info', 'theme-text-domain' ),
        'desc'        => 'Add Footer Contact Info',
            'std'         => '',
            'type'        => 'list-item',
            'section'     => 'site_footer',
            'settings'	  => array(
              
                array(
                'id'          => 'footer_con_icon',
                'label'       => __( 'Add Contact Icon', 'theme-text-domain' ),
                'desc'        => 'Add Contact Icon',
                'std'         => '',
                'type'        => 'upload',
                'section'     => 'site_footer',
                ),
                
                
                array(
                'id'          => 'footer_con_des',
                'label'       => __( 'Add Contact Informartion', 'theme-text-domain' ),
                'desc'        => 'Add Contact Informartion',
                'std'         => '',
                'type'        => 'text',
                'section'     => 'site_footer',
                ),
                
                

            )
      ),

	  array(
        'id'          => 'footer_newsletter_icon',
        'label'       => __( 'Footer Newsletter Icon', 'theme-text-domain' ),
        'desc'        => 'Footer Newsletter Icon',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'site_footer',
      ),

	  array(
        'id'          => 'footer_newsletter_heading',
        'label'       => __( 'Footer Newsletter Heading', 'theme-text-domain' ),
        'desc'        => 'Footer Newsletter Heading',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),
	  array(
        'id'          => 'footer_newsletter_des',
        'label'       => __( 'Footer Newsletter Description', 'theme-text-domain' ),
        'desc'        => 'Footer Newsletter Description',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),
	  array(
        'id'          => 'footer_main_des',
        'label'       => __( 'Footer Main Description', 'theme-text-domain' ),
		    'desc'        => 'Footer Main Description',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),

	  array(
        'id'          => 'copyright_text',
        'label'       => __( 'Footer Copyright Text', 'theme-text-domain' ),
		    'desc'        => 'Footer Copyright Text',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_footer',
      ),
	  array(
        'id'          => 'upload_payment_card',
        'label'       => __( 'Upload Payment Card', 'theme-text-domain' ),
		    'desc'        => 'Upload Payment Card',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'site_footer',
      ),

	 //Footer details 
      
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}