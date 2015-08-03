<?php
$output = $title = $el_class = $open = $css_animation = '';
extract(shortcode_atts(array(
    'title' => __("Click to toggle", "js_composer"),
    'icon' => '',
    'bgcolor' => '',
    'el_class' => '',
    'open' => 'false',
    'css_animation' => ''
), $atts));

$el_class = $this->getExtraClass($el_class);
$open = ( $open == 'true' ) ? ' wpb_toggle_title_active' : '';
$el_class .= ( $open == ' wpb_toggle_title_active' ) ? ' wpb_toggle_open' : '';

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_toggle' . $open, $this->settings['base'], $atts );
$css_class .= $this->getCSSAnimation($css_animation);

$output .= apply_filters('wpb_toggle_heading', '<h5 class="nicdark_radius nicdark_shadow nicdark_bg_'.$bgcolor.' nicdark_toogle_header big white '.$css_class.'">'.$title.'<i class="'.$icon.' nicdark_iconbg right medium '.$bgcolor.'"></i></h5>', array('title'=>$title, 'open'=>$open));
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_toggle_content' . $el_class, $this->settings['base'], $atts );
$output .= '<div class="nicdark_bg_grey nicdark_shadow nicdark_radius_bottom nicdark_toogle_content '.$css_class.'"><div class="nicdark_margin200">'.wpb_js_remove_wpautop($content, true).'</div></div>'.$this->endBlockComment('toggle')."\n";

echo $output;