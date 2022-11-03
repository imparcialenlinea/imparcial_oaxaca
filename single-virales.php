														          
		<section class="block-wrapper">	
			<div class="container"> 
				<div class="row">
				<?php if($post->_hotmagazine_especial=='on' or $post->especial==1 ) {?>
                    <div  class="titulo-seccion titulo-seccion-especial">
                    	<h2><span>Especiales</span></h2>
                    </div>                                
                <?php }elseif(in_category(array(12,13,20,1,5,15,1083,74,72,71,70,73,69))){?>
                                         
                <?php }else{ ?>
					<?php $category = get_the_category(); ?>
 
                    <div  class="titulo-seccion titulo-seccion-<?php echo $category[0]->slug; ?>">               
                        <h2><span><?php echo $category[0]->cat_name; ?></span></h2>
                    </div>
                <?php } ?>


					<div class="col-sm-8 content-blocker">
						<?php while(have_posts()) : the_post(); ?>
						<!-- block content -->
						<div class="block-content">
							<!-- single-post box -->
							<div class="single-post-box">
                            <?php get_template_part('sharer');?>
                            <?php if(in_category('9')){
                           		 get_template_part('title-opinion');                            
                             }else{?>
								<div class="title-post">
                                <?php get_template_part('tag_image');?>    
									<h1><?php the_title(); ?></h1>
								</div>
                                <?php }?>
                                <div style="display:inline-block; margin-bottom:10px">
                                 <div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="large"></div>
                                 <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                                  </div>
								<?php get_template_part( 'intro/intro', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>
								<?php echo do_shortcode($custom['post-banner']); ?>
									<div class="caja-datos">
										<div style="float:right"><a id="text_resize_increase" onmousedown='larger()' href='javascript:void(0);'>A<sup>+</sup></a> 
                                        						 <a id="text_resize_decrease" onmousedown='smaller()' href='javascript:void(0);'>A<sup>-</sup>	</A>
                                        </div>  
                                            
                                 <?php 
								 $ubic_list = wp_get_post_terms($post->ID, 'ubicaciones', array('hide_empty' => false,'number' => '1','offset' => '0',));
								foreach($ubic_list as $ubic){}; ?>                                                                       
                                    <ul class="post-tags">
	                                <li><i class="fa fa-calendar"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i><?php the_time( 'G:i' ); ?> horas </li><br />
                                     <?php //AUTORES ?>
										<li><i class="fas fa-user-circle"></i>Por Gluc.mx</li><br />                                                                       
                                    </ul>                                       
                                 	</div>                    

								<div class="the-content" >                                        						                                      
									 <?php the_content(); ?>
                                    <p>&nbsp;</p>                                
                                </div>                                                       
                                

								<?php if(has_tag()){ ?>
								<div class="post-tags-box">
                                	<ul class="tags-box"><li><i class="fa fa-tags"></i><span>Tags:</span> </li>
                                <?php $posttags = get_the_tags();
									  foreach($posttags as $tag) {
										$sitiourl = rwmb_meta( 'urlmicrositio', array( 'object_type' => 'term' ), $tag->term_id );
										if($sitiourl!=''){  
											echo'<li><a href="'.$sitiourl.'">'.$tag->name.'</a></li>';
										}else{
											echo'<li><a href="/tag/'.$tag->slug.'">'.$tag->name.'</a></li>';
										}
									  
									}
									?>
                                     </ul>
                                 </div>                                
								<?php } ?>
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



							</div>
							<!-- End single-post box -->

						</div>
						<!-- End block content -->
						<?php endwhile; ?>
					</div>

					<div class="col-sm-4 sidebar-sticky">

						<?php get_sidebar(); ?>

					</div>

				</div>

			</div>
		
		</section>
