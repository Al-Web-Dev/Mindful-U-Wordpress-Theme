<?php register_nav_menus(primary); 


register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'Mindfulyou' ),
		
	) );


// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';






?>