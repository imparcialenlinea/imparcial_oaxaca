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

//LA PUBLI
	$arpubli = array(
	   	'post_type' => 'post',  
		'posts_per_page' => 1,
		'date_query' 		=> array(
				array(
					'after' => '24 hours ago',
				)
				), 								
		'meta_query' => array(
		'relation' => 'AND',
			 array(
			 	'key'     => 'espubli',
				'value'   => 1,
				'compare' => 'IN',
				),
			 array(
			 	'key'     => 'fijarstorie',
				'value'   => 'fijarsecundaria',
				'compare' => 'IN',
				),																					
	));

	
	$espublicidad=0;
	$publiquery=new WP_Query($arpubli);
	while($publiquery->have_posts()) : $publiquery->the_post();
		$hourdiff = esc_html((current_time( 'timestamp' ) - get_the_time('U'))/3600 );
		if(get_post_meta(get_the_ID(), 'fijartime', true)>=$hourdiff and $principal==4){
			$espublicidad=1;
		}
	endwhile;



//LA PUBLI
$arr = array( 'posts_per_page' => 1, 
			  'offset'=> $principal-1, 
			  'post_type' => 'post',
			  'meta_query' => array(
					array(
						'key'     => 'resalte_en_seccion',
						'value'   => 1,
						'compare' => '=',
					),
			));
				if($cat!='all'){
				  if ( is_rtl() ) {
				  	$arr['cat'] = $cat;
				  }else{
				  	$arr['category_name'] = $cat;
				  }
				}			

	if($espublicidad==1){
		$posts_list = $publiquery;
	}else{
		$posts_list = new WP_Query($arr);
	}


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
		<a href="<?php the_permalink(); ?>"><img src="<?php echo hotmagazine_thumbnail_url($thumbsize, $id); ?>" alt="<?php the_title(); ?>"></a>
		<?php if(is_user_logged_in()){ echo '<a target="_blank" class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
	</div>
	<?php }else{ ?>
 		<img  alt="<?php the_title(); ?>" src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_default.jpg"  class="img-responsive" > 
 	<?php } ?>
	<div class="hover-box">
		<div class="inner-hover">
			<h2><a href="<?php echo get_permalink($id); ?>"><?php echo get_the_title( $id ); ?> </a></h2>
            <?php if($principal=='yes'){ ?><?php the_excerpt(); ?><?php } ?>
		</div>
	</div>
</div>
<?php $i++; endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
