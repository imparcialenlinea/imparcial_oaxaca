<?php $custom  = hotmagazine_custom(); ?>
<?php get_template_part('header/menuscripts'); ?> 
<nav class="search-sidenav" style="width:100%;display:none;z-index:9999" id="movilsearch">
<div class="search-container-estilo">

	<form method="get" class="search-right" action="<?php echo esc_url( home_url('/') ); ?>" >
		<input class="inputmob-deportes" type="text" name="s" placeholder="<?php esc_attr_e( ' Escribe aquí tu búsqueda', 'hotmagazine' ); ?>" />
		<button class="bot-search-mob-deportes" type="submit" id="search-submit"><i class="fa fa-search"></i></button><div class="cerrar-search-mob-deportes"><span onclick="search_open()">x</span></div>
	</form>
    
</div>

</nav>          
            
		<header class="clearfix ">
        
<!--AQUÍ INICIA EL HEADER MOVIL-->



<div class="ocultardesktop mob-container mob-card-4 mob-top mob-header-estilo">
	<div style="display:inline-block; vertical-align:middle; margin-top:3px;" class="mob-top">
    
       <div class="menumovil1 menumovdeportes">
  			<i onclick="w3_open()" class="mob-opennav fa fa-bars"></i>
		</div>
		<div class="menumovil2">
		<a  href="/"><img class="mob-logo" src="https://imparcialoaxaca.mx/wp-content/uploads/2018/05/imparcial-estilo-oaxaca-sociales.png"></a>
		</div>      
		<div class="menumovil3 menumovdeportes">
		<i class="fa fa-search mob-search" onclick="search_open()" aria-hidden="true"></i>
		</div>        
	</div>
</div>

<!--AQUÍ TERMINA EL HEADER MOVIL-->
        
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top ocultarmovil" role="navigation">
				<?php if($custom['topline']==true){  ?>
				<!-- Top line -->
				<div class="top-line" id="top-line-estilo">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<?php $city= $custom['city'];
								$city = $string = str_replace(' ', '', $city);
								$country = $custom['country']; ?>
								<?php if($city!=''){ ?>
								<ul class="top-line-list">
									<?php if($custom['weather']!=''){ ?>
								
									<?php } ?>
									<li><span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script></li>
									
								</ul>
								<?php } ?>

							<?php 
						
									$defaults2= array(
										'theme_location'  => 'topistmo',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'top-line-list top-menu',
										'menu_id'         => '',
										'echo'            => true,
										 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										 
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( 'topistmo' ) ) {
										wp_nav_menu( $defaults2 );
									}
								
								?>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons">
									<?php if($custom['facebook']!=''){ ?>
									  <li class="facebook"><a  href="http://www.facebook.com/imparcialoaxaca"><i class="fa fa-facebook"></i></a></li>
									  <?php } ?>
									  <?php if($custom['twitter']!=''){ ?>
									  <li class="twitter"><a href="http://www.twitter.com/imparcialoaxaca"><i class="fa fa-twitter"></i></a></li>
									  <?php } ?>
									 <?php if($custom['instagram']!=''){ ?>
										<li class="instagram"><a href="<?php echo esc_url($custom['instagram']); ?>"><i class="fa fa-instagram"> </i></a></li>
										<?php } ?>
									  <?php if($custom['youtube']!=''){ ?>
									  <li class="youtube"><a  href="<?php echo esc_url($custom['youtube']); ?>"><i class="fa fa-youtube-play"></i></a></li>
									  <?php } ?>

								</ul>
							</div>	
						</div>
					</div>
				</div>
				<!-- End Top line -->
				<?php } ?>
                
<?php $logomenu='<a class="navbar-brand" href="/estilo" title="Estilo Oaxaca | El Imparcial de Oaxaca" style="padding-top: 8px;padding-bottom: 10px;
"><img width="100px" src="https://imparcialoaxaca.mx/wp-content/uploads/2018/05/imparcial-estilo-oaxaca-sociales.png" alt="Súper Deportivo | El Imparcial de Oaxaca"></a>';?>
                			<div class="list-line-posts"  style="background:#ffffff">
                                   <div class="container">
                                       <div class="owl-wrapper">
                                           <center>
				                            <?php  get_template_part('ads/AD_header'); ?>
                                            </center>
                                       </div>
                        			</div>
		                        </div>


				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php 
						
									$defaults1= array(
										'theme_location'  => 'primary',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'nav navbar-nav navbar-left navbar-estilo',
										'menu_id'         => '',
										'echo'            => true,
										 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										 'walker'            => new wp_bootstrap_navwalker(),
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => $logomenu.'<ul data-breakpoint="100" id="%1$s" class="%2$s ocultarmovil"><li id="menu-item-947" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-947 active"><a style="cursor: pointer; " title="Secciones" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i> Secciones</a></li>%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( 'primary' ) ) {
										wp_nav_menu( $defaults1 );
									}
								
								?>
							
						    <?php if($custom['search']==true){  ?>

							<form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url('/') ); ?>" >
								<input type="text" name="s" placeholder="<?php esc_attr_e( '¿Qué buscas?', 'hotmagazine' ); ?>" />
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>

							<?php } ?>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>



