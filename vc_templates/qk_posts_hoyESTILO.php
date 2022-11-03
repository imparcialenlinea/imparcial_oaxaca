<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $offset
 * @var $cat
 * @var $cat_ids
 * @var $thumb
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$cat ='';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );



?>
<?php 
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$argsMODA= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>70,
		
);

$argsCUIDADOS= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>74,
		
);
$argsFAMILIA= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>12510,
		
);
$argsFITNESS= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>15871,
		
);
$argsHOGAR= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>72,
		
);
$argsNUTRI= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>73,
		
);
$argsPAREJA= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>12509,
		
);
$argsRECETAS= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>21149,
		
);
$argshoroscopos= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>71,
		
);
$argsmundoanimal= array(
	'post_type' => 'post',
	'author'    => 94, 
	'posts_per_page'=>1,
    'order'=>'DESC',
	'cat'=>18653,
		
);



$moda = new WP_Query($argsMODA);
$cuidados = new WP_Query($argsCUIDADOS);
$familia = new WP_Query($argsFAMILIA);
$hogar = new WP_Query($argsHOGAR);
$fitness = new WP_Query($argsFITNESS);
$pareja = new WP_Query($argsPAREJA);
$nutricion = new WP_Query($argsNUTRI);
$RECETAS = new WP_Query($argsRECETAS);
$horoscopos = new WP_Query($argshoroscopos);
$mundoanimal = new WP_Query($argsmundoanimal);


if($cat!='all' and !is_rtl()){
$category = get_term_by('slug', $cat, 'category');
$cat = $category->term_id;
}
?>
<h2 align="center"  padding-top:5px; padding-bottom: 5px; font-size:65px;  line-height: 18px;" ><strong>ACTUALIZAR CON ESTILO</strong></h2>

<table width="98%" border="0" style="text-align: center; border: 2px dotted #f69dc2;padding-top: 5px;padding-bottom: 5px;font-size: 15px;  line-height: 16px;">
  <tr>
    <td><?php while ($moda->have_posts()){
		$moda->the_post();
		echo'<strong>Última nota de Moda:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}	?></td>
    <td><?php while ($pareja->have_posts()){
		$pareja->the_post();
		echo'<strong>Última nota de Pareja:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}?></td>
    <td><?php while ($RECETAS->have_posts()){
		$RECETAS->the_post();
		echo'<strong>Última nota de Recetas:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}?></td>
    <td><?php while ($hogar->have_posts()){
		$hogar->the_post();
		echo'<strong>Última nota de Hogar:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}	?></td>
  </tr>
  <tr>
    <td><?php while ($nutricion->have_posts()){
		$nutricion->the_post();
		echo'<strong>Última nota de Nutrición:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}	?></td>
    <td><?php while ($cuidados->have_posts()){
		$cuidados->the_post();
		echo'<strong>Última nota de Cuidados:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}?></td>
    <td><?php while ($familia->have_posts()){
		$familia->the_post();
		echo'<strong>Última nota de Familia:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}		?></td>
    <td><?php while ($fitness->have_posts()){
		$fitness->the_post();
		echo'<strong>Última nota de Fitness:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}	?></td>
  </tr>
  <tr>
    <td><?php while ($horoscopos->have_posts()){
		$horoscopos->the_post();
		echo'<strong>Última nota de Horoscopos:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}	?></td>
    <td><?php while ($mundoanimal->have_posts()){
		$mundoanimal->the_post();
		echo'<strong>Última nota de Mundo Animal:</strong> Hace '.human_time_diff( get_the_time('U'), current_time('timestamp')).'<br>';
		}?></td>
    
  </tr>
</table>
      <?php wp_reset_postdata(); ?>