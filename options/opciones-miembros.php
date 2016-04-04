<?php
/**
 *	PÁGINA DE MIEMBROS
 * 	------------------
 */
add_action('admin_menu', 'CreaMenuMiembros');
add_action('admin_init', 'RegistraOpcionesMiembros');

function CreaMenuMiembros() {
    add_submenu_page(
      'configuracion-global',
    	__("Miembros"), 
    	__("Miembros"), 
    	"manage_options", 
    	"miembros", 
    	"PaginaMiembros", 
    	null, 
    	4.2
    	);
}

function RegistraOpcionesMiembros() {
    // Añadimos las opciones a la base de datos
	  
    add_option("miembros_secretaria_bio","","","yes");
    add_option("miembros_secretaria_imagen","","","yes");
    add_option("miembros_secretaria_reglamento","","","yes");
    add_option("miembros_secretaria_twitter","","","yes");
    add_option("miembros_secretaria_facebook","","","yes");
    add_option("miembros_secretaria_email","","","yes");
    
    add_option("miembros_consejo_descripcion","","","yes");
    add_option("miembros_consejo_reglamento","","","yes");
    add_option("miembros_consejo_actas","","","yes");
    
    add_option("miembros_comision_descripcion","","","yes");
    add_option("miembros_comision_reglamento","","","yes");
    add_option("miembros_comision_actas","","","yes");  

    add_option("miembros_callout_visibilidad","","","yes");
    add_option("miembros_callout_titulo","","","yes");
    add_option("miembros_callout_texto","","","yes");
    add_option("miembros_callout_texto_visibilidad","","","yes");
    add_option("miembros_callout_texto_boton","","","yes");
    add_option("miembros_callout_enlace_boton","","","yes");
    add_option("miembros_callout_boton_visibilidad","","","yes");
    
	  
    register_setting("pagina_miembros", "miembros_secretaria_bio");
    register_setting("pagina_miembros", "miembros_secretaria_imagen");
    register_setting("pagina_miembros", "miembros_secretaria_reglamento");
    register_setting("pagina_miembros", "miembros_secretaria_twitter");
    register_setting("pagina_miembros", "miembros_secretaria_facebook");
    register_setting("pagina_miembros", "miembros_secretaria_email");
    
    register_setting("pagina_miembros", "miembros_consejo_descripcion");
    register_setting("pagina_miembros", "miembros_consejo_reglamento");
    register_setting("pagina_miembros", "miembros_consejo_actas");
    
    register_setting("pagina_miembros", "miembros_comision_descripcion");
    register_setting("pagina_miembros", "miembros_comision_reglamento");
    register_setting("pagina_miembros", "miembros_comision_actas");

    register_setting("pagina_miembros", "miembros_callout_visibilidad");
    register_setting("pagina_miembros", "miembros_callout_titulo");
    register_setting("pagina_miembros", "miembros_callout_texto");
    register_setting("pagina_miembros", "miembros_callout_texto_visibilidad");
    register_setting("pagina_miembros", "miembros_callout_texto_boton");
    register_setting("pagina_miembros", "miembros_callout_enlace_boton");
    register_setting("pagina_miembros", "miembros_callout_boton_visibilidad");
    
}
?>

<?php

function PaginaMiembros() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?>
    <div class="wrap">
        <h1><span class="dashicons dashicons-admin-users" style="font-size: 2rem; margin-right: 1rem;"></span> Pagina de Miembros</h1>
        <p>Opciones de configuración de la página de Miembros</p>
        <hr>

        <form method="post" action="options.php">
          <?php settings_fields('pagina_miembros'); ?>

          <h2>Secretaría General</h2>
          <p>Esta es la información que aparecerá en el perfil de la Secretaria General en la página de Miembros</p>
          <table class="form-table">

            <tr valign="top">
              <th scope="row">Biografia del perfil</th>
              <td><textarea name="miembros_secretaria_bio" cols="37" rows="10"><?php echo get_option('miembros_secretaria_bio'); ?></textarea>
              <p class="description">Breve biografía de la persona que tiene el cargo.<br>
              Aparecerá en la página de Miembros</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Imagen del perfil</th>
              <td><input type="text" name="miembros_secretaria_imagen" size="40" value="<?php echo get_option('miembros_secretaria_imagen'); ?>" />
              <p class="description">Debes subir la imagen a la <a href="upload.php" target="_blank">galeria de imágenes</a> <br>y copiar la URL aquí.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Reglamento</th>
              <td><input type="text" name="miembros_secretaria_reglamento" size="40" value="<?php echo get_option('miembros_secretaria_reglamento'); ?>" />
              <p class="description">Enlace al reglamento de la Secretaría General.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Twitter</th>
              <td><input type="text" name="miembros_secretaria_twitter" size="40" value="<?php echo get_option('miembros_secretaria_twitter'); ?>" />
              <p class="description">Enlace al perfil oficial de la Secretaría General.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Facebook</th>
              <td><input type="text" name="miembros_secretaria_facebook" size="40" value="<?php echo get_option('miembros_secretaria_facebook'); ?>" />
              <p class="description">Enlace al perfil oficial de la Secretaría General.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Email</th>
              <td><input type="text" name="miembros_secretaria_email" size="40" value="<?php echo get_option('miembros_secretaria_email'); ?>" />
              <p class="description">Dirección de correo electrónico oficial del cargo. Ej: sg@menorca.podemos.info</p></td>
            </tr>
          </table>

          <hr>

          <h2>Consejo Ciudadano</h2>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Activar esta sección</th>
              <td>
              <?php $options = get_option( "miembros_consejo_visibilidad" ); ?>
              <input type="checkbox" name="miembros_consejo_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Descripción</th>
              <td><textarea name="miembros_consejo_descripcion" cols="37" rows="10"><?php echo get_option('miembros_consejo_descripcion'); ?></textarea>
              <p class="description">Texto que aparecerá en la página de Organización</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Reglamento</th>
              <td><input type="text" name="miembros_consejo_reglamento" size="40" value="<?php echo get_option('miembros_consejo_reglamento'); ?>" />
              <p class="description">Enlace al documento del reglamento del Consejo Ciudadano</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Actas</th>
              <td><input type="text" name="miembros_consejo_actas" size="40" value="<?php echo get_option('miembros_consejo_actas'); ?>" />
              <p class="description">Enlace a las actas del Consejo Ciudadano.<br>Puede ser una sección de este mismo sitio web o un enlace público de Google Drive o Dropbox.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Miembros</th>
              <td><a href="" class="button-secondary">Añadir miembro</a><br>
              <p class="description">Agrega un miembro al Consejo Ciudadano. (Redirige a otra página)</p></td>
            </tr>
          </table>

          <hr>

          <h2>Comisión de Garantias</h2>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Activar esta sección</th>
              <td>
              <?php $options = get_option( "miembros_comision_visibilidad" ); ?>
              <input type="checkbox" name="miembros_comision_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Descripción</th>
              <td><textarea name="miembros_comision_descripcion" cols="37" rows="10"><?php echo get_option('miembros_comision_descripcion'); ?></textarea><br>
              <p class="description">Texto que aparecerá en la página de Organización</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Reglamento</th>
              <td><input type="text" name="miembros_comision_reglamento" size="40" value="<?php echo get_option('miembros_comision_reglamento'); ?>" />
              <p class="description">Enlace al documento del reglamento de la Comisión de Garantias</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Actas</th>
              <td><input type="text" name="miembros_comision_actas" size="40" value="<?php echo get_option('miembros_comision_actas'); ?>" />
              <p class="description">Enlace a las actas del Comisión de Garantias.<br>Puede ser una sección de este mismo sitio web o un enlace público de Google Drive o Dropbox.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Miembros</th>
              <td><a href="" class="button-secondary">Añadir miembro</a>
              <p class="description">Agrega un miembro a la Comisión de Garantias. (Redirige a otra página)</p></td>
            </tr>
          </table>

          <hr>

          <h2>Callout</h2>
          <p>Esta es la sección a pie de página que sirve para insertar mensajes destacados con título, texto y enlace opcionales.</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Activar esta sección</th>
              <td>
              <?php $options = get_option( "miembros_callout_visibilidad" ); ?>
              <input type="checkbox" name="miembros_callout_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Título del callout</th>
              <td><input type="text" name="miembros_callout_titulo" size="40" value="<?php echo get_option('miembros_callout_titulo'); ?>" /></td>
            </tr>
            <tr valign="top">
              <th scope="row">Texto del callout</th>
              <td><textarea name="miembros_callout_texto" cols="37" rows="10"><?php echo get_option('miembros_callout_texto'); ?></textarea>
            </tr>
            <tr valign="top">
              <th scope="row">Mostrar texto</th>
              <td>
              <?php $options = get_option( "miembros_callout_texto_visibilidad" ); ?>
              <input type="checkbox" name="miembros_callout_texto_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar</span>
            </tr>
            <tr valign="top">
              <th scope="row">Texto del botón</th>
              <td><input type="text" name="miembros_callout_texto_boton" size="40" value="<?php echo get_option('miembros_callout_texto_boton'); ?>" />
              <p class="description">¡Sé muy concisa!</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Enlace del botón</th>
              <td><input type="text" name="miembros_callout_enlace_boton" size="40" value="<?php echo get_option('miembros_callout_enlace_boton'); ?>" />
              <p class="description">URL a la que redirige el botón</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Mostrar botón</th>
              <td>
              <?php $options = get_option( "miembros_callout_boton_visibilidad" ); ?>
              <input type="checkbox" name="miembros_callout_boton_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar</span>
            </tr>
          </table>

          <p class="submit">
          	<input name="miembros_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
          </p>

        </form>
    </div>
    <?php
}
?>