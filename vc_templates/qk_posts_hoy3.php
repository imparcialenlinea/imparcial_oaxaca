<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_ES.UTF-8');
setlocale(LC_TIME, 'spanish');
$today=date('Y-m-d');
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
$key = $value = $title = $order ='';
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
$args = array(
	'post_type' => 'post',
	'posts_per_page' => $order,
					'meta_query' => array(
					 array(
					 	'key'     => $key,
						'value'   => $value,
						'compare' => 'IN',
						),										
			),
				'date_query'=>array(
				'relation'=>'AND',
				array( 					
					'after'     => $value.' hours ago',
					'inclusive' => true

					),
				array( 					
					'after'     => $today,
					'inclusive' => true
					
					),
										

				
			),
);

$portfolio = new WP_Query($args);
?>

<div class="item" id="list_load">
	
    <div class="listahoy "><h2 class="listadohoy"><?php echo $title ?></h2></div>
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
				<?php the_title(); ?><br />
<?php $id = get_the_ID();  
					$category_detail=get_the_category($id); 
					foreach($category_detail as $cd){ ?>
					<a class="catego category-post <?php echo esc_html($cd->slug); ?>"><?php echo esc_html($cd->cat_name); ?></a>  <?php } ?>
                <span class="cambiar"><?php echo 'Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')); ?></span>
			</div>

            
            
            
		</li>
		<?php $i++; endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	
		
	</ul>
</div>