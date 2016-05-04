<?php
/**
*   CARRUSEL POST TYPE
*   --------------------
*   Post type que genera un item para el carrusel de portada.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package PodemosPress
*
*/  

function crear_carrusel() {
  register_post_type( 'carrusel',
    array(
      'labels' => array(
        'name' => 'Carrusel',
        'singular_name' => 'Items del carrusel',
        'add_new' => 'Añadir item de carrusel',
        'add_new_item' => 'Nuevo item de carrusel',
        'edit' => 'Editar',
        'edit_item' => 'Editar item de carrusel',
        'new_item' => 'Nuevo item de carrusel',
        'view' => 'Ver',
        'view_item' => 'Ver item de carrusel',
        'search_items' => 'Buscar item de carrusel',
        'not_found' => 'Ningún item de carrusel encontrado',
        'not_found_in_trash' => 'Ningún item de carrusel encontrado en la Papelera',
        'parent' => 'Item de carrusel superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-images-alt2',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'crear_carrusel' );
?>