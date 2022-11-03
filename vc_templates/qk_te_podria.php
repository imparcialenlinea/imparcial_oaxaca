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
 * @var $title
 * @var $pagination
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $offset = $title = $pagination = $qautor = $qfecha = $the_tags = $operador = '';
$output = $after_output = $exclude ='';
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
	'posts_per_page' =>$order,
);
if($operador=='and'){
	$args['tag_slug__and']= array($the_tags);
}else{
	$args['tag']= $the_tags;	
}
if($pagination!='off'){
	$args['paged'] = $paged;
}
if($cat!='all'){
  if ( is_rtl() ) {
  	$args['cat'] = $cat;
  }else{
  	$args['category_name'] = $cat;
  }
}
if($offset!=''){
  $args['offset'] = $offset;
}
if($exclude!=''){
	$args['category__not_in']=array($exclude);
}

?>




<?php
		$portfolio = new WP_Query($args);
		$custom  = hotmagazine_custom();
		if($cat!='all' and !is_rtl()){
		$category = get_term_by('slug', $cat, 'category');
		$cat = $category->term_id;
		}?>



<h2 class="title-section widgettitle"><?php echo $title;?></h2>
<div class=" posts-widget">
  <ul class="list-posts">
		<?php while($portfolio->have_posts()) : $portfolio->the_post(); ?>
    <li>
      <?php if(has_post_thumbnail()){ ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
		<?php }else{ ?>
		<img src="http://placehold.it/80x80" />
		<?php } ?>
      	<div class="post-content">
		<!--	<?php the_category(', '); ?>-->
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
			<ul class="post-tags">
	           <?php if($qautor!='yes'){?><li><i class="fa fa-user"></i> Por <?php the_author(); ?></li><?php }?>
               <?php if($qfecha!='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' )); ?></li><?php }?>
			</ul>
		</div>
      
    </li>
    
    <?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
  </ul>
</div>










