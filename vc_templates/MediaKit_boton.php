<?php 

if ( ! defined( 'ABSPATH' ) ) {

  die( '-1' );

}


/**

 * Shortcode attributes

 * @var $atts
 * @var $grupo_slug 
 * @var $this WPBakeryShortCode_qk_team

 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$custom  = hotmagazine_custom();


// This is where you run the code and display the output
$pdfquery = array(	
	'posts_per_page' =>1,
	'post_type' => 'impreso',
	'post_status' => 'publish',
	'tax_query' => array(
            array(
                'taxonomy' => 'impresotype',
				'field'    => 'slug',
				'terms'    => 'media-kit',				
            ),
        ),
);

$pdfuni = new WP_Query($pdfquery);

//Datos unico
$pdfuni->the_post();
$id=get_the_ID();
$attachments = get_children( array(
        'post_type' => 'attachment',
        'post_mime_type' => array('application/pdf'),
        'numberposts' => 1,
        'post_status' => null,
		'child_of' => $id,
        'post_parent' => $id,
		
		
));
foreach ($attachments as $attachment) {
$urlunico=wp_get_attachment_url( $attachment->ID );
}
?>
<div class="vc_btn3-container vc_btn3-center">
	<a class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-block vc_btn3-icon-left vc_btn3-color-primary" href="<?php echo $urlunico ?>" title="" target="_blank"><i class="vc_btn3-icon fa fa-download"></i> Descarga nuestro Media Kit
    </a>
</div>