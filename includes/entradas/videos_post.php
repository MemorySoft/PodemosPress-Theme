<?php  
/**
*   VIDEOS POST TYPE
*   -------------------
*   Post type para publicar videos.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package PodemosPress
*
*/  

function crear_video() {
  register_post_type( 'video',
    array(
      'labels' => array(
        'name' => 'Vídeos',
        'singular_name' => 'Vídeo destacado',
        'add_new' => 'Añadir vídeo',
        'add_new_item' => 'Nuevo vídeo',
        'edit' => 'Editar',
        'edit_item' => 'Editar vídeo',
        'new_item' => 'Nuevo vídeo',
        'view' => 'Ver',
        'view_item' => 'Ver vídeo',
        'search_items' => 'Buscar vídeo',
        'not_found' => 'Ningún vídeo encontrado',
        'not_found_in_trash' => 'Ningún vídeo encontrado en la Papelera',
        'parent' => 'Vídeo superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-format-video',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'crear_video' );
?>