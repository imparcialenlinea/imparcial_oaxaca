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
$order =  $cat = $offset = $especiales = $offset2 = $thumb = $tag = $thumbsize  = $pagination = '';
$output = $after_output = $tagubicacion = $breves ='';
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

$args = array(
	'tag' => $tag,
	'post_type' => 'any',	
	'posts_per_page' =>$order,
    'orderby'   => 'date', 							
);


if($offset!=''){
  $args['offset'] = $offset;
}

if($pagination!='off'){
	$args['paged'] = $paged;
}

//EXCLUIDOS
$i=0;
if ($offset2!=''){
$exclude = array(
	'post_type' => 'any',
	'posts_per_page' =>$offset2,
    'orderby'   => 'date', 
	'category_name' => $cat,						
);

$exc = new WP_Query($exclude);

$excluidos=array();
while($exc->have_posts()) : 
	$exc->the_post(); 
	$excluidos[$i]=get_the_ID();
	$i++; endwhile;

}

//FIN EXCLUIDOS


$args['post__not_in']=$excluidos;

if($especiales=="no"){
  	$args['meta_query'] = array(
					array(
						'key'     => '_hotmagazine_especial',
						'value'   => 'on',
						'compare' => 'NOT EXISTS',
					));	
}
if($breves=="no"){
  	$args['tax_query'] = array( array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => array('post-format-aside'),
				'operator' => 'NOT IN'
			   ) );	
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
    $i=1; while($posts_list->have_posts()) : $posts_list->the_post();?>
    <?php if($order>=8 and $i==4){ ?>
	<?php echo do_shortcode($custom['adv-editor']); ?>
	<?php }?>

	<div class="news-post article-post">
		
		<div class="row">
			<div class="col-sm-<?php echo esc_attr($thumb_col); ?> <?php if ( is_rtl() ) { ?> pull-right<?php } ?>">
				<div class="post-gallery">
					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($thumbsize); ?></a>
					<?php }else{ ?>
					<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_principal.jpg" /></a>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-<?php echo esc_attr($content_col); ?>">
				<div class="post-content">

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
					<ul class="post-tags">
                    	<?php if( $tagubicacion=='yes'){  //ESTE C??DIGO IMPRIME EL TAG DEL LUGAR?>
                    	<li><?php $term_list = wp_get_post_terms(get_the_ID(), 'ubicaciones', array('hide_empty' => false,'number' => '1','offset' => '0',));
							 foreach($term_list as $term_single) {?>              
                    		<a href="/ubicaciones/<?php echo $term_single->slug;?>" class="textocategories category-post"><?php $text=$term_single->name; $text=str_replace('Oax.','', $text); echo str_replace(',', '', $text)?></a><?php } ?>
                        </li><?php } //TERMINA C??DIGO?>                            
						<li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li>
						<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>					
					</ul>
					<?php the_excerpt(); ?>
					<div class="clear"></div>
					<a href="<?php the_permalink(); ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i><span><?php esc_html_e('Leer m??s','hotmagazine'); ?></span></a>

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


