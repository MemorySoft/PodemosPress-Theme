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

// METABOX
function podemospress_area_enlace_meta_box() {
    add_meta_box( 'area-enlace',
        'Enlace opcional',
        'podemospress_muestra_area_enlace_meta_box',
        'area', 
        'normal', 
        'default'
    );
}
add_action( 'admin_init', 'podemospress_area_enlace_meta_box' );

function podemospress_muestra_area_enlace_meta_box() {
  global $post;
  $custom = get_post_custom($post->ID);
  $enlace_contacto = $custom["area_contacto_visibilidad"][0]; 
?>
  <input 
    type="checkbox" 
    name="area_contacto_visibilidad" 
    <?php if( $enlace_contacto == true ) { ?>checked="checked"<?php } ?> /> Selcciona para mostrar un enlace a la página de contacto.
  <?php
}

function podemospress_guarda_checkbox($post_ID = 0) {
  $post_ID = (int) $post_ID;
  $post_type = get_post_type( $post_ID );
  $post_status = get_post_status( $post_ID );

  if ($post_type) {
  update_post_meta($post_ID, "area_contacto_visibilidad", $_POST["area_contacto_visibilidad"]);
  }
  return $post_ID;
}
add_action('save_post', 'podemospress_guarda_checkbox');
?>