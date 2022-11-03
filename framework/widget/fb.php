<?php
// Creating the widget 
class FB_like_widget extends WP_Widget {
function __construct() {
parent::__construct(

// Base ID of your widget
'FB_like_widget', 

// Widget name will appear in UI
esc_html__('FB LIKE', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Espacio vacío', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) { ?>
<div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
<h2 class="title-section widgettitle">Síguenos en Facebook</h2>
<center>
	<?php if(in_category(2) or is_page_template( 'template-policiaca.php' )){ //SI ES NOTA DE POLICIACA ?>
<div class="fb-page" data-href="https://www.facebook.com/imparcialpoliciaca" data-tabs="timeline" data-height="70px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/imparcialpoliciaca" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/imparcialpoliciaca">El Imparcial Policiaca</a></blockquote></div>
	<?php }elseif(in_category(array(20,13,12)) or is_page_template( 'template-istmo.php' ) or is_page_template( 'template-costa.php' ) or is_page_template( 'template-cuenca.php' )){ //SI ES NOTA DEL ISTMO ?>
<div class="fb-page" data-href="https://www.facebook.com/imparcialdelistmo" data-tabs="timeline" data-height="70px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/imparcialdelistmo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/imparcialdelistmo">El Imparcial del Istmo</a></blockquote></div>    
	<?php }elseif(in_category(array(15,69,70,74,72,73,71, 1083)) or is_page_template( 'template-estilo.php' )){ //SI ES NOTA DE ESTILO ?>
<div class="fb-page" data-href="https://www.facebook.com/imparcialestilo" data-tabs="timeline" data-height="70px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/imparcialestilo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/imparcialestilo">Estilo Oaxaca</a></blockquote></div>
	<?php }else{ ?>
<div class="fb-page" data-href="https://www.facebook.com/imparcialoaxaca/" data-tabs="timeline" data-height="70px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/imparcialoaxaca/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/imparcialoaxaca/">El Imparcial de Oaxaca</a></blockquote></div>
	<?php } ?>
</center>  
<div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>  
<?php } 
		
// Widget Backend 
public function form( $instance ) {?>

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
function wpb_load_widget_FB_like() {
	register_widget( 'FB_like_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget_FB_like' );
?>