<?php
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $title
 * @var $item
 * @var $cat
 * @var $cat_ids
 * @var $class
 * @var $thumbsize
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $class = $title = $thumbsize = $item = '';
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
    
);
if($cat_ids!=''){
	$args['cat'] = $cat_ids;
}elseif($cat!='all'){
  if ( is_rtl() ) {
  	$args['cat'] = $cat;
  }else{
  	$args['category_name'] = $cat;
  }
}
$args['category__in']=array(15);

$portfolio = new WP_Query($args);
if($item!=''){
	$item = $item;
}else{
	$item = '4';
}
$custom  = hotmagazine_custom();
?>

<div class="<?php echo esc_attr($class); ?> owl-wrapper">	
	<div class="owl-carousel" data-num="<?php echo esc_attr(1); ?>" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">		
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





