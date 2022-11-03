<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $pagination
 * @var $thumb
 * @var $thumbsize
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $offset  = $thumb = $thumbsize = $pagination = '';
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
			'cat' => array(-1,-15,-1083,-71),
			'meta_query' => array(
					array(
						'key'     => 'espubli',
						'value'   => 1,
						'compare' => 'NOT EXISTS',						
					),
		));

if($pagination!='off'){
	$arr['paged'] = $paged;
}

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
	<?php $fechaanterior='';
      if($posts_list->have_posts()) :
             $i=1; while($posts_list->have_posts()) : $posts_list->the_post(); 
    ?>
	<div class="news-post article-post">
    <?php $fechaactual=get_the_date();
	if($fechaactual!=$fechaanterior ){ ?>
	    <div class="title-section"><h2><?php the_time('l, j');?> de <?php the_time('F'); ?></h2></div>
	<?php }?>
		<div class="row">
			<div class="col-sm-<?php echo esc_attr($thumb_col); ?> <?php if ( is_rtl() ) { ?> pull-right<?php } ?>">
				<div class="post-gallery">
					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumbsize); ?></a>
					<?php }else{ 
						if(in_category(9)){?>
						<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/06/opinion-avatar-imparcial-oaxaca.jpg" /></a>                        
                        <?php }else{?>                    
						<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_principal.jpg" /></a>
					<?php }}?>
                    <?php  $category_detail=get_the_category($id);
					foreach($category_detail as $cd){ ?>
					<a class="over-cats category-post <?php echo esc_html($cd->slug); ?> <?php if(in_category('Ciencia y Salud')){ echo "textoalmomento"; } ?>" href="/<?php echo $cd->slug ; ?>"><?php echo esc_html($cd->cat_name);?></a> 
				<?php } ?>
				</div>
			</div>
            
			<div class="col-sm-<?php echo esc_attr($content_col); ?>">
				<div class="post-content">                    
					<h2><a href="<?php the_permalink(); ?>"><strong>[<?php the_time('G:i'); ?> horas]  </strong><?php the_title(); ?> </a></h2>
					<ul class="post-tags">     
						<li><i class="fa fa-user"></i><?php esc_html_e('Por '); ?> <?php the_author(); ?></li>
						<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>					
					</ul>					
					<?php the_excerpt(); ?>
                    <div class="clear"></div>
					<a href="<?php the_permalink(); ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i><span><?php esc_html_e('Leer más'); ?></span></a>
				</div>
			</div>
		</div>
	</div>
    <?php $fechaanterior = $fechaactual; ?>
	<?php $i++; endwhile; ?>
	<?php endif; ?>
		
	</div>

</div><?php wp_reset_postdata(); ?>

		<?php if($pagination=='on'){ ?>
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$posts_list->max_num_pages); ?>
	</div>
    <?php } ?>
