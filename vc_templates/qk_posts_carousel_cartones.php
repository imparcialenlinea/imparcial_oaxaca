<?php
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $cat
 * @var $class
 * @var $order2
 * @var $thumbsize
 * @var $filter
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $order2 = $class = $thumbsize= $filter = $slugcarto='';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if($slugcarto==''){
	$slugcarto = array(849,850);
}else{
	$slugcarto = array($slugcarto);
}

if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
$args = array(
	'posts_per_page' =>$order,
    'orderby'    => 'date',
    'order'      => 'DESC',	
	'post_type'=>'carton',
	'tax_query' => array(
        array(
            'taxonomy' => 'cartonistas',
            'field' => 'term_taxonomy_id',
            'terms' => $slugcarto,

        )
    )
    
);

if($order2==''){
	$order2 = 4;
}else{
	$order2 = $order2;
}


$portfolio = new WP_Query($args);

?>
<?php 
	$children = get_term_children($cat, 'category');
	$custom  = hotmagazine_custom();?>

<div class="<?php echo esc_attr($class); ?> owl-wrapper">
	<div class="owl-carousel" data-num="<?php echo esc_attr($order2); ?>" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">
		
		<?php 
	      if($portfolio->have_posts()) :
	             $i=0; while($portfolio->have_posts()) : $portfolio->the_post(); 
	      ?>

			<div class="item news-post standard-post">
				<div class="post-gallery">
					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumbsize); ?></a>
					<?php } ?>
				</div>
            <div class="post-content">					
				<ul class="post-tags">
                	<li><i class="fa fa-user"></i>Cartón de <?php 
										$post_id = get_the_ID(); $term_list = wp_get_post_terms($post_id, 'cartonistas', array("fields" => "all"));
										foreach($term_list as $term_single) {
											if($term_single->name=='José Bolaños'){
												echo ('Bolaños');
											}elseif($term_single->name=='Darío Castillejos'){
												echo ('Darío');
											}elseif($term_single->name=='Espíritu Maligno'){
												echo ('Espíritu');												
											}else{
												echo($term_single->name);										}
										} ?></li>
                      <li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>	
					</ul>       
				</div>
			</div>	

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</div>

