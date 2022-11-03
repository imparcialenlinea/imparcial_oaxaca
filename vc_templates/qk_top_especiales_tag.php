<?php
extract(shortcode_atts(array(
	'tag'=>'',
	'order'=>'',
	'cat'=>'',
), $atts));



?>
<div class="image-slider snd-size">
	<div class="ribbon"><span>Especiales</span></div>
	<?php if($order>1){ ?>
	<ul class="bxslider">
	<?php } ?>
		<?php 
		
				$arr = array('post_type' => 'post', 'posts_per_page' => $order,);
				if($cat!='all'){
				  if ( is_rtl() ) {
					  	$arr['cat'] = $cat;
				  }else{
						$category = get_term_by('slug', $cat, 'category');
						$cat = $category->term_id;

				  }
				}
				$arr['tag']=$tag;
			  	$arr['meta_query'] = array(
					array(
						'order' => 'DESC',
						'key'     => 'especial',
						'value'   => 1,
						'compare' => 'IN',
					));					
				$query = new WP_Query($arr);
				while($query->have_posts()) : $query->the_post();
			?>
		<?php if($order>1){ ?>
	<li>
		<?php } ?>
			<div class="news-post image-post" onclick="location.href='<?php the_permalink(); ?>';" style="cursor:pointer">
				<img src="<?php the_post_thumbnail_url( array(600, 400)); ?>" width="100%">
				<div class="hover-box">
					<div class="inner-hover">						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<ul class="post-tags">
							<li><i class="fa fa-user"></i><?php esc_html_e('Por	','hotmagazine'); ?> <?php the_author(); ?></li>
							<li><i class="fa fa-clock-o"></i><?php the_time('j') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?>  |  <?php the_time('G:i'); ?> horas </li>

						</ul>
						<?php if(get_post_meta(get_the_ID(), '_hotmagazine_caption', true)!=''){ ?>
						<p> <?php echo get_post_meta(get_the_ID(), '_hotmagazine_caption', true); ?></p>
						<?php } ?>
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