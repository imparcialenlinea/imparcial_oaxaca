<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $custom  = hotmagazine_custom(); ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9&appId=130988260805150";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
  	<link rel="profile" href="http://gmpg.org/xfn/11"/>
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Lato|Philosopher|Roboto|Dosis|Lora" rel="stylesheet">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- BEGIN SOCIAL TAGS --> 
     <!-- WeAreContent -->
    <meta name="wearecontent-verify-code" content="46a6d1755250113c974fc50aa1b46fcf76f5a697"/>
     <!-- boqueacdor -->
    <script async src="https://fundingchoicesmessages.google.com/i/pub-9597347568322413?ers=1" nonce="heCa0YFLHx2jMcGErmCmIQ"></script><script nonce="heCa0YFLHx2jMcGErmCmIQ">(function() {function signalGooglefcPresent() {if (!window.frames['googlefcPresent']) {if (document.body) {const iframe = document.createElement('iframe'); iframe.style = 'width: 0; height: 0; border: none; z-index: -1000; left: -1000px; top: -1000px;'; iframe.style.display = 'none'; iframe.name = 'googlefcPresent'; document.body.appendChild(iframe);} else {setTimeout(signalGooglefcPresent, 0);}}}signalGooglefcPresent();})();</script>
     <!-- cierra bloqueador -->
     <!-- Cookieless-->
     <script>
  window.teads_analytics = window.teads_analytics || {};
  window.teads_analytics.analytics_tag_id = "PUB_22564";
  window.teads_analytics.share = window.teads_analytics.share || function() {
    ;(window.teads_analytics.shared_data = window.teads_analytics.shared_data || []).push(arguments)
  };
</script>
<script async src="https://a.teads.tv/analytics/tag.js"></script>
<!-- cierra Cookieless-->
    <!-- realpro -->
    <script async="" src="https://cdn.relappro.com/adservices/v4/relapprofp.min.js"></script> 
    <!-- terminarelapro -->
    <meta name="msvalidate.01" content="8E38EB38226AB1FD233F3D17F6A69836" />     
    <?php 
		$finaltitle=get_the_title();
		$finalimage=get_the_post_thumbnail_url();
		$fbimage=wp_get_attachment_url( get_post_meta(get_the_ID(), 'thumb_facebook', 1 ));
		if(!empty($fbimage)){$finalimage=$fbimage;}	
		$fbtitle = get_post_meta(get_the_ID(), 'title_facebook', true);
		if($fbtitle!=''){$finaltitle=$fbtitle;}	
		if(in_category('9')){
			$temp_post = get_post($post_id);
			$columna = get_the_author_meta('_hotmagazine_user_columna',$temp_post->post_author);	
			//$photo=get_avatar_url( $temp_post->post_author);			
			if($columna!=''){$columna=' | '.$columna;}
		}
	?>
	<meta property="fb:app_id" content="130988260805150" />
    <meta property="fb:pages" content="258430140834731" />    
    <meta name="twitter:card" content="<?php if(!in_category('9') or $temp_post->post_author=='27' ){echo 'summary_large_image';}else{echo 'summary';}?>"/>
    <meta name="twitter:site" content="@imparcialoaxaca"/>
    <meta name="twitter:creator" content="@imparcialoaxaca"/>
    <meta name="facebook-domain-verification" content="br6wumcg00jut6qip239un82drtwt1" />
    <meta name="twitter:title" content="<?php the_title();if(in_category('9')){echo $columna;}?>"/>
	<?php
		if(is_single()){
			global $post;
			$content = wp_strip_all_tags(substr($post->post_content, 0, 480));	
		}else{
			$content = "Las mejores NOTICIAS de Oaxaca, Información de Oaxaca, México y el mundo; Noticias de Oaxaca, de la costa, del Istmo de Tehuantepec, de la Mixteca, de la Sierra Norte, de la Cañana y de la Sierra Sur. Información de Última Hora. Noticias de Oaxaca de Último minuto";	
		}
	?>
	<meta property="og:description" content="<?php echo $content; ?>" />
	<meta name="twitter:description" content="<?php echo $content; ?>"/>
	<meta itemprop="description" content="<?php echo $content; ?>"/>    
<?php if(has_post_thumbnail()){ ?>
	<meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>"/>
	<meta property="og:image" content="<?php echo $finalimage ?>" />	
	<meta itemprop="image" content="<?php echo get_the_post_thumbnail_url(); ?>"/>    
<?php }else{?>

<?php if(in_category( '71' )){ ?>
	<meta name="twitter:image" content="/wp-content/uploads/2019/08/horoscopos-image-con-estilo.jpg"/>
	<meta property="og:image" content="/wp-content/uploads/2019/08/horoscopos-image-con-estilo.jpg" />	
	<meta itemprop="image" content="/wp-content/uploads/2019/08/horoscopos-image-con-estilo.jpg"/>
<?php }elseif(in_category( '9') and $post->post_author!=27){ ?>
	<meta name="twitter:image" content="https://imparcialoaxaca.mx/wp-content/uploads/2017/06/opinion_generica.jpg"/>
	<meta property="og:image" content="https://imparcialoaxaca.mx/wp-content/uploads/2017/06/opinion_generica.jpg" />	
	<meta itemprop="image" content="https://imparcialoaxaca.mx/wp-content/uploads/2017/06/opinion_generica.jpg"/> 
<?php }else{ ?>
	<meta name="twitter:image" content="/wp-content/uploads/2017/01/thumb_second.jpg"/>
	<meta property="og:image" content="/wp-content/uploads/2017/01/thumb_second.jpg" />	
	<meta itemprop="image" content="/wp-content/uploads/2017/01/thumb_second.jpg"/>            
<?php } } ?>
    <meta property="og:title" content="<?php echo esc_html($finaltitle);if(in_category('9')){echo $columna;}?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo(get_permalink());?>" />
    <meta property="og:site_name" content="El Imparcial de Oaxaca" />
    <meta itemprop="name" content="<?php the_title();if(in_category('9')){echo $columna;} ?>"/>
    <!-- SOCIAL TAGS-->
  <link rel="icon" type="image/png" href="/favicon_imparcial_oax.png" />
    <?php if($custom['apple_icon']['url']!=''){ ?>
  <link rel="apple-touch-icon" href="<?php echo esc_url($custom['apple_icon']['url']); ?>" />
  <?php } ?>
  <?php if($custom['apple_icon_57']['url']!=''){ ?>
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url($custom['apple_icon_57']['url']); ?>">
  <?php } ?>
  <?php if($custom['apple_icon_72']['url']!=''){ ?>
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url($custom['apple_icon_72']['url']); ?>">
  <?php } ?>
  <?php if($custom['apple_icon_114']['url']!=''){ ?>
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url($custom['apple_icon_114']['url']); ?>">
  <?php } ?>
  <link rel="image_src" href="<?php the_post_thumbnail_url('full'); ?>" />
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">