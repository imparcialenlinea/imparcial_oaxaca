<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $cat
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $title = '';
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
	'posts_per_page' =>30,
	'orderby'   => 'date',
	'paged' => $paged,
        'post_type' => 'job_listing',
    
);
$portfolio = new WP_Query($args);
$custom  = hotmagazine_custom();
?>
<table width="100%" border="1" cellspacing="0">
  <?php if($portfolio->have_posts()) :
		             while($portfolio->have_posts()) : $portfolio->the_post();
					 $postcat = get_the_category( $post->ID ); ?>

  <tr>
    <td ><?php the_title();	?> | <?php the_excerpt(); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>   
    <td>&nbsp;</td>
    <td>&nbsp;</td>   
    <td>&nbsp;</td>              
    <td><p style="font-size:8px"><?php the_permalink(); ?></p></td>

  </tr>
  
  <?php endwhile;
	endif;?> 
</table>    
  
<?php wp_reset_postdata(); ?>
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$portfolio->max_num_pages); ?>
	</div>
<!-- End carousel box -->