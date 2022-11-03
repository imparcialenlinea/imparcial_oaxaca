<?php
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $title
 * @var $item
 * @var $cat
 * @var $cat_ids
 * @var $class
 * @var $thumbsize
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$p = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );


$args = array(
	'p' => $id,
    
);

$portfolio = new WP_Query($args);

$custom  = hotmagazine_custom();
?>

<!-- carousel box -->
	<div class="carousel-box owl-wrapper <?php echo esc_attr($class); ?>">

		
			
			<?php 
		      if($portfolio->have_posts()) :
		             $i=0; while($portfolio->have_posts()) : $portfolio->the_post(); 
		      ?>
			<div class="item news-post image-post3 <?php if(get_post_meta(get_the_ID(), '_hotmagazine_intro_video', true)!=''){ ?> video-post <?php } ?>">
				<a href="<?php echo get_permalink($id); ?>"><?php the_post_thumbnail($thumbsize); ?></a>
				<?php $id = get_the_id(); ?>
				<a href="<?php echo get_post_meta(get_the_ID(), '_hotmagazine_intro_video', true); ?>" class="video-link "><i  class="playvideos fa fa-play-circle-o"></i></a>

				<div class="hover-box">
					<h2 class="videotitulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

	</div>
	<!-- End carousel box -->