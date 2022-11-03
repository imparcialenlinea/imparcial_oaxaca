<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<?php $custom  = hotmagazine_custom();?>
	<head>    
    
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MHZ6TG22P1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MHZ6TG22P1');
</script>

    
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52472423-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-52472423-1');
</script>
	
	<?php  get_template_part('header/metas_keys');    ?> 

<?php if(is_page(array(6390,150992,279399)) or $post->hoy[0]=='espubli' or $post->hoy[1]=='espubli' or $post->hoy[2]=='espubli') { }else{ ?>  <br>
    	<?php get_template_part('ads/MMM/MMMhead'); ?>
	
<!-- ADEQ Tag Display -->

<script async src="//cmp.optad360.io/items/1d6f50a3-71a3-4735-88c7-ae9bbfb6e016.min.js"></script>

<script async src="//get.optad360.io/sf/c428c3c4-9b59-4fcc-9d2b-310da0a05b46/plugin.min.js"></script>

<!-- FIN ADEQ Tag Display -->
<!-- linkatomiccodigo de verificacion -->
<meta name='linkatomic-verify-code' content='c0de5d6bacd768b34ec0476ab44f4f80' />
	<!-- fin linkatomic -->
<?php } ?>

 
  <style>
	<?php $category = get_the_category(); ?>
	.titulo-seccion-<?php echo $category[0]->slug; ?>{
    margin:0px 10px 15px 10px;
    text-transform:uppercase;			
    border-bottom: 4px solid <?php $cat_id = $category[0]->term_id; $cat_slug = $category[0]->slug; $cat_data = get_option("category_$cat_id"); echo $cat_data['catBG']; ?>;  
    }    
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class('boxed '); ?>>    	
<?php if(is_page(array(6390,150992,279399)) or $post->hoy[0]=='espubli' or $post->hoy[1]=='espubli' or $post->hoy[2]=='espubli') { }else{ 
	get_template_part('ads/MMM/MMMbody');
	
	if(is_page()){?>
        <!-- /227134889/imp_1x1_page -->
        <div id='div-gpt-ad-1534724600510-0' style='height:1px; width:1px;'>
        <script>
        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1534724600510-0'); });
        </script>
        </div>		
	<?php }
}?>

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
<?php if ($post->hoy[0]!='espubli' && $post->hoy[1]!='espubli' && $post->hoy[2]!='espubli'){?>
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
	<?php if(!is_page(array(6390,279399))){   get_template_part('ads/AD_codigos');} ?>
</script>
<?php if(is_single()){?>
</div>
<?php }?>
<?php }?>	
	<!-- Container -->
	<div id="container">
		<?php		 	 
		  if(is_search()){
		  	$header_layout = $custom['header-style'];			  
		  }elseif(is_page_template( 'template-micrositio.php' )){
		  	$header_layout = 'header-micrositio';
		  }elseif(is_page_template( 'template-imparcialito.php' )){
		  	$header_layout = 'header-imparcialito';			
		  }elseif(in_category('20') or is_page_template( 'template-istmo.php' )){
		  	$header_layout = 'header-istmo';
		  }elseif(in_category('13') or is_page_template( 'template-costa.php' )){
		  	$header_layout = 'header-costa';
		  }elseif(is_page_template( 'template-deportes.php' )){
		  	$header_layout = 'header-deportes';	
		  }elseif(is_page_template( 'template-policiaca.php' )){
		  	$header_layout = 'header-policiaca';				
		  }elseif(is_page_template( 'template-estilo.php' )){
		  	$header_layout = 'header-estilo';						
		  }elseif(in_category('12') or is_page_template( 'template-cuenca.php' )){
		  	$header_layout = 'header-cuenca';			
		  }else{
		  	$header_layout = $custom['header-style'];
		  }		  
		  if($header_layout!=null and $header_layout!='header1'){
		    get_template_part($header_layout);
		  }else{ 
		?>
		<!-- Header
		    ================================================== -->
            
<?php get_template_part('header/menuscripts'); ?>
<nav class="search-sidenav" style="width:100%;display:none;z-index:9999" id="movilsearch">
<div class="search-container">
	<form method="get" class="search-right" action="<?php echo esc_url( home_url('/') ); ?>" >
		<input class="inputmob" type="text" name="s" placeholder="<?php esc_attr_e( ' Escribe aquí tu búsqueda', 'hotmagazine' ); ?>" />
		<button class="bot-search-mob" type="submit" id="search-submit"><i class="fa fa-search"></i></button><div class="cerrar-search-mob"><span onclick="search_open()">x</span></div>
	</form>    
</div>
</nav>          
            
		<header class="clearfix ">
        
<!--AQUÍ INICIA EL HEADER MOVIL-->
<div class="ocultardesktop mob-container mob-card-4 mob-top mob-header-oax">
	<div style="display:inline-block; vertical-align:middle; margin-top:3px;" class="mob-top">
    
       <div class="menumovil1">
  			<i onclick="w3_open()" class="mob-opennav fa fa-bars"></i>
		</div>
		<div class="menumovil2">
		<a  href="/"><img class="mob-logo" src="<?php echo esc_attr($custom['logomob']['url']); ?>"></a>
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
										'theme_location'  => 'top',
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
									if ( has_nav_menu( 'top' ) ) {
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
                <?php 
					 if(!is_front_page()){ //MINIMENU DE SECCIONES INTERIORES, NO HOME?>

                			<div class="list-line-posts"  style="background:#ffffff">
                                   <div class="container">
                                       <div class="owl-wrapper">
                                           <center>
				                            <?php  get_template_part('ads/AD_header'); ?>
                                            </center>
                                       </div>
                        			</div>
		                        </div>
						<?php $logomenu='<a class="navbar-brand" href="/" title="El Imparcial de Oaxaca" style="padding-top: 8px;padding-bottom: 0px;
"><img src="'.esc_attr($custom['logo']['url']).'" width="200px" alt="El Imparcial de Oaxaca"></a>'; }else{ $logomenu='';?>
                            <div class="logo-advertisement">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>							
                                        <a class="navbar-brand"  href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                                                <img src="<?php echo esc_attr($custom['logo']['url']); ?>" alt="<?php bloginfo('name'); ?>">
                                        </a>
                                    </div>
                                    <div style="display:inline-block;  margin-top: 12px; margin-bottom:12px;">
                                        <?php  get_template_part('ads/AD_header'); ?>
                                    </div>
                                </div>
                            </div>
                         <?php }?> 
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
										'menu_class'      => 'nav navbar-nav navbar-left',
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
            <div class="vc_empty_space" style="height: 24px"><span class="vc_empty_space_inner"></span></div>        
            <?php if(!is_page()){ ?>
            <div class="vc_empty_space" style="height: 36px"><span class="vc_empty_space_inner"></span></div>
            <?php } ?>
            <center><?php  get_template_part('ads/AD_header_mobile'); ?></center>
		<?php }  ?> 