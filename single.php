<?php 
	get_header();
	$single_style = get_post_meta($post->ID,'_hotmagazine_single_type', true);
	$custom  = hotmagazine_custom();
	$category = get_the_category(); ?>
		<section class="block-wrapper">	
        <?php if(has_post_format('image')){
			get_template_part('full');
		}else{?>          
			<div class="container"> 
				<div class="row">
					<div class="col-sm-8 content-blocker">
				<?php if($post->_hotmagazine_especial=='on' or $post->especial==1 ) {?>
                    <div  class="titulo-seccion titulo-seccion-especial">
                    	<h2><span>Especiales</span></h2>
                    </div>  
				<?php }elseif($category[0]->slug=='general') {?>
                    <div  class="titulo-seccion titulo-seccion-general">
                    	<h2><span>General</span></h2>
                    </div>                                                                                         
                <?php }else{ ?>
                    <div  class="titulo-seccion titulo-seccion-<?php echo $category[0]->slug; ?>">               
                        <h2><span><?php echo $category[0]->cat_name; ?></span></h2>
                    </div>
                <?php } ?>                                    
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
									<h1><?php the_title(); ?></h1>
								</div>								
                                <?php if(!has_post_format('aside') ){ ?>                                                            
                                	<div class="sumario"><p><?php the_excerpt(); ?></p></div>
                                <?php } ?>
                                <a href="https://www.facebook.com/ElImparcialdeOaxaca" target="_blank"><img src="https://imparcialoaxaca.mx/wp-content/uploads/2022/01/SIGUENOS-EN-FACEBOOK_Mesa-de-trabajo-1.jpg" width="100%"></a>                                
                                <?php }?>
                                <div style="display:inline-block; margin-bottom:10px">
                                 <div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="large"></div>
                                 <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                              </div>
								
							<?php {?> 	
							<?php if(wp_is_mobile()){?>
								<!-- /227134889/notas_todo_rem_sas_mob -->
<div id='div-gpt-ad-1636220623899-0' style='min-width: 300px; min-height: 250px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1636220623899-0'); });
  </script>
</div>
						  </div>								
						    <?php }else{ ?>
								<!-- /227134889/728x90_notas_rem_sas -->
<div id='div-gpt-ad-1636220680488-0' style='min-width: 728px; min-height: 90px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1636220680488-0'); });
  </script>
</div>
							<?php } } ?><br>								
								
								<?php get_template_part( 'intro/intro', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?> 
                                	<div class="caja-datos">
										<div style="float:right"><a id="text_resize_increase" onmousedown='larger()' href='javascript:void(0);'>A<sup>+</sup></a> <br />
                                        						 <a id="text_resize_decrease" onmousedown='smaller()' href='javascript:void(0);'>A<sup>-</sup>	</A>
                                        </div>  
                                        
                                            
                                 <?php 
								 $ubic_list = wp_get_post_terms($post->ID, 'ubicaciones', array('hide_empty' => false,'number' => '1','offset' => '0',));
								foreach($ubic_list as $ubic){}; ?>                                                                       
                                    <ul class="post-tags">
	                                <li><i class="fa fa-calendar"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i><?php the_time( 'G:i' ); ?> horas </li><br />
                                     <?php //AUTORES ?>
										<li><i class="fas fa-user-circle"></i><?php 
										if ( function_exists( 'coauthors_posts_links' ) ) {
											coauthors();
										} else {
											the_author_posts_link();
										}?>
                                        </li><br />                                   
                                    <?php //AGENCIAS 
									$agencias = rwmb_meta('allagency');
									if (!empty($agencias) and $agencias[0]->name!='-'){?> 
										<li><i class="fa fa-newspaper-o"></i><?php echo ('Con información de '); 
										foreach($agencias as $agencia){echo $agencia->name.', '; } ?></li><br />
									<?php } ?>
                               
									<?php if ($ubic->name!='' and $ubic->name!='(Ninguna)'){?>
                                    <li><i class="fa fa-map"></i><a href="/ubicaciones/<?php echo $ubic->slug;?>"><?php echo $ubic->name;?></a></li>
									<?php }?>     
                                    </ul>                                       
                                 	</div>     
                                                  

								<div class="content">                                        

									 <div class="<?php if(has_post_format('aside') or in_category('15')){echo('almomentotext ');}?>">
                                     <?php //AQUÍ VAN LAS NUEVAS NUMERALIAS ?>
                                     <?php the_content(); ?>
                                     <?php
									    if(wp_is_mobile()){
										   get_template_part('numeralias'); 
									    }
									 ?>
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
							 	
							<?php if(wp_is_mobile()){?>
								
														
						    <?php }else{ ?>
							
							<?php }  ?><br>										
								
								<?php } ?>                                     
                                     
									<?php  if('open' == $post->comment_status){ ?>
                                        <div style="width:100%">		
                                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
                                        </div>
                                    <?php } ?>   
                                    <!-- codigo advertnative (rene-flechita) -->
                                    <div id="956058422500de80654a14d89ca9a010"></div>
<script async src="https://click.advertnative.com/loading/?handle=12251" ></script>
                                   <!-- fin codigo advertnative (rene-flechita) -->
                                   	<p>&nbsp;</p>  
                                   <?php get_template_part('ads/AD_footer'); ?>                                                                                                                                                                                           
                          </div>
								<div style="text-align: center">
									<?php if(wp_is_mobile()){?>
										<!-- /227134889/notas_todo_300x250_mob2 -->
<div id='div-gpt-ad-1636221385337-0' style='min-width: 300px; min-height: 50px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1636221385337-0'); });
  </script>
</div>
															 
									<?php }else{?>
								<!-- /227134889/728x90_notas_rem_sas2 -->
<div id='div-gpt-ad-1636221092928-0' style='min-width: 300px; min-height: 50px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1636221092928-0'); });
  </script>
</div>
									 <?php } ?>
								</div>
                                                          
								<?php get_template_part('related_general');?>
                                
                                <?php // if($post->ID==3912){get_template_part('covid');};										?>
								
                                    <div class="OUTBRAIN" data-src="DROP_PERMALINK_HERE" data-widget-id="AR_1" data-ob-template="imparcialoaxaca"></div>
                                    <script type="text/javascript" async="async" src="https://widgets.outbrain.com/outbrain.js"></script>                                         
							</div>
							<!-- End single-post box -->

				  </div>
						<!-- End block content -->
						<?php endwhile; ?>
			  </div>

					<div class="col-sm-4 sidebar-sticky">

						<?php get_sidebar(small); ?>

					</div>

		  </div>

			</div>
        		<?php }?>
		</section>

		<!-- End block-wrapper-section -->		
<?php get_footer();  ?>