<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<?php 
$custom  = hotmagazine_custom();

?><head>
    <?php  get_template_part('header/metas_keys');    ?>
    <?php if(rwmb_meta('micrositio_heredado')==1){$elid=$post->post_parent;}else{$elid=get_the_ID();}?>
	<?php if (rwmb_meta('micrositio_especial')==1 or (rwmb_meta('micrositio_heredado')==1)){?>
	<style>
	<?php $back = rwmb_meta( 'micrositio_background', array( 'size' => 'full' ), $elid ); ?>
		body.page-id-<?php echo get_the_ID(); ?>, body.parent-pageid-<?php echo $post->post_parent; ?> {
    	background-image: url('<?php echo $back['url'] ?>') !important;
	    background-repeat: repeat !important;
    	background-size: auto !important;
	    background-attachment: fixed !important;
		font-family:<?php echo rwmb_meta( 'micrositio_tipografia', '', $elid ); ?> !important;
		
	}
	.top-line {
		background:<?php echo  rwmb_meta( 'micrositio_top', '', $elid) ?> !important;
	}
	.top-line li a{
		color:<?php echo  rwmb_meta( 'micrositio_topcolor', '',$elid) ?> !important;
	}
	.top-line li span{
		color:<?php echo  rwmb_meta( 'micrositio_topcolor', '',$elid) ?> !important;
	}		
	footer {
    	background: <?php echo rwmb_meta('micrositio_footer', '',$elid);?> !important;
	}
	.mob-header-micro {
    	background-color: <?php echo  rwmb_meta( 'micrositio_color', '',$elid) ?> !important;
	}
	.inputmob-micro {
    	background-color: <?php echo  rwmb_meta( 'micrositio_color', '',$elid) ?> !important;
		border: 0px !important;
    	color: #ffffff !important;
    	position: absolute;

	}
	</style>
    <?php } ?>    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52472423-1', 'auto');
  ga('send', 'pageview');

</script>

  
<?php wp_head(); ?>

</head>
<body <?php body_class('boxed '.$category[0]->slug); ?>>     

<script>

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
	if(document.getElementById("mySidenav").style.width == "250px"){
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";	
	}else{
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";		
	}

}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

</script>
<script type=text/javascript>  
var newsfont = 14;  
function changeFont(id) {  

if (document.getElementById) {  
        document.getElementById(id).style.fontSize = newsfont+"px";  
    } else {  
        if (document.layers) {  
            document.layers[id].fontSize = newsfont+"px";  
        } else {  
            if (document.all) {  
                eval("document.all." + id + ".style.fontSize = \"" + newsfont + "px \"");  
            }  
        }  
    }  
      
    // esto arregla scroll al utilizar layers  
//    updateHeight();   
    setCookie();  
}  
// aqui se produce el error  
function larger() {  
    if (newsfont < 20) {  
        newsfont= newsfont +1;  
        changeFont('content');  
    }  
}  

function smaller() {  
    if (newsfont > 11) {  
    newsfont= newsfont -1;  
    changeFont('content');  
    }  
}  
</script>  
<script>


function w3_open() {
    if ( document.getElementById("movilSidenav").style.display == "block") { 
		document.getElementById("movilSidenav").style.display = "none";
	}else{
		document.getElementById("movilSidenav").style.display = "block"}
}
function search_open() {
    if ( document.getElementById("movilsearch").style.display == "block") { 
		document.getElementById("movilsearch").style.display = "none";
	}else{
		document.getElementById("movilsearch").style.display = "block"}
}

function w3_close() {
    document.getElementById("movilSidenav").style.display = "none";
}
</script>  






<script type="text/javascript" >

function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+', '+d+' de '+months[month]+' de '+year+' | '+h+':'+m+':'+s+' hrs. ';
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}


</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9597347568322413",
    enable_page_level_ads: true
  });
</script>

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/227134889/IMP_micrositios_box1', [[300, 250], [336, 280]], 'div-gpt-ad-1528061337029-0').addService(googletag.pubads());
    googletag.defineSlot('/227134889/IMP_micrositios_box2', [[300, 250], [336, 280]], 'div-gpt-ad-1528061469014-0').addService(googletag.pubads());
    googletag.defineSlot('/227134889/IMP_micrositios_box3', [[300, 250], [300, 600], [300, 400], [336, 280]], 'div-gpt-ad-1528061559233-0').addService(googletag.pubads());
	googletag.defineSlot('/227134889/IMP_micrositios_top', [[970, 90], [728, 90]], 'div-gpt-ad-1528061903363-0').addService(googletag.pubads());
    googletag.defineSlot('/227134889/IMP_micrositios_top', [[300, 75], [300, 100], [320, 50], [320, 100]], 'div-gpt-ad-1528062056099-0').addService(googletag.pubads());
    googletag.defineSlot('/227134889/IMP_micrositios_box4', [[300, 400], [336, 280], [300, 250], [300, 600]], 'div-gpt-ad-1529178638131-0').addService(googletag.pubads());	
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>

	<!-- Container -->
	<div id="container">
		<?php
		 	 
		  if($header_layout!=null and $header_layout!='header1'){
		    get_template_part($header_layout);
		  }else{ 
		?>
		<!-- Header
		    ================================================== -->
            
<?php get_template_part('header/menuscripts'); ?>
<nav class="search-sidenav" style="width:100%;display:none;z-index:9999" id="movilsearch">
<div class="search-container">

	<form method="get" class="search-right" action="<?php echo esc_url(rwmb_meta( 'micrositio_url', '', $elid )); ?>" >
		<input class="inputmob-micro" type="text" name="s" placeholder="<?php esc_attr_e( ' Escribe aquí tu búsqueda', 'hotmagazine' ); ?>" />
		<button class="bot-search-mob" type="submit" id="search-submit"><i class="fa fa-search"></i></button><div class="cerrar-search-mob"><span onclick="search_open()">x</span></div>
	</form>
    
</div>

</nav>          
            
		<header class="clearfix ">
        
<!--AQUÍ INICIA EL HEADER MOVIL-->



<div class="ocultardesktop mob-container mob-card-4 mob-top mob-header-micro">
	<div style="display:inline-block; vertical-align:middle; margin-top:3px;" class="mob-top">
    
       <div class="menumovil1">
  			<i onclick="w3_open()" class="mob-opennav fa fa-bars"></i>
		</div>
		<div class="menumovil2">
 		<?php $logom = rwmb_meta( 'micrositio_logom', array( 'size' => 'full' ), $elid );?>                

		<a  href="<?php echo esc_url(rwmb_meta( 'micrositio_url', '', $elid ));?>"><img class="mob-logo" style="max-height: 45px;!important" src="<?php echo esc_attr($logom['url']); ?>"></a>
		</div>      
		<div class="menumovil3">
		<i class="fa fa-search mob-search" onclick="search_open()" aria-hidden="true"></i>
		</div>        
	</div>
</div>

<!--AQUÍ TERMINA EL HEADER MOVIL-->
        
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top ocultarmovil" role="navigation">
				<?php if($custom['topline']==true){  ?>
				<!-- Top line -->
				<div class="top-line">
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
										'theme_location'  => 'topregiones',
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
									if ( has_nav_menu( 'topregiones' ) ) {
										wp_nav_menu( $defaults2 );
									}
								
								?>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons">
									<?php if($custom['facebook']!=''){ ?>
									  <li class="facebook"><a target="blank" href="<?php echo esc_url($custom['facebook']); ?>"><i class="fa fa-facebook"></i></a></li>
									  <?php } ?>
									  <?php if($custom['twitter']!=''){ ?>
									  <li class="twitter"><a target="blank"  href="<?php echo esc_url($custom['twitter']); ?>"><i class="fa fa-twitter"></i></a></li>
									  <?php } ?>
									 <?php if($custom['instagram']!=''){ ?>
										<li class="instagram"><a target="blank"  href="<?php echo esc_url($custom['instagram']); ?>"><i class="fa fa-instagram"> </i></a></li>
										<?php } ?>
									  <?php if($custom['youtube']!=''){ ?>
									  <li class="youtube"><a target="blank"   href="<?php echo esc_url($custom['youtube']); ?>"><i class="fa fa-youtube-play"></i></a></li>
									  <?php } ?>
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<!-- End Top line -->
				<?php } ?>
                			<div class="list-line-posts"  style="background:#ffffff">
                                   <div class="container">
                                       <div class="owl-wrapper">
                                           <center>
                                                <!-- /227134889/IMP_micrositios_top -->
                                                <div id='div-gpt-ad-1528061903363-0'>
                                                <script>
                                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1528061903363-0'); });
                                                </script>
                                                </div>
                                            </center>
                                       </div>
                        			</div>
		                        </div>
                        <?php $logo = rwmb_meta( 'micrositio_logo', array( 'size' => 'full' ), $elid );?>
						<?php $logomenu='<a class="navbar-brand '.rwmb_meta( 'micrositio_logoclase', '',$elid).'" href="'.esc_url(rwmb_meta( 'micrositio_url', '', $elid )).'" title="El Imparcial de Oaxaca"><img src="'.esc_attr($logo['url']).'" width="200px" alt="El Imparcial de Oaxaca"></a>';?>                  
                         
				<div class="nav-list-container <?php echo rwmb_meta( 'micrositio_navbarclase', '',$elid)?>">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php 
									$menuppl=rwmb_meta( 'micrositio_menu', '', $elid);
									$defaults1= array(
										'theme_location'  => $menuppl,
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'nav navbar-nav navbar-left',
										'menu_id'         => '',
										'echo'            => true,
										 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										 'walker'            => new wp_bootstrap_navwalker(),
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => $logomenu.'<ul data-breakpoint="100" id="%1$s" class="%2$s ocultarmovil">%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( $menuppl ) ) {
										wp_nav_menu( $defaults1 );
									}
								
								?>
							<form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url('/') ); ?>" >
								<input type="text" name="s" placeholder="<?php esc_attr_e( '¿Qué buscas?', 'hotmagazine' ); ?>" />
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
                            
                            
						</div>        
              
					</div>
                    
				</div>


                
			</nav>
		</header>
        
     


		<!-- End Header -->
		<?php } ?>
		
        <?php if ( wp_is_mobile() ) { ?>
            <div class="vc_empty_space" style="height: 36px"><span class="vc_empty_space_inner"></span></div>
            <center>
                <!-- /227134889/IMP_micrositios_top -->
                <div id='div-gpt-ad-1528062056099-0'>
                <script>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1528062056099-0'); });
                </script>
                </div>            
            </center>
            <div class="vc_empty_space" style="height: 6px"><span class="vc_empty_space_inner"></span></div>
		<?php }  ?>   

