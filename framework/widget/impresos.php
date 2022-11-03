<?php

// Creating the widget 
class impresos_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'impresos_post_widget', 

// Widget name will appear in UI
esc_html__('QK Impresos', 'hotmagazine'), 

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
$pdf1 = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'post_type'=>'pdf',
        'tax_query' => array(
            array(
                'taxonomy' => 'publicacion',
                'field' => 'slug',
                'terms' => $instance['izq'],
            ),
        ),  
);
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
$pdf3 = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'post_type'=>'pdf',
        'tax_query' => array(
            array(
                'taxonomy' => 'publicacion',
                'field' => 'slug',
                'terms' => $instance['der'],
            ),
        ),  
);
$pdf4 = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'post_type'=>'pdf',
        'tax_query' => array(
            array(
                'taxonomy' => 'publicacion',
                'field' => 'slug',
                'terms' => $instance['sup'],
            ),
        ),  
);

$pdfizq = new WP_Query($pdf1);
$pdfcen = new WP_Query($pdf2);
$pdfder = new WP_Query($pdf3);
$pdfsup = new WP_Query($pdf4);

//Datos de la izquierda
$pdfizq->the_post();
$id=get_the_ID();
$imgizq =get_the_post_thumbnail_url($thumbsize);
if ( $attachments = get_children( array(
        'post_type' => 'attachment',
        'post_mime_type' => array('application/pdf'),
        'numberposts' => 1,
        'post_status' => null,
		'child_of' => $id,
        'post_parent' => $id,
		
		
)));
foreach ($attachments as $attachment) {
$urlizq=wp_get_attachment_url( $attachment->ID );
}

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

//Datos de la derecha
$pdfder->the_post();
$id=get_the_ID();
$imgder =get_the_post_thumbnail_url($thumbsize);
if ( $attachments = get_children( array(
        'post_type' => 'attachment',
        'post_mime_type' => array('application/pdf'),
        'numberposts' => 1,
        'post_status' => null,
		'child_of' => $id,
        'post_parent' => $id,
		
		
)));
foreach ($attachments as $attachment) {
$urlder=wp_get_attachment_url( $attachment->ID );
}

//Datos del suplemento
if($instance['num']=='4'){
$pdfsup->the_post();
$id=get_the_ID();
$imgsup =get_the_post_thumbnail_url($thumbsize);
if ( $attachments = get_children( array(
        'post_type' => 'attachment',
        'post_mime_type' => array('application/pdf'),
        'numberposts' => 1,
        'post_status' => null,
		'child_of' => $id,
        'post_parent' => $id,
		
		
)));
foreach ($attachments as $attachment) {
$urlsup=wp_get_attachment_url( $attachment->ID );
}}

?>
		<!-- Impreso--> 
				<div class="impreso-envoltura" style="margin-bottom:30px">

					<div class="impreso">
                    		<?php if($instance['num']=='4'){?>
                            <a target="blank" href="<?php echo ($urlsup); ?>">
                            <img class="impreso-izquierda2" src="<?php echo ($imgsup); ?>"></a>
                            <?php } ?>
							<a target="blank" href="<?php echo ($urlizq); ?>">
							<img class="impreso-izquierda" src="<?php echo ($imgizq); ?>" /></a>
						
							<a target="blank" href="<?php echo ($urlcen); ?>">
							<img class="impreso-centro" src="<?php echo ($imgcen); ?>" /></a>

							<a target="blank" href="<?php echo ($urlder); ?>">
							<img class="impreso-derecha" src="<?php echo ($imgder); ?>" /></a>
                            
                                                        
					</div>

				</div>


<?php

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {

if ( isset( $instance[ 'izq' ] ) ) {
$izq = $instance[ 'izq' ];
}
else {
$izq = esc_html__( 'imparcial-istmo', 'hotmagazine' );
}
if ( isset( $instance[ 'cen' ] ) ) {
$cen = $instance[ 'cen' ];
}
else {
$cen = esc_html__( 'imparcial-oaxaca', 'hotmagazine' );
}
if ( isset( $instance[ 'der' ] ) ) {
$der = $instance[ 'der' ];
}
else {
$der = esc_html__( 'clasificados', 'hotmagazine' );
}
if ( isset( $instance[ 'sup' ] ) ) {
$sup = $instance[ 'sup' ];
}
else {
$sup = esc_html__( 'suplemento', 'hotmagazine' );
}
if ( isset( $instance[ 'num' ] ) ) {
$num = $instance[ 'num' ];
}
else {
$num = esc_html__( '3', 'hotmagazine' );
}

// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id('izq'); ?>"><?php _e('Izquierda:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('izq'); ?>" name="<?php echo $this->get_field_name('izq'); ?>" type="text" value="<?php echo esc_attr($izq); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('cen'); ?>"><?php _e('Centro:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('cen'); ?>" name="<?php echo $this->get_field_name('cen'); ?>" type="text" value="<?php echo esc_attr($cen); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('der'); ?>"><?php _e('Derecha:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('der'); ?>" name="<?php echo $this->get_field_name('der'); ?>" type="text" value="<?php echo esc_attr($der); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('sup'); ?>"><?php _e('Suplemento:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('sup'); ?>" name="<?php echo $this->get_field_name('sup'); ?>" type="text" value="<?php echo esc_attr($sup); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('num'); ?>"><?php _e('¿Mostrar 3 o 4?', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('num'); ?>" name="<?php echo $this->get_field_name('num'); ?>" type="text" value="<?php echo esc_attr($num); ?>" />
</p>


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['izq'] = ( ! empty( $new_instance['izq'] ) ) ? strip_tags( $new_instance['izq'] ) : '';
$instance['cen'] = ( ! empty( $new_instance['cen'] ) ) ? strip_tags( $new_instance['cen'] ) : '';
$instance['der'] = ( ! empty( $new_instance['der'] ) ) ? strip_tags( $new_instance['der'] ) : '';
$instance['sup'] = ( ! empty( $new_instance['sup'] ) ) ? strip_tags( $new_instance['sup'] ) : '';
$instance['num'] = ( ! empty( $new_instance['num'] ) ) ? strip_tags( $new_instance['num'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widgetimpre() {
	register_widget( 'impresos_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widgetimpre' );
?>