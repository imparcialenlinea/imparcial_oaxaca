
<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $cat
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $title = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );



?>
<?php if($title!=''){ ?>
<div class="title-section linea-<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">
	<h2><?php echo esc_html($title); ?></h2>
</div>
<?php } ?>
<!-- carousel box -->
<div class="owl-wrapper">


	<div class="owl-carousel" data-num="1" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">
	
		
		<?php echo wpb_js_remove_wpautop($content); ?>
		
		


	</div>

</div>
<!-- End carousel box -->
