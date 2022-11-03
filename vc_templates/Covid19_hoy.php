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
$custom  = hotmagazine_custom();


$queryhoy = array(	
	'posts_per_page' =>1,
	'post_type' => 'casoscovid',
	'post_status' => 'publish',
);
$queryayer = array(	
	'posts_per_page' =>1,
	'offset'=>1,
	'post_type' => 'casoscovid',
	'post_status' => 'publish',
);

$items = new WP_Query($queryhoy);
$items->the_post();
	$confirmadoshoy=rwmb_meta( 'confirmados' );
	$sospechososhoy=rwmb_meta( 'sospechosos' );
	$negativoshoy=rwmb_meta( 'negativos' );
	$muertoshoy=rwmb_meta( 'muertos' );	
	$activoshoy=rwmb_meta( 'activos' );
	$recuperadoshoy=rwmb_meta( 'recuperados' );	

	$confirmadoshoyN=rwmb_meta( 'confirmadosN' );
	$sospechososhoyN=rwmb_meta( 'sospechososN' );
	$negativoshoyN=rwmb_meta( 'negativosN' );
	$muertoshoyN=rwmb_meta( 'muertosN' );	
	$activoshoyN=rwmb_meta( 'activosN' );
	$recuperadoshoyN=rwmb_meta( 'recuperadosN' );	

	$actualizado=get_the_date('j').' de '.get_the_date('F').' de '.get_the_date('Y');	
	
$items2 = new WP_Query($queryayer);
$items2->the_post();
	$confirmadosayer=rwmb_meta( 'confirmados' );
	$muertosayer=rwmb_meta( 'muertos' );
	$difconf=$confirmadoshoy-$confirmadosayer;
	$difmuertos=$muertoshoy-$muertosayer;
	$dconf=$dmuertos='menos';

	if($difconf>0){$dconf='más';}
	if($difmuertos>0){$dmuertos='más';}	

   date_default_timezone_set('America/Mexico_City');
   setlocale(LC_TIME, 'es_ES.UTF-8');
   setlocale(LC_TIME, 'spanish');

?>






&lt;h1&gt;Casos de Covid-19 en Oaxaca&lt;/h1&gt;<br><br>

&lt;p&gt;Al día de hoy <?php echo $actualizado; ?> el acumulado es de <?php echo number_format($confirmadoshoy, 0, '.', ',') ?> &lt;strong&gt;casos de Covid-19 en Oaxaca&lt;/strong&gt;, <?php echo number_format($difconf, 0, '.', ',') ?> <?php echo $dconf; ?> casos que el día de ayer que fueron reportados <?php echo number_format($confirmadosayer, 0, '.', ',') ?> casos;  el total de casos negativos son <?php echo number_format($negativoshoy, 0, '.', ',') ?> y hay un total de <?php echo number_format($sospechososhoy, 0, '.', ',') ?> casos sospechosos que aún podrían descartarse o sumarse al número total de casos acumulados en la entidad oaxaqueña.&lt;/p&gt;<br><br>
&lt;p&gt;El &lt;strong&gt;número de muertos por Covid-19 en Oaxaca hoy&lt;/strong&gt; es de <?php echo number_format($muertoshoy, 0, '.', ',') ?>, un total de <?php echo number_format($difmuertos, 0, '.', ',') ?> personas  <?php echo $dmuertos; ?> que el día de ayer, cuando fueron reportadas <?php echo number_format($muertosayer, 0, '.', ',') ?> personas fallecidas.&lt;/p&gt;<br><br>

&lt;p&gt;Con respecto a los &lt;strong&gt;pacientes recuperados de Covid-19, &lt;/strong&gt; el total es de <?php echo number_format($recuperadoshoy, 0, '.', ',') ?> mientras que el &lt;strong&gt;número de casos activos de coronavirus en Oaxaca&lt;/strong&gt; es de <?php echo number_format($activoshoy, 0, '.', ',') ?>.&lt;/p&gt;<br><br>

&lt;h1&gt;Casos de Covid-19 en México&lt;/h1&gt;<br><br>
&lt;p&gt;A nivel nacional los casos confirmados acumulados de Covid-19 en México son de <?php echo number_format($confirmadoshoyN, 0, '.', ',') ?>  personas; el número de casos sospechosos hoy es de <?php echo number_format($sospechososhoyN, 0, '.', ',') ?> y del total de los casos notificados, los casos negativos son de <?php echo number_format($negativoshoyN, 0, '.', ',') ?>.&lt;/p&gt;<br><br>

&lt;p&gt;El &lt;strong&gt;total de muertos por complicaciones del Covid-19 en México&lt;/strong&gt; es de <?php echo number_format($muertoshoyN, 0, '.', ',') ?> personas.  Se cuentan a la fecha <?php echo number_format($recuperadoshoyN, 0, '.', ',') ?> pacientes recuperados y <?php echo number_format($activoshoyN, 0, '.', ',') ?>&lt;strong&gt; casos activos de Covid-19 en México&lt;/strong&gt; al día de hoy <?php echo $actualizado; ?> según cifras oficiales del Gobierno Federal dadas a conocer en la plataforma &lt;a target="blank" alt="Datos de Covid-19 en Oaxaca y México al día de hoy" href="https://coronavirus.gob.mx/datos/"&gt;coronavirus.gob.mx/datos/&lt;/a&gt;.&lt;/p&gt;<br><br>

&lt;p&gt;Para más información síguenos en &lt;a href="https://www.facebook.com/imparcialoaxaca" target="blank"&gt;Facebook&lt;/a&gt; y &lt;a href="https://twitter.com/ImparcialOaxaca" target="blank"&gt;Twitter&lt;/a&gt; y consulta nuestro &lt;a href="https://imparcialoaxaca.mx/salud/coronavirus/"&gt;Micrositio Especial&lt;/a&gt; con la información del Covid-19. También puedes suscribirte a nuestro &lt;em&gt;Newsletter &lt;/em&gt;diario vía WhatsApp dando &lt;a href="https://wa.me/5219511418219?text=%C2%A1Hola!%20%F0%9F%91%8B%F0%9F%8F%BC%20Me%20gustar%C3%ADa%20estar%20informado%20%F0%9F%A4%B3%20de%20lo%20que%20pasa%20en%20Oaxaca%2C%20a%20trav%C3%A9s%20de%20su%20%F0%9F%97%9E%EF%B8%8Fnewsletter%20diario.%20%F0%9F%93%B0%20%0A*%C2%A1Gracias!*" target="blank" alt="Suscríbete al Newsletter de El Imparcial de Oaxaca por WhatsApp"&gt;clic aquí&lt;/a&gt;.

