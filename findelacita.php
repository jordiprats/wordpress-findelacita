<?php
/**
 * @package findelacita
 * @version 1.0
 */
/*
Plugin Name: findelacita
Plugin URI: http://systemadmin.es/2013/08/fin-de-la-cita-para-wordpress
Description: Añade #FINDELACITA a cada pagina
Author: Jordi Prats
Version: 1.0
Author URI: http://systemadmin.es
*/


add_filter('the_content', 'findelacita_content', 1);

function findelacita_content($content) {
	return $content."<p><center><strong>#FINDELACITA</strong></center></p>";
}

?>
