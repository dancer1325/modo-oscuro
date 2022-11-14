<!-- Wordpress recommendations
    1. Naming: 'plugin-....'
 -->
<?php
// Next commentaries are the one's to describe the plugin

//Plugin name: Dark mode
//Description: Activa el modo oscuro de tu theme
//version: 1.0
//Author: Cristian Ramanzin
//Author Uri: https://github.com/ramitaenlarama

// Same approach to register 'style.css' data
function estilos_plugin(){
    // URL path of the directory which contains the plugin
    $estilos_url = plugin_dir_url(__FILE__);    // https://developer.wordpress.org/reference/functions/plugin_dir_url/


    wp_enqueue_style( 'estilos_plugin', $estilos_url."/assets/css/estilos.css", '', '1.0','all');   // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
}

add_action('wp_enqueue_scripts','estilos_plugin'); // https://developer.wordpress.org/reference/functions/add_action/