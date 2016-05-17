<?php 
/**
*   ÁREA POST TYPE
*   -----------------
*   Genera una area que muestra información sobre 
*   un área de trabajo del Consejo Ciudadano.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package PodemosPress
*
*/ 
error_reporting(E_ALL ^ E_NOTICE);

// POST TYPE
function podemospress_crear_areas() {
  register_post_type( 'area',
    array(
      'labels' => array(
        'name' => 'Áreas',
        'singular_name' => 'Área',
        'add_new' => 'Añadir área',
        'add_new_item' => 'Nueva área',
        'edit' => 'Editar',
        'edit_item' => 'Editar área',
        'new_item' => 'Nueva área',
        'view' => 'Ver',
        'view_item' => 'Ver área',
        'search_items' => 'Buscar área',
        'not_found' => 'Ninguna área encontrada',
        'not_found_in_trash' => 'Ninguna área encontrada en la Papelera',
        'parent' => 'Área superior'
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
add_action( 'init', 'podemospress_crear_areas' );
?>