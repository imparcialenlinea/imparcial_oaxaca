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
$title = '';
$id = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}


// This is where you run the code and display the output
$pdfquery = array(	
	'posts_per_page' =>1,
	'post_type' => 'pdf',
	'p' =>$id,
    /*'tax_query' => array(
            array(
                'taxonomy' => 'publicacion',
            ),
        ),*/  
);

$pdfuni = new WP_Query($pdfquery);

//Datos unico
$pdfuni->the_post();
$imgunico =get_the_post_thumbnail_url($thumbsize);
$attachments = get_children( array(
        'post_type' => 'attachment',
        'post_mime_type' => array('application/pdf'),
        'numberposts' => 1,
        'post_status' => null,
		'child_of' => $id,
        'post_parent' =>$id,
		
		
));
foreach ($attachments as $attachment) {
$urlunico=wp_get_attachment_url( $attachment->ID );
}?>

		<!-- Impreso--> 
                    <div class="title-section">
                  	  <h2><?php echo $title ?></h2>
                    </div>

					<div class="impreso">	
							<center><a target="blank" href="<?php echo ($urlunico); ?>">
							<img class="suplemento" src="<?php echo ($imgunico); ?>" width="230px" style="border:1px solid #666666" /></a></center>
                             
					</div>





   
  
<?php wp_reset_postdata(); ?>
<div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
