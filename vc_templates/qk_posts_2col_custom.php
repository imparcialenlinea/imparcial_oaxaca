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
$output = $after_output = $tags ='';
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
	'tag'=> array($tags),
	'cat'=> array($cats),
	'posts_per_page' =>$order,
				'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array('post-format-quote'),
                        'operator' => 'NOT IN'
                    ),
                ),	
);
if($pagination!='off'){
	$args['paged'] = $paged;
}
if($offset!=''){
  $args['offset'] = $offset;
}
$portfolio = new WP_Query($args);
$custom  = hotmagazine_custom();
if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>

<?php if($custom['body_style']=='game' or $custom['body_style']=='design'  ){ ?>

<?php }else{ ?>


<!-- block content -->


	<!-- masonry box -->
	<div class="masonry-box">
		<?php if($title!=''){ ?>
		<div class="title-section">
			<h1><span><?php echo esc_attr($title); ?></span></h1>
		</div>
		<?php } ?>
		<div class="latest-articles iso-call" id="cat_<?php echo esc_attr($cat); ?>">

			 <?php 
		      if($portfolio->have_posts()) :
		             $i=1; while($portfolio->have_posts()) : $portfolio->the_post(); 
		    ?>

			<div class="news-post standard-post2 default-size">
				<div class="post-gallery">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="post-title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
					<ul class="post-tags">
						<?php if($qautor!='yes'){?><li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li><?php } ?>
						<?php if($qfecha!='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li><?php } ?>	
					</ul>
				</div>
				<?php 
					$post = get_post( get_the_ID() );

					$excerpt =  $post->post_excerpt;

					
				?>
				<?php if($excerpt!=''){ ?>
				<div class="post-content">
					<?php echo wp_kses_post($excerpt); ?>
					<a href="<?php the_permalink(); ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i><?php esc_html_e('Leer más','hotmagazine'); ?></a>
				</div>
				<?php } ?>

			</div>

			

			<?php $i++; endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>	

		</div>
	<?php if($pagination=='ajax'){ ?>
	<div class="center-button">
		<a class="load-morem" href="#"  data-cat="<?php echo esc_attr($cat); ?>" data-load="<?php echo esc_attr($order); ?>" data-found="<?php echo esc_attr($portfolio->found_posts); ?>"><?php  esc_html_e('Mostrar más','hotmagazine'); ?></a>
	</div>
	<?php }elseif($pagination!='off'){ ?>
	<!-- pagination box -->
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$portfolio->max_num_pages); ?>
	</div>
	<!-- End pagination box -->
	<?php } ?>
</div>
<!-- End block content -->
<!-- End masonry box -->
	
<?php } ?>
