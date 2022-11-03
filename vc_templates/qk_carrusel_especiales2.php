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
$order =  $cat = $class = $order2 = $thumbsize = $filter = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
$args = array(
	'post_type' => 'post',
	'posts_per_page' =>$order,
		'meta_query' => array(
					'relation' => 'OR',		
					array(
						'key'     => '_hotmagazine_especial',
						'value'   => 'on',
						'compare' => 'IN',
					),
					array(
						'key'     => 'especial',
						'value'   => 1,
						'compare' => 'IN',
					),					
			),    
);
if($cat!='all'){
  if ( is_rtl() ) {
  	$args['cat'] = $cat;
  }else{
  	$args['category_name'] = $cat;
  }
}
if($order2==''){
	$order2 = 4;
}else{
	$order2 = $order2;
}

$portfolio = new WP_Query($args);
if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>

<div class="<?php echo esc_attr($class); ?> owl-wrapper">	
	<div class="owl-carousel" data-num="<?php echo esc_attr($order2); ?>" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">		
		<?php 
	      if($portfolio->have_posts()) :
	             $i=0; while($portfolio->have_posts()) : $portfolio->the_post(); 
	      ?>
			<div class="item news-post standard-post">
				<div class="post-gallery">
					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url($thumbsize); ?>" width="100%"  /></a>
					<?php } ?>
				</div>
                <div class="post-content">					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>						
                 </div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</div>

