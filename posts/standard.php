			<div class="col-sm-5 <?php if ( is_rtl() ) { ?> pull-right<?php } ?>">
				<div class="post-gallery">
					<?php if(has_post_thumbnail()){ ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('principal'); ?></a>
					<?php }else{ ?>
                    	<?php if(in_category('Opinión')){?>
							<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/06/opinion-avatar-imparcial-oaxaca.jpg" /></a>
                        <?php }else{ ?>
							<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_principal.jpg" /></a>                        
                        <?php } ?>
					<?php } ?>                    					

				</div>
			</div>
			<div class="col-sm-7">
				<div class="post-content">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
					<ul class="post-tags">
                                           
						<li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li>
						<li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li>					
					</ul>                    
					<?php the_excerpt(); ?>
					<div class="clear"></div>
					<a href="<?php the_permalink(); ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i><span><?php esc_html_e('Leer más','hotmagazine'); ?></span></a>
				</div></div>
                <p>&nbsp;</p>
                <hr />