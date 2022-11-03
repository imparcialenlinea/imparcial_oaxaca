<?php

extract(shortcode_atts(array(

	'id'=>'',
	'class'=>'',
	'wrap'=>'',
	'thumb'=>'',
	'thumbsize'=>'',
	'cat'=>'',
	'offset'=>'',	
	'excluircat'=>'',
	'the_tags'=>'',
	

), $atts));


$args = array(

	'post_type' => 'post',
	'posts_per_page' =>1,
	'offset' => $offset,

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

if($the_tags!=''){
	$args['tag']= $the_tags;	
}


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
		<div class="news-post image-post2">
            <div class="post-gallery">
                <div class="thumb-wrap"> 
                   <a href="<?php echo get_permalink($id); ?>"><img width="100%" src="<?php echo hotmagazine_thumbnail_url($thumbsize, $id); ?>" alt="<?php the_title(); ?>"></a>
                </div>
            <div class="hover-box">
                <div class="inner-hover"> 
                    <h2><a href="<?php echo get_permalink($id); ?>"><?php the_title(); ?></a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>	
                        <li><i class="fa fa-user"></i>Por <?php the_author(); ?></a></li>		                       
                    </ul>
                </div>
            </div>
    </div>
</div>
		
        

<!--		<?php if(has_post_thumbnail($id=$id)){ ?>-->


<!--

		<div class="thumb-wrap">

			<a href="<?php echo get_permalink($id); ?>"><img src="<?php echo hotmagazine_thumbnail_url($thumbsize, $id); ?>" alt="<?php the_title(); ?>"></a>

			<?php if(is_user_logged_in()){ echo '<a class="edit-post" href="'.get_edit_post_link($id).'">'.'edit</a>'; } ?>

		</div>
   

		<?php }else{ ?>

	 		<img  alt="<?php the_title(); ?>" src="http://placehold.it/290x245"  class="img-responsive" > 

	 	<?php } ?>

	 	
<div class="post-content tituloprincipal">	

				<h2><a href="<?php echo get_permalink($id); ?>"> <?php echo get_the_title( $id ); ?> </a></h2>

				<ul class="post-tags">

					<li><i class="fa fa-clock-o"></i><?php echo get_the_time(get_option( 'date_format' ), $id); ?></li>

					<li><i class="fa fa-user"></i><?php esc_html_e('Por','hotmagazine'); ?> <?php the_author_posts_link(); ?></li>-->

				

					<!--<?php if($custom['body_style']!='travel'){ ?>

					<li><i class="fa fa-eye"></i><?php echo hotmagazine_getPostViews($id); ?></li>

					<?php } ?>-->

				</ul>

		<!--	</div> -->

	<!--	</div>-->

	</div>

</div>

<?php if($wrap!=''){ ?>

	</<?php echo esc_html($wrap); ?>>

<?php } ?>

<?php $i++; endwhile; ?>

<?php endif; wp_reset_postdata(); ?>