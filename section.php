<?php
/*
	Section: Business Branding
	Author: Ellen Moore
	Author URI: http://pagelines.ellenjanemoore.com/
	Description: Branding with Business Information Section.
	Class Name: BusinessBranding
	Workswith: header 
	Version: 2.0
	Demo: http://pagelines.ellenjanemoore.com/business-branding/
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
		add_filter( 'pless_vars', array(&$this,'business_branding_less_vars'));
		add_filter ( 'pagelines_settings_whitelist', 'business_branding_whitelist' );
		function business_branding_whitelist($whitelist) {
		$business_branding_code = array('branding_area_code', 'business_info_line1', 'business_info_line2', 'business_info_line3' );
		return array_merge( $whitelist, $business_branding_code );
		}
	}
	function business_branding($options) {
		if( defined( 'THEMENAME'  ) && 'PageLines' == THEMENAME  ) {
		$options_array['business_branding'] = array(// this is the tab title
				'business_display_block'				=> array(
					'type'					=> 'multi_option',
					'selectvalues'			=> array(
							'business_display'			=> array(
								'type' 					=> 	'check_multi',

								'selectvalues'			=> array(
									'business_name'			=> array('inputlabel' => __('Show Site Title with Logo' , 'business-branding')),
									'business_description'	=> array('inputlabel' => __('Show Site Description with Logo' , 'business-branding')),

									),
								),
								'business_name_position'	=> array(
									'type' 					=> 	'text_multi',
									'layout'				=>	'full',
									'inputsize'				=> 'tiny',
									'selectvalues'			=> array(
										'business_name_top'		=> array('inputlabel' => __('Margin Top in Pixels (Default 10)' , 'business-branding'), 'default'	=> 10),
										'business_name_left'	=> array('inputlabel' => __('Margin Left in Pixels (Default 10)' , 'business-branding'), 'default'	=> 10),
									),
										'shortexp' 				=> __( 'Use these options to position the site title with the logo', 'business-branding' ),
										'exp'					=> __('The positioning is only for when the site title/description is displayed with the logo.')
									),

			),

					'title' 				=> __( 'Display Site Title/Description with Logo', 'business-branding' ),						
					'shortexp' 				=> __( 'Only use this option if you uploaded a logo through Pagelines Website Setup options' , 'business-branding' ),
					'exp'					=> __('Logo is uploaded through Website Setup. Do not use the Show Site Title/Description options if you have no logo displayed, otherwise Site Title/Description will display twice.')
				),

			'branding_area_block'				=> array(
				'type'					=> 'multi_option',
				'selectvalues'			=> array(
					'branding_area_image'		=> array(
							'type' 				=> 'image_upload',
							'inputlabel' 		=> __( 'Upload Image to display in branding area. Will display next to logo and/or site title/description', 'business-branding' ),
							'shortexp'	 		=> __( 'Upload an image to use next to logo or site title', 'business-branding' ),
							'exp' 				=> ''

							),
					'branding_area_code'		=> array(
						'type' 					=> 'textarea',
						'inputlabel' 			=> __( 'Enter iframe or HTML code here. Great for affiliate banners.', 'business-branding' ),
						'shortexp'	 			=> __( 'Enter iframe or HTML Code for branding area', 'business-branding' ),
						'exp' 					=> ''
						),

					'branding_area_position'	=> array(
						'type' 					=> 	'text_multi',
						'layout'				=>	'full',
						'inputsize'				=> 'tiny',
						'selectvalues'			=> array(
							'branding_area_top'		=> array('inputlabel' => __('Margin Top in Pixels (Default 10)' , 'business-branding'), 'default'	=> 10),
							'branding_area_left'	=> array('inputlabel' => __('Margin Left in Pixels (Default 10)' , 'business-branding'), 'default'	=> 10),
						),	
					'shortexp' 				=> __( 'Position image or code in relation to logo/site title', 'business-branding' ),
					'exp'					=> __('Use these options to position your image or code.')
				),
			),

			'title' 				=> __( 'Branding Area Extras', 'business-branding' ),						
			'shortexp' 				=> __( 'Use these options to upload an image or use a little custom code to display affiliate banners' ),
			'exp'					=> __('Some code is fine, like an iframe for an affiliate banner.')
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
										'exp' 					=> ''
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
										'exp' 					=> ''
										
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
										'exp' 					=> ''
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
						'title' 		=> __( 'Additional Business Information', 'business-branding' ),						
						'shortexp' 		=> __( 'Enter Additional Business Information to show above social icons', 'business-branding' ),
						'exp'			=> ''
					),
					'business_info_position'	=> array(
						'type' 					=> 	'multi_option',
						'selectvalues'			=> array(
							'business_info_top'		=> array(
								'default'			=> 10,
								'type' 				=> 'text_small',
								'inputlabel' 		=> __( 'Margin Top in Pixels (Default 10)', 'business-branding' ),
								'shortexp'	 		=> __( 'Position from Top.', 'business-branding' ),
								'exp' 				=> ''
							),
							'business_info_justify'	=> array(
								'default'			=> 'right',
								'type' 				=> 'select',
								'inputlabel' 		=> 'Justify (Default right)',
								'selectvalues'		=> array(
									'left'			=> array('name'	=>'left'),
									'center'		=> array('name'	=>'center'),
									'right'			=> array('name'	=>'right'),
									
								),
					
							),
						),
						'title' 		=> __( 'Position of Additional Information', 'business-branding' ),						
						'shortexp' 		=> __( 'Use these options to position the additional information', 'business-branding' ),
						'exp'			=> ''
					),
					'branding_colors'	=> array(
						'title' 		=> __( 'Business Branding Color Control', 'business-branding' ),						
						'shortexp' 		=> __( 'Controls the background and color of text in the Business Branding Section', 'business-branding' ),
						'exp' 			=> '',
						'type' 			=> 'color_multi',
						'layout'		=> 'full',
						'selectvalues'	=> array(
							'business_branding_background' => array(		
								'default' 		=> '',
								'css_prop'		=> 'background-color',
								'selectors'		=> '#page .section-business-branding, #page .section-business-branding .content',
								'inputlabel' 	=> __( 'Background Color', 'business-branding' ),
							),
							'business_branding_color' => array(		
								'default' 		=> '#000000',
								'css_prop'		=> 'color',
								'selectors'		=> '#page .section-business-branding a.site-title, #page .section-business-branding .subhead',
								'inputlabel' 	=> __( 'Branding Text Color', 'business-branding' ),
							),
							'business_info_color' => array(		
								'default' 		=> '#000000',
								'css_prop'		=> 'color',
								'selectors'		=> '#page .section-business-branding .business-info h2, #page .section-business-branding .business-info h3, #page .section-business-branding .business-info h4, #page .section-business-branding .business-info h5, #page .section-business-branding .business-info p',
								'inputlabel' 	=> __( 'Info Text Color', 'business-branding' ),
							),									
						)	
					),
		);
		return array_merge($options, $options_array);
	} else {
		return $options;
	}
	}
	// Custom LESS Vars
	function business_branding_less_vars($less){

		$business_top = (ploption('business_name_top')) ? ploption('business_name_top').'px' : '10px';
		$business_left = (ploption('business_name_left')) ? ploption('business_name_left').'px' : '10px';
		$branding_top = (ploption('branding_area_top')) ? ploption('branding_area_top').'px' : '10px';
		$branding_left = (ploption('branding_area_left')) ? ploption('branding_area_left').'px' : '10px';
		$info_top = (ploption('business_info_top')) ? ploption('business_info_top').'px' : '10px';
		$info_justify = (ploption('business_info_justify')) ? ploption('business_info_justify') : 'right';
		$less['business-top']  = $business_top;
		$less['business-left']  = $business_left;
		$less['branding-top']  = $branding_top;
		$less['branding-left']  = $branding_left;
		$less['info-top']  = $info_top;
		$less['info-justify']  = $info_justify;

		return $less;
	}

	/**
	* Section template.
	*/
   function section_template() { 


	// Setup option values



	$business_line1 = ploption('business_info_line1');
	$business_line2 = ploption('business_info_line2');
	$business_line3 = ploption('business_info_line3');
	$business_line1_style = (ploption('business_info_line1_style', $this->oset)) ? ploption('business_info_line1_style', $this->oset) : 'h2';
	$business_line2_style = (ploption('business_info_line2_style', $this->oset)) ? ploption('business_info_line2_style', $this->oset) : 'h3';
	$business_line3_style = (ploption('business_info_line3_style', $this->oset)) ? ploption('business_info_line3_style', $this->oset) : 'h3';
	$branding_code = ploption('branding_area_code');
	$branding_area_image = ploption('branding_area_image');
	$business_image_info = ploption('business_info_image');



		// Draw the Template

			// Branding Logo, Site Title and Description

				echo'<div class="branding_wrap fix">';
					pagelines_main_logo(); 
					echo '<div class=branding-area-container>';
					echo '<div class=title-container>';
					if(ploption('business_name'))
							printf( '<div class="site-title"><a class="home site-title" href="%s" title="%s">%s</a></div>',   esc_url(home_url()), __('Home','pagelines'), get_bloginfo('name'));
					if(ploption('business_description'))
						printf( '<h6 class="site-description subhead">%s</h6>',  get_bloginfo('description'));						
						echo '</div>';
					echo '<div class=branding-area-extra>';
					if(ploption('branding_area_code'))
						printf('<div class=branding-area-code>%s</div>', do_shortcode($branding_code));
						if (ploption('branding_area_image')) 
							printf('<img src="%s">', $branding_area_image);	
					echo '</div></div>';				

					pagelines_register_hook( 'pagelines_before_branding_icons', 'branding' ); // Hook 





				// Business Info and Social Icons



				echo'<div class="business-info">';

				echo'<div class="business-info-text">';
				if (ploption('business_info_image')) 
					printf('<img src="%s">', $business_image_info);
				if (ploption('business_info_line1')) 
					printf('<%s>%s</%s>' , $business_line1_style, do_shortcode($business_line1), $business_line1_style);
				if (ploption('business_info_line2')) 
					printf('<%s>%s</%s>' , $business_line2_style, do_shortcode($business_line2), $business_line2_style);
				if (ploption('business_info_line3'))
					printf('<%s>%s</%s>' , $business_line3_style, do_shortcode($business_line3), $business_line3_style);
				echo'</div>';	
				
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
