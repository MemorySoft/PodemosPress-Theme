<?php
/**
 *	PÁGINA DE ORGANIZACIÓN
 * 	----------------------
 */
add_action('admin_menu', 'CreaMenuOrganizacion');
add_action('admin_init', 'RegistraOpcionesOrganizacion');

function CreaMenuOrganizacion() {
  add_submenu_page(
    'configuracion',
  	__("Organización"), 
  	__("Organización"), 
  	"manage_options", 
  	"organizacion", 
  	"PaginaOrganizacion"
  	);
}

function RegistraOpcionesOrganizacion() {

  add_option("organizacion_intro_visibilidad","","","yes");
  add_option("organizacion_intro_texto","","","yes");
  add_option("organizacion_intro_media","","","yes");

  add_option("organizacion_asamblea_descripcion","","","yes");
  add_option("organizacion_asamblea_texto_documento_politico","","","yes");
  add_option("organizacion_asamblea_enlace_documento_politico","","","yes");
  add_option("organizacion_asamblea_texto_documento_organizativo","","","yes");
  add_option("organizacion_asamblea_enlace_documento_organizativo","","","yes");
  add_option("organizacion_asamblea_texto_documento_codigo_etico","","","yes");
  add_option("organizacion_asamblea_enlace_documento_codigo_etico","","","yes");

  add_option("organizacion_secretaria_descripcion","","","yes");
  add_option("organizacion_secretaria_texto_boton","","","yes");
  add_option("organizacion_secretaria_enlace_boton","","","yes");
  add_option("organizacion_consejo_descripcion","","","yes"); 
  add_option("organizacion_consejo_texto_boton","","","yes");
  add_option("organizacion_consejo_enlace_boton","","","yes");
  add_option("organizacion_comision_descripcion","","","yes");
  add_option("organizacion_comision_texto_boton","","","yes");
  add_option("organizacion_comision_enlace_boton","","","yes");

  add_option("organizacion_areas_visibilidad","","","yes");

  add_option("organizacion_circulos_visibilidad","","","yes");
  add_option("organizacion_circulos_texto","","","yes");
  add_option("organizacion_circulos_media","","","yes");
  add_option("organizacion_circulos_texto_boton_derecho","","","yes");
  add_option("organizacion_circulos_enlace_boton_derecho","","","yes");
  add_option("organizacion_circulos_texto_boton_izquierdo","","","yes");
  add_option("organizacion_circulos_enlace_boton_izquierdo","","","yes");

  add_option("organizacion_callout_visibilidad","","","yes");
  add_option("organizacion_callout_titulo","","","yes");
  add_option("organizacion_callout_texto","","","yes");
  add_option("organizacion_callout_texto_boton","","","yes");
  add_option("organizacion_callout_enlace_boton","","","yes");
  

  register_setting("opciones_organizacion", "organizacion_intro_visibilidad");
  register_setting("opciones_organizacion", "organizacion_intro_texto");
  register_setting("opciones_organizacion", "organizacion_intro_media");

  register_setting("opciones_organizacion", "organizacion_asamblea_descripcion");
  register_setting("opciones_organizacion", "organizacion_asamblea_texto_documento_politico");
  register_setting("opciones_organizacion", "organizacion_asamblea_enlace_documento_politico");
  register_setting("opciones_organizacion", "organizacion_asamblea_texto_documento_organizativo");
  register_setting("opciones_organizacion", "organizacion_asamblea_enlace_documento_organizativo");
  register_setting("opciones_organizacion", "organizacion_asamblea_texto_documento_codigo_etico");
  register_setting("opciones_organizacion", "organizacion_asamblea_enlace_documento_codigo_etico");

  register_setting("opciones_organizacion", "organizacion_secretaria_descripcion");
  register_setting("opciones_organizacion", "organizacion_secretaria_texto_boton");
  register_setting("opciones_organizacion", "organizacion_secretaria_enlace_boton");
  register_setting("opciones_organizacion", "organizacion_consejo_descripcion"); 
  register_setting("opciones_organizacion", "organizacion_consejo_texto_boton");
  register_setting("opciones_organizacion", "organizacion_consejo_enlace_boton");
  register_setting("opciones_organizacion", "organizacion_comision_descripcion");
  register_setting("opciones_organizacion", "organizacion_comision_texto_boton");
  register_setting("opciones_organizacion", "organizacion_comision_enlace_boton");

  register_setting("opciones_organizacion","organizacion_areas_visibilidad");

  register_setting("opciones_organizacion", "organizacion_circulos_visibilidad");
  register_setting("opciones_organizacion", "organizacion_circulos_texto");
  register_setting("opciones_organizacion", "organizacion_circulos_media");
  register_setting("opciones_organizacion", "organizacion_circulos_texto_boton_derecho");
  register_setting("opciones_organizacion", "organizacion_circulos_enlace_boton_derecho");
  register_setting("opciones_organizacion", "organizacion_circulos_texto_boton_izquierdo");
  register_setting("opciones_organizacion", "organizacion_circulos_enlace_boton_izquierdo");

  register_setting("opciones_organizacion", "organizacion_callout_visibilidad");
  register_setting("opciones_organizacion", "organizacion_callout_titulo");
  register_setting("opciones_organizacion", "organizacion_callout_texto");
  register_setting("opciones_organizacion", "organizacion_callout_texto_boton");
  register_setting("opciones_organizacion", "organizacion_callout_enlace_boton");   
}

function PaginaOrganizacion() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?>
    <div class="wrap">
      <h1><span class="dashicons dashicons-networking" style="font-size: 2rem; margin-right: 1rem;"></span> Pagina de Organización <small>- Opciones de configuración</small></h1>
      
      <hr>

      <?php settings_errors(); ?>

      <form method="post" action="options.php">
        <?php settings_fields('opciones_organizacion'); ?>

        <h2>Introducción</h2>
        <p>Esta es la sección arriba de la página que muestra un video y un texto introductorio.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Mostrar Intro</th>
            <td>
            <?php $options = get_option( "organizacion_intro_visibilidad" ); ?>
            <input type="checkbox" name="organizacion_intro_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección Intro</span>
          </tr>
        </table>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Texto de introducción</th>
            <td><textarea name="organizacion_intro_texto" cols="37" rows="10"><?php echo get_option('organizacion_intro_texto'); ?></textarea>
            <p class="description">Puedes usar &lt;br&gt;&lt;br&gt; para separar parrafos.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imagen o video</th>
            <td><textarea name="organizacion_intro_media" cols="37" rows="10"><?php echo get_option('organizacion_intro_media'); ?></textarea>
            <p class="description">Pega aquí el código de YouTube o el enlace a la imagen. <br>El contenido debe tener 600px de ancho como mínimo.</p></td>
          </tr>
        </table>

        <hr>

				<h2>Asamblea Ciudadana</h2>
        <p>Esta es una sección fija que describe la Asamblea ciudadana y muestra los enlaces a sus documentos.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Descripción <p class="description">Si dejas vacio este campo, aparecerá un texto genérico.</p></th>
            <td><textarea name="organizacion_asamblea_descripcion" cols="37" rows="10"><?php echo get_option('organizacion_asamblea_descripcion'); ?></textarea>
            <p class="description">Puedes usar &lt;br&gt;&lt;br&gt; para separar parrafos.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Documento político <p class="description">Botón en la sección Asamblea</p></th>
            <td>
            <input type="text" name="organizacion_asamblea_texto_documento_politico" size="40" value="<?php echo get_option('organizacion_asamblea_texto_documento_politico'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_asamblea_enlace_documento_politico" size="40" value="<?php echo get_option('organizacion_asamblea_enlace_documento_politico'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Documento organizativo <p class="description">Botón en la sección Asamblea</p></th>
            <td>
            <input type="text" name="organizacion_asamblea_texto_documento_organizativo" size="40" value="<?php echo get_option('organizacion_asamblea_texto_documento_organizativo'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_asamblea_enlace_documento_organizativo" size="40" value="<?php echo get_option('organizacion_asamblea_enlace_documento_organizativo'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Código ético <p class="description">Botón en la sección Asamblea</p></th>
            <td>
            <input type="text" name="organizacion_asamblea_texto_documento_codigo_etico" size="40" value="<?php echo get_option('organizacion_asamblea_texto_documento_codigo_etico'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_asamblea_enlace_documento_codigo_etico" size="40" value="<?php echo get_option('organizacion_asamblea_enlace_documento_codigo_etico'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
        </table>

        <hr>

        <h2>Órganos internos</h2>
        <p>Esta sección también es fija y contiene la información sobre los órganos internos que aparece bajo la sección Asamblea Ciudadana.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Secretaría General   <p class="description">Si dejas vacio este campo, aparecerá un texto genérico.</p></th>
            <td><textarea name="organizacion_secretaria_descripcion" cols="37" rows="10"><?php echo get_option('organizacion_secretaria_descripcion'); ?></textarea>
          </tr>
          <tr valign="top">
            <th scope="row">Botón SG</th>
            <td>
            <input type="text" name="organizacion_secretaria_texto_boton" size="40" value="<?php echo get_option('organizacion_secretaria_texto_boton'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_secretaria_enlace_boton" size="40" value="<?php echo get_option('organizacion_secretaria_enlace_boton'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
        </table>
        <hr>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Consejo Ciudadano   <p class="description">Si dejas vacio este campo, aparecerá un texto genérico.</p></th>
            <td><textarea name="organizacion_consejo_descripcion" cols="37" rows="10"><?php echo get_option('organizacion_consejo_descripcion'); ?></textarea>
          </tr>
          <tr valign="top">
            <th scope="row">Botón CC</th>
            <td>
            <input type="text" name="organizacion_consejo_texto_boton" size="40" value="<?php echo get_option('organizacion_consejo_texto_boton'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_consejo_enlace_boton" size="40" value="<?php echo get_option('organizacion_consejo_enlace_boton'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
        </table>
        <hr>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Comisión de Garantias  <p class="description">Si dejas vacio este campo, aparecerá un texto genérico.</p></th>
            <td><textarea name="organizacion_comision_descripcion" cols="37" rows="10"><?php echo get_option('organizacion_comision_descripcion'); ?></textarea><br>
          </tr>
          <tr valign="top">
            <th scope="row">Botón CG</th>
            <td>
            <input type="text" name="organizacion_comision_texto_boton" size="40" value="<?php echo get_option('organizacion_comision_texto_boton'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_comision_enlace_boton" size="40" value="<?php echo get_option('organizacion_comision_enlace_boton'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
        </table>

        <hr>

        <h2>Áreas</h2>
        <p>Esta es la sección donde aparecen las tarjetas de las distintas áreas de trabajo del Consejo Ciudadano de esta delegación.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Mostrar Áreas</th>
            <td>
            <?php $options = get_option( "organizacion_areas_visibilidad" ); ?>
            <input type="checkbox" name="organizacion_areas_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección de Círculos</span>
          </tr>
        </table>

        <hr>

        <h2>Círculos</h2>
        <p>Esta es la sección que contiene información relativa a los círculos.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Mostrar Círculos</th>
            <td>
            <?php $options = get_option( "organizacion_circulos_visibilidad" ); ?>
            <input type="checkbox" name="organizacion_circulos_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección de Círculos</span>
          </tr>
        </table>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Texto de introducción</th>
            <td><textarea name="organizacion_circulos_texto" cols="37" rows="10"><?php echo get_option('organizacion_circulos_texto'); ?></textarea>
            <p class="description">Puedes usar &lt;br&gt;&lt;br&gt; para separar parrafos.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Mapa</th>
            <td><textarea name="organizacion_circulos_media" cols="37" rows="10"><?php echo get_option('organizacion_circulos_media'); ?></textarea>
            <p class="description">Pega aquí el código de Google Maps o Open Street Map o una imagen.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botón derecho</th>
            <td>
            <input type="text" name="organizacion_circulos_texto_boton_derecho" size="40" value="<?php echo get_option('organizacion_circulos_texto_boton_derecho'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_circulos_enlace_boton_derecho" size="40" value="<?php echo get_option('organizacion_circulos_enlace_boton_derecho'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botón izquierdo</th>
            <td>
            <input type="text" name="organizacion_circulos_texto_boton_izquierdo" size="40" value="<?php echo get_option('organizacion_circulos_texto_boton_izquierdo'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_circulos_enlace_boton_izquierdo" size="40" value="<?php echo get_option('organizacion_circulos_enlace_boton_izquierdo'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
        </table>

        <hr>

        <h2>Callout</h2>
        <p>Esta es la sección a pie de página que sirve para insertar mensajes destacados con título, texto y enlace opcionales.</p>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Mostrar callout</th>
            <td>
            <?php $options = get_option( "organizacion_callout_visibilidad" ); ?>
            <input type="checkbox" name="organizacion_callout_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el callout completo</span>
          </tr>
        </table>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Título del callout</th>
            <td><input type="text" name="organizacion_callout_titulo" size="40" value="<?php echo get_option('organizacion_callout_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Texto del callout</th>
            <td><textarea name="organizacion_callout_texto" cols="37" rows="10"><?php echo get_option('organizacion_callout_texto'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botón del callout</th>
            <td><input type="text" name="organizacion_callout_texto_boton" size="40" value="<?php echo get_option('organizacion_callout_texto_boton'); ?>" />
            <span class="description">Texto del botón</span>
            <br>
            <input type="text" name="organizacion_callout_enlace_boton" size="40" value="<?php echo get_option('organizacion_callout_enlace_boton'); ?>" />
            <span class="description">Enlace del botón</span>
            <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
          </tr>
        </table>

        <p class="submit">
        	<input name="organizacion_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
        </p>

      </form>
    </div>
    <?php
}
?>