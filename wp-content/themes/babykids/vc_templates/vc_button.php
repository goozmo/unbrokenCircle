<?php
$output = $bgcolor = $size = $icon = $link = $class = $title = $hidetitle = $hideshadow = $shape = $align = '';
extract( shortcode_atts( array(
	'bgcolor' => '',
	'size' => '',
	'icon' => '',
	'link' => '',
	'class' => '',
	'hidetitle' => '',
	'shape' => '',
	'hideshadow' => '',
	'title' => __( 'Text on the button', "js_composer" ),
	'align' => ''
), $atts ) );


//target if
$link = ( $link == '||' ) ? '' : $link;
$link = vc_build_link( $link );
$a_href = $link['url'];
$a_title = $link['title'];
$a_target = $link['target'];

//if title is present set margin
$margin = ( $hidetitle != 1 ) ? ' nicdark_marginright10 ' : '';

//icon if
$icon = ( $icon != '' ) ? ' <i class="'.$margin.' ' . $icon . '"></i>' : '';

//title if
$title = ( $hidetitle != 1 ) ? ''.$title.'' : '';
$btnclass = ( $hidetitle != 0 ) ? '_icon' : '';

//shadow if
$shadow = ( $hideshadow != 1 ) ? ' nicdark_shadow ' : '';

//align if
$align = ( $align == 'right' ) ? 'right' : '';

//return
$output .= '<a title="'.$a_title.'" target="'.$a_target.'" href="'.$a_href.'" class="'.$class.' nicdark_btn'.$btnclass.' nicdark_bg_'.$bgcolor.' '.$size.' '.$align.' '.$shadow.' '.$shape.' white">'.$icon.''.$title.'</a>';

echo $output . $this->endBlockComment( 'button' ) . "\n";