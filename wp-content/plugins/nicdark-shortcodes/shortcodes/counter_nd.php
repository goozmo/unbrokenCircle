<?php

/////////////////////////////////////////////////////////counter/////////////////////////////////////////
add_shortcode('counter_nd', 'nicdark_shortcode_counter');
function nicdark_shortcode_counter($atts, $content = null)
{	

	$atts = shortcode_atts(
		array(
			'number' => '',
			'bgcolor' => '',
      'align' => '',
			'class' => ''
		), $atts);

   $str = '';
		
   $str .= '<div class="nicdark_archive1 '.$atts['align'].'"><a href="#" class="'.$atts['class'].' nicdark_width50 white nicdark_btn nicdark_bg_'.$atts['bgcolor'].' nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="'.$atts['number'].'" data-speed="1000">'.$atts['number'].'</a><div class="nicdark_space5"></div></div>';

	return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_counter' );
function nicdark_counter() {
   vc_map( array(
      "name" => __( "Counter", "nicdark-shortcodes" ),
      "base" => "counter_nd",
      'description' => __( 'Add counter', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/counter.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Number", "nicdark-shortcodes" ),
            "param_name" => "number",
            'admin_label' => true,
            "value" => __( "49", "nicdark-shortcodes" ),
            "description" => __( "Insert your title", "nicdark-shortcodes" )
         ),
         array(
         'type' => 'dropdown',
		    'heading' => "Bg Color",
		    'param_name' => 'bgcolor',
		    'value' => array( "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
		    'description' => __( "Select your color", "nicdark-shortcodes" )
         ),
         array(
         'type' => 'dropdown',
        'heading' => "Align",
        'param_name' => 'align',
        'value' => array( "left", "center", "right" ),
        'description' => __( "Choose the alignment", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Class", "nicdark-shortcodes" ),
            "param_name" => "class",
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Custom class", "nicdark-shortcodes" )
         )
      )
   ) );
}
//end shortcode