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
$order =  $cat = $order2 = $thumbsize = $filter = $reg  = '';
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

if($reg!=''){
	$reg = $reg;
}else{
	$reg = 'vallescentrales';
}

$arr = array(
    'hide_empty' => false, // also retrieve terms which are not used yet
    'meta_query' => array(
        array(
           'key'       => 'feature-group',
           'value'     => $reg,
           'compare'   => 'LIKE'
        )
    )
);


$terms = get_terms( 'ubicaciones', $arr );
$ubicreg=array();
$i=0;

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

    foreach ( $terms as $term ) {
        $ubicreg[$i]=$term->term_id;
		$i++;
    }

}

$args = array(
	'post_type' => 'post',
	'posts_per_page' =>$order,
    'orderby'    => 'date',
    'order'      => 'DESC',
	'tax_query' => array(
			array(
			'taxonomy' => 'ubicaciones',
			'field' => 'term_taxonomy_id',
			'terms' => $ubicreg,
			)
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
<?php 
	$children = get_term_children($cat, 'category');		
?>
<div class="<?php echo esc_attr($class); ?> owl-wrapper">
	<div class="owl-carousel" data-num="<?php echo esc_attr($order2); ?>" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">
		
		<?php 
	      if($portfolio->have_posts()) :
	             $i=0; while($portfolio->have_posts()) : $portfolio->the_post(); 
	      ?>

          <?php /*ESTE ES EL OK */ ?>
          
			<div class="item news-post standard-post">
				<div class="post-gallery">
					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url($thumbsize); ?>" width="100%" /></a>
					<?php }else{ ?>
					<img src="http://placehold.it/270x200" />
					<?php } ?>
				</div>
	       	    <div class="post-content">					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
						<ul class="post-tags">
							<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>	
						 </ul>
				</div>               
			</div>

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</div>

