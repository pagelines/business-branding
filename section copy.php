<?php
/*
	Section: Business Branding
	Author: elSue
	Author URI: http://www.elsue.com
	Description: Branding with Business Information Section.
	Class Name: BusinessBranding
	Workswith: header 
*/

/**
 * Business Branding Section
 *
 * @package PageLines Framework
 * @author PageLines
 */
class BusinessBranding extends PageLinesSection {
	
	function section_persistent() {
		add_filter('pagelines_options_array', array(&$this, 'business_branding'));
	}
	function business_branding($options) {
		if( defined( 'THEMENAME'  ) && 'PageLines' == THEMENAME  ) {
		$options_array['business_branding'] = array(// this is the tab title
			'business_branding_info'	=> array(
				'layout'	=> 'full', 
				'type'		=> 'multi_option',
				'title'		=> 'Business Branding Options',
				'shortexp'	=> 'Business Branding Section with additional business information and social icons.',
				'exp'		=> 'Branding Section can display the logo uploaded through Website Options, the Site Title and Description entered in WordPress Settings, or display both. In addition you can add up to 3 lines of text to show above social icons. Social icons are set under Header/Footer Options.',
				'selectvalues'	=> array(
					'business_display'			=> array(
						'type' 					=> 	'check_multi',
						'layout'				=>	'full',
						'selectvalues'			=> array(
							'business_name'			=> array('inputlabel' => __('Show Site Title' , 'business-branding')),
							'business_description'	=> array('inputlabel' => __('Show Site Description' , 'business-branding')),
						),
						'title' 				=> __( 'Show Site Title & Description', 'business-branding' ),						
						'shortexp' 				=> __( 'Check if you want to show Site Title and/or Description next to Logo', 'business-branding' ),
						'exp'					=> __('Only check these options if you are using a logo uploaded in Website Settings. If you did not upload a logo, do not use this section otherwise the site title and description will display twice.')
					),
					'business_name_position'	=> array(
						'type' 					=> 	'text_multi',
						'layout'				=>	'full',
						'inputsize'				=> 'tiny',
						'selectvalues'			=> array(
							'business_name_top'		=> array('inputlabel' => __('Margin Top in Pixels (Default 10)' , 'business-branding'), 'default'	=> 10),
							'business_name_left'	=> array('inputlabel' => __('Margin Left in Pixels (Default 10)' , 'business-branding'), 'default'	=> 10),
						),
						'title' 				=> __( 'Position of Business Branding Elements', 'business-branding' ),						
						'shortexp' 				=> __( 'Use these options to position the site title', 'business-branding' ),
						'exp'					=> __('The positioning is only for when the site title/description is displayed with the logo.')
					),
					'business_info'				=> array(
						'type'					=> 'multi_option',
						'selectvalues'			=> array(
							'business_info_1'	=> array(
								'type'				=>	'multi_option',
								'selectvalues'		=> array(
									'business_info_line1'		=> array(
										'type' 					=> 'text',
										'inputlabel' 			=> __( 'Business Information Line 1', 'business-branding' ),
										'shortexp'	 			=> __( 'Enter Business Information Line 1.', 'business-branding' ),
										'exp' 					=> __( 'Enter in some Business Information.', 'business-branding' )
									),
									'business_info_line1_style' => array(
											'default'			=> 'h2',
											'type' 				=> 'select',
											'inputlabel' 		=> 'Line 1 Style (Default h2)',
											'selectvalues'		=> array(
												'h2'			=> array('name'	=>'h2'),
												'h3'			=> array('name'	=>'h3'),
												'h4'			=> array('name'	=>'h4'),
												'h5'			=> array('name'	=>'h5'),
												'p'				=> array('name'	=>'p'),
											),
										),
								),
							),
							'business_info_2'		=> array(
								'type'				=>	'multi_option',
								'selectvalues'		=> array(
									'business_info_line2'		=> array(
										'type' 					=> 'text',
										'inputlabel' 			=> __( 'Business Information Line 2', 'business-branding' ),
										'shortexp'	 			=> __( 'Enter Business Information Line 2.', 'business-branding' ),
										'exp' 					=> __( 'Enter in some Business Information.', 'business-branding' )
										
									),
									'business_info_line2_style' => array(
											'default'			=> 'h3',
											'type' 				=> 'select',
											'inputlabel' 		=> 'Line 2 Style (Default h3)',
											'selectvalues'		=> array(
												'h2'			=> array('name'	=>'h2'),
												'h3'			=> array('name'	=>'h3'),
												'h4'			=> array('name'	=>'h4'),
												'h5'			=> array('name'	=>'h5'),
												'p'				=> array('name'	=>'p'),
											),
										),
								),								
							),
							'business_info_3'	=> array(
								'type'			=>	'multi_option',
								'selectvalues'	=> array(
									'business_info_line3'		=> array(
										'type' 					=> 'text',
										'inputlabel' 			=> __( 'Business Information Line 3', 'business-branding' ),
										'shortexp'	 			=> __( 'Enter Business Information Line 3.', 'business-branding' ),
										'exp' 					=> __( 'Enter in some Business Information.', 'business-branding' )
									),
									'business_info_line3_style' => array(
											'default'			=> 'h3',
											'type' 				=> 'select',
											'inputlabel' 		=> 'Line 3 Style (Default h3)',
											'selectvalues'		=> array(
												'h2'			=> array('name'	=>'h2'),
												'h3'			=> array('name'	=>'h3'),
												'h4'			=> array('name'	=>'h4'),
												'h5'			=> array('name'	=>'h5'),
												'p'				=> array('name'	=>'p'),
											),
										),
								),
								
							),
							
						),
						'title' 		=> __( 'Additional Business Information', 'pagelines' ),						
						'shortexp' 		=> __( 'Enter Additional Business Information to show above social icons', 'business-branding' ),
						'exp'			=> __( 'Enter Additional Business Information to show above social icons', 'business-branding' )
					),
					'business_info_position'	=> array(
						'type' 					=> 	'multi_option',
						'selectvalues'			=> array(
							'business_info_top'		=> array(
								'default'			=> 10,
								'type' 				=> 'text_small',
								'inputlabel' 		=> __( 'Margin Top in Pixels (Default 10)', 'business-branding' ),
								'shortexp'	 		=> __( 'Position from Top.', 'business-branding' ),
								'exp' 				=> __( 'Position from top.', 'business-branding' )
							),
							'business_info_justify'	=> array(
								'default'			=> 'right',
								'type' 				=> 'select',
								'inputlabel' 		=> 'Justify (Default right)',
								'selectvalues'		=> array(
									'left'			=> array('name'	=>'left'),
									'center'		=> array('name'	=>'center'),
									'right'		=> array('name'	=>'right'),
									
								),
							),
						),
						'title' 		=> __( 'Position of Additional Information', 'business-branding' ),						
						'shortexp' 		=> __( 'Use these options to position the additional information', 'business-branding' ),
						'exp'			=> ''
					),
			
			)
			)
		);
		return array_merge($options, $options_array);
	} else {
		return $options;
	}
	}
	

	
	/**
	* Section template.
	*/
   function section_template() { 
	
	// Setup option values
	
	$branding_top = (ploption('business_name_top', $this->oset)) ? ploption('business_name_top', $this->oset) : 10;
	$branding_left = (ploption('business_name_left', $this->oset)) ? ploption('business_name_left', $this->oset) : 10;
	$business_line1 = ploption('business_info_line1');
	$business_line2 = ploption('business_info_line2');
	$business_line3 = ploption('business_info_line3');
	$business_line1_style = (ploption('business_info_line1_style', $this->oset)) ? ploption('business_info_line1_style', $this->oset) : 'h2';
	$business_line2_style = (ploption('business_info_line2_style', $this->oset)) ? ploption('business_info_line2_style', $this->oset) : 'h3';
	$business_line3_style = (ploption('business_info_line3_style', $this->oset)) ? ploption('business_info_line3_style', $this->oset) : 'h3';
	$business_info_top = (ploption('business_info_top', $this->oset)) ? ploption('business_info_top', $this->oset) : 10;
	$business_info_justify = (ploption('business_info_justify', $this->oset)) ? ploption('business_info_justify', $this->oset) : 'right';
	
	
		// Draw the Template
		
			// Branding Logo, Site Title and Description
			
			echo'<div class="branding_wrap fix">';
				pagelines_main_logo(); 
				printf('<div class="title-container" style="margin: %spx 0 0 %spx;">', $branding_top, $branding_left);
				if(ploption('business_name'))
						printf( '<div class="site-title"><a class="home site-title" href="%s" title="%s">%s</a></div>',  esc_url(home_url()), __('Home','pagelines'), get_bloginfo('name'));
				if(ploption('business_description'))
					printf( '<h6 class="site-description subhead">%s</h6>',  get_bloginfo('description'));						
					echo '</div>';	
			
				pagelines_register_hook( 'pagelines_before_branding_icons', 'branding' ); // Hook 
				
				// Business Info and Social Icons

				printf('<div class="business-info" style="margin-top: %spx; text-align: %s;">', $business_info_top, $business_info_justify);

			
				if (ploption('business_info_line1')) 
					printf('<%s>%s</%s>' , $business_line1_style, $business_line1, $business_line1_style);
				if (ploption('business_info_line2')) 
					printf('<%s>%s</%s>' , $business_line2_style, $business_line2, $business_line2_style);
				if (ploption('business_info_line3'))
					printf('<%s>%s</%s>' , $business_line3_style, $business_line3, $business_line3_style);
					
				
				echo '<div class="icons">';
					
					pagelines_register_hook( 'pagelines_branding_icons_start', 'branding' ); // Hook 
			
					if(ploption('rsslink'))
						printf('<a target="_blank" href="%s" class="rsslink"><img src="%s" alt="RSS"/></a>', apply_filters( 'pagelines_branding_rssurl', get_bloginfo('rss2_url') ), $this->base_url.'/rss.png' );
					
					if(VPRO) {
						if(ploption('twitterlink'))
							printf('<a target="_blank" href="%s" class="twitterlink"><img src="%s" alt="Twitter"/></a>', ploption('twitterlink'), $this->base_url.'/twitter.png');
					
						if(ploption('facebooklink'))
							printf('<a target="_blank" href="%s" class="facebooklink"><img src="%s" alt="Facebook"/></a>', ploption('facebooklink'), $this->base_url.'/facebook.png');
						
						if(ploption('linkedinlink'))
							printf('<a target="_blank" href="%s" class="linkedinlink"><img src="%s" alt="LinkedIn"/></a>', ploption('linkedinlink'), $this->base_url.'/linkedin.png');
						
						if(ploption('youtubelink'))
							printf('<a target="_blank" href="%s" class="youtubelink"><img src="%s" alt="Youtube"/></a>', ploption('youtubelink'), $this->base_url.'/youtube.png');
						
						if(ploption('gpluslink'))
							printf('<a target="_blank" href="%s" class="gpluslink"><img src="%s" alt="Google+"/></a>', ploption('gpluslink'), $this->base_url.'/google.png');
						
						pagelines_register_hook( 'pagelines_branding_icons_end', 'branding' ); // Hook 
				
					}
					
			echo '</div></div>';		
			pagelines_register_hook( 'pagelines_after_branding_wrap', 'branding' ); // Hook
				
			?>		
			<script type="text/javascript"> 
				jQuery('.icons a').hover(function(){ jQuery(this).fadeTo('fast', 1); },function(){ jQuery(this).fadeTo('fast', 0.5);});
			</script>
<?php 	
				
		}
		
		
}
