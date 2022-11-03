<?php
// Creating the widget 
class ad_inventory_widget_resp extends WP_Widget {
function __construct() {
parent::__construct(

// Base ID of your widget
'ad_inventory_widget_resp', 

// Widget name will appear in UI
esc_html__('Ad double (responsive)', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Ad de publicidad en sidebar (opcion a movil)', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
	$d=base64_decode($instance['desktop']);
	$m=base64_decode($instance['mobile']);
	echo '<center>';
	if(!wp_is_mobile()){ 
		echo rawurldecode($d);	
	}else{ 
		if($m!=''){
			echo rawurldecode($m);	
		}else{
			echo rawurldecode($d);	
		}
	}	
	echo '</center>';?>
<?php
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {

if ( isset( $instance[ 'desktop' ] ) ) {
	$desktop =$instance[ 'desktop' ];
}
else {
	 $desktop = '';
}
if ( isset( $instance[ 'mobile' ] ) ) {
	$mobile =$instance[ 'mobile' ];
}
else {
	 $mobile = $instance['desktop'];
}




// Widget admin form
?>

<p>
<label for="<?php echo esc_attr( $this->get_field_id( 'desktop' ) ); ?>"><?php _e( 'Texto para desktop:', 'hotmagazine' ); ?></label>
<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'desktop' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'desktop' ) ); ?>"><?php echo wp_kses_post( $desktop ); ?></textarea>
</p>

<p>
<label for="<?php echo esc_attr( $this->get_field_id( 'mobile' ) ); ?>"><?php _e( 'Texto para mobile:', 'hotmagazine' ); ?></label>
<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'mobile' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'mobile' ) ); ?>"><?php echo wp_kses_post( $mobile ); ?></textarea>
</p>

<?php 
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['desktop'] = ( ! empty( $new_instance['desktop'] ) ) ? strip_tags( $new_instance['desktop'] ) : '';
$instance['mobile'] = ( ! empty( $new_instance['mobile'] ) ) ? strip_tags( $new_instance['mobile'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widgetAD_mob() {
	register_widget( 'ad_inventory_widget_resp' );
}
add_action( 'widgets_init', 'wpb_load_widgetAD_mob' );
?>