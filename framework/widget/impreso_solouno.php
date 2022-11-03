<?php

// Creating the widget 
class un_impreso_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'un_impreso_post_widget', 

// Widget name will appear in UI
esc_html__('QK Un impreso', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'PDFS Impresos', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output

$pdf2 = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'post_type'=>'pdf',
        'tax_query' => array(
            array(
                'taxonomy' => 'publicacion',
                'field' => 'slug',
                'terms' => $instance['cen'],
            ),
        ),  
);


$pdfcen = new WP_Query($pdf2);




//Datos centro
$pdfcen->the_post();
$id=get_the_ID();
$imgcen =get_the_post_thumbnail_url($thumbsize);
if ( $attachments = get_children( array(
        'post_type' => 'attachment',
        'post_mime_type' => array('application/pdf'),
        'numberposts' => 1,
        'post_status' => null,
		'child_of' => $id,
        'post_parent' => $id,
		
		
)));
foreach ($attachments as $attachment) {
$urlcen=wp_get_attachment_url( $attachment->ID );
}



?>
<h2 class="title-section widgettitle ocultarmovil">Impreso</h2>
                		<!-- Impreso--> 


					<div class="impreso ocultarmovil">	
							<center><a target="blank" href="<?php echo ($urlcen); ?>">
							<img class="suplemento" src="<?php echo ($imgcen); ?>" width="180px" /></a></center>
                             
					</div>
                    <p>&nbsp;</p>



<?php

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {


if ( isset( $instance[ 'cen' ] ) ) {
$cen = $instance[ 'cen' ];
}
else {
$cen = esc_html__( 'imparcial-oaxaca', 'hotmagazine' );
}


// Widget admin form
?>

<p>
<label for="<?php echo $this->get_field_id('cen'); ?>"><?php _e('Impreso:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('cen'); ?>" name="<?php echo $this->get_field_name('cen'); ?>" type="text" value="<?php echo esc_attr($cen); ?>" />
</p>



<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['cen'] = ( ! empty( $new_instance['cen'] ) ) ? strip_tags( $new_instance['cen'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_un_impre() {
	register_widget( 'un_impreso_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_un_impre' );
?>