
<?php
/**
 * Search Form Template
 *
 */
?>

	<div class="search-widget">
		<form method="get" class="search-form" action="<?php echo esc_url( home_url('/') ); ?>" >
			<input type="text" name="s" placeholder="<?php esc_attr_e( '¿Qué estás buscando?', 'hotmagazine' ); ?>" />
			<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
    <p>&nbsp;</p>