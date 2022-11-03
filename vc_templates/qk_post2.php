<?php
extract(shortcode_atts(array(
	'class'=>'',
	'wrap'=>'',
	'thumb'=>'',
	'thumbsize'=>'',
	'offset'=>'',
), $atts));


$args = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'offset' => $offset,
							'meta_query' => array(
								array(
										'key'     => 'resalte_portada',
										'value'   => 1,
										'compare' => 'IN',
									),									
		)	
);



$posts_list = new WP_Query($args);

?>

<?php $custom  = hotmagazine_custom(); ?>
<?php 
      if($posts_list->have_posts()) :
        $i=1; while($posts_list->have_posts()) : $posts_list->the_post(); 
?>
<?php $id= get_the_ID(); ?>
<?php if($wrap!=''){ ?>
	<<?php echo esc_html($wrap); ?>>
<?php } ?>
<div class="news-post image-post2">
	<div class="post-gallery">
		
		<?php if(has_post_thumbnail($id=$id)){ ?>
		<div class="thumb-wrap">
			<img src="<?php echo hotmagazine_thumbnail_url($thumbsize, $id); ?>" alt="<?php the_title(); ?>">
			<?php if(is_user_logged_in()){ echo '<a class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
		</div>
		<?php }else{ ?>
	 		<img  alt="<?php the_title(); ?>" src="http://imparcialito.imparcialoaxaca.mx/wp-content/uploads/sites/4/2018/09/img_imparcialito_generica.jpg"  class="img-responsive" > 
	 	<?php } ?>
	 	
		<div class="hover-box">
			<a href="<?php the_permalink() ?>">
                <div class="tit-imparcialito">    
                <?php $fancy=rwmb_meta( 'fancy' ); ?>              
                  <p class="text1"><?php echo $fancy['text_1']; ?></p>
                  <p class="text2">
                  <?php echo $fancy['text_2']; ?>
                  <?php  if($fancy['img_checkbox']==1){?>
					  <?php rwmb_the_value( 'img_selected'); ?>					  
				  <?php	 } ?>
                  </p>                  
                  <p class="text3"><?php echo $fancy['text_3']; ?></p>
                  <p class="text4"><?php echo $fancy['text_4']; ?></p>                  
				<ul>
					<li><i class="fa fa-user"></i><?php esc_html_e('Por','hotmagazine'); ?> <?php the_author(); ?></li>
				</ul>                    
               </div></a>                          
		</div>
	</div>
</div>
<?php if($wrap!=''){ ?>
	</<?php echo esc_html($wrap); ?>>
<?php } ?>
<?php $i++; endwhile; ?>
<?php endif; wp_reset_postdata(); ?>