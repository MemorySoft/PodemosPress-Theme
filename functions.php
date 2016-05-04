<?php
/**
 * PodemosPress
 * ------------
 * Funciones y definiciones
 *
 * @package PodemosPress
 */
require_once('includes/init.php'); // Cargamos el soporte básico

/**
* FUNCIONES
*********************************************************************************************************/
require_once('includes/funciones/dashboard.php'); 
require_once('includes/funciones/sidebars.php'); 	
require_once('includes/funciones/opengraph.php');	
require_once('includes/funciones/categorias.php');
require_once('includes/funciones/extractos.php');		
require_once('includes/funciones/clonador.php');

/**
*	PÁGINAS DE OPCIONES 
*********************************************************************************************************/
require_once('includes/opciones/configuracion.php');
require_once('includes/opciones/inicio.php');
require_once('includes/opciones/programa.php');
require_once('includes/opciones/organizacion.php');
require_once('includes/opciones/miembros.php');
require_once('includes/opciones/instituciones.php');
require_once('includes/opciones/actualidad.php');
require_once('includes/opciones/participacion.php');
require_once('includes/opciones/contacto.php');
require_once('includes/opciones/delegacion.php');

/**
* ENTRADAS PERSONALIZADAS
*********************************************************************************************************/
require_once('includes/entradas/programa_post.php');
require_once('includes/entradas/miembros_post.php');
require_once('includes/entradas/contacto_post.php');
require_once('includes/entradas/carrusel_post.php');
require_once('includes/entradas/destacado_post.php');
require_once('includes/entradas/videos_post.php');

/**
* WIDGETS
*********************************************************************************************************/
require_once('includes/widgets/bloque_largo.php');
require_once('includes/widgets/bloque_corto.php');

/**
* PLUGINS INTEGRADOS
*********************************************************************************************************/

?>