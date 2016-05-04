<?php
/**
*   DESTACADO POST TYPE
*   -------------------
*   Post type que genera un post destacado en portada.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package PodemosPress
*
*/  

function crear_destacado() {
  register_post_type( 'destacado',
    array(
      'labels' => array(
        'name' => 'Campañas',
        'singular_name' => 'Campaña destacada',
        'add_new' => 'Añadir post destacado',
        'add_new_item' => 'Nuevo post destacado',
        'edit' => 'Editar',
        'edit_item' => 'Editar post destacado',
        'new_item' => 'Nuevo post destacado',
        'view' => 'Ver',
        'view_item' => 'Ver post destacado',
        'search_items' => 'Buscar post destacado',
        'not_found' => 'Ningún post destacado encontrado',
        'not_found_in_trash' => 'Ningún post destacado encontrado en la Papelera',
        'parent' => 'post destacado superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-awards',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'crear_destacado' );
?>