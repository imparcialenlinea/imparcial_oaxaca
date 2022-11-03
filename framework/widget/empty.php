<?php
// Creating the widget 
class empty_space_widget extends WP_Widget {
function __construct() {
parent::__construct(

// Base ID of your widget
'empty_space_widget', 

// Widget name will appear in UI
esc_html__('Empty space', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Espacio vacío', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) { ?>
<div class="vc_empty_space" style="height: <?php echo $instance[ 'space' ]; ?>"><span class="vc_empty_space_inner"></span></div>
<?php } 
		
// Widget Backend 
public function form( $instance ) {

if ( isset( $instance[ 'space' ] ) ) {
	$space = $instance[ 'space' ];
}
else {
	 $space = '32px';
}




// Widget admin form
?>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'space' )); ?>"><?php esc_html_e( 'Height:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'space' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'space' )); ?>" type="text" value="<?php echo esc_attr( $space ); ?>" />
</p>

<?php 
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['space'] = ( ! empty( $new_instance['space'] ) ) ? strip_tags( $new_instance['space'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget_emptySpace() {
	register_widget( 'empty_space_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget_emptySpace' );
?>