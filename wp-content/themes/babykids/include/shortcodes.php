<?php


vc_set_as_theme( $disable_updater = true );

//remove elem vc
vc_remove_element( "vc_pinterest" );
vc_remove_element( "vc_facebook" );
vc_remove_element( "vc_tweetmeme" );
vc_remove_element( "vc_googleplus" );
vc_remove_element( "vc_flickr" );
vc_remove_element( "vc_separator" );
vc_remove_element( "vc_text_separator" );
vc_remove_element( "vc_custom_heading" );
vc_remove_element( "vc_posts_slider" );
vc_remove_element( "vc_cta_button" );
vc_remove_element( "vc_cta_button2" );
vc_remove_element( "vc_raw_html" );
vc_remove_element( "vc_raw_js" );
vc_remove_element( "vc_carousel" );
vc_remove_element( "vc_button2" );
vc_remove_element( "vc_message" );
vc_remove_element( "vc_pie" );
vc_remove_element( "vc_images_carousel" );
vc_remove_element( "vc_video" );
vc_remove_element( "vc_posts_grid" );


////////////////////////////////////EDIT ROW////////////////////////////////////
//add row param
vc_add_param("vc_row", array(
  'type' => 'textfield',
  'heading' => __( 'Section ID', 'babykids' ),
  'param_name' => 'idsection',
  'description' => __( 'Insert section ID for anchor link. E.g. my_section_id_1', 'babykids' )
));
vc_add_param("vc_row", array(
   'type' => 'dropdown',
    'heading' => "Style",
    'param_name' => 'row_style',
    'value' => array( "container", "full_width" ),
    'description' => __( "Choose the style for the row", "babykids" )
));
//add row param
vc_add_param("vc_row", array(
  'type' => 'dropdown',
  'heading' => __( 'Parallax', 'babykids' ),
  'param_name' => 'imgparallax',
  'value' => array(
    __( 'No', 'babykids' ) => 'no',
    __( 'Yes', 'babykids' ) => 'yes'
  ),
  'description' => __( 'Set the image in Design Options Tab', 'babykids' )
));
vc_add_param("vc_row", array(
  'type' => 'textfield',
  'heading' => __( 'ID for parallax', 'babykids' ),
  'param_name' => 'idparallax',
  'description' => __( 'Insert parallax ID name. E.g. my_first_parallax_1', 'babykids' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row", array(
  'type' => 'attach_image',
  'heading' => __( 'Image Parallax', 'js_composer' ),
  'param_name' => 'srcparallax',
  'value' => '',
  'description' => __( 'Select image from media library.', 'js_composer' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row", array(
  'type' => 'dropdown',
  'heading' => __( 'Color Filter', 'babykids' ),
  'param_name' => 'filter',
  'description' => __( 'Choose color filter', 'babykids' ),
  'value' => array( "none", "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));



vc_add_param("vc_row_inner", array(
  'type' => 'textfield',
  'heading' => __( 'Section ID', 'babykids' ),
  'param_name' => 'idsection',
  'description' => __( 'Insert section ID for anchor link. E.g. my_section_id_1', 'babykids' )
));
vc_add_param("vc_row_inner", array(
   'type' => 'dropdown',
    'heading' => "Style",
    'param_name' => 'row_style',
    'value' => array( "full_width", "container" ),
    'description' => __( "Choose the style for the row", "babykids" )
));
vc_add_param("vc_row_inner", array(
  'type' => 'dropdown',
  'heading' => __( 'Parallax', 'babykids' ),
  'param_name' => 'imgparallax',
  'value' => array(
    __( 'No', 'babykids' ) => 'no',
    __( 'Yes', 'babykids' ) => 'yes'
  ),
  'description' => __( 'Set the image in Design Options Tab', 'babykids' )
));
vc_add_param("vc_row_inner", array(
  'type' => 'textfield',
  'heading' => __( 'ID for parallax', 'babykids' ),
  'param_name' => 'idparallax',
  'description' => __( 'Insert parallax ID name. E.g. my_first_parallax_1', 'babykids' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row_inner", array(
  'type' => 'attach_image',
  'heading' => __( 'Image Parallax', 'js_composer' ),
  'param_name' => 'srcparallax',
  'value' => '',
  'description' => __( 'Select image from media library.', 'js_composer' ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
vc_add_param("vc_row_inner", array(
  'type' => 'dropdown',
  'heading' => __( 'Color Filter', 'babykids' ),
  'param_name' => 'filter',
  'description' => __( 'Choose color filter', 'babykids' ),
  'value' => array( "none", "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
  'dependency' => array( 'element' => 'imgparallax', 'value' => array( 'yes' ) )
));
//remove param
vc_remove_param( "vc_row", "font_color" );


////////////////////////////////////EDIT BUTTON////////////////////////////////////

//change category
$buttoncategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/button.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_button', $buttoncategory );

//remove param
vc_remove_param( "vc_button", "color" );
vc_remove_param( "vc_button", "icon" );
vc_remove_param( "vc_button", "size" );
vc_remove_param( "vc_button", "el_class" );
vc_remove_param( "vc_button", "href" );
vc_remove_param( "vc_button", "target" );

//add param
vc_add_param("vc_button", array(
   'type' => 'checkbox',
    'heading' => "Remove Title",
    'param_name' => 'hidetitle',
    'value' => array( __( '', 'js_composer' ) => '1' ),
    'description' => __( "Hide button text for icon button", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'vc_link',
    'heading' => "Link",
    'param_name' => 'link',
    'value' => '',
    'description' => __( "Insert link", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'dropdown',
    'heading' => "Size",
    'param_name' => 'size',
    'value' => array( "medium", "big", "small" ),
    'description' => __( "Choose the size for the button", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'textfield',
    'heading' => "Icon",
    'param_name' => 'icon',
    'value' => '',
    'description' => __( "Insert icon code e.g. icon-diamond <a target='_blank' href='http://www.nicdarkthemes.com/themes/baby-kids/html/demo/icons.php'>see all icons</a>", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'dropdown',
    'heading' => "Bg Color",
    'param_name' => 'bgcolor',
    'value' => array( "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
    'description' => __( "Choose the color for the button", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'checkbox',
    'heading' => "Remove Shadow",
    'param_name' => 'hideshadow',
    'value' => array( __( '', 'js_composer' ) => '1' ),
    'description' => __( "Hide shadow button", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'dropdown',
    'heading' => "Shape",
    'param_name' => 'shape',
    'value' => array( __( 'Radius', 'js_composer' ) => 'nicdark_radius', __( 'Square', 'js_composer' ) => 'nicdark_square', __( 'Circle', 'js_composer' ) => 'nicdark_radius_circle' ),
    'description' => __( "Choose the shape for the button", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'dropdown',
    'heading' => "Align",
    'param_name' => 'align',
    'value' => array( "left", "right" ),
    'description' => __( "Choose button alignment, for center put in column class settings the class 'nicdark_center'", "babykids" )
));
vc_add_param("vc_button", array(
   'type' => 'textfield',
    'heading' => "Class",
    'param_name' => 'class',
    'value' => '',
    'description' => __( "Insert custom class. E.g. nicdark_marginright20", "babykids" )
));


////////////////////////////////////EDIT TOOGLE////////////////////////////////////

//change category
$togglecategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/toogle.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_toggle', $togglecategory );


//add param
vc_add_param("vc_toggle", array(
   'type' => 'dropdown',
    'heading' => "Bg Color",
    'param_name' => 'bgcolor',
    'value' => array( "yellow", "orange", "red", "violet", "blue", "green", "greydark", "grey" ),
    'description' => __( "Choose the color for the toogle", "babykids" )
));
vc_add_param("vc_toggle", array(
   'type' => 'textfield',
    'heading' => "Icon",
    'param_name' => 'icon',
    'value' => '',
    'description' => __( "Insert icon code e.g. icon-diamond <a target='_blank' href='http://www.nicdarkthemes.com/themes/baby-kids/html/demo/icons.php'>see all icons</a>", "babykids" )
));


////////////////////////////////////EDIT MAP////////////////////////////////////

//change category
$gmapscategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/gmaps.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_gmaps', $gmapscategory );

//remove param
vc_remove_param( "vc_gmaps", "title" );


////////////////////////////////////EDIT ACCORDION////////////////////////////////////

//change category
$accordioncategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/accordion.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_accordion', $accordioncategory );

//remove param
vc_remove_param( "vc_accordion", "title" );

//add param
vc_add_param("vc_accordion_tab", array(
   'type' => 'dropdown',
    'heading' => "Bg Color",
    'param_name' => 'bgcolor',
    'value' => array( "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
    'description' => __( "Choose the bg color for the title accordion", "babykids" )
));


////////////////////////////////////EDIT TAB////////////////////////////////////

//change category
$tabscategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/tabs.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_tabs', $tabscategory );

//add param
vc_add_param("vc_tab", array(
   'type' => 'dropdown',
    'heading' => "Bg Color",
    'param_name' => 'bgcolor',
    'value' => array( "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
    'description' => __( "Choose the bg color for the title accordion", "babykids" )
));
vc_add_param("vc_tab", array(
   'type' => 'textfield',
    'heading' => "Icon",
    'param_name' => 'icon',
    'value' => '',
    'description' => __( "Insert icon code e.g. icon-diamond <a target='_blank' href='http://www.nicdarkthemes.com/themes/baby-kids/html/demo/icons.php'>see all icons</a>", "babykids" )
));
vc_add_param("vc_tab", array(
    'type' => 'textfield',
    'heading' => "Class",
    'param_name' => 'customclass',
    'value' => '',
    'description' => __( "Insert custom class. E.g. nicdark_width100_iphonepotr", "babykids" )   
));

////////////////////////////////////EDIT TOUR////////////////////////////////////
//change category
$tourcategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/tour.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_tour', $tourcategory );



////////////////////////////////////EDIT PROGRESS BAR////////////////////////////////////
//change category
$progressbarcategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/progressbar.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_progress_bar', $progressbarcategory );

//remove param
vc_remove_param( "vc_progress_bar", "bgcolor" );

//add param
vc_add_param("vc_progress_bar", array(
   'type' => 'colorpicker',
    'heading' => __( 'Custom Shadow Color', 'js_composer' ),
    'param_name' => 'shadow',
    'description' => __( 'Select shadow color for your bar.', 'babykids' )
));
vc_add_param("vc_progress_bar", array(
   'type' => 'textfield',
    'heading' => "Icon",
    'param_name' => 'icon',
    'value' => '',
    'description' => __( "Insert icon code e.g. icon-diamond <a target='_blank' href='http://www.nicdarkthemes.com/themes/baby-kids/html/demo/icons.php'>see all icons</a>", "babykids" )
));


////////////////////////////////////EDIT GALLERY////////////////////////////////////
//change category
$gallerycategory = array (
  "icon" => get_template_directory_uri() . "/vc_extend/gallery.png",
  "category" => __( "Nicdark Shortcodes", "babykids")
);
vc_map_update( 'vc_gallery', $gallerycategory );










