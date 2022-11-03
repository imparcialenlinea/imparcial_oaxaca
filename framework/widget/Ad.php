<?php
// Creating the widget 
class ad_inventory_widget extends WP_Widget {
function __construct() {
parent::__construct(

// Base ID of your widget
'ad_inventory_widget', 

// Widget name will appear in UI
esc_html__('Ad inventory', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Ad de publicidad en sidebar', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
	echo '<center>';
	if($instance[ 'space' ]==1){
    	get_template_part('ads/AD_sidebar1');
	}elseif($instance[ 'space' ]==2){
    	get_template_part('ads/AD_sidebar2');	
	}elseif($instance[ 'space' ]==3){
    	get_template_part('ads/AD_sidebar3');
	}elseif($instance[ 'space' ]==4){
    	get_template_part('ads/AD_sidebar4');         
	}
	echo '</center>';?>
<?php
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {

if ( isset( $instance[ 'space' ] ) ) {
	$space = $instance[ 'space' ];
}
else {
	 $space = 1;
}




// Widget admin form
?>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'space' )); ?>"><?php esc_html_e( 'Número de espacio:', 'hotmagazine'); ?></label> 
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
function wpb_load_widgetAD() {
	register_widget( 'ad_inventory_widget' );
}
add_action( 'widgets_init', 'wpb_load_widgetAD' );
?>