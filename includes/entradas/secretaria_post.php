<?php 
/**
*   SECRETARÍA POST TYPE
*   --------------------
*   Genera una post que muestra información sobre 
*   un secretaría del Consejo Ciudadano.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package PodemosPress
*
*/ 
error_reporting(E_ALL ^ E_NOTICE);

// POST TYPE
function podemospress_crear_secretarias() {
  register_post_type( 'secretaria',
    array(
      'labels' => array(
        'name' => 'Secretaría',
        'singular_name' => 'Secretaría',
        'add_new' => 'Añadir secretaría',
        'add_new_item' => 'Nueva secretaría',
        'edit' => 'Editar',
        'edit_item' => 'Editar secretaría',
        'new_item' => 'Nueva secretaría',
        'view' => 'Ver',
        'view_item' => 'Ver secretaría',
        'search_items' => 'Buscar secretaría',
        'not_found' => 'Ninguna secretaría encontrada',
        'not_found_in_trash' => 'Ninguna secretaría encontrada en la Papelera',
        'parent' => 'Secretaría superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-editor-expand',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'podemospress_crear_secretarias' );
?>