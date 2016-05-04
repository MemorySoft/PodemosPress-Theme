<?php  
function crear_direccion_de_contacto() {
  register_post_type( 'direccion-contacto',
    array(
      'labels' => array(
        'name' => 'Contactos',
        'singular_name' => 'Dirección de contacto',
        'add_new' => 'Añadir Dirección',
        'add_new_item' => 'Nueva Dirección de contacto',
        'edit' => 'Editar',
        'edit_item' => 'Editar Dirección de contacto',
        'new_item' => 'Nueva Dirección de contacto',
        'view' => 'Ver',
        'view_item' => 'Ver Dirección de contacto',
        'search_items' => 'Buscar Dirección de contacto',
        'not_found' => 'Ninguna Dirección de contacto encontrado',
        'not_found_in_trash' => 'Ninguna Dirección de contacto encontrado en la Papelera',
        'parent' => 'Dirección de contacto superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-email',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'crear_direccion_de_contacto' );
/*
  Meta Boxes
 */
// Registro de campos
function direccion_de_contacto_register_meta_fields() {
  register_meta( 
    'direccion-contacto', 
    'direccion_de_contacto_name', 
    'sanitize_text_field', 
    'direccion_de_contacto_custom_fields_auth_callback' 
  ); 
  register_meta( 
    'direccion-contacto', 
    'direccion_de_contacto_email', 
    'sanitize_text_field', 
    'direccion_de_contacto_custom_fields_auth_callback' 
  );
  register_meta( 
    'direccion-contacto', 
    'direccion_de_contacto_telegram_id', 
    'sanitize_text_field', 
    'direccion_de_contacto_custom_fields_auth_callback' 
  );
  register_meta( 
    'direccion-contacto', 
    'direccion_de_contacto_telegram_url', 
    'sanitize_text_field', 
    'direccion_de_contacto_custom_fields_auth_callback' 
  );
}
// Comprobación de autorización
function direccion_de_contacto_custom_fields_auth_callback ( $allowed, $meta_key, $post_id, $user_id, $cap, $caps ){
  if ( 'direccion-contacto' == get_post_type( $post_id ) && current_user_can( 'edit_post', $post_id ) ) 
   { $allowed = true; } else  { $allowed = false; } return $allowed;
}
// Constructor del Meta Box
function direccion_de_contacto_meta_boxes() {
  add_meta_box( 
    'direccion_de_contacto-meta-box', 
    __('Dirección de contacto'), 
    'direccion_de_contacto_meta_box_callback', 
    'direccion-contacto' 
  );
}
// Output del Meta Box
function direccion_de_contacto_meta_box_callback( $post ) {
  // Nombre
  ?>
  <p>
    <label class="label" for="direccion_de_contacto_name">
      <?php _e("Nombre del cargo o área", 'podemospress'); ?>
    </label><br>
    <input  name="direccion_de_contacto_name" id="direccion_de_contacto_name" type="text" size="40" value="">
    <span class="description">Ej: Secretaría de Comunicación</span>
  </p>
  <?php
  // Email
  ?>
  <p>
    <label class="label" for="direccion_de_contacto_email">
      <?php _e("Email de contacto", 'podemospress'); ?>
    </label><br>
    <input  name="direccion_de_contacto_email" id="direccion_de_contacto_email" type="text" size="40" value="">
  </p>
  <?php
  // Telegram
  ?>
  <p>
    <label class="label" for="direccion_de_contacto_telegram_id">
      <?php _e("Canal público de Telegram", 'podemospress'); ?>
    </label><br>
    <input  name="direccion_de_contacto_telegram_id" id="direccion_de_contacto_telegram_id" type="email" size="40" value="" placeholder="Ej: @PodemBalears">
    <span class="description">ID de Telegram</span>
    <br>
    <input  name="direccion_de_contacto_telegram_url" id="direccion_de_contacto_telegram_url" type="text" size="40" value="" placeholder="https://telegram.me/PodemBalears">
    <span class="description">Enlace del canal público</span>
  </p>
  <?php
}
// Guardar datos
function guardar_direccion_de_contacto( $post_id, $post ){
  if ( ! isset( $_POST['direccion_de_contacto_meta_box_noncename'] ) || ! wp_verify_nonce( $_POST['direccion_de_contacto_meta_box_noncename'], 'direccion_de_contacto_meta_box' ) ) {
      return;
  }

  if( isset( $_POST['direccion_de_contacto_name'] ) && $_POST['direccion_de_contacto_name'] != "" ) {
      update_post_meta( $post_id, 'direccion_de_contacto_name', $_POST['direccion_de_contacto_name'] );
  } else {
      delete_post_meta( $post_id, 'direccion_de_contacto_name' );
  }
  if( isset( $_POST['direccion_de_contacto_email'] ) && $_POST['direccion_de_contacto_email'] != "" ) {
      update_post_meta( $post_id, 'direccion_de_contacto_email', $_POST['direccion_de_contacto_email'] );
  } else {
      delete_post_meta( $post_id, 'direccion_de_contacto_email' );
  }
  if( isset( $_POST['direccion_de_contacto_telegram_id'] ) && $_POST['direccion_de_contacto_telegram_id'] != "" ) {
      update_post_meta( $post_id, 'direccion_de_contacto_telegram_id', $_POST['direccion_de_contacto_telegram_id'] );
  } else {
      delete_post_meta( $post_id, 'direccion_de_contacto_telegram_id' );
  }
  if( isset( $_POST['direccion_de_contacto_telegram_url'] ) && $_POST['direccion_de_contacto_telegram_url'] != "" ) {
      update_post_meta( $post_id, 'direccion_de_contacto_telegram_url', $_POST['direccion_de_contacto_telegram_url'] );
  } else {
      delete_post_meta( $post_id, 'direccion_de_contacto_telegram_url' );
  }
}
add_action( 'save_post', 'guardar_direccion_de_contacto', 10, 2 );
add_action( 'init', 'direccion_de_contacto_register_meta_fields' );
add_action('add_meta_boxes', 'direccion_de_contacto_meta_boxes');
?>