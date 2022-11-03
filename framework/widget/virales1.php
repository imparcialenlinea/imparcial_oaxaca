<?php

// Creating the widget 
class virales1_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'virales1_widget', 

// Widget name will appear in UI
esc_html__('Virales 1', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Listing virales posts', 'hotmagazine' ), ) 
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

<div id='cmsmmo'></div>

<script>
(function(c,m,s,o){
    c.cm=c.cm||function(){(c.cm.q=c.cm.q||[]).push(arguments)};
    c._cmSettings={cmid:918251,cmsv:3,cmcr:o,cmty:3};
    w=m.getElementsByTagName('head')[0];
    g=m.createElement('script');g.async=1;
    t=m.createElement('link');
    var n=Math.floor(Math.random()*11);
	var k = Math.floor(Math.random()* 1000000);
	var m = String.fromCharCode(n)+k;
    t.rel  = 'stylesheet'; t.type = 'text/css'; t.href = s.replace('.js', '.css');
    g.src=s+'?cmid='+c._cmSettings.cmid+'&cmsv='+c._cmSettings.cmsv+'&cmcr='+c._cmSettings.cmcr+'&cmty='+c._cmSettings.cmty+'&micro='+m;
    w.appendChild(t);w.appendChild(g);
    setTimeout(function(){
		var elements= document.querySelectorAll('ins');
		[].forEach.call(elements, function( el ) {
			console.log(el);
			(adsbygoogle = window.adsbygoogle || []).push({});
		});
	}, 1000);
})(window,document,'https://cmsmmo.com/cdn/widget.js', 'cmsmmo');
</script>



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
function wpb_load_virales1() {
	register_widget( 'virales1_widget' );
}
add_action( 'widgets_init', 'wpb_load_virales1' );
?>