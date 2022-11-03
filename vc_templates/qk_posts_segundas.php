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
$order =  $cat = $cat_ids = $offset = $title = $fecha= $thumb = '';
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
			'orderby'   => 'date',
		    'category__not_in' => array( 15,1083,74,72,71,70,73,9,1,12509,12510 ),	
			'meta_query' => array(
						array(
							'key'     => 'espubli',
							'value'   => 1,
							'compare' => 'NOT EXISTS',
						),
			),		

	
);
if($fecha==''){
	$fecha='yes';
}

if($cat!='all'){
  if ( is_rtl() ) {
  	$args['cat'] = $cat;
  }else{
  	$args['category_name'] = $cat;
  }
}else{
	$args['cat']=array($cat_ids);
}


if($offset!=''){
  $args['offset'] = $offset;
}

$i=0;
$excluidos=array();
$principales = array('post_type' => 'post', 'posts_per_page' => '3','meta_query' => array(
					array(
						'key'     => 'portada',
						'value'   => array ( 'stories' ),
						'compare' => 'IN',						
					),
			)	
);

$exc = new WP_Query($principales);
while($exc->have_posts()) : 
	$exc->the_post(); 
	$excluidos[$i]=get_the_ID();
	$i++; endwhile;

$args['post__not_in']=$excluidos;

$portfolio = new WP_Query($args);

if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>

<div class="item" id="list_load">
	
	<ul class="list-posts">
		<?php 
	      if($portfolio->have_posts()) :
	             $i=1; while($portfolio->have_posts()) : $portfolio->the_post(); 
	    ?>
		<li>
				<?php if(has_post_thumbnail()){ ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                <?php }else{ ?>            
                    <a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_small.jpg" /></a>                       
                <?php } ?>          
                                        
			<div class="post-content">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
			</div>                                                 
		</li>
		<?php $i++; endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	
		
	</ul>
</div>