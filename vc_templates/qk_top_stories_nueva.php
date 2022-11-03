<?php
extract(shortcode_atts(array(
	'tag'=>'',
	'order'=>'',
	'cat'=>'',
), $atts));

?>
<!--<div class="iso-call heading-news-box" style="opacity: 1; position: relative; height: 513.124px !important;">-->
		<?php 
			
		/*En este primer query se jalan todos los posts resaltados del día */
		$arr=array(
			   	'post_type' => 'post',  
 				'posts_per_page' => -1,
				'meta_query' => array(
					 array(
					 	'key'     => 'portada',
						'value'   => array('24','18','8','4','2'),
						'compare' => 'IN',
						),										
			),			
			'date_query'=>array(
				'relation'=>'AND',
				array( 					
					'after'     => $today,
					'inclusive' => 'true',
					),

				
			),
		);
		/*En este ciclo se pasan a validación sólo los que quedan vigentes*/
		$query=new WP_Query($arr);

		/*Acá se checa que no esté vacío*/
		$count = $query->post_count;
		if ($query->have_posts() and $count>=5){
			
			
		$ok=array();
		$i=0;
		while($query->have_posts()):
			$query->The_post();
			$horapost = get_the_time( 'H:i', $post->ID );
			$now = date('H:i');		
			$diff=$now-$horapost;
			if($diff<get_post_meta(get_the_ID(),'portada', true)){
				$ok[$i]=get_the_ID();
				$i++;
			}
		endwhile;
		
		/* Acá se toman aleatoriamente los que sí pasaron la validación */
		$arrprincipal=array(
			'post__in' => $ok,
			'posts_per_page' => 5	,
			'orderby' => DESC,
		);					
			
			$querydeprincipales=new WP_Query($arrprincipal);
		}else{
			$arr=array(
			  	'post_type' => 'post',  
 				'posts_per_page' => 5,		
				'category__in' => array( 18, 17, 2605,3,11015 ),
			);
			$querydeprincipales=new WP_Query($arr);		
			}

	
		$nupost=1;
		while($querydeprincipales->have_posts()) : $querydeprincipales->the_post();
		$enprincipal=array();
		$enprincipal[0]=get_the_ID();
		
			?>
	
	<?php if($nupost==1){ ?>
	<div class="image-slider snd-size" style="position: absolute; left: 0px; top: 0px;">
   		<div class="ribbon"><span>Destacadas</span></div>
		<div class="news-post image-post">
 					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('pportada'); ?>" width="615px" height="500px" /></a>
					<?php }else{ ?>
					<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_second.jpg"  width="615px" height="500px/></a>
					<?php } ?>  				           
			<div class="hover-box">
					<div class="inner-hover">
						<?php 
			$category_detail=get_the_category($id);//$post->ID
			foreach($category_detail as $cd){ 
			$tagslug=get_post_meta(get_the_ID(),'especial', true);
			$hourdiff = esc_html((current_time( 'timestamp' ) - get_the_time('U'))/3600 );
			//Las horas xe diferencias se calculan acaá	
			if($tagslug!='especial'){
				if($tagslug=='ultimahora' and $hourdiff>1){$tagslug='';}
				if($tagslug=='alertavial' and $hourdiff>1){$tagslug='';}
			}								
			if ($tagslug=='ultimahora'){$tagtexto='Última Hora';}
			elseif($tagslug=='alertavial'){$tagtexto='Alerta Vial';}
			else{$tagslug='';
			}
			
			if ($tagslug!=''){?>
					<a class="textoalmomento category-post loultimo" href="/ultima-hora"><?php echo esc_html($tagtexto); ?></a> 
				<?php }else{ ?>                        
					<a class="<?php if($cd->slug=='ciencia-y-salud'){ echo "textoalmomento"; } ?> category-post <?php echo esc_html($cd->slug); ?>" href="<?php echo $cd->slug ; ?>"><?php if($cd->slug=='general'){ echo "General"; }else{echo esc_html($cd->cat_name);} ?></a>
            <?php } ?> 
			<?php } ?>

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<ul class="post-tags">
							<li><i class="fa fa-clock-o"></i><?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?>  </li>

						</ul>
					</div>	
			</div>
		</div>				       
	</div>	
	<?php }else{ ?>
	<?php $id= get_the_ID(); ?>
	<div class="news-post image-post default-size" style="position: absolute; left: 620px; top: 0px;">
	<?php if(has_post_thumbnail($id=$id)){ ?>
	<div class="thumb-wrap">
	    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('portada'); ?>" width="615px" height="500px" alt="<?php the_title(); ?>" /></a> 
		<?php if(is_user_logged_in()){ echo '<a target="_blank" class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
	</div>
	<?php }else{ ?>
 		<img  alt="<?php the_title(); ?>" src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_default.jpg"  class="img-responsive" > 
 	<?php } ?>
	<div class="hover-box">
		<div class="inner-hover">

			<?php 
			$category_detail=get_the_category($id);//$post->ID
			foreach($category_detail as $cd){ 
			$tagslug=get_post_meta(get_the_ID(),'especial', true);
			$hourdiff = esc_html((current_time( 'timestamp' ) - get_the_time('U'))/3600 );
			//Las horas xe diferencias se calculan acaá	
			if($tagslug!='especial'){
				if($tagslug=='ultimahora' and $hourdiff>1){$tagslug='';}
				if($tagslug=='alertavial' and $hourdiff>1){$tagslug='';}
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
			<?php } ?>
				
			<h2><a href="<?php echo get_permalink($id); ?>"><?php echo get_the_title( $id ); ?> </a></h2>
            <?php if($principal=='yes'){ ?><?php the_excerpt(); ?><?php } ?>
            <?php if(has_excerpt()){ ?>
        		<p><a style="color:#FFFFFF; text-decoration:none" href="<?php the_permalink(); ?>"><?php the_excerpt() ?></a></p>
            <?php } ?>
		</div>
	</div>
	</div>	
	<?php }?>
	<?php $nupost++; ?>
	<?php endwhile; ?>	
<!--</div>-->
	<?php wp_reset_postdata(); ?>




