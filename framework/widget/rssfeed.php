<?php

// Creating the widget 
class widget_posts_rss_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'widget_posts_rss_widget', 

// Widget name will appear in UI
esc_html__('QK RSS Feed', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Muestra rss de otro sitio', 'hotmagazine' ), ) 
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

// This is where you run the code and display the output ?>

<?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( $instance['sitio'] );

$maxitems = 0;

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( $instance['count'] ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;
?>







<div class=" posts-widget">
  
  <ul class="list-posts">
  
  	<?php 
	if ($maxitems == 0): 
			echo '<li>No items.</li>';
    	 else: 
	foreach ( $rss_items as $item ) : 
	?>
	
    <li>
       <?php //echo ('<a target="blank" href="'); echo(esc_url( $item->get_permalink() )); echo('"><img src="'); echo(get_first_image_url($item->get_content())); echo('"/></a>'); ?>
      	<div class="post-content">
			<h2><a target="blank" href='<?php echo esc_url( $item->get_permalink() ); ?>' title='<?php echo esc_html( $item->get_title() ); ?>'> <?php echo esc_html( $item->get_title() ); ?></a></h2>
			<ul class="post-tags">
	           <li><i class="fa fa-user"></i> Por Explora Oaxaca</li>
               <li><i class="fa fa-clock-o"></i><?php echo $item->get_date('M j, Y'); ?></li>
			</ul>
		</div>
      
    </li>
    
    <?php endforeach; ?>
    <?php endif; ?>
	<?php wp_reset_postdata(); ?>
  </ul></div>




<?php // TERMINA

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {

if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = esc_html__( 'Posts Destacados', 'hotmagazine' );
}

if ( isset( $instance[ 'count' ] ) ) {
$count = $instance[ 'count' ];
}
else {
$count = '5';
}

if ( isset( $instance[ 'sitio' ] ) ) {
$sitio = $instance[ 'sitio' ];
}
else {
$sitio = esc_html__( 'http://www.exploraoaxaca.com/feed');
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
<label for="<?php echo esc_attr($this->get_field_id( 'sitio' )); ?>"><?php esc_html_e( 'Sitio:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_html__($this->get_field_id( 'sitio' )); ?>" name="<?php echo esc_html__($this->get_field_name( 'sitio' )); ?>" type="text" value="<?php echo esc_html__($sitio ); ?>" />
</p>



<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
$instance['sitio'] = ( ! empty( $new_instance['sitio'] ) ) ? strip_tags( $new_instance['sitio'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget_rss() {
	register_widget( 'widget_posts_rss_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget_rss' );
?>