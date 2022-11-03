<?php

// Creating the widget 
class cintillo_microo_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'cintillo_microo_post_widget', 

// Widget name will appear in UI
esc_html__('Cintillo de Micrositio', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Cintillo de micrositio', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
// before and after widget arguments are defined by themes
//echo $args['before_widget'];

// This is where you run the code and display the output?>
<?php if($instance[ 'mostrar' ]=='yes'){ ?>
			<div class="vc_empty_space" style="height: 1px"><span class="vc_empty_space_inner"></span></div>
			<div>	
				<a <?php if($instance[ 'target' ]=="yes"){echo('target="blank"');} ?> href="<?php echo($instance[ 'url' ]) ?>"><img width="100%" src="<?php if(wp_is_mobile()){ echo($instance[ 'mobile' ]);}else{echo($instance[ 'desktop' ]);} ?>" /></a>     <a class="over-cats category-post especiales " href="<?php echo($instance[ 'url' ]) ?>">sitio especial</a>
			</div>
<?php }?>



<?php

}
		
// Widget Backend 
public function form( $instance ) {
	
	if ( isset( $instance[ 'mostrar' ] ) ) {
		$mostrar = $instance[ 'mostrar' ];
	}else {
		$mostrar = 'no';
	}
	if ( isset( $instance[ 'target' ] ) ) {
		$target = $instance[ 'target' ];
	}else {
		$target = 'no';
	}	
	if ( isset( $instance[ 'url' ] ) ) {
		$url = $instance[ 'url' ];
	}else {
		$url = '/especiales';
	}	
	if ( isset( $instance[ 'desktop' ] ) ) {
		$desktop = $instance[ 'desktop' ];
	}else {
		$desktop = '';
	}	
	if ( isset( $instance[ 'mobile' ] ) ) {
		$mobile = $instance[ 'mobile' ];
	}else {
		$mobile = '';
	}	


// Widget admin form
?>

<p>
<label for="<?php echo $this->get_field_id('mostrar'); ?>"><?php _e('¿Mostrar? Yes or no', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('mostrar'); ?>" name="<?php echo $this->get_field_name('mostrar'); ?>" type="text" value="<?php echo esc_attr($mostrar); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('target'); ?>"><?php _e('Target blank? yes or no:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('target'); ?>" name="<?php echo $this->get_field_name('target'); ?>" type="text" value="<?php echo esc_attr($target); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('URL del micrositio:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo esc_attr($url); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('desktop'); ?>"><?php _e('url de la img en desktop:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('desktop'); ?>" name="<?php echo $this->get_field_name('desktop'); ?>" type="text" value="<?php echo esc_attr($desktop); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('mobile'); ?>"><?php _e('url de la img en mobile:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('mobile'); ?>" name="<?php echo $this->get_field_name('mobile'); ?>" type="text" value="<?php echo esc_attr($mobile); ?>" />
</p>


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['mostrar'] = ( ! empty( $new_instance['mostrar'] ) ) ? strip_tags( $new_instance['mostrar'] ) : '';
$instance['target'] = ( ! empty( $new_instance['target'] ) ) ? strip_tags( $new_instance['target'] ) : '';
$instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
$instance['desktop'] = ( ! empty( $new_instance['desktop'] ) ) ? strip_tags( $new_instance['desktop'] ) : '';
$instance['mobile'] = ( ! empty( $new_instance['mobile'] ) ) ? strip_tags( $new_instance['mobile'] ) : '';

return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget_cintillo() {
	register_widget( 'cintillo_microo_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget_cintillo' );
?>