<?php
extract(shortcode_atts(array(
	'id'=>'',
	'class'=>'',
	'thumbsize'=>'',
	'cat'=>'',
	'principal'=>'',
), $atts));
$custom  = hotmagazine_custom();
if($class!=''){
	$class = $class;
}else{
	$class = 'default-size';
}
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;

$arr = array( 'posts_per_page' => 1, 
			  'offset'=> $principal-1, 
			  'post_type' => 'post',
				'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array('post-format-quote'),
                        'operator' => 'NOT IN'
                    ),
                ),			 
			);
				if($cat!='all'){
				  if ( is_rtl() ) {
				  	$arr['category__in'] = $cat;
				  }else{
				  	$arr['category__in'] = $cat;
				  }
				}			

		$posts_list = new WP_Query($arr);



if($cat!='' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat_id = $category->term_id;
}
?>
<?php 
      if($posts_list->have_posts()) :
        $i=1; while($posts_list->have_posts()) : $posts_list->the_post(); 
		
		
		
		
?>
<?php $id= get_the_ID(); ?>
<div class="news-post image-post <?php echo esc_attr($class);?>">
	<?php if(has_post_thumbnail($id=$id)){ ?>
	<div class="thumb-wrap">
		<a href="<?php the_permalink(); ?>"><img src="<?php echo hotmagazine_thumbnail_url($thumbsize, $id); ?>" alt="<?php the_title(); ?>" width="100%"></a>
		<?php if(is_user_logged_in()){ echo '<a target="_blank" class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
	</div>
	<?php }else{ ?>
 		<img  alt="<?php the_title(); ?>" src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_default.jpg"  class="img-responsive" > 
 	<?php } ?>
	<div class="hover-box">
		<div class="inner-hover">
			<h2><a href="<?php echo get_permalink($id); ?>"><?php echo get_the_title( $id ); ?> </a></h2>

		</div>
	</div>
</div>
<?php $i++; endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
