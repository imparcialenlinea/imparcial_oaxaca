<?php 	$custom  = hotmagazine_custom();?>
<?php get_template_part('sharer');?>
<div class="news-post very-large-post">
	<?php while(have_posts()) : the_post(); ?>  
<div class="news-post image-post"> 
	<?php if(has_post_thumbnail()){ ?>
    		<img src="<?php echo get_the_post_thumbnail_url();?>" width="100%" />
	<?php } ?>
    <div class="hover-box">
            <div class="inner-hover">
            <?php 
			$id = get_the_ID();
			$category_detail=get_the_category($id);//$post->ID
			foreach($category_detail as $cd){ ?>
			<a class="category-post <?php echo esc_html($cd->slug); ?>" href="<?php echo '/'.esc_html($cd->slug); ?>"><?php echo esc_html($cd->cat_name); ?></a> 
		<?php } ?>
                <div class="container">
                    <h1 style="color:#FFFFFF"><?php the_title(); ?></h1>
                    <h4 style="color:#FFFFFF"><?php the_excerpt(); ?></h4>
                    <ul class="post-tags">
                    <li><i class="fas fa-user-circle"></i><?php echo ('Por '); the_author(); 
                                            $autores = rwmb_meta('allautor');
                                            if (!empty($autores)){
                                                foreach($autores as $autor){$user = get_userdata( $autor ); echo ', '.$user->display_name; } ?>
                                        <?php } ?>
                    </li>
                    <li><i class="fa fa-calendar"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i><?php the_time( 'G:i' ); ?> horas </li>	
                    <?php if ($ubic->name!='' and $ubic->name!='(Ninguna)'){?>
                    <li><i class="fa fa-map"></i><a href="/ubicaciones/<?php echo $ubic->slug;?>"><?php echo $ubic->name;?></a></li>
                    <?php }?> 
                    </ul>
            </div>
        </div>
    </div>
    </div>
    <p>&nbsp;</p>
    <div class="the-content fotorreportaje" > 
        <center><?php the_content(); ?></center>
    </div>
   <p>&nbsp;</p>                                
   <p>&nbsp;</p>     
</div>
<?php endwhile; ?>

                                <?php  if('open' == $post->comment_status){ ?>
									<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
								<?php } ?>
								<?php if(in_category('9')){ //Categoría opinión
	                                	get_template_part('related_opinion');                                
									}elseif(in_category('15')){ //Categoría sociales
	                               	 	get_template_part('related_sociales');									
									}else{
	                                	get_template_part('related_general');
                                }?>