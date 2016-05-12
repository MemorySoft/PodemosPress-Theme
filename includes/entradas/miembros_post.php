<?php  
/**
*   MIEMBRO POST TYPE
*   -----------------
*   Genera una ficha para un miembro de la delegación con imagen, 
*   texto, título, metabox para datos de contacto y taxonomias propias.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package PodemosPress
*
*/ 

// POST TYPE
function podemospress_crear_miembros() {
  register_post_type( 'miembro',
    array(
      'labels' => array(
        'name' => 'Cargos',
        'singular_name' => 'Cargo electo',
        'add_new' => 'Añadir cargo',
        'add_new_item' => 'Nuevo cargo',
        'edit' => 'Editar',
        'edit_item' => 'Editar cargo',
        'new_item' => 'Nuevo cargo',
        'view' => 'Ver',
        'view_item' => 'Ver cargo',
        'search_items' => 'Buscar cargo',
        'not_found' => 'Ningún cargo encontrado',
        'not_found_in_trash' => 'Ningún cargo encontrado en la Papelera',
        'parent' => 'Cargo superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-id',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'podemospress_crear_miembros' );

// METABOX
function podemospress_miembros_datos_meta_box() {
    add_meta_box( 'miembros-datos',
        'Datos personales',
        'podemospress_muestra_miembros_datos_meta_box',
        'miembro', 
        'normal', 
        'default'
    );
}
add_action( 'admin_init', 'podemospress_miembros_datos_meta_box' );

function podemospress_muestra_miembros_datos_meta_box( $miembro_datos ) {
  $datos_cargo_institucional = esc_html( get_post_meta( $miembro_datos->ID, 'miembro_datos_cargo_institucional', true ) );
  $datos_cargo_organico = esc_html( get_post_meta( $miembro_datos->ID, 'miembro_datos_cargo_organico', true ) );
  $datos_twitter = esc_html( get_post_meta( $miembro_datos->ID, 'miembro_datos_twitter', true ) );
  $datos_facebook = esc_html( get_post_meta( $miembro_datos->ID, 'miembro_datos_facebook', true ) );
  $datos_email = esc_html( get_post_meta( $miembro_datos->ID, 'miembro_datos_email', true ) );
  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row">Instrucciones</th>
      <td>
        <p>Para rellenar correctamente esta ficha debes tener en cuenta lo siguiente:</p>
        <p>
          <ol>
            <li>El título de este item corresponde al nombre completo de la persona</li>
            <li>La biografia será el texto que escribas en el editor.</li>
            <li>La fotografia en el campo 'Imagen Destacada' y <strong>debe ser cuadrada</strong></li>
            <li>Para que aparezca en la página de Miembros debes asignarle al menos uno de los items en <i>Órgano Interno</i></li>
            <li>Si quieres que aparezca en la página de Instituciones debes asignarle el item correspondiente en Institución <i>Pública</i></li>
          </ol>
        </p>
        <hr>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Cargo institucional</th>
      <td>
        <input 
        type="text" 
        size="40" 
        name="miembro_datos_cargo_institucional" 
        value="<?php echo $datos_cargo_institucional; ?>" /><br>
        <span class="description">Ej: 'Parlamentaria' o 'Senadora'</span>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Cargo orgánico</th>
      <td>
        <input 
        type="text" 
        size="40" 
        name="miembro_datos_cargo_organico" 
        value="<?php echo $datos_cargo_organico; ?>" /><br>
        <span class="description">Ej: 'Secretaria de Comunicación' o 'Secretaria General'</span>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Cuenta de Twitter</th>
      <td>
        <input 
        type="text" 
        size="40" 
        name="miembro_datos_twitter" 
        value="<?php echo $datos_twitter; ?>" /><br>
        <span class="description">URL completa de la cuenta</span>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Cuenta de Facebook</th>
      <td>
        <input 
        type="text" 
        size="40" 
        name="miembro_datos_facebook" 
        value="<?php echo $datos_facebook; ?>" /><br>
        <span class="description">URL completa de la cuenta</span>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">Cuenta de correo electrónico</th>
      <td>
        <input 
        type="text" 
        size="40" 
        name="miembro_datos_email" 
        value="<?php echo $datos_email; ?>" /><br>
      </td>
    </tr>
  </table>
  <?php
}

function podemospress_agrega_miembro_datos_valores( $datos_id, $miembro_datos ) {
  if ( $miembro_datos->post_type == 'miembro' ) {
    if ( isset( $_POST['miembro_datos_cargo_institucional'] ) && $_POST['miembro_datos_cargo_institucional'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'miembro_datos_cargo_institucional', 
        $_POST['miembro_datos_cargo_institucional'] 
        );
    } else {
      delete_post_meta( $datos_id, 'miembro_datos_cargo_institucional' );
    }
    if ( isset( $_POST['miembro_datos_cargo_organico'] ) && $_POST['miembro_datos_cargo_organico'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'miembro_datos_cargo_organico', 
        $_POST['miembro_datos_cargo_organico'] 
        );
    } else {
      delete_post_meta( $datos_id, 'miembro_datos_cargo_organico' );
    }
    if ( isset( $_POST['miembro_datos_twitter'] ) && $_POST['miembro_datos_twitter'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'miembro_datos_twitter', 
        $_POST['miembro_datos_twitter'] 
        );
    } else {
      delete_post_meta( $datos_id, 'miembro_datos_twitter' );
    }
    if ( isset( $_POST['miembro_datos_facebook'] ) && $_POST['miembro_datos_facebook'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'miembro_datos_facebook', 
        $_POST['miembro_datos_facebook'] 
        );
    } else {
      delete_post_meta( $datos_id, 'miembro_datos_facebook' );
    }
    if ( isset( $_POST['miembro_datos_email'] ) && $_POST['miembro_datos_email'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'miembro_datos_email', 
        $_POST['miembro_datos_email'] 
        );
    } else {
      delete_post_meta( $datos_id, 'miembro_datos_email' );
    }
  }
}
add_action( 'save_post', 'podemospress_agrega_miembro_datos_valores', 10, 2 );

// TAXONOMIAS
function podemospress_crea_miembros_taxonomias() {
    register_taxonomy(
        'institucion',
        'miembro',
        array(
            'labels' => array(
                'name' => 'Institución Pública',
                'add_new_item' => 'Agrega un tipo de Institución',
                'new_item_name' => "Nuevo tipo de Institución"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
    if (!term_exists( 'Ayuntamiento', 'institucion') ){
        wp_insert_term( 'Ayuntamiento', 'institucion' );
    }
    if (!term_exists( 'Consell Insular', 'institucion') ){
        wp_insert_term( 'Consell Insular', 'institucion' );
    }
    if (!term_exists( 'Cabildo', 'institucion') ){
        wp_insert_term( 'Cabildo', 'institucion' );
    }
    if (!term_exists( 'Gobierno Autonómico', 'institucion') ){
        wp_insert_term( 'Gobierno Autonómico', 'institucion' );
    }
    if (!term_exists( 'Parlamento Autonómico', 'institucion') ){
        wp_insert_term( 'Parlamento Autonómico', 'institucion' );
    }
    if (!term_exists( 'Senado', 'institucion') ){
        wp_insert_term( 'Senado', 'institucion' );
    }
    if (!term_exists( 'Congreso', 'institucion') ){
        wp_insert_term( 'Congreso', 'institucion' );
    }
    if (!term_exists( 'Gobierno Central', 'institucion') ){
        wp_insert_term( 'Gobierno Central', 'institucion' );
    }
    register_taxonomy(
        'interno',
        'miembro',
        array(
            'labels' => array(
                'name' => 'Órgano Interno',
                'add_new_item' => 'Agrega un tipo de Órgano Interno',
                'new_item_name' => "Nuevo tipo de Órgano Interno"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
    if (!term_exists( 'Secretaría General', 'interno') ){ 
        wp_insert_term( 'Secretaría General', 'interno' );
    }
    if (!term_exists( 'Consejo Ciudadano', 'interno') ){
        wp_insert_term( 'Consejo Ciudadano', 'interno' );
    }
    if (!term_exists( 'Comisión de Garantias', 'interno') ){
        wp_insert_term( 'Comisión de Garantias', 'interno' );
    }
}
add_action( 'init', 'podemospress_crea_miembros_taxonomias', 0 );
?>