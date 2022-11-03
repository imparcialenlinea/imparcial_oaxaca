<?php

// Creating the widget 
class podriainteresar_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'podriainteresar_post_widget', 

// Widget name will appear in UI
esc_html__('Te podría interesar', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Te podría interesar (AUTO)', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
// This is where you run the code and display the output
?>
	<?php if(in_category(2) or is_page_template( 'template-policiaca.php' )){ //SI ES NOTA DE POLICIACA 
		    $instance['mostrarcat']='2,11,7';     
    	}elseif(in_category(array(20,13,12)) or is_page_template( 'template-istmo.php' ) or is_page_template( 'template-costa.php' ) or is_page_template( 'template-cuenca.php' )){ //SI ES NOTA DEL ISTMO 
		    $instance['mostrarcat']='20,13,12,6,17,18,2605';    
    	}elseif(in_category(array(15,69,70,74,72,73,71, 1083)) or is_page_template( 'template-estilo.php' )){ //SI ES NOTA DE ESTILO 
		    $instance['mostrarcat']='15,69,70,74,72,73,1083';
    	}elseif(in_category(5) or is_page_template( 'template-deportes.php' )){ //SI ES NOTA DE DEPORTES 
		    $instance['mostrarcat']='5,10,7,6,19';	
    	}elseif(in_category(9)){ //SI ES NOTA DE OPINION
		    $instance['mostrarcat']='2605,3,17,18';						
   		}else{
		    $instance['mostrarcat']='20,13,12,6,17,18,2605,3,19,8,4,18';			
    	} ?>
<h2 class="title-section widgettitle"><?php echo $title;?></h2>
<div class=" posts-widget">
  <ul class="list-posts">
  
  	<?php 		
		$arr = array(	'post_type' => 'post', 
						'posts_per_page' => $instance['count'],
						'orderby'=>'rand',
						'cat' => $instance['mostrarcat'] ,
					    'date_query' => array(
					        array(
						            'after' => '2 days ago'
        					)
					    )									
					);
		
		$query = new WP_Query($arr);
		while($query->have_posts()) : $query->the_post();
	?>
	
    <li>
      <?php if(has_post_thumbnail()){ ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
		<?php }else{ ?>
		<img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_small.jpg" />
		<?php } ?>
      	<div class="post-content">
		<!--	<?php the_category(', '); ?>-->
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
			<div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="small"></div>
      
    </li>
    
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
}
if ( isset( $instance[ 'count' ] ) ) {
$count = $instance[ 'count' ];
}
else {
$count = 3;

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
function wpb_load_widget_podriainteresar() {
	register_widget( 'podriainteresar_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget_podriainteresar' );
?>