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
$order =  $title = $pagination = '';
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


if($thumb!=''){
	$thumb_col = $thumb;
	$content_col = 12- $thumb;
}else{
	$thumb_col = '5';
	$content_col = '7';
}


?>
<?php 





$args = array(
	'post_type' => 'any',
	'posts_per_page' =>$order,
    'orderby'   => 'date', 
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
	$todas= $cat;
  }
}else{
	if($multiple!=''){
		$args['cat']= array($multiple);			
	}
	
}
if($offset!=''){
  $args['offset'] = $offset;
}
if($orderby!=''){
  $args['order'] = $orderby;
}

if($pagination!='off'){
	$args['paged'] = $paged;
}



$posts_list = new WP_Query($args);
$custom  = hotmagazine_custom();
if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>

<!-- article box -->
<div class="article-box">
	<div id="cat_<?php echo esc_attr($cat); ?>" >
	<?php 
      if($posts_list->have_posts()) :
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
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('principal'); ?></a>
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
					<ul class="post-tags">                                            	                            
						<li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li>
						<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>					
					</ul>
					<?php the_excerpt(); ?>
					<div class="clear"></div>
					<a href="<?php the_permalink(); ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i><span><?php esc_html_e('Leer más','hotmagazine'); ?></span></a>
				
				</div>
			</div>
		</div>

	</div>
	<?php $i++; endwhile; ?>
	<?php endif; ?>
		
	</div>

<!-- End article box -->
    
</div><?php wp_reset_postdata(); ?>

		<?php if($pagination!='off'){ ?>
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$posts_list->max_num_pages); ?>
	</div>
    <?php } ?>


