<?php
/**
 * PodemosPress
 * ------------
 * Funciones y definiciones
 *
 * @package PodemosPress
 * @since 1.0
 */
require_once('includes/init.php'); // Cargamos el soporte básico

/**
* FUNCIONES
*********************************************************************************************************/
require_once('includes/funciones/dashboard.php'); 		// Personalizaciones de la parte de administración
require_once('includes/funciones/sidebars.php'); 			// Registro de zonas para widgets
require_once('includes/funciones/opengraph.php');			// Soporte pata OpenGraph
require_once('includes/funciones/categorias.php');		// Funciones extra para las categorias
require_once('includes/funciones/extractos.php');			// Extractos de articulos


/**
*	PÁGINAS DE OPCIONES 
*********************************************************************************************************/
require_once('includes/opciones/configuracion.php');
require_once('includes/opciones/delegacion.php');
require_once('includes/opciones/inicio.php');
require_once('includes/opciones/programa.php');
require_once('includes/opciones/organizacion.php');
require_once('includes/opciones/miembros.php');
require_once('includes/opciones/instituciones.php');
require_once('includes/opciones/actualidad.php');
require_once('includes/opciones/participacion.php');
require_once('includes/opciones/contacto.php');


/**
* WIDGETS
*********************************************************************************************************/
require_once('includes/widgets/bloque.php');

?>
