<?php

// Creating the widget 
class especiales_tag_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'especiales_tag_post_widget', 

// Widget name will appear in UI
esc_html__('QK Especiales Posts_tag', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Listing Especiales Posts (TAGS)', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {


// This is where you run the code and display the output
$args = array(
	'post_type' => 'post',
	'tag' => $instance['tag'],
	'posts_per_page' =>$instance['order'],
	'meta_query' => array(
					array(
						'key'     => '_hotmagazine_especial',
						'value'   => 'on',
						'compare' => 'IN',
					)),
    
);


$portfolio = new WP_Query($args);
if($instance['item']!=''){
	$item = $instance['item'];
}else{
	$item = '1';
}
$custom  = hotmagazine_custom();
?>
<div class="title-section">
	<a href="/especiales"><h2>Especiales</h2></a>
</div>

<!-- carousel box -->
	<div class="carousel-box owl-wrapper <?php echo esc_attr($class); ?>">
		<?php if($title!=''){ ?>
		<div class="title-section">
			<h1><span><?php echo esc_html($title); ?></span></h1>
		</div>
		<?php } ?>
		<div class="owl-carousel" data-num="<?php echo esc_attr($item); ?>" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">
		
			
			<?php 
		      if($portfolio->have_posts()) :
		             $i=0; while($portfolio->have_posts()) : $portfolio->the_post(); 
		      ?>


			<div class="item news-post image-post3">
				<a href="<?php echo get_permalink($id); ?>"><?php the_post_thumbnail($instance['thumbsize']); ?></a>
				<?php $id = get_the_id(); ?>
				<div class="hover-box">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
					<ul class="post-tags">
                                            <li><i class="fa fa-user"></i><?php esc_html_e('Por','hotmagazine'); ?> <?php the_author(); ?></li>											<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>		
						
					</ul>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
	<!-- End carousel box -->








<?php

echo $args['after_widget'];
}
		
// Widget Backend
public function form( $instance ) {

if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = esc_html__( 'Especiales', 'hotmagazine' );
}

if ( isset( $instance[ 'tag' ] ) ) {
$tag = $instance[ 'tag' ];
}
else {
$cat = 'guelaguetza';
}

if ( isset( $instance[ 'class' ] ) ) {
$class = $instance[ 'class' ];
}
else {
$class = esc_html__( '', 'hotmagazine' );
}
if ( isset( $instance[ 'item' ] ) ) {
$item = $instance[ 'item' ];
}
else {
$item = '1';
}
if ( isset( $instance[ 'thumbsize' ] ) ) {
$thumbsize = $instance[ 'thumbsize' ];
}
else {
$thumbsize = esc_html__( 'second', 'hotmagazine' );
}
if ( isset( $instance[ 'order' ] ) ) {
$order = $instance[ 'order' ];
}
else {
$order = '6';
}




// Widget admin form
?>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Título:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'tag' )); ?>"><?php esc_html_e( 'Slug del tag:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'tag' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'tag' )); ?>" type="text" value="<?php echo esc_attr( $tag ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'order' )); ?>"><?php esc_html_e( 'Cuántos:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'order' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'order' )); ?>" type="text" value="<?php echo esc_attr( $order ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'class' )); ?>"><?php esc_html_e( 'Custom class:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'class' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'class' )); ?>" type="text" value="<?php echo esc_attr( $class ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'item' )); ?>"><?php esc_html_e( 'Items each slide:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'item' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'item' )); ?>" type="text" value="<?php echo esc_attr( $item ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'thumbsize' )); ?>"><?php esc_html_e( 'Thumbnail Size:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'thumbsize' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'thumbsize' )); ?>" type="text" value="<?php echo esc_attr( $thumbsize ); ?>" />
</p>



<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['tag'] = ( ! empty( $new_instance['tag'] ) ) ? strip_tags( $new_instance['tag'] ) : '';
$instance['order'] = ( ! empty( $new_instance['order'] ) ) ? strip_tags( $new_instance['order'] ) : '';
$instance['item'] = ( ! empty( $new_instance['item'] ) ) ? strip_tags( $new_instance['item'] ) : '';
$instance['class'] = ( ! empty( $new_instance['class'] ) ) ? strip_tags( $new_instance['class'] ) : '';
$instance['thumbsize'] = ( ! empty( $new_instance['thumbsize'] ) ) ? strip_tags( $new_instance['thumbsize'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget_especiales_tag() {
	register_widget( 'especiales_tag_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget_especiales_tag' );
?>