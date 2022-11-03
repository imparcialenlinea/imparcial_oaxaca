<?php

// Creating the widget 
class horoscopos_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'horoscopos_post_widget', 

// Widget name will appear in UI
esc_html__('QK Horoscopos', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Muestra los horóscopos', 'hotmagazine' ), ) 
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
$args = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'category__in'=>array(71),
 
);

$horos = new WP_Query($args);
$horos->the_post(); 
?>
<h2 style="color:#ffffff" class="title-section widgettitle">Horóscopos</h2>

<div class=" posts-widget">

 
<div class="post-gallery">
<p style="color:#dddddd">Consulta diariamente los horóscopos y descubre qué te deparan los astros.</p>
		<div class="news-post image-post2">
            <div class="post-gallery">
                <div class="thumb-wrap"> 
                   <a href="<?php the_permalink(); ?>" alt="Horóscopos"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/05/horoscopos.png" alt="Horóscopos"></a>
                </div>
<div class="post-content">

				<ul class="post-tags">
					<li><i class="fa fa-clock-o"></i><?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?> </li>	
				</ul>
			</div>

    </div>
</div>
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
$title = esc_html__( 'Horóscopos', 'hotmagazine' );
//$count = 4;
}




// Widget admin form
?>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Título:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>



<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
$instance['mostrarcat'] = ( ! empty( $new_instance['mostrarcat'] ) ) ? strip_tags( $new_instance['mostrarcat'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widgethoros() {
	register_widget( 'horoscopos_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widgethoros' );
?>