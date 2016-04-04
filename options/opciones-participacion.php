<?php
/**
 *	PÁGINA DE PARTICIPACIÓN
 * 	-----------------------
 */
add_action('admin_menu', 'CreaMenuParticipacion');
add_action('admin_init', 'RegistraOpcionesParticipacion');

function CreaMenuParticipacion() {
    add_submenu_page(
      "configuracion-global",
    	__("Participación"), 
    	__("Participación"), 
    	"manage_options", 
    	"participacion", 
    	"PaginaParticipacion"
    	);
}

function RegistraOpcionesParticipacion() {
    // Añadimos las opciones a la base de datos
    add_option("delegacion_nombre","","","yes");
	  add_option("delegacion_direccion","","","yes");
	  add_option("delegacion_telefono","","","yes");
	  add_option("delegacion_horario_am","","","yes");
	  add_option("delegacion_horario_pm","","","yes");
	  add_option("delegacion_mapa","","","yes");
	  add_option("delegacion_twitter","","","yes");
	  add_option("delegacion_facebook","","","yes");
	  add_option("delegacion_youtube","","","yes");
	  add_option("delegacion_instagram","","","yes");
		add_option("delegacion_analitica","","","yes");

    // Regististramos las opciones que este formulario puede actualizar
    register_setting("datos_contacto", "delegacion_nombre");
	  register_setting("datos_contacto", "delegacion_direccion");
	  register_setting("datos_contacto", "delegacion_telefono");
	  register_setting("datos_contacto", "delegacion_horario_am");
	  register_setting("datos_contacto", "delegacion_horario_pm");
	  register_setting("datos_contacto", "delegacion_mapa");
	  register_setting("datos_contacto", "delegacion_twitter");
	  register_setting("datos_contacto", "delegacion_facebook");
	  register_setting("datos_contacto", "delegacion_youtube");
	  register_setting("datos_contacto", "delegacion_instagram");
	  register_setting("datos_contacto", "delegacion_analitica");
}
?>

<?php

function PaginaParticipacion() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?>
    <div class="wrap">
        <h1><span class="dashicons dashicons-testimonial" style="font-size: 2rem; margin-right: 1rem;"></span> Página de Participación</h1>
        <p>Opciones de configuración de la página de Participación</p>
        <hr>

        <form method="post" action="options.php">
          <?php settings_fields('datos_contacto'); ?>

					<h2>Datos de contacto</h2>
					<p>Estos son los datos de contacto de la delegación, aparecerán en el footer y en la página de contacto.</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Nombre de la delegación</th>
              <td><input type="text" name="delegacion_nombre" size="30" value="<?php echo get_option('delegacion_nombre'); ?>" /><br>
              <small>Ej: Podem Balears</small></td>
            </tr>
            <tr valign="top">
              <th scope="row">Dirección de la sede</th>
              <td><input type="text" name="delegacion_direccion" size="30" value="<?php echo get_option('delegacion_direccion'); ?>" /></td>
            </tr>
            <tr valign="top">
              <th scope="row">Teléfono de contacto</th>
              <td><input type="text" name="delegacion_telefono" size="30" value="<?php echo get_option('delegacion_telefono'); ?>" /></td>
            </tr>
            <tr valign="top">
              <th scope="row">Horario de mañanas</th>
              <td><input type="text" name="delegacion_horario_am" size="30" value="<?php echo get_option('delegacion_horario_am'); ?>" /></td>
            </tr>
            <tr valign="top">
              <th scope="row">Horario de tardes</th>
              <td><input type="text" name="delegacion_horario_pm" size="30" value="<?php echo get_option('delegacion_horario_pm'); ?>" /></td>
            </tr>
            <tr valign="top">
              <th scope="row">Mapa</th>
              <td><textarea name="delegacion_mapa" cols="37" rows="10"><?php echo get_option('delegacion_mapa'); ?></textarea><br>
              <small>Pega aquí el código de Google Maps</small></td>
            </tr>
          </table>

          <hr>

          <h2>Perfiles sociales</h2>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Twitter</th>
              <td><input type="text" name="delegacion_twitter" size="40" value="<?php echo get_option('delegacion_twitter'); ?>" /><br>
              <small>URL de Twitter</small></td>
            </tr>
            <tr valign="top">
              <th scope="row">Facebook</th>
              <td><input type="text" name="delegacion_facebook" size="40" value="<?php echo get_option('delegacion_facebook'); ?>" /><br>
              <small>URL de Facebook</small></td>
            </tr>
            <tr valign="top">
              <th scope="row">YouTube</th>
              <td><input type="text" name="delegacion_youtube" size="40" value="<?php echo get_option('delegacion_youtube'); ?>" /><br>
              <small>URL de YouTube</small></td>
            </tr>
            <tr valign="top">
              <th scope="row">Instagram</th>
              <td><input type="text" name="delegacion_instagram" size="40" value="<?php echo get_option('delegacion_instagram'); ?>" /><br>
              <small>URL de Instagram</small></td>
            </tr>
          </table>

          <hr>

          <h2>Analitica de página</h2>
          <p>Las analíticas de página ayudan a saber el número de visitantes, las páginas más vistas y otros parametros relativos a este sitio web.</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">ID de Google Analytics</th>
              <td><input type="text" name="delegacion_analitica" size="30" value="<?php echo get_option('delegacion_analitica'); ?>" /></td>
            </tr>
          </table>

          <p class="submit">
          	<input type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
          </p>

        </form>
    </div>
    <?php
}
?>