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
 * @var $thumb
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $tag_slug = $offset = $title = $fecha= $thumb = $autor= '';
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
	'tag' => $tag_slug,
	'post_type' => 'post',	
	'posts_per_page' =>$order,
    'paged' => $paged,	

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
	
	<ul class="list-posts">
		<?php 
	      if($portfolio->have_posts()) :
	             $i=1; while($portfolio->have_posts()) : $portfolio->the_post(); 
	    ?>
		<li>
			<?php if($thumb!='disable'){ ?>
			<?php if(has_post_thumbnail()){ ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
			<?php }else{ ?>            
           		<?php if (in_category('Opinión')) { ?>
                <!-- CONDICIONALES DE LOS AVATAR DE OPINIÓN  -->                
                     <a href="<?php the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?></a>
				<?php }else{ ?>
						<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_small.jpg" /></a>
            
			<?php } ?>            
			<?php } ?>
			<?php } ?>
			<?php $id = get_the_ID(); ?>
			<?php $score = get_post_meta($id, '_hotmagazine_score', true); $score_text = get_post_meta($id, '_hotmagazine_score_text', true); ?>
				<?php if($score!=''){ ?>
				<div class="rate-level">
					<p><span><?php echo esc_html($score); ?></span> <?php echo esc_html($score_text); ?></p>
				</div>
			<?php } ?>
            
    
<?php if (in_category('Opinión')) { ?>

					<?php if(get_the_author_meta('ID')==19){?>
            			<div class="post-content opitext">
                            <a class="opitit" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>                         
                            <ul class="post-tags">			
                                <li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php $exc = get_the_excerpt(); echo($exc); ?></li>
                                <?php if ($fecha=='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li><?php } ?>	
                            </ul>
						</div


                    ><?php }else{?>
                    	
            			<div class="post-content opitext">
                            <a class="opitit" href="<?php the_permalink(); ?>"><h2><?php echo esc_html(get_the_author_meta('_hotmagazine_user_columna'));?></h2></a><p><?php the_title(); ?></p>                         
                            <ul class="post-tags">			
                                <?php if ($autor=='yes'){?><li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li><?php } ?>
                                 <?php if ($fecha=='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li><?php } ?>	
                            </ul>
						</div>
                     <?php }?>

            
	<?php }else{ ?>
                                        
			<div class="post-content">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
				<ul class="post-tags">
                <?php if ($autor=='yes'){?><li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li><br /><?php } ?>
				 <?php if ($fecha=='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li><?php } ?>		
				</ul>
			</div>
            
        			<?php } ?>     
            
            
            
		</li>
		<?php $i++; endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>	
		
	</ul>
</div>