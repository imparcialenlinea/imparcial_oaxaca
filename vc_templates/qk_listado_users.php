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

$i=0;
$args = array(
	'post_type' => 'post',
	'posts_per_page' =>600,
	'orderby'   => 'date',
	'paged' => $paged,
    
);
$portfolio = new WP_Query($args);?>


<script>


function marcar_row() {
    if ( document.getElementById("row-65757").style.background == "none") { 
		document.getElementById("row-65757").style.background = "#ffe027";
	}else{
		document.getElementById("row-65757").style.background = "none"}
}

</script>  


<table width="100%" border="1">
  <tbody>
  <?php if($portfolio->have_posts()) :
		             while($portfolio->have_posts()) : $portfolio->the_post();
					 $categories = get_the_category();?>
    <tr>
      <td><?php echo get_the_date( 'd/m/Y' ); ?></td>
      <td><?php echo get_the_date( 'g:i a' ); ?></td>
      <td><?php echo get_the_title(); ?></td>
      <td><?php echo esc_html( $categories[0]->name );   ?></td>
      <td><?php the_author_meta( 'display_name');?></td>
      <td>&nbsp;</td>
    </tr>
  <?php endwhile;
	endif;?> 	  
  </tbody>
</table><?php wp_reset_postdata(); ?>


<div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$portfolio->max_num_pages); ?>
	</div>