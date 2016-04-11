<?php
/**
 *	PÁGINA DE MIEMBROS
 * 	------------------
 */
add_action('admin_menu', 'CreaMenuMiembros');
add_action('admin_init', 'RegistraOpcionesMiembros');

function CreaMenuMiembros() {
    add_submenu_page(
      'configuracion',
    	__("Miembros"), 
    	__("Miembros"), 
    	"manage_options", 
    	"miembros", 
    	"PaginaMiembros"
    	);
}

function RegistraOpcionesMiembros() {

    add_option("miembros_secretaria_bio","","","yes");
    add_option("miembros_secretaria_imagen","","","yes");
    add_option("miembros_secretaria_texto_boton","","","yes");
    add_option("miembros_secretaria_enlace_boton","","","yes");
    add_option("miembros_secretaria_twitter","","","yes");
    add_option("miembros_secretaria_facebook","","","yes");
    add_option("miembros_secretaria_email","","","yes");

    add_option("miembros_consejo_visibilidad","","","yes");
    add_option("miembros_consejo_descripcion","","","yes");
    add_option("miembros_consejo_texto_boton_actas","","","yes");
    add_option("miembros_consejo_enlace_boton_actas","","","yes");
    add_option("miembros_consejo_texto_boton_reglamento","","","yes");
    add_option("miembros_consejo_enlace_boton_reglamento","","","yes");
    add_option("miembros_consejo_actas","","","yes");
    
    add_option("miembros_comision_visibilidad","","","yes");
    add_option("miembros_comision_descripcion","","","yes");
    add_option("miembros_comision_texto_boton_actas","","","yes");
    add_option("miembros_comision_enlace_boton_actas","","","yes");
    add_option("miembros_comision_texto_boton_reglamento","","","yes");
    add_option("miembros_comision_enlace_boton_reglamento","","","yes");
    add_option("miembros_comision_actas","","","yes");  

    add_option("miembros_callout_visibilidad","","","yes");
    add_option("miembros_callout_titulo","","","yes");
    add_option("miembros_callout_texto","","","yes");
    add_option("miembros_callout_texto_visibilidad","","","yes");
    add_option("miembros_callout_texto_boton","","","yes");
    add_option("miembros_callout_enlace_boton","","","yes");
    add_option("miembros_callout_boton_visibilidad","","","yes");

	  
    register_setting("opciones_miembros", "miembros_secretaria_bio");
    register_setting("opciones_miembros", "miembros_secretaria_imagen");
    register_setting("opciones_miembros", "miembros_secretaria_texto_boton");
    register_setting("opciones_miembros", "miembros_secretaria_enlace_boton");
    register_setting("opciones_miembros", "miembros_secretaria_twitter");
    register_setting("opciones_miembros", "miembros_secretaria_facebook");
    register_setting("opciones_miembros", "miembros_secretaria_email");
    
    register_setting("opciones_miembros", "miembros_consejo_visibilidad");
    register_setting("opciones_miembros", "miembros_consejo_descripcion");
    register_setting("opciones_miembros", "miembros_consejo_texto_boton_actas");
    register_setting("opciones_miembros", "miembros_consejo_enlace_boton_actas");
    register_setting("opciones_miembros", "miembros_consejo_texto_boton_reglamento");
    register_setting("opciones_miembros", "miembros_consejo_enlace_boton_reglamento");
    register_setting("opciones_miembros", "miembros_consejo_actas");
    
    register_setting("opciones_miembros", "miembros_comision_visibilidad");
    register_setting("opciones_miembros", "miembros_comision_descripcion");
    register_setting("opciones_miembros", "miembros_comision_texto_boton_actas");
    register_setting("opciones_miembros", "miembros_comision_enlace_boton_actas");
    register_setting("opciones_miembros", "miembros_comision_texto_boton_reglamento");
    register_setting("opciones_miembros", "miembros_comision_enlace_boton_reglamento");
    register_setting("opciones_miembros", "miembros_comision_actas");

    register_setting("opciones_miembros", "miembros_callout_visibilidad");
    register_setting("opciones_miembros", "miembros_callout_titulo");
    register_setting("opciones_miembros", "miembros_callout_texto");
    register_setting("opciones_miembros", "miembros_callout_texto_visibilidad");
    register_setting("opciones_miembros", "miembros_callout_texto_boton");
    register_setting("opciones_miembros", "miembros_callout_enlace_boton");
    register_setting("opciones_miembros", "miembros_callout_boton_visibilidad");
}
?>

<?php
function PaginaMiembros() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?>
    <div class="wrap">
        <h1><span class="dashicons dashicons-admin-users" style="font-size: 2rem; margin-right: 1rem;"></span> Pagina de Miembros <small>- Opciones de configuración</small></h1>
        
        <hr>

        <?php settings_errors(); ?>

        <form method="post" action="options.php">
          <?php settings_fields('opciones_miembros'); ?>

          <h2>Secretaría General</h2>
          <p>Esta es la información que aparecerá en la sección Secretaria General de la página de Miembros</p>
          <table class="form-table">

            <tr valign="top">
              <th scope="row">Biografia del perfil</th>
              <td><textarea name="miembros_secretaria_bio" cols="37" rows="10"><?php echo get_option('miembros_secretaria_bio'); ?></textarea>
              <p class="description">Breve biografía de la persona que tiene el cargo.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Imagen del perfil</th>
              <td><input type="text" name="miembros_secretaria_imagen" size="40" value="<?php echo get_option('miembros_secretaria_imagen'); ?>" />
              <p class="description">Debes subir la imagen a la <a href="upload.php" target="_blank">galeria de imágenes</a> y copiar la URL aquí.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Documento <br>político-organizativo</th>
              <td>
              <input type="text" name="miembros_secretaria_texto_boton" size="40" value="<?php echo get_option('miembros_secretaria_texto_boton'); ?>" />
              <span class="description">Texto del botón</span>
              <br>
              <input type="text" name="miembros_secretaria_enlace_boton" size="40" value="<?php echo get_option('miembros_secretaria_enlace_boton'); ?>" />
              <span class="description">Enlace del botón</span>
              <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
              </td>
            </tr>
            <tr valign="top">
              <th scope="row">Contacto público <p class="description">Enlaces a perfiles sociales y dirección de email oficial</p></th>
              <td>
              <input type="text" name="miembros_secretaria_twitter" size="40" value="<?php echo get_option('miembros_secretaria_twitter'); ?>" />
              <span class="description">Twitter</span>
              <br>
              <input type="text" name="miembros_secretaria_facebook" size="40" value="<?php echo get_option('miembros_secretaria_facebook'); ?>" />
              <span class="description">Facebook</span>
              <br>
              <input type="text" name="miembros_secretaria_email" size="40" value="<?php echo get_option('miembros_secretaria_email'); ?>" />
              <span class="description">Email</span>
              <p class="description">Ej: sg@menorca.podemos.info</p>
              </td>
            </tr>
          </table>

          <hr>

          <h2>Consejo Ciudadano</h2>
          <p>Esta es la información que aparecerá en la sección Consejo Ciudadano de la página de Miembros</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Mostrar Consejo Ciudadano</th>
              <td>
              <?php $options = get_option( "miembros_consejo_visibilidad" ); ?>
              <input type="checkbox" name="miembros_consejo_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección Consejo Ciudadano</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Descripción</th>
              <td><textarea name="miembros_consejo_descripcion" cols="37" rows="10"><?php echo get_option('miembros_consejo_descripcion'); ?></textarea></td>
            </tr>
            <tr valign="top">
              <th scope="row">Actas</th>
              <td>
              <input type="text" name="miembros_consejo_texto_boton_actas" size="40" value="<?php echo get_option('miembros_consejo_texto_boton_actas'); ?>" />
              <span class="description">Texto del botón</span>
              <br>
              <input type="text" name="miembros_consejo_enlace_boton_actas" size="40" value="<?php echo get_option('miembros_consejo_enlace_boton_actas'); ?>" />
              <span class="description">Enlace del botón</span>
              <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
              </td>
            </tr>
            <tr valign="top">
              <th scope="row">Reglamento</th>
              <td>
              <input type="text" name="miembros_consejo_texto_boton_reglamento" size="40" value="<?php echo get_option('miembros_consejo_texto_boton_reglamento'); ?>" />
              <span class="description">Texto del botón</span>
              <br>
              <input type="text" name="miembros_consejo_enlace_boton_reglamento" size="40" value="<?php echo get_option('miembros_consejo_enlace_boton_reglamento'); ?>" />
              <span class="description">Enlace del botón</span>
              <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
              </td>
            </tr>
            <tr valign="top">
              <th scope="row">Miembros</th>
              <td><a href="" class="button-secondary">Añadir miembro</a><br>
              <p class="description">Agrega un miembro al Consejo Ciudadano. (Redirige a otra página)</p></td>
            </tr>
          </table>

          <hr>

          <h2>Comisión de Garantias</h2>
          <p>Esta es la información que aparecerá en la sección Comisión de Garantias de la página de Miembros</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Mostrar Comisión de Garantias</th>
              <td>
              <?php $options = get_option( "miembros_comision_visibilidad" ); ?>
              <input type="checkbox" name="miembros_comision_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar Comisión de Garantias</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Descripción</th>
              <td><textarea name="miembros_comision_descripcion" cols="37" rows="10"><?php echo get_option('miembros_comision_descripcion'); ?></textarea></td>
            </tr>
            <tr valign="top">
              <th scope="row">Actas</th>
              <td>
              <input type="text" name="miembros_comision_texto_boton_actas" size="40" value="<?php echo get_option('miembros_comision_texto_boton_actas'); ?>" />
              <span class="description">Texto del botón</span>
              <br>
              <input type="text" name="miembros_comision_enlace_boton_actas" size="40" value="<?php echo get_option('miembros_comision_enlace_boton_actas'); ?>" />
              <span class="description">Enlace del botón</span>
              <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
              </td>
            </tr>
            <tr valign="top">
              <th scope="row">Reglamento</th>
              <td>
              <input type="text" name="miembros_comision_texto_boton_reglamento" size="40" value="<?php echo get_option('miembros_comision_texto_boton_reglamento'); ?>" />
              <span class="description">Texto del botón</span>
              <br>
              <input type="text" name="miembros_comision_enlace_boton_reglamento" size="40" value="<?php echo get_option('miembros_comision_enlace_boton_reglamento'); ?>" />
              <span class="description">Enlace del botón</span>
              <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
              </td>
            </tr>
            <tr valign="top">
              <th scope="row">Miembros</th>
              <td><a href="" class="button-secondary">Añadir miembro</a><br>
              <p class="description">Agrega un miembro al Comisión de garantias. (Redirige a otra página)</p></td>
            </tr>
          </table>

          <hr>

          <h2>Callout</h2>
        <p>Esta es la sección a pie de página que sirve para insertar mensajes destacados con título, texto y enlace opcionales.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Mostrar callout</th>
            <td>
            <?php $options = get_option( "miembros_callout_visibilidad" ); ?>
            <input type="checkbox" name="miembros_callout_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el callout completo</span>
          </tr>
        </table>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Título del callout</th>
            <td><input type="text" name="miembros_callout_titulo" size="40" value="<?php echo get_option('miembros_callout_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Texto del callout</th>
            <td><textarea name="miembros_callout_texto" cols="37" rows="10"><?php echo get_option('miembros_callout_texto'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botón del callout</th>
            <td><input type="text" name="miembros_callout_texto_boton" size="40" value="<?php echo get_option('miembros_callout_texto_boton'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="miembros_callout_enlace_boton" size="40" value="<?php echo get_option('miembros_callout_enlace_boton'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
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