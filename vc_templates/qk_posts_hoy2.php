<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $offset
 * @var $cat
 * @var $cat_ids
 * @var $thumb
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$author ='';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );



?>
<?php 
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
$today = current_time('Y-m-d');
$args = array(
	'post_type' => 'post',
	'author' => $author,
    'date_query' => array(
        array(
        'after' => $today,
        'inclusive' => true,
        ),
    ),
	
);

$portfolio = new WP_Query($args);
?>

<div class="item" id="list_load">
	
    <div class="linea-capital listahoy "><h2 class="listadohoy">Locales y/o propias (<?php echo $portfolio->post_count?>)</h2></div>
	<ul class="list-posts2">
		<?php 
	      if($portfolio->have_posts()) :
	             while($portfolio->have_posts()) : $portfolio->the_post(); 
	    ?>
		<li>
			<?php if(has_post_thumbnail()){ ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
			<?php }else{ ?>            
				<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_small.jpg" /></a>
			<?php } ?>
			<?php $id = get_the_ID(); ?>
            
    
                                        
			<div class="post-content">
				<?php the_title(); ?>
			</div>

            
            
            
		</li>
		<?php $i++; endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	
		
	</ul>
</div>