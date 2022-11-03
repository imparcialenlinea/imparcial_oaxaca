
		<section class="block-wrapper">
			
			
			<div class="container">
				<div class="row">
                <?php $category = get_the_category(); ?>
                <div  class="titulo-seccion titulo-seccion-opinion">
					<h2><span><?php echo $category[0]->cat_name; ?></span></h2>
                </div>
					<div class="col-sm-8 content-blocker">
						<?php while(have_posts()) : the_post(); ?>
						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">
                            
                            

	                            <?php if ($post->post_author=='27'){ // SI ES EL CALLA'O?>
								<div class="title-post">
									<h1>Columna dominical El Calla'o</h1>
									<ul class="post-tags">
										<li><i class="fa fa-user"></i><?php /*the_author_posts_link();*/ echo ('Por '); the_author(); ?> <?php 
										$term_list = wp_get_post_terms($post->ID, 'agencias', array("fields" => "all"));
										foreach($term_list as $term_single) {
										echo (' / '); echo $term_single->name; //do something here
										} ?></li>
                                        <li><i class="fa fa-clock-o"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?> | <?php the_time( 'G:i' ); ?> horas </li>
									</ul>
								</div>
							

                            	<?php get_template_part( 'intro/intro', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>
                                                                        
								<?php }elseif ($post->post_author=='19'){ // SI ES COLABORADOR?>
								<div class="title-post">
									<h1><?php the_title(); ?></h1>
									<ul class="post-tags">
										<li><i class="fa fa-user"></i><?php /*the_author_posts_link();*/ echo ('Por '); $exc = get_the_excerpt(); echo($exc); ?> <?php 
										$term_list = wp_get_post_terms($post->ID, 'agencias', array("fields" => "all"));
										foreach($term_list as $term_single) {
										echo (' / '); echo $term_single->name; //do something here
										} ?></li>
                                        <li><i class="fa fa-clock-o"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?> | <?php the_time( 'G:i' ); ?> horas </li>
									</ul>
                                    <p>&nbsp;</p>
								</div>                                       
                                <?php }else{ // SI NO ES EL CALLAO ni COLABORADOR?>
								<div class="title-post">
									<h1><?php the_title(); ?></h1>
                                    <h2><?php echo esc_html(get_the_author_meta('_hotmagazine_user_columna'));?></h2>
                                    <p>&nbsp;</p>
									<ul class="post-tags">
										<li><i class="fa fa-user"></i><?php /*the_author_posts_link();*/ echo ('Por '); the_author();?> <?php 
										$term_list = wp_get_post_terms($post->ID, 'agencias', array("fields" => "all"));
										foreach($term_list as $term_single) {
										echo (' / '); echo $term_single->name; //do something here
										} ?></li>
                                        <li><i class="fa fa-clock-o"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?> | <?php the_time( 'G:i' ); ?> horas </li>
									</ul>
                                    <p>&nbsp;</p>
								</div>                                     
                                                                
                                
                                <?php } ?>




             <div style="display:inline-block; margin-bottom:10px">
                                        <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true">		<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Compartir</a></div>
                                    <div class="fb-send" data-href="<?php the_permalink(); ?>"></div>
                                    <div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="small"></div>
                                    </div>
								
								<?php echo do_shortcode($custom['post-banner']); ?>
								<div class="the-content">

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
	 							 

								  if ($tags) {  //Si hay TAGS o UBICACIONES o ambos
								  $tag_ids = array();  //Este array toma los posts relacionados de acuerdo a TAGS
								  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
								  $args=array(  
								  'tag__in' => $tag_ids,  
								  'post__not_in' => array($post_id),  
								  'posts_per_page'=>3, // Number of related posts to send.   
								  'cat'=>9, // Ignorar posts de 'Opinión'
								  );
								 
									
								$my_query=new WP_Query($args);

							    ?>
                                
							    <?php if($my_query->have_posts()){ ?>
							    	<!-- carousel box -->
									<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h2><?php esc_html_e('Relacionado:','hotmagazine'); ?></h2>
									</div>
									<div class="item" id="list_load">	
										<ul class="list-posts">
									
										<?php $i=0; while( $i<5 and $my_query->have_posts() ) {  
											$my_query->the_post(); ?> 
                                            
                                            <li><?php if(has_post_thumbnail()){ ?>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                                                <?php }else{ ?>
									    	       <div class="thumb-wrap">
												<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?><a target="_blank" class="edit-post" href="http://imparcialoaxaca.mx/wp-admin/post.php?post=<?php echo($post->ID)?>&amp;action=edit">edit</a>
				                    	            </div>
                                                <?php  } ?>
                                            <div class="post-content opitext">
                      						  <a class="opitit" href="<?php the_permalink(); ?>"><h2><?php echo esc_html(get_the_author_meta('_hotmagazine_user_columna'));?></h2></a><p><?php the_title(); ?></p> 
                        
                                                <ul class="post-tags">			
                                                <li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li>
                                                <li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>	
                                                </ul>
                                            </div></li>

										
										<?php $i++; } ?>
										<?php 
										wp_reset_postdata();  
										?>
									</ul></div>
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
		