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
$order =  $cat = $offset = $title = $pagination = '';
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
	'posts_per_page' =>$order,
	'cat' => array(9),

);

$cat='Opinión';
if($pagination!='off'){
	$args['paged'] = $paged;
}


if($offset!=''){
  $args['offset'] = $offset;
}
$portfolio = new WP_Query($args);
$custom  = hotmagazine_custom();

?>

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

			<div id="block-top--uid-631">
				
			<div class="barra-opinion">
				<div class="opinion-foto">
	                    <?php if(has_post_thumbnail()){ ?>
                        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                    	<?php }else{ ?>
						 	<a href="<?php the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?></a>
                      	<?php } ?>					
				</div>
				<div class="opinion-columna">
						<?php if (! has_excerpt() or has_post_thumbnail()) { ?>
 							<a href="<?php the_permalink(); ?>"><h2 class="titulo-column"><?php echo esc_html(get_the_author_meta('_hotmagazine_user_columna'));?></h2></a>
                        <?php }?>
					<h6 class="autor-column"><?php the_author(); ?></h6>
				</div>
			</div>				
			<?php $exc=get_the_excerpt(); ?>
				
			
				
				
				<div class="t-columna"><?php the_title(); ?></div>

                            	<ul class="post-tags">			
				<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>	
				</ul>
				<span class="iblock">
					<p><?php $conte = get_the_content(); echo mb_strimwidth($conte, 0, 250, '...');?></p>
				</span>
			</div>

                <a href="<?php the_permalink(); ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i><span><?php esc_html_e('Leer más','hotmagazine'); ?></span></a>
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

