<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $orderby
 * @var $offset
 * @var $cat
 * @var $title
 * @var $pagination
 * @var $thumb
 * @var $thumbsize
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $offset = $especiales = $offset2 = $thumb = $thumbsize = $multiple = $pagination = '';
$output = $after_output ='';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}


if($thumb!=''){
	$thumb_col = $thumb;
	$content_col = 12 - $thumb;
}else{
	$thumb_col = '5';
	$content_col = '7';
}
		$arr = array(
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

if($cat!='all'){	
  if ( is_rtl() ) {
  	$arr['cat'] = $cat;
  }else{
  	$arr['category_name'] = $cat;
	$todas= $cat;
  }
}else{
	if($multiple!=''){
		$arr['cat']= array($multiple);			
	}	
}
if($offset!=''){
  $arr['offset'] = $offset;
}
if($pagination!='off'){
	$arr['paged'] = $paged;
}

//EXCLUIDOS
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

$secundarios = array( 'post_type' => 'post', 'posts_per_page' => '4', 'meta_query' => array(
					array(
						'key'     => 'portada',
						'value'   => array ('24','18','8','4','2' ),
						'compare' => 'IN',						
					),
		)
);
$exc2 = new WP_Query($secundarios);
while($exc2->have_posts()) : 
	$exc2->the_post(); 
	$excluidos[$i]=get_the_ID();
	$i++; endwhile;

//FIN EXCLUIDOS
$arr['post__not_in']=$excluidos;

$posts_list = new WP_Query($arr);
$custom  = hotmagazine_custom();
if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>

<!-- article box -->
<div class="article-box">
	<div id="cat_<?php echo esc_attr($cat); ?>" > 
    <div class="title-section"><h2>Lo ??ltimo</h2></div>
     	<?php if($posts_list->have_posts()) :
             $i=1; while($posts_list->have_posts()) : $posts_list->the_post(); 
    ?>

    <?php if($order>=8 and $i==4){ ?>
			<?php echo do_shortcode($custom['adv-editor']); ?>
	<?php }?>
	<div class="news-post article-post">
		<div class="row">
			<div class="col-sm-<?php echo esc_attr($thumb_col); ?> <?php if ( is_rtl() ) { ?> pull-right<?php } ?>">
				<div class="post-gallery">
					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portada'); ?></a>
					<?php }else{ ?>
					<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_principal.jpg" /></a>
					<?php } ?>
                    <?php  $category_detail=get_the_category($id);
					foreach($category_detail as $cd){ ?>
					<a class="over-cats category-post <?php echo esc_html($cd->slug); ?> <?php if(in_category('Ciencia y Salud')){ echo "textoalmomento"; } ?>" href="/<?php echo $cd->slug ; ?>"><?php echo esc_html($cd->cat_name);?></a> 
				<?php } ?>
				</div>
			</div>
            
			<div class="col-sm-<?php echo esc_attr($content_col); ?>">
            
				<div class="post-content">                    
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
					<?php the_excerpt(); ?>
                    <div class="clear"></div>
				</div>
                
			</div>
            
		</div>
        

	</div>
    <?php $fechaanterior = $fechaactual; ?>
	<?php $i++; endwhile; ?>
	<?php endif; ?>
		
	</div>

</div><?php wp_reset_postdata(); ?>


