<?php get_header(); ?>
		
		<?php hotmagazine_setPostViews($post->ID); ?>
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

		<?php 
			$custom  = hotmagazine_custom();
			$arr = array('post_type' => 'post', 'posts_per_page' => 5,'meta_query' => array(
						array(
							'key'     => '_hotmagazine_sticker',
							'value'   => 'on',
							'compare' => 'IN',
						),
			));
			$query = new WP_Query($arr);
		?>
		<?php if($query->found_posts>=1 and $custom['body_style']!='travel'){ ?>
	
		<?php } ?>
		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			
			
			<div class="container">
				<div class="row">
					<div class="col-sm-8 content-blocker">
						<?php while(have_posts()) : the_post(); ?>
						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">

								<div class="title-post">
									<h1><?php the_title(); ?></h1>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i>Vacante publicada el <?php the_time('l, j');?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?> | <?php the_time( 'G:i' ); ?> horas </li>
										
									</ul><p>&nbsp;</p>
								</div>
								
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


							
								<?php if($custom['share_bottom']==true){ ?>
								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span><?php esc_html_e('Comparte la vacante','hotmagazine');?></span></li>
										<li><a class="facebook" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i><span><?php esc_html_e('Facebook','hotmagazine'); ?></span></a></li>
										<li><a class="twitter" onclick="window.open('http://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php echo('%23');echo str_replace(" ","%20","BolsaDeTrabajo "); echo str_replace(" ","%20",get_the_title()); echo('%20via%20%40ImparcialOaxaca');?>','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php echo str_replace(" ","%20",get_the_title());?>"><i class="fa fa-twitter"></i><span><?php esc_html_e('Twitter','hotmagazine'); ?></span></a></li>
										<li><a class="google" href="http://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>','Linkedin','width=863,height=500,left='+(screen.availWidth/2-431)+',top='+(screen.availHeight/2-250)+''); return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i><span></span></a></li>                                        
									</ul>
								</div>
								<?php } ?>
								<?php

					                $prev_post = get_adjacent_post(false, '', true);
					              
					                $next_post = get_adjacent_post(false, '', false); 

					            ?>

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