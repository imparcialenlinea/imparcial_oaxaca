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
$order =  $offset = $title = $pagination = '';
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
	'posts_per_page' =>$order,
	'post_type'=>'carton',
	

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

<!-- grid box -->
<div class="grid-box" >
	<?php if($title!='off'){ ?>
	<?php if($title!=''){ ?>
		<div class="title-section big-title">
			<h1><span><?php echo esc_html($title);?> </span></h1>
		</div>
	<?php }elseif($cat!='all'){ ?>
	
	<?php } }?>

	<?php 
      if($portfolio->have_posts()) :
             $i=1; while($portfolio->have_posts()) : $portfolio->the_post(); 
    ?>
	<?php if($i%2==1 or $i==1){ ?>
            <div class="row">
        <?php } ?>  

		<?php $id= get_the_ID(); ?>
		<div class="col-md-6">
			<div class="news-post standard-post<?php if($custom['body_style']!='' and $custom['body_style']!='game' ){ ?>2<?php } ?>">
				<div class="post-gallery">
					<?php the_post_thumbnail('cartones'); ?>
					<?php $score = get_post_meta($id, '_hotmagazine_score', true); $score_text = get_post_meta($id, '_hotmagazine_score_text', true); ?>
					<?php if($score!=''){ ?>
					<div class="rate-level">
						<p><span><?php echo esc_html($score); ?></span> <?php echo esc_html($score_text); ?></p>
					</div>
					<?php } ?>
				</div>
				<?php if($custom['body_style']!='' and $custom['body_style']=='game' ){ ?>
					<div class="post-content">
						<h2><a href="<?php echo get_permalink($id); ?>"> <?php echo get_the_title( $id ); ?> </a></h2>
						<ul class="post-tags">
							<li><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' )); ?></li>
							<li><i class="fa fa-user"></i><?php esc_html_e('by','hotmagazine'); ?> <?php the_author_posts_link(); ?></li>
						</ul>
					</div>
				<?php }else{ ?>
				<div class="post-title">
					<h2><a href="<?php echo get_permalink($id); ?>"> <?php echo get_the_title( $id ); ?> </a></h2>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' )); ?></li>
						<li><i class="fa fa-user"></i><?php esc_html_e('by','hotmagazine'); ?> <?php the_author_posts_link(); ?></li>

					</ul>
				</div>
				<div class="post-content">
					<?php the_excerpt(); ?>
				</div>
				<?php } ?>
			</div>
		</div>
		
	<?php if($i%2==0 or $i == $portfolio->post_count){ ?>    
      </div>
    <?php } ?>

	

	<?php $i++; endwhile; ?>
	<?php endif; ?>
</div>
	<?php if($pagination!='off'){ ?>
	<div class="center-button">
		<a class="load-more2" href="#" data-cat="<?php echo esc_attr($cat); ?>" data-load="<?php echo esc_attr($order); ?>" data-found="<?php echo esc_attr($portfolio->found_posts); ?>"><?php  esc_html_e('View more','hotmagazine'); ?> <?php echo get_cat_name($cat);?></a>
	</div>
	<?php } ?>
	<?php wp_reset_postdata(); ?>

</div>
<!-- End grid box -->

<?php }else{ ?>


<!-- block content -->


	<!-- masonry box -->
	<div class="masonry-box">
		<?php if($title!=''){ ?>
		<div class="title-section">
			<h1><span><?php echo esc_attr($title); ?></span></h1>
		</div>
		<?php } ?>
		<div class="latest-articles iso-call">

			 <?php 
		      if($portfolio->have_posts()) :
		             $i=1; while($portfolio->have_posts()) : $portfolio->the_post(); 
		    ?>

              <div class="news-post default-size">
				<div class="post-gallery bordecito">
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('cartones'); ?>" width="300px"</a>
				</div>
				<div class="post-title">
					<a class="opitit2" href="<?php the_permalink(); ?>"><h2>Cartón de <?php 
										$post_id = get_the_ID(); $term_list = wp_get_post_terms($post_id, 'cartonistas', array("fields" => "all"));
										foreach($term_list as $term_single) {
											if($term_single->name=='José Bolaños'){
												echo ('Bolaños');
											}elseif($term_single->name=='Darío Castillejos'){
												echo ('Darío');
											}elseif($term_single->name=='Espiritu Maligno'){
												echo ('Espíritu');												
											}else{
												echo($term_single->name);										}
										} ?></h2></a>
					<ul class="post-tags">
						<li><i class="fa fa-clock-o"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?></li>
						
					</ul>
				</div>
                <hr />
                
				

			</div>

			

			<?php $i++; endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>	

		</div>

	
	
</div>
<!-- End block content -->
<!-- End masonry box -->
	<?php if($pagination!='off'){ ?>
	<!-- pagination box -->
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$portfolio->max_num_pages); ?>
	</div>
	<!-- End pagination box -->
	<?php } ?>
<?php } ?>
