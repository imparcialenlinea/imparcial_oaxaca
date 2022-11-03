<?php

// Creating the widget 
class breves_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'breves_post_widget', 

// Widget name will appear in UI
esc_html__('QK Breves Posts', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Listing Breves Posts', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {


// This is where you run the code and display the output
		$arr = array(	'post_type' => 'post',
		'date_query' 		=> array(
    array(
        'after' => $instance['timeago']
        )
    ), 
						'posts_per_page' => $instance['count'],
						'cat' => $instance['mostrarcat'], 	
						'tax_query' => array( array(
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => array('post-format-aside'),
								'operator' => 'IN'
			   )				 ));
		
		$query = new WP_Query($arr);
		
		//echo date( 'H:i:s', current_time( 'timestamp' ) )+5;?>

<?php if($query->have_posts()){?>

<h2 class="title-section widgettitle">Las Breves</h2>

<div class=" posts-widget">
  
  <ul class="list-posts">
  
  	<?php 
		
		while($query->have_posts()) : $query->the_post();
	?>
	
    <li>
      <?php if(has_post_thumbnail()){ ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
		<?php }else{ ?>
		<img src="http://placehold.it/80x80" />
		<?php } ?>
      	<div class="post-content">
		<!--	<?php the_category(', '); ?>-->
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
			<ul class="post-tags">
	           <li><i class="fa fa-user"></i> Por <?php the_author(); ?></li>
               <li><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' )); ?></li>
			</ul>
		</div>
      
    </li>
    
    <?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
  </ul>
</div>
<div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
<?php }?>


<?php

echo $args['after_widget'];
}
		
// Widget Backend
public function form( $instance ) {

if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = esc_html__( 'Las Breves', 'hotmagazine' );
//$count = 4;
}
if ( isset( $instance[ 'count' ] ) ) {
$count = $instance[ 'count' ];
}
else {
$count = 3;
//$count = 4;
}
if ( isset( $instance[ 'timeago' ] ) ) {
$timeago = $instance[ 'timeago' ];
}
else {
$timeago = '5 hours ago';

}


if ( isset( $instance[ 'mostrarcat' ] ) ) {
$mostrarcat = strip_tags($instance[ 'mostrarcat' ]);
}
else {
$mostrarcat = '17';

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
<p>
<label for="<?php echo $this->get_field_id('mostrarcat'); ?>"><?php _e('Categorías:', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('mostrarcat'); ?>" name="<?php echo $this->get_field_name('mostrarcat'); ?>" type="text" value="<?php echo esc_attr($mostrarcat); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('timeago'); ?>"><?php _e('¿Hace cuánto tiempo? Escribir: "5 hours ago"', 'hotmagazine'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('timeago'); ?>" name="<?php echo $this->get_field_name('timeago'); ?>" type="text" value="<?php echo esc_attr($timeago); ?>" />
</p>


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
$instance['mostrarcat'] = ( ! empty( $new_instance['mostrarcat'] ) ) ? strip_tags( $new_instance['mostrarcat'] ) : '';
$instance['timeago'] = ( ! empty( $new_instance['timeago'] ) ) ? strip_tags( $new_instance['timeago'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget_breves() {
	register_widget( 'breves_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget_breves' );
?>