<?php
include $querydeprincipales;
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


$arr = array( 'posts_per_page' => 1, 
			  'offset'=> $principal-1, 
			  'post__in' => $arrprincipal,
			  'post__not_in'=>$enprincipal,
				
			);


		$posts_list = new WP_Query($arr);


print_r($querydeprincipales);
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
	    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('portada'); ?>" width="300px" height="245px" alt="<?php the_title(); ?>" /></a> 
		<?php if(is_user_logged_in()){ echo '<a target="_blank" class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
	</div>
	<?php }else{ ?>
 		<img  alt="<?php the_title(); ?>" src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_default.jpg"  class="img-responsive" > 
 	<?php } ?>
	<div class="hover-box">
		<div class="inner-hover">

			<?php if($custom['body_style']!='' and $custom['body_style']!='game' ){ ?>
			<?php 
			if($cat!='all' and $cat !=''){ ?>


			<a class="category-post <?php echo esc_html($cat); ?>" href="ultima-hora"><?php echo esc_html(get_cat_name( $cat_id )); ?></a> 
                        
			<?php	}else{ 

			$category_detail=get_the_category($id);//$post->ID
			foreach($category_detail as $cd){ 
			$tagslug=get_post_meta(get_the_ID(),'especial', true);
			$hourdiff = esc_html((current_time( 'timestamp' ) - get_the_time('U'))/3600 );
			//Las horas xe diferencias se calculan acaá	
			if($tagslug!='especial'){
				if($tagslug=='ultimahora' and $hourdiff>2){$tagslug='';}
				if($tagslug=='alertavial' and $hourdiff>2){$tagslug='';}
			}								
			if ($tagslug=='ultimahora'){$tagtexto='Última Hora';}
			elseif($tagslug=='alertavial'){$tagtexto='Alerta Vial';}
			else{$tagslug='';
			}

			if ($tagslug!=''){?>
            	<a class="textoalmomento category-post loultimo" href="/ultima-hora"><?php echo esc_html($tagtexto); ?></a> 
            <?php }else{ ?>                        
				<a class="<?php if($cd->slug=='ciencia-y-salud'){ echo "textoalmomento"; } ?> category-post <?php  echo esc_html($cd->slug); ?>" href="<?php if($cd->slug=='general'){ echo "oaxaca"; }else{echo esc_html($cd->slug);} ?>"><?php if($cd->slug=='general'){ echo "General"; }else{echo esc_html($cd->cat_name);} ?></a>
            <?php } ?> 
			<?php } 

				}?>
				
			<?php } ?>
			<h2><a href="<?php echo get_permalink($id); ?>"><?php echo get_the_title( $id ); ?> </a></h2>
            <?php if($principal=='yes'){ ?><?php the_excerpt(); ?><?php } ?>
            <?php if(has_excerpt()){ ?>
        		<p><a style="color:#FFFFFF; text-decoration:none" href="<?php the_permalink(); ?>"><?php the_excerpt() ?></a></p>
            <?php } ?>
		</div>
	</div>
</div>
<?php $i++; endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
