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
 * @var $cat_ids
 * @var $thumb
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $incluir = $excluir = $offset = $title = $fecha= $thumb = '';
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
				'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array('post-format-quote'),
                        'operator' => 'IN'
                    ),
                ),	
	
	
);
if($fecha==''){
	$fecha='yes';
}


				if($cat!='all'){
				  if ( is_rtl() ) {
				  	$args['cat'] = $cat;
				  }else{
				  	$args['category_name'] = $cat;
				  }
				}


if($offset!=''){
  $args['offset'] = $offset;
}
$portfolio = new WP_Query($args);
if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>

<div class="item" id="list_load">
	
	<ul class="list-posts2">
		<?php 
	      if($portfolio->have_posts()) :
	             $i=1; while($portfolio->have_posts()) : $portfolio->the_post(); 
	    ?>
		<li>
			<?php if($thumb!='disable'){ ?>
			<?php if(has_post_thumbnail()){ ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
			<?php }else{ ?>            
                <!-- CONDICIONALES DE LOS AVATAR DE OPINIÓN  -->                
                 <a href="<?php the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?></a>          
			<?php } ?>
			<?php } ?>
			<?php $id = get_the_ID(); ?>
                 	
            			<div class="post-content opitext">
                            <a class="title-post h2" href="<?php the_permalink(); ?>"><h2><?php echo esc_html(get_the_author_meta('_hotmagazine_user_columna'));?></h2></a><p><a font style="color:#005a87" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>                         
                            <ul class="post-tags">			
                                <li><i class="fa fa-user"></i><?php esc_html_e('-','hotmagazine'); ?> <?php the_author(); ?></li>
                                 <?php if ($fecha=='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li><?php } ?>	
                            </ul>
						</div>

		</li>
		<?php $i++; endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	
		
	</ul>
</div>