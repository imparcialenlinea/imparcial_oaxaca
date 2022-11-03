								<!-- carousel box -->
                             	<?php
								  $post_id = get_the_ID();
								  $tags = wp_get_post_tags($post_id);  // Toma los TAGS de la nota
								  if ($tags) {  //Si hay TAGS o UBICACIONES o ambos
											// DO THE TAGS THING
											  $tag_ids = array();  //Este array toma los posts relacionados de acuerdo a TAGS
											  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
											  $args=array(  
											  'tag__in' => $tag_ids,  
											  'tag__not_in' => array(1828),
											  'post__not_in' => array($post_id),  
											  'posts_per_page'=>4  , // Number of related posts to send.   
											  'cat'=>-9, // Ignorar posts de 'Opinión'
											  );
											  $my_query = new WP_Query($args); ?>																					
	
                                
							    <?php if($my_query->have_posts()){ ?>


									<div class="title-section">
										<h2><?php esc_html_e('Relacionadas:','hotmagazine'); ?></h2>
									</div>
                                    <div class="relatedentry">
										<ul>
										<?php  $i=1; while( $my_query->have_posts() ) {  
											$my_query->the_post();?> 
                                                <li class="<?php if($i%2==0){echo('even');}else{echo('odd');}?>">
                                                <?php if(has_post_thumbnail()){?>                                                
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <img  width="80" height="80" src="<?php the_post_thumbnail_url('thumbnail')?>" class="ocultarmovil relatedthumb wp-post-image" alt="<?php the_title();?>" title="<?php the_title();?>"></a>                                               
												<?php }else{ ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <img  width="80" height="80" src="https://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_small.jpg" class="ocultarmovil relatedthumb wp-post-image" alt="<?php the_title();?>" title="<?php the_title();?>"></a>                                                
                                                <?php }?>
                                                </a><p class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></p><div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="small"></div>
                                                </li>
										<?php $i++; } wp_reset_postdata();?>                                                                                
										</ul>
									</div>
								<?php } ?>                                
								<?php } ?>
								<!-- End carousel box -->												