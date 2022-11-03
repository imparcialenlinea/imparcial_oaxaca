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
$cat ='';
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
$argslast= array(
	'post_type' => 'post',
	/*'author'    => 94,*/
	'posts_per_page'=>1,
    'order'=>'DESC',
		
);

$args = array(
	'post_type' => 'post',
	'author'    => 94,49,
    'date_query' => array(
        array(
        'after' => $today,
        'inclusive' => true,
        ),
    ),
	
);
if($cat!='all'){
  if ( is_rtl() ) {
  	$args['cat'] = $cat;
	$argslast['cat'] = $cat;	
  }else{
  	$args['category_name'] = $cat;
  	$argslast['category_name'] = $cat;	
  }
}else{
	$args['cat']=array($cat_ids);
	$argslast['cat']=array($cat_ids);	
}

$ultima = new WP_Query($argslast);
$portfolio = new WP_Query($args);

if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>

<div class="item" id="list_load">
	
    <div style="text-align:center" class="linea-<?php echo $category->slug ?> listahoy "><h2 class="listadohoy"><?php echo $category->name ?> (<?php echo $portfolio->post_count?>)</h2>
<h6 style="color: red;font-size: 14px;margin-top: -5px;"><?php if($portfolio->post_count==0){while ($ultima->have_posts()){$ultima->the_post();echo'<strong>Última:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp'));}}?></h6></div>
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