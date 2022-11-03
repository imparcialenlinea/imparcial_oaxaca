<?php

// Creating the widget 
class columnasestilo_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'columnasestilo_post_widget', 

// Widget name will appear in UI
esc_html__('QK Columnas Estilo', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Listando las columnas de Estilo', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
?>

<div class=" posts-widget">
  
  <ul class="list-posts">
  
  	<?php 
		
		$arr = array('category__in' => array(1083),'post_type' => 'post', 'posts_per_page' => $instance['count'],);
		
		$query = new WP_Query($arr);
		while($query->have_posts()) : $query->the_post();
		 $autor=get_the_author_id();
		if ($autor=='98'){
			$columna='/wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_elite.jpg';		
		}elseif ($autor=='20'){
			$columna='/wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_coctelera.jpg';
		}elseif ($autor=='40'){
			$columna='/wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_huatulco.jpg';
		//}elseif ($post->post_author==''){
			//$columna='wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_columnasuenos.jpg';
		}elseif (has_tag('Estilo Joven')){
			$columna='/wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_estilojoven.jpg';
		//}elseif ($post->post_author=='27'){
			//$columna='wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_mariahortensia.jpg';
		}elseif (has_tag('Socialitos')){
			$columna='/wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_socialitos.jpg';
		//}elseif ($post->post_author=='27'){
			//$columna='wp-content/themes/imparcialoaxacamx/columnas/estilo_oaxaca_thera.jpg';
		}		
		
	?>
    
    
    
	
<a href="<?php the_permalink(); ?>"><img src="<?php echo($columna)?>" width="100%" /></a>
    <li>
      	<div class="post-content">
		<!--	<?php the_category(', '); ?>-->
			<ul class="post-tags">
	           <li><i class="fa fa-user"></i> Por <?php the_author(); ?></li>
               <li><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' )); ?></li>
			</ul>
            <p><?php the_excerpt();?></p>
            <a href="<?php the_permalink(); ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i><span>Leer más</span></a>
		</div>
      <br />
    </li><br />
    
    <?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
  </ul>
</div>


<?php

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {

if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = esc_html__( 'Random Posts', 'hotmagazine' );
//$count = 4;
}
if ( isset( $instance[ 'count' ] ) ) {
$count = $instance[ 'count' ];
}
else {
$count = 3;
//$count = 4;
}


// Widget admin form
?>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Título:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'count' )); ?>"><?php esc_html_e( 'Número de posts:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'count' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'count' )); ?>" type="text" value="<?php echo esc_attr( $count ); ?>" />
</p>


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widgetestilo() {
	register_widget( 'columnasestilo_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widgetestilo' );
?>