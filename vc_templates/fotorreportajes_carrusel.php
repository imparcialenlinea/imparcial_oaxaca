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
$order =  $cat = $cat_ids = $thumbsize =  '';
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
        'tax_query' => array( array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-image'),
            'operator' => 'IN'
           ) ),    
);
if($cat_ids!=''){
	$args['cat'] = $cat_ids;
}elseif($cat!='all'){
  if ( is_rtl() ) {
  	$args['cat'] = $cat;
  }else{
  	$args['category_name'] = $cat;
  }
}
$portfolio = new WP_Query($args);
$custom  = hotmagazine_custom();
?>
<div class="image-slider" style="text-align:center">
	<div class="bx-wrapper" style="max-width: 100%;  max-height: 500px !important;">
        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; max-height: 500px;">
            <ul class="bxslider" style="width: 100%; position: relative; transition-duration: 0s; ">
		    <?php  if($portfolio->have_posts()) :
		      while($portfolio->have_posts()) : $portfolio->the_post(); ?>
		
        <li style="float: left; list-style: none; position: relative; width: 100%;" class="bx-clone">              
		<div class="news-post image-post"> 
	<?php if(has_post_thumbnail()){ ?>
    		<img class="cropeada img-responsive" src="<?php echo get_the_post_thumbnail_url('',$thumbsize);?>" width="100%"/>
	<?php } ?>
                <div class="hover-box" style="height:500px">
                    <div class="inner-hover" style="padding:80px">
                        <div class="container" style="max-width:70% !important">
    <?php 
		$id = get_the_ID();
		$category_detail=get_the_category($id);//$post->ID
		foreach($category_detail as $cd){ ?>
		<a class="category-post <?php echo esc_html($cd->slug); ?>" href="<?php echo '/'.esc_html($cd->slug); ?>"><?php echo esc_html($cd->cat_name); ?></a> 
		<?php } ?>                        
                            <a href="<?php the_permalink(); ?>" style="text-decoration:none"><h3 style="color:#FFFFFF"><?php the_title(); ?></h3></a>
                            <h5 style="color:#FFFFFF"><?php the_excerpt(); ?></h5>
                            <ul class="post-tags">
                                <li><i class="fas fa-user-circle"></i><?php echo ('Por '); the_author();?></li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
		</li>

			<?php endwhile; ?>
			<?php endif; ?>
            </ul>
    	</div>                
	</div>
</div>



	<!-- End carousel box -->