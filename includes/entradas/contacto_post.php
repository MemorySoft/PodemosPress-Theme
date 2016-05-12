<?php  
/**
*   CONTACTO POST TYPE
*   -----------------
*   Genera una ficha de contacto que incluye nombre,
*   teléfono, email y canal de Telegram.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package PodemosPress
*
*/ 

// POST TYPE
function podemospress_crear_contacto() {
  register_post_type( 'contacto',
    array(
      'labels' => array(
        'name' => 'Contactos',
        'singular_name' => 'Ficha de contacto',
        'add_new' => 'Añadir ficha',
        'add_new_item' => 'Nueva ficha de contacto',
        'edit' => 'Editar',
        'edit_item' => 'Editar ficha de contacto',
        'new_item' => 'Nueva ficha de contacto',
        'view' => 'Ver',
        'view_item' => 'Ver ficha de contacto',
        'search_items' => 'Buscar ficha de contacto',
        'not_found' => 'Ninguna ficha de contacto encontrado',
        'not_found_in_trash' => 'Ninguna ficha de contacto encontrado en la Papelera',
        'parent' => 'Ficha de contacto superior'
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
add_action( 'init', 'podemospress_crear_contacto' );

// META BOXES
function podemospress_contacto_meta_box() {
    add_meta_box( 'miembros-datos',
        'Datos de contacto',
        'podemospress_muestra_contacto_meta_box',
        'contacto', 
        'normal', 
        'default'
    );
}
add_action( 'admin_init', 'podemospress_contacto_meta_box' );

function podemospress_muestra_contacto_meta_box( $contacto ) {
  $telefono = esc_html( get_post_meta( $contacto->ID, 'contacto_telefono', true ) );
  $email = esc_html( get_post_meta( $contacto->ID, 'contacto_email', true ) );
  $telegram = esc_html( get_post_meta( $contacto->ID, 'contacto_telegram', true ) );
  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"></th>
      <td>
        <p>El título de este item corresponde al nombre del área o cargo. Todos los campos son opcionales.</p>
        <hr>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Teléfono</th>
      <td>
        <input 
        type="tel" 
        size="40" 
        name="contacto_telefono" 
        value="<?php echo $telefono; ?>" /><br>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Email</th>
      <td>
        <input 
        type="text" 
        size="40" 
        name="contacto_email" 
        value="<?php echo $email; ?>" /><br>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Telegram</th>
      <td>
        <input 
        type="text" 
        size="40" 
        name="contacto_telegram" 
        value="<?php echo $telegram; ?>" /><br>
      </td>
    </tr>
  </table>
  <?php
}

function podemospress_agrega_contacto_valores( $datos_id, $contacto ) {
  if ( $contacto->post_type == 'contacto' ) {
    if ( isset( $_POST['contacto_telefono'] ) && $_POST['contacto_telefono'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'contacto_telefono', 
        $_POST['contacto_telefono'] 
        );
    } else {
      delete_post_meta( $datos_id, 'contacto_telefono' );
    }
  }
  if ( $contacto->post_type == 'contacto' ) {
    if ( isset( $_POST['contacto_email'] ) && $_POST['contacto_email'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'contacto_email', 
        $_POST['contacto_email'] 
        );
    } else {
      delete_post_meta( $datos_id, 'contacto_email' );
    }
  }
  if ( $contacto->post_type == 'contacto-item' ) {
    if ( isset( $_POST['contacto_telegram'] ) && $_POST['contacto_telegram'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'contacto_telegram', 
        $_POST['contacto_telegram'] 
        );
    } else {
      delete_post_meta( $datos_id, 'contacto_telegram' );
    }
  }
}
add_action( 'save_post', 'podemospress_agrega_contacto_valores', 10, 2 );
?>