<?php

// Creating the widget 
class recent_post_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'recent_post_widget', 

// Widget name will appear in UI
esc_html__('QK Featured Posts', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Listing RECENT Posts', 'hotmagazine' ), ) 
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

<div class="item" id="list_load">
	
	<ul class="list-posts">

<?php $arr = array('post_type' => 'post', 'posts_per_page' => $instance['count'], 'cat' => array($instance['categories']));
				$query = new WP_Query($arr);
				while($query->have_posts()) : $query->the_post();?>
<li>
			<?php if($thumb!='disable'){ ?>
			<?php if(has_post_thumbnail()){ ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
			<?php }else{ ?>            
           		<?php if (in_category('Opinión')) { ?>
                <!-- CONDICIONALES DE LOS AVATAR DE OPINIÓN  -->                
                     <a href="<?php the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?></a>
				<?php }else{ ?>
						<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_small.jpg" /></a>
            
			<?php } ?>            
			<?php } ?>
			<?php } ?>
			<?php $id = get_the_ID(); ?>
			<?php $score = get_post_meta($id, '_hotmagazine_score', true); $score_text = get_post_meta($id, '_hotmagazine_score_text', true); ?>
				<?php if($score!=''){ ?>
				<div class="rate-level">
					<p><span><?php echo esc_html($score); ?></span> <?php echo esc_html($score_text); ?></p>
				</div>
			<?php } ?>
            
    
<?php if (in_category('Opinión')) { ?>
            			<div class="post-content opitext">
                        <a class="opitit" href="<?php the_permalink(); ?>"><h2><?php $tit = get_the_title(); $exc = get_the_excerpt(); echo mb_strimwidth($tit, 0, 65, '...'); ?></h2></a><p><?php echo mb_strimwidth($exc, 0, 80, '...'); ?></p> 
                        
				<ul class="post-tags">			
                <li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li>
				<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>	
				</ul>
			</div>

            
	<?php }else{ ?>
                                        
			<div class="post-content">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
				<ul class="post-tags">
                <li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li><br />

<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>		
				</ul>
			</div>
            
        			<?php } ?>     
            
            
            
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
$title = esc_html__( 'Featured Posts', 'hotmagazine' );
//$count = 4;
}
if ( isset( $instance[ 'count' ] ) ) {
$count = $instance[ 'count' ];
}
else {
$count = 3;
//$count = 4;
}
if ( isset( $instance[ 'categories' ] ) ) {
$categories = $instance[ 'categories' ];
}
else {
$categories = 3;

}

// Widget admin form
?>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'count' )); ?>"><?php esc_html_e( 'Number of posts:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'count' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'count' )); ?>" type="text" value="<?php echo esc_attr( $count ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'categories' )); ?>"><?php esc_html_e( 'Categorias:', 'hotmagazine'); ?></label> 
<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'categories' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'categories' )); ?>" type="text" value="<?php echo esc_attr( $categories ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
$instance['categories'] = ( ! empty( $new_instance['categories'] ) ) ? strip_tags( $new_instance['categories'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget3() {
	register_widget( 'recent_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget3' );
?>