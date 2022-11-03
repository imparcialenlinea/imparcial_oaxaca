<?php
get_header();
?>

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 content-blocker">

						<!-- block content -->
						<div class="block-content">
							<div class="title-section">
							  <h2><?php if(function_exists('is_bbpress')){ if(is_bbpress()){ echo "Forum"; }else{ single_post_title(); } }else{ single_post_title(); } ?></h2>
							</div>
							<div class="single-post-box">
                                                            	 <?php //MENÚ DE ESPECIALES?>
                <?php if(is_page(6390)){?>
                <div class="menu-especiales-container">
                <?php 
						
					$defaults3= array(
							'theme_location'  => 'especiales',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => 'menu-especiales',
							'echo'            => true,
							 'fallback_cb'       => '',
							 
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'especiales' ) ) {
							wp_nav_menu( $defaults3 );
						}
								
					?>
                    </div>
                    <?php } //FIN MENÚ ESPECIALES?>  
							<?php while (have_posts()) : the_post(); ?>
                            
								<?php the_content(); ?>
								
								<?php if('open' == $post->comment_status){ ?>

									<?php comments_template(); ?>

								<?php } ?>

							<?php endwhile; ?>
							</div>
							
						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4 sidebar-sticky">

						<?php get_sidebar(); ?>

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

<?php
if ( wp_is_mobile() ):
	get_footer('mobile');
else:
	get_footer();
endif;
?>