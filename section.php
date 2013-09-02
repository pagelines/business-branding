<?php
/*
	Section: Business Branding
	Author: Ellen Moore
	Author URI: http://pagelines.ellenjanemoore.com/
	Description: Branding with Business Information Section.
	Class Name: BusinessBranding
	Workswith: header
	Version: 3.0.5
	v3: true;
	Demo: http://pagelines.ellenjanemoore.com/business-branding/
*/

/**  * Business Branding Section  *  * @package PageLines Framework  * @author
PageLines  */ class BusinessBranding extends PageLinesSection {

	var $default_limit = 3;

	function section_opts(){ 

		$bb_logo_directions = "<div><li><strong>Number of Columns to Span:</strong></li>
Default number of columns is 4 out of 12. If you change the number of columns make sure that total number of columns for all sections is 12.</li>
<li><strong>Branding with No Logo Image:</strong>
Site Title and Description automatically display. DO NOT check the boxes to display site title and description otherwise it will show twice.</li>
<li><strong>Logo only:</strong>
Upload your logo image.</li>
<li><strong>Logo and Site Title and/or Description:</strong>
Upload your logo and check the boxes to display site title and/or site description with your logo.</li>
<li><strong>Title and Description Margins:</strong>Use to position the site title and/or description when displaying next to logo.</li></div>";

	$bb_general_directions = "<div>Business Branding has 3 sections to work with:
<li><strong>Branding Logo and Site Title:</strong> Display options for logo and site title/description.</li>
<li><strong>Image and Code Area:</strong> Great for advertising banners and other iframe or html code. Displays next to Branding area.</li>
<li><strong>Info Area and Social Icons:</strong> Displays on the right side of Business Branding. Display up to 6 lines of additional information and also social media icons.</li><p>Each area can span a number of columns with the total columns being 12. By default each area is set to span 4 columns. If you are not using the Image/Code area then the Branding and Info Areas can total 12.</p></div>";


		$options = array();

		
		

		$options[] = array(
	            'key'           => 'bb_general',
	            'type'          => 'multi', 
	            'title'         => __('Business Branding Background Options', 'business-branding'), 
	            'help'			=>	__( 'Set an optional background color and whether the color is full width of header or section.', 'business-branding' ),		
	            'span'			=>	1,
	            'opts'=> array(
	            	 array(
	                    'key'           => 'bb_background',
           				'type'          => 'color', 
           				'default'		=> '',
						'label'			=> __( 'Choose a Background Color (Optional)', 'business-branding' ),
	                ),
	            	 array(
	                   'key'           => 'bb_background_fw',
            			'type'          => 'check', 
            			'label'			=> __( 'Set Background Color Full Width?', 'business-branding' ),
	                ), 
	            	 
	            )
	       	);
		
			$options[] = array(
            'key'           => 'bb_general_directions',
            'title'			=>	__('Business Branding General Directions' , 'business-branding'),
            'type'          => 'template',
           	'span'			=>	2,
            'template'      => $bb_general_directions
        );
		
		

		$options[] = array(
				'type' 			=> 'multi',
				'title' 		=> 'Branding Logo and Title Area Options',
				'span'			=>	2,
				'opts'	=> array(
					array(
							'key'			=> 'bb_logo_width',
							'type' 			=> 'count_select',
							'count_start'	=> 1,
							'count_number'	=> 12,
							'default'		=> 4,
							'label' 	=> __( 'Number of columns to span for logo and/or site title/description (Default is 4 out of 12)', 'business-branding' ),
					),
					array(
						'type' 			=> 'image_upload',
						'title' 		=> 'Upload Logo Image',
						'key'			=> 'bb_custom_logo',
						
					),
					array(
						'type' 			=> 'check',
						'title' 		=> 'Display Site Title With Logo?',
						'key'			=> 'bb_site_title',											
					),
					array(
						'type' 			=> 'check',
						'title' 		=> 'Display Site Description with Logo?',
						'key'			=> 'bb_site_description',	
					),
					array(
	                   'key'           => 'bb_branding_color',
            			'type'          => 'color', 
            			'default'		=> '',
						'label'			=> __( 'Site Title & Description Color', 'business-branding' ),
	                ), 
	                
	                array(
							'key'	=> 'bb_branding_top',
							'type'	=> 'text',
							'default'	=> '10',
							'label'	=> __( 'Title and Description Margin Top in pixels (Default 10). NOTE: Enter number without px.', 'business-branding' ),	
					),
					array(
						'key'	=> 'bb_branding_left',
						'type'	=> 'text',
						'size'	=> 'small',
						'label'	=> __( 'Title and Description Margin Left in pixels (Default 0). NOTE: Enter number without px.', 'business-branding' ),
						
					),

				),
		);

		

		$options[] = array(
            'key'           => 'bb_logo_directions',
            'title'			=>	'Branding Logo and Title Area Directions',
            'type'          => 'template',
           	'span'			=>	1,
            'template'      => $bb_logo_directions
        );

 	
		$options[] = array(
			'type' 			=> 'multi',
			'title' 		=> 'Image and Code Area (Shows to right of Branding Area and left of Info Area)',
			'span'			=>	2,
				
				'opts'	=> array(
					array(
						'key'			=> 'bb_middle_width',
						'type' 			=> 'count_select',
						'count_start'	=> 1,
						'count_number'	=> 12,
						'default'		=> 4,
						'label' 	=> __( 'Number of columns to span (out of 12)', 'business-branding' ),
					),
					array(
						'type' 			=> 'image_upload',
						'key'			=> 'bb_middle_image',
						'label' 	=> __( 'Upload an image. Set link below.', 'business-branding' ),		
					),
					array(
						'type' 			=> 'text',
						'key'			=> 'bb_image_link',
						'label' 	=> __( 'Enter URL for image to link to.', 'business-branding' ),
					),
					array(
						'type' 			=> 'textarea',
						'key'			=> 'bb_middle_code',
						'label' 	=> __( 'Enter text, html or iframe code.', 'business-branding' ),	
					),
					
					array(
						'key'	=> 'bb_middle_top',
						'type'	=> 'text',
						'size'	=> 'small',
						'label'	=> __( 'Branding Middle Margin Top in pixels (Default 0). NOTE: Enter number without px.', 'business-branding' ),	
					),
					array(
						'key'	=> 'bb_middle_left',
						'type'	=> 'text',
						'size'	=> 'small',
						'label'	=> __( 'Branding Middle Margin Left in pixels (Default 0). NOTE: Enter number without px.', 'business-branding' ),
						
					),
					

				)
			);

		$options[] = array(
			'type' 			=> 'multi',
			'title' 		=> 'Social Links (Displays right side of section and under Info Lines.)',
			
			'opts'	=> array(
					array(
						'key'		=> 'bb_social',
						'default'	=> 'icons',
						'label'		=> __( 'Display social icons with Font Awesome Icon Font or stock images.', 'business-branding' ),
						'type'		=> 'select',

			            'opts'=> array(
			                'icons'			=> array('name'	=>'icon font'),
							'images'		=> array('name'	=>'images'),
							
							
				            ),
			        ),  
			        array(
						'key'			=> 'bb_social_size',
						'type' 			=> 'text',
						'label' 		=> __( 'Icon Font Size (Default 24px). Only changes size of font awesome icons, not images', 'business-branding' ),
					),
					array(
						'type' 			=> 'check',
						'title' 		=> 'Show RSS',
						'key'			=> 'bb_rsslink',
						'label'			=> __( 'Show RSS Link?', 'business-branding' ),
					),
					array(
						'key'			=> 'bb_twitterlink',
						'type' 			=> 'text',
						'label' 		=> __( 'Twitter URL', 'business-branding' ),
					),

					array(
						'key'			=> 'bb_facebooklink',
						'type' 			=> 'text',
						'label' 		=> __( 'Facebook URL', 'business-branding' ),
					),

					array(
						'key'			=> 'bb_linkedinlink',
						'type' 			=> 'text',
						'label' 		=> __( 'LinkedIn URL', 'business-branding' ),
					),

					array(
						'key'			=> 'bb_youtubelink',
						'type' 			=> 'text',
						'label' 		=> __( 'Youtube URL', 'business-branding' ),
					),

					array(
						'key'			=> 'bb_gpluslink',
						'type' 			=> 'text',
						'label' 		=> __( 'Google Plus URL', 'business-branding' ),
					),
					
				)
			);
		
		

	

		$bb_lines = ($this->opt('bb_count')) ? $this->opt('bb_count') : $this->default_limit;
		
		for($i = 1; $i <= $bb_lines; $i++){

			$opts = array(

				array(
					'key'		=> 'bb_icon_'.$i,
					'label'		=> __( 'Info Text Icon. Choose from the Font Awesome Library. (Optional)', 'business-branding' ),
					'type'		=> 'select_icon',
				),
				array(
					'key'		=> 'bb_text_'.$i,
					'label'	=> __( 'Info Text. Can use shortcodes and html as well as text.', 'business-branding' ),
					'type'	=> 'text'
				),
				array(
					'key'		=> 'bb_style_'.$i,
					'default'	=> 'p',
					'label'		=> __( 'Info Text Style (Default is paragraph size - p)', 'business-branding' ),
					'type'		=> 'select',

		            'opts'=> array(
		                'h2'			=> array('name'	=>'h2'),
						'h3'			=> array('name'	=>'h3'),
						'h4'			=> array('name'	=>'h4'),
						'h5'			=> array('name'	=>'h5'),
						'p'				=> array('name'	=>'p')
		            ),
				),
			);

			
			

			$options[] = array(
				'title' 	=> __( 'Info ', 'business-branding' ) . $i,
				'type' 		=> 'multi',
				'span'		=> 2,
				'opts' 		=> $opts,

			);

		}


			$options[] = array(

			'title' => __( 'Branding Info Lines (Displays right side of section)', 'business-branding' ),
			'type'	=> 'multi',
			'span'	=>	1,
			'opts'	=> array(
				array(
					'key'			=> 'bb_info_width',
					'type' 			=> 'count_select',
					'count_start'	=> 1,
					'count_number'	=> 12,
					'default'		=> 4,
					'label' 	=> __( 'Number of columns to span (out of 12)', 'business-branding' ),
				),
				 array(
	                    'key'           => 'bb_info_color',
           				'type'          => 'color', 
           				'default'		=> '',
						'label'			=> __( 'Info Area Text Color', 'business-branding' ),
	                ),
				array(
					'key'			=> 'bb_count',
					'type' 			=> 'count_select',
					'count_start'	=> 1,
					'count_number'	=> 6,
					'default'		=> 3,
					'label' 	=> __( 'Number of Info Lines to Configure (up to 6)', 'business-branding' ),
				),
				array(
					'key'		=> 'bb_justify',
					'default'	=> 'right',
					'label'		=> __( 'Info Text Justify (Default is Right)', 'business-branding' ),
					'type'		=> 'select',

		            'opts'=> array(
		                'right'			=> array('name'	=>'right'),
						'left'			=> array('name'	=>'left'),
						'center'		=> array('name'	=>'center'),
						
		            ),

		        ),  
	        	array(
						'key'	=> 'bb_info_top',
						'type'	=> 'text',
						'size'	=> 'small',
						'label'	=> __( 'Info Lines Margin Top (in pixels)', 'business-branding' ),
						
					),  
				

				
			)

		);
		
		return $options;
	}

	function section_head() {
		if(function_exists('pl_has_editor')){
			$bb_background = ($this->opt('bb_background')) ? $this->opt('bb_background') : '';
			$bb_full_width = ($this->opt('bb_background_fw')) ? $this->opt('bb_background_fw') : null;
			$bb_justify = ($this->opt('bb_justify')) ? $this->opt('bb_justify') : 'right';
			$bb_branding_color = ($this->opt('bb_branding_color')) ? $this->opt('bb_branding_color') : null;
			$bb_info_color = ($this->opt('bb_info_color')) ? $this->opt('bb_info_color') : null;
			$bb_branding_top = ($this->opt('bb_branding_top')) ? $this->opt('bb_branding_top').'px' : '0';
			$bb_branding_left = ($this->opt('bb_branding_left')) ? $this->opt('bb_branding_left').'px' : '10px';
			$bb_middle_top = ($this->opt('bb_middle_top')) ? $this->opt('bb_middle_top').'px' : '0';
			$bb_middle_left = ($this->opt('bb_middle_left')) ? $this->opt('bb_middle_left').'px' : null;
			$bb_info_top = ($this->opt('bb_info_top')) ? $this->opt('bb_info_top').'px' : '0';
			$bb_social_size = ($this->opt('bb_social_size')) ? $this->opt('bb_social_size').'px' : '24px';
		
		
		if($bb_full_width !=null) {
			?>
			<style type="text/css">
				.header {
					background: #<?php echo $bb_background ?>;
				}
			</style>
			<?php
		} else {
			?>
			<style type="text/css">
				.section-business-branding {
					background: #<?php echo $bb_background ?>;
				}

			</style>
			<?php
		}
		

		if($bb_middle_left !=null) {
			?>
			<style type="text/css">
				.section-business-branding .branding-area-extra {
					margin-left: <?php echo $bb_middle_left ?>;
				}
			</style>
			<?php
		} 
		?>
		<style type="text/css">
				.section-business-branding .bb-title-container {
					margin-left: <?php echo $bb_branding_left ?>;
					margin-top: <?php echo $bb_branding_top ?>;
				}
				.section-business-branding a.home.bb-site-title, 
				.section-business-branding .bb-site-description {
					color: #<?php echo $bb_branding_color ?>;
				}
				.section-business-branding .bb-business-info, 
				.section-business-branding .bb-icons a {
					text-align: <?php echo $bb_justify ?>;
					color: #<?php echo $bb_info_color ?>;
					margin-top: <?php echo $bb_info_top ?>;
				} 

				.section-business-branding .bb-icons a {
					font-size: <?php echo $bb_social_size ?> ;
				}

				.section-business-branding .bb-branding-area-extra {
					
					margin-top: <?php echo $bb_middle_top ?>;
				}

			</style>
	
	<?php

} 
	}

	function business_branding_v3() {

		$bb_logo_width = ($this->opt('bb_logo_width')) ? $this->opt('bb_logo_width') : 4;
		$bb_info_width = ($this->opt('bb_info_width')) ? $this->opt('bb_info_width') : 4;

		echo '<div class="bb_branding_wrap fix"><div class="row">';
			printf('<div class=" branding-area span%s">', $bb_logo_width);
				echo '<div class="bb-business-logo">';
					$this->logo();
				echo '</div>';
			
			if($this->opt('bb_site_title') or $this->opt('bb_site_description') ) {
				echo '<div class="bb-title-container">';
			if($this->opt('bb_site_title') )
					
				printf( '<div class="bb-site-title"><a class="home bb-site-title" href="%s" >%s</a></div>', esc_url(home_url()), get_bloginfo('name'));
			if($this->opt('bb_site_description') )
				printf( '<h6 class="bb-site-description subhead">%s</h6>', get_bloginfo('description'));						
				echo '</div>';
				
			}
				echo '</div>';

			if($this->opt('bb_middle_code') or $this->opt('bb_middle_image') ) {
				$this->bb_middle_area();
			}

			printf('<div class="bb-business-info span%s">', $bb_info_width);
				$this->info_lines();
				$this->bb_icons();

			echo '</div></div></div></div>';

			pagelines_register_hook( 'bb_after_branding_wrap', 'business-branding' ); // Hook

			

		}

	function logo( ){

		$site_name = get_bloginfo('name');
		$site_desc = get_bloginfo('description');

		if($this->opt('bb_custom_logo') || apply_filters('bb_site_logo', '') || apply_filters('bb_logo_url', '')){

			$logo = apply_filters('bb_logo_url', esc_url($this->opt('bb_custom_logo', $this->oset) ));


			$logo_url =  home_url();

			$site_logo = sprintf(
				'<div itemscope itemtype="http://schema.org/Organization"><a class="plbrand mainlogo-link" itemprop="url" href="%s" title="%s"><img class="mainlogo-img" itemprop="logo" src="%s" alt="%s" /></a></div>',
				$logo_url,
				$site_name,
				$logo,
				$site_name
			);

			echo apply_filters('bb_site_logo', $site_logo);

		} else {

			$site_title = sprintf(
				'<div class="bb-title-container"><a class="home bb-site-title" href="%s">%s</a><h6 class="bb-site-description subhead">%s</h6></div>',
				esc_url(home_url()),
				$site_name,
				$site_desc
			);

			echo apply_filters('bb_site_title', $site_title);
		}
	}

	

	function site_title() {
		$site_name = get_bloginfo('name');
		$site_desc = get_bloginfo('description');

		$site_title = sprintf(
				'<div class="bb-title-container"><a class="home bb-site-title" href="%s">%s</a><h6 class="bb-site-description subhead">%s</h6></div>',
				esc_url(home_url()),
				$site_name,
				$site_desc
			);

			echo apply_filters('bb_site_title', $site_title);

	}	

	function bb_middle_area() {
		$bb_middle_width = ($this->opt('bb_middle_width')) ? $this->opt('bb_middle_width') : 4;
		$bb_image_link = ($this->opt('bb_image_link')) ? $this->opt('bb_image_link') : null;
		
		printf('<div class="bb-branding-area-extra span%s">', $bb_middle_width);
					if($this->opt('bb_middle_code'))
						printf('<div class="bb-branding-area-code">%s</div>', do_shortcode($this->opt( 'bb_middle_code' )));
						if ($this->opt('bb_middle_image')) {
							if($bb_image_link != null) :
							printf( '<a href="%s" class="bb-middle-image"><img src="%s" /></a>', esc_url($bb_image_link), $this->opt( 'bb_middle_image' ) );
							 else :	
							printf('<img src="%s">', $this->opt( 'bb_middle_image' ));	
							endif;
						}
					echo '</div>';

	}	

	function info_lines(){
		$bb_lines = ($this->opt('bb_count')) ? $this->opt('bb_count') : $this->default_limit;
		$output = '';
		for($i = 1; $i <= $bb_lines; $i++) :
			
			$bb_style = ($this->opt('bb_style_'.$i)) ? $this->opt('bb_style_'.$i) : 'p';
			$bb_icon = ($this->opt('bb_icon_'.$i)) ? $this->opt('bb_icon_'.$i) : false;
			$icon_html = sprintf('<i class="icon icon-%s"></i>', $bb_icon);
			
		
			$bb_text = ($this->opt('bb_text_'.$i)) ? $this->opt('bb_text_'.$i) :null;
			if($bb_icon != false) :
				$bb_text = sprintf('<%s data-sync="bb_text_%s">%s %s</%s>',  $bb_style, $i, $icon_html, $bb_text, $bb_style );
			else :
				$bb_text = sprintf('<%s data-sync="bb_text_%s">%s</%s>', $bb_style, $i, $bb_text, $bb_style );
			endif;
			$output .= sprintf(
			'<div class="bb-line_%s span12">%s</div>' ,
			$i,
			
			$bb_text
			
			);
		endfor;
		printf('<div class="bb-info-text row">%s</div>', $output);
		
	}

	function bb_icons() {
		$bb_social = ($this->opt('bb_social')) ? $this->opt('bb_social') : 'icons';

		pagelines_register_hook( 'bb_before_branding_icons', 'business-branding' ); // Hook

				printf( '<div class="bb-icons">', intval( $this->opt( 'bb_icon_pos_bottom' ) ), $this->opt( 'bb_icon_pos_right' ) );

					pagelines_register_hook( 'bb_branding_icons_start', 'business-branding' ); // Hook

					if($bb_social == 'icons') {

						 if( $this->opt( 'bb_rsslink' ) )
                        printf( '<a target="_blank" href="%s" class="bb-rsslink"><i class="icon icon-rss"></i></a>', apply_filters( 'pagelines_branding_rssurl', get_bloginfo( 'rss2_url' ) ) );
 
                     
                        if( $this->opt( 'bb_twitterlink' ) )
                            printf('<a target="_blank" href="%s" class="bb-twitterlink"><i class="icon icon-twitter-sign"></i></a>', $this->opt( 'bb_twitterlink' ));
 
                        if( $this->opt( 'bb_facebooklink' ) )
                            printf('<a target="_blank" href="%s" class="bb-facebooklink"><i class="icon icon-facebook-sign"></i></a>', $this->opt( 'bb_facebooklink' ));
 
                        if( $this->opt( 'bb_linkedinlink' ) )
                            printf('<a target="_blank" href="%s" class="bb-linkedinlink"><i class="icon icon-linkedin-sign"></i></a>', $this->opt( 'bb_linkedinlink' ) );
 
                        if( $this->opt( 'bb_youtubelink' ) )
                            printf('<a target="_blank" href="%s" class="bb-youtubelink"><i class="icon icon-youtube"></i></a>', $this->opt( 'bb_youtubelink' ) );
 
                        if( $this->opt( 'bb_gpluslink' ) )
                            printf( '<a target="_blank" href="%s" class="bb-gpluslink"><i class="icon icon-google-plus-sign"></i></a>', $this->opt( 'bb_gpluslink' ));
 
                   } else {

					if( $this->opt( 'bb_rsslink' ) )
						printf( '<a target="_blank" href="%s" class="rsslink"><img src="%s" alt="RSS"/></a>', apply_filters( 'pagelines_branding_rssurl', get_bloginfo( 'rss2_url' ) ), $this->base_url . '/rss.png' );

					
						if( $this->opt( 'bb_twitterlink' ) )
							printf('<a target="_blank" href="%s" class="twitterlink"><img src="%s" alt="Twitter"/></a>', $this->opt( 'bb_twitterlink' ), $this->base_url . '/twitter.png' );

						if( $this->opt( 'bb_facebooklink' ) )
							printf('<a target="_blank" href="%s" class="facebooklink"><img src="%s" alt="Facebook"/></a>', $this->opt( 'bb_facebooklink' ), $this->base_url . '/facebook.png' );

						if( $this->opt( 'bb_linkedinlink' ) )
							printf('<a target="_blank" href="%s" class="linkedinlink"><img src="%s" alt="LinkedIn"/></a>', $this->opt( 'bb_linkedinlink' ), $this->base_url . '/linkedin.png' );

						if( $this->opt( 'bb_youtubelink' ) )
							printf('<a target="_blank" href="%s" class="youtubelink"><img src="%s" alt="Youtube"/></a>', $this->opt( 'bb_youtubelink' ), $this->base_url . '/youtube.png' );

						if( $this->opt( 'bb_gpluslink' ) )
							printf( '<a target="_blank" href="%s" class="gpluslink"><img src="%s" alt="Google+"/></a>', $this->opt( 'bb_gpluslink' ), $this->base_url . '/google.png' );

						pagelines_register_hook( 'bb_branding_icons_end', 'business-branding' ); // Hook
					
				}
			?>
			
		<?php	

	}	

	

	/**
	* Section template.
	*/
   function section_template() { 


		if(function_exists('pl_has_editor')){
			
			$this->business_branding_v3();

		} else {
		   	$this->business_branding_v2();
		   }
		
				
	}

	function section_persistent() {
		add_filter('pagelines_options_array', array(&$this, 'business_branding'));
		add_filter( 'pless_vars', array(&$this,'business_branding_less_vars'));
		add_filter ( 'pagelines_settings_whitelist', 'business_branding_whitelist' );

		function business_branding_whitelist($whitelist) {
		$business_branding_code = array('branding_area_code', 'business_info_line1', 'business_info_line2', 'business_info_line3' );
		return array_merge( $whitelist, $business_branding_code );
		}
	}

	function logo_with_schema( $location = null ){

	global $pagelines_ID;

	if ( is_pagelines_special() )
		$pagelines_ID = false;

	$oset = array( 'post_id' => $pagelines_ID );

	if(ploption('pagelines_custom_logo', $oset) || apply_filters('pagelines_site_logo', '') || apply_filters('pagelines_logo_url', '')){

		$logo = apply_filters('pagelines_logo_url', esc_url(ploption('pagelines_custom_logo', $oset) ), $location);


		$logo_url = ( esc_url(ploption('pagelines_custom_logo_url', $oset) ) ) ? esc_url(ploption('pagelines_custom_logo_url', $oset) ) : home_url();

		$site_logo = sprintf('<div itemscope itemtype="http://schema.org/Organization"><a class="plbrand mainlogo-link" itemprop="url" href="%s" title="%s"><img class="mainlogo-img" itemprop="logo" src="%s" alt="%s" /></a></div>',
			$logo_url,
			get_bloginfo('name'),
			$logo,
			get_bloginfo('name')
		);

		echo apply_filters('pagelines_site_logo', $site_logo, $location);

	} else {


		$site_title = sprintf( '<div class="title-container"><a class="home site-title" href="%s">%s</a><h6 class="site-description subhead">%s</h6></div>', esc_url(home_url()), get_bloginfo('name'), get_bloginfo('description'));

		echo apply_filters('pagelines_site_title', $site_title, $location);
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

	function business_branding_v2(){
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

				echo'<div class="branding_wrap fix"><div class="business-logo">';
					$this->logo_with_schema();  
					echo '</div><div class="branding-area-container">';
					echo '<div class="title-container">';
					if(ploption('business_name'))
							printf( '<div class="site-title"><a class="home site-title" href="%s" >%s</a></div>',   esc_url(home_url()),  get_bloginfo('name'));
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
