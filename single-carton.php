<?php get_header(); ?>
		
		<?php $single_style = get_post_meta($post->ID,'_hotmagazine_single_type', true); ?>
		<?php 
			$custom  = hotmagazine_custom();
			if($custom['body_style']!='' and $custom['body_style']=='fashion' ){
			get_template_part('bothsidebar');
		?>
		<?php }elseif($custom['body_style']!='' and $custom['body_style']=='tech' ){
			get_template_part('bothsidebar');
		?>
		<?php }elseif($custom['body_style']!='' and $custom['body_style']=='politics' ){
			get_template_part('bothsidebar');
		?>
		<?php }elseif($custom['body_style']!='' and $custom['body_style']=='design' ){
			get_template_part('designsingle');
		?>
		<?php }elseif($single_style!='' and $single_style!='standard'){ 
			get_template_part($single_style);
		}else{ ?>

		<?php if($custom['blog_layout']!='standard'){
			get_template_part($custom['blog_layout']);
		}else{ ?>

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			
			
			<div class="container">
				<div class="row">
                <?php $category = get_the_category(); ?>
                <div  class="titulo-seccion titulo-seccion-cartones">
					<h2><span>Cartones</span></h2>
                </div>
					<div class="col-sm-8 content-blocker">
						<?php while(have_posts()) : the_post(); ?>
						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">

								<div class="title-post">
									<h1>Cartón de <?php 
										$post_id = get_the_ID(); $term_list = wp_get_post_terms($post_id, 'cartonistas', array("fields" => "all"));
										foreach($term_list as $term_single) {
											if($term_single->name=='José Bolaños'){
												echo ('Bolaños');
											}elseif($term_single->name=='Darío Castillejos'){
												echo ('Darío');
											}elseif($term_single->name=='Espíritu Maligno'){
												echo ('Espíritu');
											}else{
												echo($term_single->name);										}
										} ?></h1>
									<ul class="post-tags">
										
                                        <li><i class="fa fa-clock-o"></i><?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?> | <?php the_time( 'G:i' ); ?> horas </li>
                                        <li><i class="fa fa-user"></i><?php 
										$term_list = wp_get_post_terms($post->ID, 'cartonistas', array("fields" => "all"));
										foreach($term_list as $term_single) {
										echo('Por ');
										echo $term_single->name; //do something here
										} ?></li>
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
								<div class="content">

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


								<?php if($custom['related_post']==true){ ?>
								<?php
								  
								  $post_id = get_the_ID();
									$arr=array(
									'post__not_in' => array($post_id),  
								 	'posts_per_page'=>8,
									'orderby'=>'DESC',
								  	'post_type'=>'carton', 
									);
										
								$my_query=new WP_Query($arr);
							    ?>           
                                
                                
                                
							    	<!-- carousel box -->
									<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h2><?php esc_html_e('Más cartones','hotmagazine'); ?></h2>
									</div>
									<div class="owl-carousel" data-num="5" data-rtl="<?php if ( is_rtl() ) { ?>true<?php }else{  ?>false<?php }?>">

										<?php while( $my_query->have_posts() ) {  
											$my_query->the_post(); ?> 

										<div class="item news-post image-post3">

										
											<?php if(has_post_thumbnail()){ ?>
                                            <a href="<?php the_permalink(); ?>"><img style="border:1px solid #ddd" src="<?php echo(get_the_post_thumbnail_url(get_the_ID(),'cartones'));?>" width="100%" /></a>										
											<?php } ?>											
											<div class="hover-box">
												<ul class="post-tags">
													
                                                    <li>Cartón de <?php 
										$post_id = get_the_ID(); $term_list = wp_get_post_terms($post_id, 'cartonistas', array("fields" => "all"));
										foreach($term_list as $term_single) {
											if($term_single->name=='José Bolaños'){
												echo ('Bolaños');
											}elseif($term_single->name=='Darío Castillejos'){
												echo ('Darío');
											}elseif($term_single->name=='Espíritu Maligno'){
												echo ('Espíritu');
											}else{
												echo($term_single->name);										}
										} ?></li>
                                        <li><?php the_time('M j, Y'); ?></li>
												</ul>
											</div>
										</div>
										<?php } ?>
										<?php 
										wp_reset_postdata();  
										?>
									</div>
									</div>	
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
		<!-- End block-wrapper-section -->
		<?php } }?>
		
<?php get_footer();  ?>