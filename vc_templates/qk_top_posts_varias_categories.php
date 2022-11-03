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
 * @var $thumb
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $class = $thumb = '';
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
$args = array(
	'post_type' => 'post',
	'posts_per_page' =>$order,
    'paged' => $paged,
	'cat' => $cat,
   
);

$portfolio = new WP_Query($args);


?>

<div class="owl-wrapper">
	<div class="owl-carousel" data-num="4" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">

		<?php 
	      if($portfolio->have_posts()) :
	             $i=0; while($portfolio->have_posts()) : $portfolio->the_post(); 
	    ?>

		<div class="item list-post">
			<?php if($thumb!='disable'){ ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			<?php } ?>
			<div class="post-content">
            	<?php $id = get_the_ID();  
					$category_detail=get_the_category($id); 
					foreach($category_detail as $cd){ ?>
					<a class="textoalmomentomob category-post <?php echo esc_html($cd->slug); ?>" href="<?php echo esc_html( $cd->slug ); ?>"><?php echo esc_html($cd->cat_name); ?></a>  <?php } ?>
				<h2 ><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?> </a></h2>

			</div>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

	</div>
</div>
