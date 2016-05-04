<?php  
function crear_cargos() {
  register_post_type( 'cargos',
    array(
      'labels' => array(
        'name' => 'Cargos',
        'singular_name' => 'Cargo',
        'add_new' => 'Añadir Cargo',
        'add_new_item' => 'Nuevo Cargo',
        'edit' => 'Editar',
        'edit_item' => 'Editar Cargo',
        'new_item' => 'Nuevo Cargo',
        'view' => 'Ver',
        'view_item' => 'Ver Cargo',
        'search_items' => 'Buscar Cargo',
        'not_found' => 'Ningún Cargo encontrado',
        'not_found_in_trash' => 'Ningún Cargo encontrado en la Papelera',
        'parent' => 'Cargo superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor' ),
      'taxonomies' => array( 'Consejo Ciudadano', 'Comisión de Garantias' ),
      'menu_icon' => 'dashicons-id',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'crear_cargos' );
?>