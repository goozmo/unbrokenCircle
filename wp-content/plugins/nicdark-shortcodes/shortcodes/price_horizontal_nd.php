<?php

/////////////////////////////////////////////////////////PRICE HORIZONTAL/////////////////////////////////////////
add_shortcode('price_horizontal_nd', 'nicdark_shortcode_price_horizontal');
function nicdark_shortcode_price_horizontal($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'title' => '',
         'price' => '',
         'description' => '',
         'text' => '',
         'icon' => '',
         'color' => '',
         'class' => ''
      ), $atts);

   $str = '';
      
   $str .= '
      <div class="'.$atts['class'].' nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">

      <div class="nicdark_textevidence nicdark_bg_'.$atts['color'].' nicdark_radius nicdark_width_percentage50 center nicdark_width100_responsive">
          <div class="nicdark_margin20">
          
              <div class="nicdark_space30"></div>
          
              <h1 class="white subtitle">'.$atts['price'].'</h1>
              <div class="nicdark_space20"></div>
              <div class="nicdark_divider small"><span class="nicdark_bg_white nicdark_radius"></span></div>
              <div class="nicdark_space20"></div>
              <h4 class="white subtitle">'.$atts['description'].'</h4>

              <div class="nicdark_space30"></div>                        
      
          </div>

          <i class="'.$atts['icon'].' nicdark_iconbg left big '.$atts['color'].'"></i>
      </div>
      
      <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
          <div class="nicdark_margin20">
          
              <div class="nicdark_space20"></div>
              <h4 class="grey">'.$atts['title'].'</h4>                        
              <div class="nicdark_space20"></div>
              <p>'.$atts['text'].'</p>

          </div>
      </div>

      <a href="#" class="nicdark_btn_icon small nicdark_bg_white nicdark_radius_circle nicdark_absolute_right nicdark_border_grey"></a>

    </div>
   ';

   return apply_filters('uds_shortcode_out_filter', $str);
}

//vc
add_action( 'vc_before_init', 'nicdark_price_horizontal' );
function nicdark_price_horizontal() {
   vc_map( array(
      "name" => __( "Price Horizontal", "nicdark-shortcodes" ),
      "base" => "price_horizontal_nd",
      'description' => __( 'Add single price', 'nicdark-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => get_template_directory_uri() . "/vc_extend/price_horizontal.png",
      "class" => "",
      "category" => __( "Nicdark Shortcodes", "nicdark-shortcodes"),
      "params" => array(

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nicdark-shortcodes" ),
            "param_name" => "title",
            'admin_label' => true,
            "value" => __( "TITLE", "nicdark-shortcodes" ),
            "description" => __( "Insert the title", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Price", "nicdark-shortcodes" ),
            "param_name" => "price",
            "value" => __( "$ 125", "nicdark-shortcodes" ),
            "description" => __( "Insert the price", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description", "nicdark-shortcodes" ),
            "param_name" => "description",
            "value" => __( "MONTHLY", "nicdark-shortcodes" ),
            "description" => __( "Description under the price", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Text", "nicdark-shortcodes" ),
            "param_name" => "text",
            "value" => __( "Insert some content for you price shortcode", "nicdark-shortcodes" ),
            "description" => __( "Insert your content", "nicdark-shortcodes" )
         ),
         array(
         'type' => 'dropdown',
          'heading' => "Bg Color",
          'param_name' => 'color',
          'value' => array( "yellow", "orange", "red", "violet", "blue", "green", "greydark" ),
          'description' => __( "Select your color", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Icon Code", "nicdark-shortcodes" ),
            "param_name" => "icon",
            "value" => __( "icon-money-1", "nicdark-shortcodes" ),
            'description' => __( "Insert icon code e.g. icon-diamond <a target='_blank' href='http://www.nicdarkthemes.com/themes/baby-kids/html/demo/icons.php'>see all icons</a>", "nicdark-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Custom class", "nicdark-shortcodes" ),
            "param_name" => "class",
            "value" => __( "", "nicdark-shortcodes" ),
            "description" => __( "Insert custom class", "nicdark-shortcodes" )
         )

      )
   ) );
}
//end shortcode