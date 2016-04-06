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

    add_option("participacion_destacado_visibilidad","","","yes");
    add_option("participacion_destacado_titulo","","","yes");
	  add_option("participacion_destacado_logo","","","yes");
	  add_option("participacion_destacado_texto","","","yes");
	  add_option("participacion_destacado_media","","","yes");
	  add_option("participacion_destacado_texto_boton_uno","","","yes");
	  add_option("participacion_destacado_enlace_boton_uno","","","yes");
    add_option("participacion_destacado_texto_boton_dos","","","yes");
    add_option("participacion_destacado_enlace_boton_dos","","","yes");

    add_option("participacion_herramientas_visibilidad","","","yes");
    add_option("participacion_herramientas_enlace_columna_izquierda","","","yes");
    add_option("participacion_herramientas_imagen_columna_izquierda","","","yes");
    add_option("participacion_herramientas_enlace_columna_central","","","yes");
    add_option("participacion_herramientas_imagen_columna_central","","","yes");
    add_option("participacion_herramientas_enlace_columna_derecha","","","yes");
    add_option("participacion_herramientas_imagen_columna_derecha","","","yes");

    add_option("participacion_callout_visibilidad","","","yes");
    add_option("participacion_callout_titulo","","","yes");
    add_option("participacion_callout_texto","","","yes");
    add_option("participacion_callout_texto_boton","","","yes");
    add_option("participacion_callout_enlace_boton","","","yes");

    register_setting("opciones_participacion", "participacion_destacado_visibilidad");
    register_setting("opciones_participacion", "participacion_destacado_titulo");
	  register_setting("opciones_participacion", "participacion_destacado_logo");
	  register_setting("opciones_participacion", "participacion_destacado_texto");
	  register_setting("opciones_participacion", "participacion_destacado_media");
	  register_setting("opciones_participacion", "participacion_destacado_texto_boton_uno");
	  register_setting("opciones_participacion", "participacion_destacado_enlace_boton_uno");
	  register_setting("opciones_participacion", "participacion_destacado_texto_boton_dos");
	  register_setting("opciones_participacion", "participacion_destacado_enlace_boton_dos");

    register_setting("opciones_participacion", "participacion_herramientas_visibilidad");
    register_setting("opciones_participacion", "participacion_herramientas_enlace_columna_izquierda");
    register_setting("opciones_participacion", "participacion_herramientas_imagen_columna_izquierda");
    register_setting("opciones_participacion", "participacion_herramientas_enlace_columna_central");
    register_setting("opciones_participacion", "participacion_herramientas_imagen_columna_central");
    register_setting("opciones_participacion", "participacion_herramientas_enlace_columna_derecha");
    register_setting("opciones_participacion", "participacion_herramientas_imagen_columna_derecha");

    register_setting("opciones_participacion", "participacion_callout_visibilidad");
    register_setting("opciones_participacion", "participacion_callout_titulo");
    register_setting("opciones_participacion", "participacion_callout_texto");
    register_setting("opciones_participacion", "participacion_callout_texto_boton");
    register_setting("opciones_participacion", "participacion_callout_enlace_boton");
}
?>

<?php
function PaginaParticipacion() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?>
    <div class="wrap">
        <h1><span class="dashicons dashicons-format-chat" style="font-size: 2rem; margin-right: 1rem;"></span> Página de Participación <small>- Opciones de configuración</small></h1>
        
        <hr>

        <form method="post" action="options.php">
          <?php settings_fields('opciones_participacion'); ?>

					<h2>Destacado</h2>
          <p>Esta es la sección arriba de la página que muestra contenido multimedia y un texto destacado. Especialmente indicado para las campañas Impulsa.</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Mostrar Destacado</th>
              <td>
              <?php $options = get_option( "participacion_destacado_visibilidad" ); ?>
              <input type="checkbox" name="participacion_destacado_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección Destacados</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Titulo del destacado</th>
              <td><input type="text" name="participacion_destacado_titulo" size="40" value="<?php echo get_option('participacion_destacado_titulo'); ?>" />
            </tr>
            <tr valign="top">
              <th scope="row">Logotipo opcional</th>
              <td><input type="text" name="participacion_destacado_logo" size="40" value="<?php echo get_option('participacion_destacado_logo'); ?>" />
              <p class="description">Pega aquí la URL de la imagen.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Texto del destacado</th>
              <td><textarea name="participacion_destacado_texto" cols="37" rows="10"><?php echo get_option('participacion_destacado_texto'); ?></textarea>
              <p class="description">Puedes usar &lt;br&gt;&lt;br&gt; para separar parrafos.</p></td>
            </tr>
            <tr valign="top">
              <th scope="row">Contenido multimedia</th>
              <td><textarea name="participacion_destacado_media" cols="37" rows="10"><?php echo get_option('participacion_destacado_media'); ?></textarea>
              <p class="description">Pega aquí el código de YouTube o el enlace a la imagen. <br>El contenido debe tener 600px de ancho como mínimo.</p></td>
            </tr>
            <tr valign="top">
            <th scope="row">Botón uno</th>
            <td>
            <input type="text" name="participacion_destacado_texto_boton_uno" size="40" value="<?php echo get_option('participacion_destacado_texto_boton_uno'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="participacion_destacado_enlace_boton_uno" size="40" value="<?php echo get_option('participacion_destacado_enlace_boton_uno'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botón dos</th>
            <td>
            <input type="text" name="participacion_destacado_texto_boton_dos" size="40" value="<?php echo get_option('participacion_destacado_texto_boton_dos'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="participacion_destacado_enlace_boton_dos" size="40" value="<?php echo get_option('participacion_destacado_enlace_boton_dos'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
          </table>

          <hr>

          <h2>Herramientas de participacion</h2>
          <p>Esta es la sección que muestra los enlaces a las herramientas de participación de esta delegación.</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Mostrar Herramientas</th>
              <td>
              <?php $options = get_option( "participacion_herramientas_visibilidad" ); ?>
              <input type="checkbox" name="participacion_herramientas_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección de Herramientas</span>
            </tr>
            <tr valign="top">
              <th scope="row">Columna izquierda</th>
              <td>
              <input type="text" name="participacion_herramientas_enlace_columna_izquierda" size="40" value="<?php echo get_option('participacion_herramientas_enlace_columna_izquierda'); ?>" />
              <span class="description">Enlace</span>
              <br>
              <input type="text" name="participacion_herramientas_imagen_columna_izquierda" size="40" value="<?php echo get_option('participacion_herramientas_imagen_columna_izquierda'); ?>" />
              <span class="description">Imagen</span>
            </tr>
            <tr valign="top">
              <th scope="row">Columna central</th>
              <td>
              <input type="text" name="participacion_herramientas_enlace_columna_central" size="40" value="<?php echo get_option('participacion_herramientas_enlace_columna_central'); ?>" />
              <span class="description">Enlace</span>
              <br>
              <input type="text" name="participacion_herramientas_imagen_columna_central" size="40" value="<?php echo get_option('participacion_herramientas_imagen_columna_central'); ?>" />
              <span class="description">Imagen</span>
            </tr>
            <tr valign="top">
              <th scope="row">Columna derecha</th>
              <td>
              <input type="text" name="participacion_herramientas_imagen_columna_derecha" size="40" value="<?php echo get_option('participacion_herramientas_imagen_columna_derecha'); ?>" />
              <span class="description">Enlace</span>
              <br>
              <input type="text" name="participacion_herramientas_imagen_columna_derecha" size="40" value="<?php echo get_option('participacion_herramientas_imagen_columna_derecha'); ?>" />
              <span class="description">Imagen</span>
            </tr>
          </table>

          <hr>

          <h2>Callout</h2>
          <p>Esta es la sección a pie de página que sirve para insertar mensajes destacados con título, texto y enlace opcionales.</p>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Mostrar callout</th>
              <td>
              <?php $options = get_option( "participacion_callout_visibilidad" ); ?>
              <input type="checkbox" name="participacion_callout_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el callout completo</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Título del callout</th>
              <td><input type="text" name="participacion_callout_titulo" size="40" value="<?php echo get_option('participacion_callout_titulo'); ?>" /></td>
            </tr>
            <tr valign="top">
              <th scope="row">Texto del callout</th>
              <td><textarea name="participacion_callout_texto" cols="37" rows="10"><?php echo get_option('participacion_callout_texto'); ?></textarea></td>
            </tr>
            <tr valign="top">
              <th scope="row">Botón del callout</th>
              <td><input type="text" name="participacion_callout_texto_boton" size="40" value="<?php echo get_option('participacion_callout_texto_boton'); ?>" />
              <span class="description">Texto del botón</span>
              <br>
              <input type="text" name="participacion_callout_enlace_boton" size="40" value="<?php echo get_option('participacion_callout_enlace_boton'); ?>" />
              <span class="description">Enlace del botón</span>
              <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
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