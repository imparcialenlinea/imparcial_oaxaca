
	                            <?php if ($post->post_author=='27'){ // SI ES EL CALLA'O?>
								<div class="title-post">
									<h1>Columna dominical El Calla'o</h1>
								</div>     
                                <?php }else{ // SI NO ES EL CALLAO?>
								<div class="title-post">
                                    <h2><?php echo esc_html(get_the_author_meta('_hotmagazine_user_columna'));?></h2>                                
									<h1><?php the_title(); ?></h1>
                                    <p>&nbsp;</p>
									</div>                                     
        <?php } ?>