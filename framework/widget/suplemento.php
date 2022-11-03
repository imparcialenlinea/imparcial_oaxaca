<?php

// Creating the widget 
class suplemento_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'suplemento_post_widget', 

// Widget name will appear in UI
esc_html__('QK Suplemento', 'hotmagazine'), 

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
$pdfquery = array(	
	'posts_per_page' =>1,
	'post_type' => 'pdf',
	'p' =>$instance['uni'],
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
		'child_of' => $instance['uni'],
        'post_parent' =>$instance['uni'],
		
		
));
foreach ($attachments as $attachment) {
$urlunico=wp_get_attachment_url( $attachment->ID );
}


?>
		<!-- Impreso--> 


					<div class="impreso">	
							<center><a target="blank" href="<?php echo ($urlunico); ?>">
							<img class="suplemento" src="<?php echo ($imgunico); ?>" width="230px" style="border:1px solid #666666" /></a></center>
                             
					</div>




<?php

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
	if ( isset( $instance[ 'uni' ] ) ) {
$uni = $instance[ 'uni' ];
}
else {
$uni = '0';
}


// Widget admin form
?>
<p>

<p>
<label for="<?php echo $this->get_field_id('uni'); ?>"><?php _e('ID del Suplemento:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('uni'); ?>" name="<?php echo $this->get_field_name('uni'); ?>" type="text" value="<?php echo esc_attr($uni); ?>" />
</p>


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['uni'] = ( ! empty( $new_instance['uni'] ) ) ? strip_tags( $new_instance['uni'] ) : '';

return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widgetsuple() {
	register_widget( 'suplemento_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widgetsuple' );
?>