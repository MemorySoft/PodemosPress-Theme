<?php
/**
 *	DELEGACIÓN
 * 	----------
 */
add_action('admin_menu', 'CreaMenuDelegacion');
add_action('admin_init', 'RegistraOpcionesDelegacion');

function CreaMenuDelegacion() {
  add_submenu_page(
  	"configuracion",
  	__("Delegación"), 
  	__("Delegación"), 
  	"manage_options", 
  	"delegacion", 
  	"DatosDelegacion"
  	);
}

function RegistraOpcionesDelegacion() {

  add_option("delegacion_ambito","","","yes");
  add_option("delegacion_region","","","yes");
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

  register_setting("opciones_delegacion", "delegacion_ambito");
  register_setting("opciones_delegacion", "delegacion_region");
  register_setting("opciones_delegacion", "delegacion_nombre");
  register_setting("opciones_delegacion", "delegacion_direccion");
  register_setting("opciones_delegacion", "delegacion_telefono");
  register_setting("opciones_delegacion", "delegacion_horario_am");
  register_setting("opciones_delegacion", "delegacion_horario_pm");
  register_setting("opciones_delegacion", "delegacion_mapa");
  register_setting("opciones_delegacion", "delegacion_twitter");
  register_setting("opciones_delegacion", "delegacion_facebook");
  register_setting("opciones_delegacion", "delegacion_youtube");
  register_setting("opciones_delegacion", "delegacion_instagram");
}

function DatosDelegacion() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?> 

    <div class="wrap">
      <h1><span class="dashicons dashicons-admin-generic" style="font-size: 2rem; margin-right: 1rem;"></span>  Delegación <small>- Datos referentes a esta delegación de Podemos</small></h1>
    
      <hr>

      <?php settings_errors(); ?>

      <form method="post" action="options.php">
        <?php settings_fields('opciones_delegacion'); ?>

        <h2>Localización</h2>
        <p>Estos ámbito territorial y territorio al que pertenece esta delegación.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Ámbito</th>
            <td><input type="text" name="delegacion_ambito" size="40" value="<?php echo get_option('delegacion_ambito'); ?>" />
            <p class="description">Ámbito territorial al que corresponde esta delegación. Puede ser Estatal, Autonómico,<strong>Insular</strong> o Municipal.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Región o municipio</th>
            <td><input type="text" name="delegacion_region" size="40" value="<?php echo get_option('delegacion_region'); ?>" />
            <p class="description">Región geográfica o municipio al que corresponde esta delegación, por ejemplo: Menorca.</p></td>
          </tr>
        </table>

        <hr>

				<h2>Datos de contacto</h2>
				<p>Estos son los datos de contacto de la delegación, aparecerán en el footer y en la página de contacto.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nombre de la delegación</th>
            <td><input type="text" name="delegacion_nombre" size="40" value="<?php echo get_option('delegacion_nombre'); ?>" />
            <p class="description">Ej: Podem Balears</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Dirección de la sede</th>
            <td><input type="text" name="delegacion_direccion" size="40" value="<?php echo get_option('delegacion_direccion'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Teléfono de contacto</th>
            <td><input type="text" name="delegacion_telefono" size="40" value="<?php echo get_option('delegacion_telefono'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Horario de mañanas</th>
            <td><input type="text" name="delegacion_horario_am" size="40" value="<?php echo get_option('delegacion_horario_am'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Horario de tardes</th>
            <td><input type="text" name="delegacion_horario_pm" size="40" value="<?php echo get_option('delegacion_horario_pm'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Mapa</th>
            <td><textarea name="delegacion_mapa" cols="37" rows="10"><?php echo get_option('delegacion_mapa'); ?></textarea>
            <p class="description">Pega aquí el código de Google Maps</p></td>
          </tr>
        </table>

        <hr>

        <h2>Perfiles sociales</h2>
        <p>Enlaces a los perfiles oficiales en redes sociales de esta delegación.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Twitter</th>
            <td><input type="text" name="delegacion_twitter" size="40" value="<?php echo get_option('delegacion_twitter'); ?>" />
            <p class="description">URL de Twitter</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Facebook</th>
            <td><input type="text" name="delegacion_facebook" size="40" value="<?php echo get_option('delegacion_facebook'); ?>" />
            <p class="description">URL de Facebook</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">YouTube</th>
            <td><input type="text" name="delegacion_youtube" size="40" value="<?php echo get_option('delegacion_youtube'); ?>" />
            <p class="description">URL de YouTube</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Instagram</th>
            <td><input type="text" name="delegacion_instagram" size="40" value="<?php echo get_option('delegacion_instagram'); ?>" />
            <p class="description">URL de Instagram</p></td>
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