<?php
/*
	Plugin Name: Peu de pagina per defecte per a noves entrades
	Plugin URI: Escriu l'adreca URL completa del teu plugin dins de Github
	Description: Crea peus de pagina per defecte per a noves entrades
	Version: 0.1
	Author: Aaron Gomez
	Author URI: L'adreca URL del teu compte de Github
	License: GNU GPLv3
*/
	function admin_menu_peu_pagina(){
		$titolPagina="Peu de pagina per defecte";
		$titolEntrada="Peu de pagina per defecte";
		$role="administrator";
		$id="peu_pagina_per_defecte";
		$nom_funcio="nouPeuPagDef";
		add_menu_page($titolPagina,$titolEntrada,$role,$id,$nom_funcio);
	}
	add_action('admin_menu','admin_menu_peu_pagina');
	
	function nouPeuPagDef(){
		include_once('formPeuPag.php');
	}
	add_action('wp_footer','afegPeuPagDef');
	function afegPeuPagDef(){
 		echo "<div style='color: red;
 		font-size: 10px;
		 margin: 10px;'>".get_option('footer_text')."</div>";
	}

?>
