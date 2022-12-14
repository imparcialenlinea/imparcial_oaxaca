<?php
extract(shortcode_atts(array(
	'tag'=>'',
	'order'=>'',
	'cat'=>'',
), $atts));
?>
<div class="image-slider snd-size">
   <div class="ribbon"><span><?php echo esc_html($tag); ?></span></div>
	<!--<span class="top-stories"></span>-->
	<?php if($order>1){ ?>
	<ul class="bxslider">
	<?php } ?>
		<?php  
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
						'value'   => 'fijarprincipal',
						'compare' => 'IN',
						),																					
			));
			$publiquery=new WP_Query($arpubli);
			while($publiquery->have_posts()) : $publiquery->the_post();
				$hourdiff = esc_html((current_time( 'timestamp' ) - get_the_time('U'))/3600 );
				if(get_post_meta(get_the_ID(), 'fijartime', true)>=$hourdiff){ ?>
                
			<li><div class="news-post image-post">
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url($thumbsize); ?>" width="615px" height="500px" /></a>        
				<div class="hover-box">
					<div class="inner-hover">
						<?php 
			$category_detail=get_the_category($id);//$post->ID
			foreach($category_detail as $cd){ ?> 
					<a class="<?php if($cd->slug=='ciencia-y-salud'){ echo "textoalmomento"; } ?> category-post <?php echo esc_html($cd->slug); ?>" href="<?php echo $cd->slug ; ?>"><?php if($cd->slug=='general'){ echo "General"; }else{echo esc_html($cd->cat_name);} ?></a>
            <?php } ?> 

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<ul class="post-tags">
							<li><i class="fa fa-user"></i><?php esc_html_e('Por	','hotmagazine'); ?> <?php the_author(); ?></li>
							<li><i class="fa fa-clock-o"></i><?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></li>
						</ul>
					</div>
				</div>
			</div>
		</li>

			<?php	}
			$order=$order-1;
			endwhile; 

			$arr = array(
			   	'post_type' => 'post',  
				'posts_per_page' => $order,
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
				  	$arr['cat'] = $cat;
				  }else{
				  	$arr['category_name'] = $cat;
				  }
				}
				$query = new WP_Query($arr);			
				while($query->have_posts()) : $query->the_post(); ?>
					<?php if($order>1){ ?>
	<li>
		<?php } ?>
			<div class="news-post image-post">
 					<?php if(has_post_thumbnail()){ ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url($thumbsize); ?>" width="615px" height="500px" /></a>
					<?php }else{ ?>
					<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_second.jpg"  width="615px" height="500px/></a>
					<?php } ?>           
				<div class="hover-box">
					<div class="inner-hover">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
				</div>
			</div>
		<?php if($order>1){ ?>
		</li>
		<?php } ?>
		<?php endwhile; ?>       
	<?php wp_reset_postdata(); ?>
	<?php if($order>1){ ?>
	</ul>
	<?php } ?>
</div>