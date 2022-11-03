<?php 
		$identificador='';
		$fbid='';
		$twid='';
		$footerid='';
		$custom  = hotmagazine_custom(); 
		if (in_category('20') or is_page_template( 'template-istmo.php' )){
			$identificador='footeristmo';					
			$fbid='imparcialdelistmo';
			$twid='imparcialistmo';
			$footerid='footeristmo';
		}elseif(in_category('13') or in_category('12') or is_page_template( 'template-costa.php' ) or is_page_template( 'template-cuenca.php' )){
			$identificador='footerregiones';	
			$fbid='imparcialoaxaca';
			$twid='imparcialoaxaca';
			$footerid='footerregiones';	
		}elseif(is_page_template( 'template-deportes.php' ) ){
			$identificador='footeroaxaca';	
			$fbid='imparcialoaxaca';
			$twid='imparcialoaxaca';
			$footerid='footernegro';
		}elseif(is_page_template( 'template-policiaca.php' ) ){
			$identificador='footeroaxaca';	
			$fbid='imparcialpoliciaca';
			$twid='imparcialoaxaca';
			$footerid='footernegro';				
		}elseif(is_page_template( 'template-estilo.php' ) ){
			$identificador='footeroaxaca';	
			$fbid='imparcialestilo';
			$twid='imparcialoaxaca';
			$footerid='footernegro';												
		}else{
			$identificador='footeroaxaca';
			$fbid='imparcialoaxaca';
			$twid='imparcialoaxaca';
			$footerid='footeroaxaca';						
		}
?>
		<!-- footer 
			================================================== -->
		<footer class="footer-distributed <?php echo($footerid)?>">
			<div class="footer-right">
                <ul class="social-icons">
                    <li><a target="blank" href="https://www.facebook.com/ElImparcialdeOaxaca" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="blank" href="https://twitter.com/<?php echo($twid)?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="blank" href="https://www.youtube.com/user/ImparcialOax" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a target="blank" href="https://www.instagram.com/imparcialoaxaca/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>               
			</div>


		<div class="footer-left">
								<?php 
						
									$defaults1= array(
										'theme_location'  => $identificador,
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'footer-menu',
										'menu_id'         => '',
										'echo'            => true,
										 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										 
										'before'          => ' • ',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( $identificador ) ) {
										wp_nav_menu( $defaults1 );
									}
								
								?>
		  <div class="footer-final">
				<p><?php echo wp_kses_post($custom['footer-text']); ?> | <a href="/legal">Aviso Legal</a> | <a href="/privacidad">Aviso de Privacidad</a></p>
		  </div>
		  <!-- End footer -->

	</div>

	<?php wp_footer(); ?>

<!-- Begin comScore Tag -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "6906559" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&c2=6906559&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->
    
</body>
</html>