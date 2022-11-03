<section class="block-wrapper">			
			<div class="container">
				<div class="row">
                <?php if($post->_hotmagazine_especial=='on') {?>
                	    <div  class="titulo-seccion titulo-seccion-especial">
                    	    <h2><span>Especiales</span></h2>
                    	</div>                
                
                <?php }?>
               
					<div class="col-sm-8 content-blocker">
						<?php while(have_posts()) : the_post(); ?>
						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">

								<div class="title-post">
									<h1><?php the_title(); ?></h1>
									<ul class="post-tags">
										<li><i class="fa fa-user"></i><?php /*the_author_posts_link();*/ echo ('Por '); the_author(); ?> <?php 
										$term_list = wp_get_post_terms($post->ID, 'agencias', array("fields" => "all"));
										foreach($term_list as $term_single) {
										echo (' / '); echo $term_single->name; //do something here
										} ?></li>
                                        <li><i class="fa fa-clock-o"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?> | <?php the_time( 'G:i' ); ?> horas </li>
									</ul>
								</div>
                                <div class="sumario"><?php the_excerpt(); ?></div>
                                <div style="display:inline-block; margin-bottom:10px">
                                        <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true">		<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Compartir</a></div>
                                    <div class="fb-send" data-href="<?php the_permalink(); ?>"></div>
                                    <div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="small"></div>
                                    </div>
								<?php get_template_part( 'intro/intro', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>

								<?php echo do_shortcode($custom['post-banner']); ?>
								<div class="the-content">
                                 <?php $term_list = wp_get_post_terms($post->ID, 'ubicaciones', array(
																	    'hide_empty' => false,
																		'number' => '1',
																		'offset' => '0',
																		) );
								 foreach($term_list as $term_single) {?>
                                 
                                 
									 <a href="/ubicaciones/<?php echo $term_single->slug;?>"><p class="geotagterm"><?php echo $term_single->name;?></p></a><?php } ?>

									 <?php the_content(); ?>
				                      <?php
				                        $defaults = array(
				                          'before'           => '<div id="page-links"><strong>Page: </strong>',
				                          'after'            => '</div>',
				                          'link_before'      => '<span>',
				                          'link_after'       => '</span>',
				                          'next_or_number'   => 'number',
				                          'separator'        => ' ',
				                          'nextpagelink'     => esc_html__( 'Next page','hotmagazine' ),
				                          'previouspagelink' => esc_html__( 'Previous page','hotmagazine' ),
				                          'pagelink'         => '%',
				                          'echo'             => 1
				                        );
				                       ?>
				                      <?php wp_link_pages($defaults); ?>
								</div>

								<?php 
									$reviews = get_post_meta(get_the_ID(),'post_review', true); 
									$review_d = get_post_meta(get_the_ID(),'_hotmagazine_review_dsc', true); 
									
									if(isset($reviews[0]['_hotmagazine_review_title'])){ ?>
										<div class="review-box">
										<div class="title-section">
											<h1><span><?php esc_html_e('Reviewer overview','hotmagazine'); ?></span></h1>
										</div>
										<div class="member-skills">

										<?php $total = 0;  $i=0;foreach((array)$reviews as $key => $entry){
												
												 $title = esc_html( $entry['_hotmagazine_review_title'] );
												 $score = $entry['_hotmagazine_review_core']; 
												 $percent = $entry['_hotmagazine_review_core']*10; 
												 $total = $total + $score;
												?>
												<p><?php echo esc_html( $entry['_hotmagazine_review_title'] ); ?> - <?php echo esc_html( $score ); ?>/10</p>
												<div class="meter nostrips design">
													<p style="width: <?php echo esc_attr($percent); ?>%"></p>
												</div>

											<?php $i++; } ?>
										</div>
									</div>
									<?php 	}
									?>

								<?php if(has_tag()){ ?>
								<div class="post-tags-box">
									<?php the_tags('<ul class="tags-box"><li><i class="fa fa-tags"></i><span>Tags:</span> </li><li>',' </li> <li>','</li></ul>'); ?>
									
								</div>
								<?php } ?>



								<?php
								  
								  $post_id = get_the_ID();
								  $tags = wp_get_post_tags($post_id);  // Toma los TAGS de la nota
	 							  $custom_taxterms = wp_get_object_terms( $post->ID, 'ubicaciones', array('fields' => 'ids') );	// Toma las UBICACIONES de la nota

								  if ($tags) {  //Si hay TAGS o UBICACIONES o ambos								  
								  $tag_ids = array();  //Este array toma los posts relacionados de acuerdo a TAGS
								  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
								  $args=array(  
								  'tag__in' => $tag_ids,  
								  'post__not_in' => array($post_id),  
								  'posts_per_page'=>2, // Number of related posts to send.   
								  'cat'=>-9,-55, // Ignorar posts de 'Opinión'
								  );
								 
											
									$ubic = array( //Este array toma los posts relacionados de acuerdo a UBICACIONES
									'post_status' => 'publish',
									'posts_per_page' => 3, // you may edit this number
									'order' => 'DESC',
									'tax_query' => array(
										array(
											'taxonomy' => 'ubicaciones',
											'field' => 'id',
											'terms' => $custom_taxterms,
										)
									),
									'post__not_in' => array ($post->ID),
									);

									$query1 = new WP_Query($args); //Hace la magia de juntar los arreglos
									$query2 = new WP_Query($ubic);	
									$my_query_b = new WP_Query();
									$my_query_b->posts = array_merge( $query1->posts, $query2->posts );
									// we also need to set post count correctly so as to enable the looping
									$my_query_b->post_count = count( $my_query_b->posts );
									
									
									
							$i=0; $nuevavariable=array();
							while($my_query_b->have_posts()) : 
								$my_query_b->the_post(); 
								array_push($nuevavariable, get_the_id()); 
							$i++;
								
							endwhile;
							
								$arr['post__in'] = $nuevavariable; //Hace el nuevo arreglo con los posts relacionados
								$arr['posts_per_page'] = 5; //Acá se pone el numero de posts relacionados que queremos mostrar
								$my_query=new WP_Query($arr);

							    ?>
                                
							    <?php if($my_query->have_posts()){ ?>
							    	<!-- carousel box -->
									<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h2><?php esc_html_e('Notas relacionadas','hotmagazine'); ?></h2>
									</div>
									<div class="owl-carousel" data-num="4" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">

										<?php while( $my_query->have_posts() ) {  
											$my_query->the_post(); ?> 

										<div class="item news-post image-post3">
											<?php if(has_post_thumbnail()){ ?>
											<a href="<?php the_permalink(); ?>"><img style="border:1px solid #ddd" src="<?php echo(get_the_post_thumbnail_url(get_the_ID(),'thumbnail'));?>" width="100%" /></a>	
											<?php }else{ ?>
											<img src="http://placehold.it/270x200" alt=<?php the_title(); ?> />
											<?php } ?>
											<div class="hover-box">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
												
											</div>
										</div>
										<?php } ?>
										<?php 
										wp_reset_postdata();  
										?>
									</div>
									</div>
								<?php } ?>
								<!-- End carousel box -->
								<?php } ?>

								<?php  if('open' == $post->comment_status){ ?>
									<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
								<?php }  ?>


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