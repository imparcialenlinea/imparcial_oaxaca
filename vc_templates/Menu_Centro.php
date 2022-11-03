<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}
/**
 * Shortcode attributes
 * @var $atts
 * @var $grupo_slug 
 * @var $this WPBakeryShortCode_qk_team
 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$custom  = hotmagazine_custom();?>

<div class="contenedor-logo"><img height="100px !important" src="<?php echo($urllogo) ?>" /></div>
<div class="menu-principal">
<ul>
<li>ITEM 1</li>
<li id="menu-item-central">ITEM 2</li>
<li>ITEM 4</li>
<li>ITEM 3</li>
</ul>
</div>