<?php
extract(shortcode_atts(array(
	'id'=>'',
	'class'=>'',
	'wrap'=>'',
	'thumb'=>'',
	'cat'=>'',
), $atts));
$custom  = hotmagazine_custom();

$args = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
);


if($cat!='' and $cat!='all'){
  if ( is_rtl() ) {
  	$args['cat'] = $cat;
  }else{
  	$args['category_name'] = $cat;
  }
}else{
	$args['p'] = $id;
}

$posts_list = new WP_Query($args);

?>
<?php 
      if($posts_list->have_posts()) :
        $i=1; while($posts_list->have_posts()) : $posts_list->the_post(); 
?>
<?php $id= get_the_ID(); ?>
<?php if($wrap!=''){ ?>
	<<?php echo esc_html($wrap); ?>>
<?php } ?>

<div class="news-post image-post">
	<?php if($custom['body_style']!='' and $custom['body_style']=='showbiz' ){ ?>
		<div class="news-post show-post">
			<div class="post-gallery">
				<?php if(has_post_thumbnail($id=$id)){ ?>
				<div class="thumb-wrap">
					<img src="<?php echo hotmagazine_thumbnail_url('', $id); ?>" alt="<?php the_title(); ?>">
					<?php if(is_user_logged_in()){ echo '<a class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
				</div>
				<?php }else{ ?>
			 		<img  alt="<?php the_title(); ?>" src="http://placehold.it/290x245"  class="img-responsive" > 
			 	<?php } ?>
			</div>
			<div class="post-content">
				<?php 
				$category_detail=get_the_category($id);//$post->ID
				foreach($category_detail as $cd){ ?>
				<a class="category-post <?php echo esc_html($cd->slug); ?>" href="<?php echo get_category_link( $cd->term_id ); ?>"><?php echo esc_html($cd->cat_name); ?></a>
				<?php } ?>
				<h2><a href="<?php echo get_permalink($id); ?>"> <?php echo get_the_title( $id ); ?> </a></h2>
				<ul class="post-tags">
					<li><i class="fa fa-clock-o"></i><?php echo get_the_time(get_option( 'date_format' ), $id); ?></li>
					<li><i class="fa fa-user"></i><?php esc_html_e('by','hotmagazine'); ?> <?php coauthors_posts_links(); ?></li>
					<li> <i class="fa fa-comments-o"></i><span><?php echo get_comments_number( $id ); ?></span></li>
				</ul>
			</div>
		</div>
	<?php }elseif($custom['body_style']!='' and $custom['body_style']=='game' ){ ?>
	<div class="post-gallery">
		<?php if(has_post_thumbnail($id=$id)){ ?>
		<div class="thumb-wrap">
			<img src="<?php echo hotmagazine_thumbnail_url('', $id); ?>" alt="<?php the_title(); ?>">
			<?php if(is_user_logged_in()){ echo '<a class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
		</div>
		<?php }else{ ?>
	 		<img  alt="<?php the_title(); ?>" src="http://placehold.it/290x245"  class="img-responsive" > 
	 	<?php } ?>
		<div class="hover-box">
			<div class="inner-hover">
				<?php 
				$category_detail=get_the_category($id);//$post->ID
				foreach($category_detail as $cd){ ?>
				<a class="category-post <?php echo esc_html($cd->slug); ?>" href="<?php echo get_category_link( $cd->term_id ); ?>"><?php echo esc_html($cd->cat_name); ?></a>
				<?php } ?>
				<h2><a href="<?php echo get_permalink($id); ?>"> <?php echo get_the_title( $id ); ?> </a></h2>
				<ul class="post-tags">
					<li><i class="fa fa-clock-o"></i><?php echo get_the_time(get_option( 'date_format' ), $id); ?></li>
					<li><i class="fa fa-user"></i><?php esc_html_e('by','hotmagazine'); ?> <?php coauthors_posts_links(); ?></li>
					<li> <i class="fa fa-comments-o"></i><span><?php echo get_comments_number( $id ); ?></span></li>
					<li><i class="fa fa-eye"></i><?php echo hotmagazine_getPostViews($id); ?></li> 
				</ul>
				<?php 
					$post = get_post( $id );

					$excerpt =  $post->post_excerpt;

					echo wp_kses_post($excerpt);
				?>
				<?php $score = get_post_meta($id, '_hotmagazine_score', true); $score_text = get_post_meta($id, '_hotmagazine_score_text', true); ?>
				<?php if($score!=''){ ?>
				<div class="rate-level">
					<p><span><?php echo esc_html($score); ?></span> <?php echo esc_html($score_text); ?></p>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php }else{  ?>

	<?php if(has_post_thumbnail($id=$id)){ ?>
	<div class="thumb-wrap">
		<img src="<?php echo hotmagazine_thumbnail_url('', $id); ?>" alt="<?php the_title(); ?>">
		<?php if(is_user_logged_in()){ echo '<a class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>
	</div>
	<?php }else{ ?>
 		<img  alt="<?php the_title(); ?>" src="http://placehold.it/290x245"  class="img-responsive" > 
 	<?php } ?>
	<div class="hover-box">
		<?php 
		$category_detail=get_the_category($id);//$post->ID
		foreach($category_detail as $cd){ ?>
		<span class="top-stories"><?php echo esc_html($cd->cat_name); ?></span> 
		<?php } ?>

		<div class="inner-hover">
			<h2><a href="<?php echo get_permalink($id); ?>"> <?php echo get_the_title( $id ); ?> </a></h2>
			<ul class="post-tags">
				<li><i class="fa fa-clock-o"></i><?php the_time(get_option( 'date_format' )); ?></li>
				<li> <i class="fa fa-comments-o"></i><span><?php echo get_comments_number( $id ); ?></span></li>
			</ul>
		</div>
	</div>
	<?php } ?>
</div>

<?php if($wrap!=''){ ?>
	</<?php echo esc_html($wrap); ?>>
<?php } ?>

<?php $i++; endwhile; ?>
<?php endif; wp_reset_postdata(); ?>