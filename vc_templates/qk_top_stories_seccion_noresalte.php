<?php
extract(shortcode_atts(array(
	'tag'=>'',
	'order'=>'',
	'cat'=>'',
	'thumbsize'=>'',	
), $atts));
?>
<div class="image-slider snd-size">
   <div class="ribbon"><span><?php echo esc_html($tag); ?></span></div>
	<!--<span class="top-stories"></span>-->
	<?php if($order>1){ ?>
	<ul class="bxslider">
	<?php } ?>
		<?php  
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
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url($thumbsize); ?>" width="100%" /></a>
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