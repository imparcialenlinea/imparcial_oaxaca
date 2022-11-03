<?php

// Creating the widget 
class cintillo_elecciones2018 extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'cintillo_elecciones2018', 

// Widget name will appear in UI
esc_html__('Cintillo de Elecciones', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'Cintillo de elecciones', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
// before and after widget arguments are defined by themes
//echo $args['before_widget'];
$elecciones =strtotime("2018-07-02");
$currentTime = time();
$diff = $elecciones - $currentTime;

// This is where you run the code and display the output?>

<div class="micrositio-tag">
			<div class="cintillo-elecciones">
            	<img width="100%" src="http://imparcialoaxaca.mx/wp-content/uploads/2018/04/cintillo-elecciones-2018-imparcial-oaxaca_votaciones.png" />
                <img class="cintillo-marcador" src="http://imparcialoaxaca.mx/wp-content/uploads/2018/04/cintillo-elecciones-2018-imparcial-oaxaca_votaciones_contador1.png" />
                <div>
                	<div class="cintillo-texto">Faltan<br /><span class="cintillo-numero"><?php echo floor($diff/(60*60*24));?></span><br />días</span></div>
                </div>
            </div> 


            <div class="micrositio-text">
            <a href="/especiales/elecciones-2018/">Ver Micrositio</a>
            </div>
         </div>

                     
<?php

}
		
// Widget Backend 
public function form( $instance ) {
	
	if ( isset( $instance[ 'mostrar' ] ) ) {
		$mostrar = $instance[ 'mostrar' ];
	}else {
		$mostrar = 'no';
	}
	if ( isset( $instance[ 'target' ] ) ) {
		$target = $instance[ 'target' ];
	}else {
		$target = 'no';
	}	
	if ( isset( $instance[ 'url' ] ) ) {
		$url = $instance[ 'url' ];
	}else {
		$url = '/especiales';
	}	
	if ( isset( $instance[ 'desktop' ] ) ) {
		$desktop = $instance[ 'desktop' ];
	}else {
		$desktop = '';
	}	
	if ( isset( $instance[ 'mobile' ] ) ) {
		$mobile = $instance[ 'mobile' ];
	}else {
		$mobile = '';
	}	


// Widget admin form
?>


<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();


return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_cintilloElecciones() {
	register_widget( 'cintillo_elecciones2018' );
}
add_action( 'widgets_init', 'wpb_load_cintilloElecciones' );
?>