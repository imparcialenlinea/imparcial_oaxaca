<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts 
 * @var $code_desktop
 * @var $code_mobile
 * @var $this WPBakeryShortCode_qk_team 
 */
 
$code_desktop =  $code_mobile = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$d=base64_decode($code_desktop);
$m=base64_decode($code_mobile);
?>
<center>
<?php 
	if(!wp_is_mobile()){ 
		echo rawurldecode($d);	
	}else{ 
		if($m!=''){
			echo rawurldecode($m);	
		}else{
			echo rawurldecode($d);	
		}
	} 
?>
</center>



