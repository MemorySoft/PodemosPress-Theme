<?php
/**
 *	PÁGINA DE PROGRAMA
 * 	------------------
 */
add_action('admin_menu', 'CreaMenuPrograma');
add_action('admin_init', 'RegistraOpcionesPrograma');

function CreaMenuPrograma() {
  add_submenu_page(
    "configuracion",
  	__("Programa"), 
  	__("Programa"), 
  	"manage_options", 
  	"programa", 
  	"PaginaPrograma"
  	);
}

function RegistraOpcionesPrograma() {

  add_option("programa_bloque_a_visibilidad","","","yes");
  add_option("programa_bloque_a_titulo","","","yes");
  add_option("programa_bloque_a_texto_boton_uno","","","yes");
  add_option("programa_bloque_a_enlace_boton_uno","","","yes");
  add_option("programa_bloque_a_texto_boton_dos","","","yes");
  add_option("programa_bloque_a_enlace_boton_dos","","","yes");

  add_option("programa_bloque_b_visibilidad","","","yes");
  add_option("programa_bloque_b_titulo","","","yes");
  add_option("programa_bloque_b_texto_boton_uno","","","yes");
  add_option("programa_bloque_b_enlace_boton_uno","","","yes");
  add_option("programa_bloque_b_texto_boton_dos","","","yes");
  add_option("programa_bloque_b_enlace_boton_dos","","","yes");

  add_option("programa_bloque_c_visibilidad","","","yes");
  add_option("programa_bloque_c_titulo","","","yes");
  add_option("programa_bloque_c_texto_boton_uno","","","yes");
  add_option("programa_bloque_c_enlace_boton_uno","","","yes");
  add_option("programa_bloque_c_texto_boton_dos","","","yes");
  add_option("programa_bloque_c_enlace_boton_dos","","","yes");

  add_option("programa_bloque_d_visibilidad","","","yes");
  add_option("programa_bloque_d_titulo","","","yes");
  add_option("programa_bloque_d_texto_boton_uno","","","yes");
  add_option("programa_bloque_d_enlace_boton_uno","","","yes");
  add_option("programa_bloque_d_texto_boton_dos","","","yes");
  add_option("programa_bloque_d_enlace_boton_dos","","","yes");

  add_option("programa_bloque_e_visibilidad","","","yes");
  add_option("programa_bloque_e_titulo","","","yes");
  add_option("programa_bloque_e_texto_boton_uno","","","yes");
  add_option("programa_bloque_e_enlace_boton_uno","","","yes");
  add_option("programa_bloque_e_texto_boton_dos","","","yes");
  add_option("programa_bloque_e_enlace_boton_dos","","","yes");

  add_option("programa_callout_visibilidad","","","yes");
  add_option("programa_callout_titulo","","","yes");
  add_option("programa_callout_texto","","","yes");
  add_option("programa_callout_texto_boton","","","yes");
  add_option("programa_callout_enlace_boton","","","yes");


  register_setting("opciones_programa", "programa_bloque_a_visibilidad");
  register_setting("opciones_programa", "programa_bloque_a_titulo");
  register_setting("opciones_programa", "programa_bloque_a_texto");
  register_setting("opciones_programa", "programa_bloque_a_texto_boton_uno");
  register_setting("opciones_programa", "programa_bloque_a_enlace_boton_uno");
  register_setting("opciones_programa", "programa_bloque_a_texto_boton_dos");
  register_setting("opciones_programa", "programa_bloque_a_enlace_boton_dos");

  register_setting("opciones_programa", "programa_bloque_b_visibilidad");
  register_setting("opciones_programa", "programa_bloque_b_titulo");
  register_setting("opciones_programa", "programa_bloque_b_texto");
  register_setting("opciones_programa", "programa_bloque_b_texto_boton_uno");
  register_setting("opciones_programa", "programa_bloque_b_enlace_boton_uno");
  register_setting("opciones_programa", "programa_bloque_b_texto_boton_dos");
  register_setting("opciones_programa", "programa_bloque_b_enlace_boton_dos");

  register_setting("opciones_programa", "programa_bloque_c_visibilidad");
  register_setting("opciones_programa", "programa_bloque_c_titulo");
  register_setting("opciones_programa", "programa_bloque_c_texto");
  register_setting("opciones_programa", "programa_bloque_c_texto_boton_uno");
  register_setting("opciones_programa", "programa_bloque_c_enlace_boton_uno");
  register_setting("opciones_programa", "programa_bloque_c_texto_boton_dos");
  register_setting("opciones_programa", "programa_bloque_c_enlace_boton_dos");

  register_setting("opciones_programa", "programa_bloque_d_visibilidad");
  register_setting("opciones_programa", "programa_bloque_d_titulo");
  register_setting("opciones_programa", "programa_bloque_d_texto");
  register_setting("opciones_programa", "programa_bloque_d_texto_boton_uno");
  register_setting("opciones_programa", "programa_bloque_d_enlace_boton_uno");
  register_setting("opciones_programa", "programa_bloque_d_texto_boton_dos");
  register_setting("opciones_programa", "programa_bloque_d_enlace_boton_dos");

  register_setting("opciones_programa", "programa_bloque_e_visibilidad");
  register_setting("opciones_programa", "programa_bloque_e_titulo");
  register_setting("opciones_programa", "programa_bloque_e_texto");
  register_setting("opciones_programa", "programa_bloque_e_texto_boton_uno");
  register_setting("opciones_programa", "programa_bloque_e_enlace_boton_uno");
  register_setting("opciones_programa", "programa_bloque_e_texto_boton_dos");
  register_setting("opciones_programa", "programa_bloque_e_enlace_boton_dos");

  register_setting("opciones_programa", "programa_callout_visibilidad");
  register_setting("opciones_programa", "programa_callout_titulo");
  register_setting("opciones_programa", "programa_callout_texto");
  register_setting("opciones_programa", "programa_callout_texto_boton");
  register_setting("opciones_programa", "programa_callout_enlace_boton");
}
?>

<?php
function PaginaPrograma() {
  if (!current_user_can('manage_options'))
      wp_die(__("No tienes acceso a esta página."));
  ?>
  <div class="wrap">
    <h1><span class="dashicons dashicons-book" style="font-size: 2rem; margin-right: 1rem;"></span> Página de Programa <small>- Opciones de configuración</small></h1>
    
    <hr>

    <?php settings_errors(); ?>

    <form method="post" action="options.php">
      <?php settings_fields('opciones_programa'); ?>

      <h2>Bloques</h2>
      <p>Esta es la sección arriba de la página que contiene cinco bloques para insertar mensajes con título y enlaces a documentos descargables. Puedes ocultar los que no necesites y recuerda que los botones sin texto o sin enlace no se muestran.</p>
      <p>Si quieres insertar enlaces que no apunten a un documento debes usar widgets en vez de estos bloques.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar bloque A</th>
          <td>
          <?php $options = get_option( "programa_bloque_a_visibilidad" ); ?>
          <input type="checkbox" name="programa_bloque_a_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el bloque A</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título</th>
          <td><input type="text" name="programa_bloque_a_titulo" size="40" value="<?php echo get_option('programa_bloque_a_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Primer botón</th>
          <td><input type="text" name="programa_bloque_a_texto_boton_uno" size="40" value="<?php echo get_option('programa_bloque_a_texto_boton_uno'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_a_enlace_boton_uno" size="40" value="<?php echo get_option('programa_bloque_a_enlace_boton_uno'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
        <tr valign="top">
          <th scope="row">Segundo botón</th>
          <td><input type="text" name="programa_bloque_a_texto_boton_dos" size="40" value="<?php echo get_option('programa_bloque_a_texto_boton_dos'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_a_enlace_boton_dos" size="40" value="<?php echo get_option('programa_bloque_a_enlace_boton_dos'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
      </table>

      <hr>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar bloque B</th>
          <td>
          <?php $options = get_option( "programa_bloque_b_visibilidad" ); ?>
          <input type="checkbox" name="programa_bloque_b_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el bloque B</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título</th>
          <td><input type="text" name="programa_bloque_b_titulo" size="40" value="<?php echo get_option('programa_bloque_b_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Primer botón</th>
          <td><input type="text" name="programa_bloque_b_texto_boton_uno" size="40" value="<?php echo get_option('programa_bloque_b_texto_boton_uno'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_b_enlace_boton_uno" size="40" value="<?php echo get_option('programa_bloque_b_enlace_boton_uno'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
        <tr valign="top">
          <th scope="row">Segundo botón</th>
          <td><input type="text" name="programa_bloque_b_texto_boton_dos" size="40" value="<?php echo get_option('programa_bloque_b_texto_boton_dos'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_b_enlace_boton_dos" size="40" value="<?php echo get_option('programa_bloque_b_enlace_boton_dos'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
      </table>

      <hr>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar bloque C</th>
          <td>
          <?php $options = get_option( "programa_bloque_c_visibilidad" ); ?>
          <input type="checkbox" name="programa_bloque_c_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el bloque C</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título</th>
          <td><input type="text" name="programa_bloque_c_titulo" size="40" value="<?php echo get_option('programa_bloque_c_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Primer botón</th>
          <td><input type="text" name="programa_bloque_c_texto_boton_uno" size="40" value="<?php echo get_option('programa_bloque_c_texto_boton_uno'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_c_enlace_boton_uno" size="40" value="<?php echo get_option('programa_bloque_c_enlace_boton_uno'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
        <tr valign="top">
          <th scope="row">Segundo botón</th>
          <td><input type="text" name="programa_bloque_c_texto_boton_dos" size="40" value="<?php echo get_option('programa_bloque_c_texto_boton_dos'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_c_enlace_boton_dos" size="40" value="<?php echo get_option('programa_bloque_c_enlace_boton_dos'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
      </table>

      <hr>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar bloque D</th>
          <td>
          <?php $options = get_option( "programa_bloque_d_visibilidad" ); ?>
          <input type="checkbox" name="programa_bloque_d_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el bloque D</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título</th>
          <td><input type="text" name="programa_bloque_d_titulo" size="40" value="<?php echo get_option('programa_bloque_d_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Primer botón</th>
          <td><input type="text" name="programa_bloque_d_texto_boton_uno" size="40" value="<?php echo get_option('programa_bloque_d_texto_boton_uno'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_d_enlace_boton_uno" size="40" value="<?php echo get_option('programa_bloque_d_enlace_boton_uno'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
        <tr valign="top">
          <th scope="row">Segundo botón</th>
          <td><input type="text" name="programa_bloque_d_texto_boton_dos" size="40" value="<?php echo get_option('programa_bloque_d_texto_boton_dos'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_d_enlace_boton_dos" size="40" value="<?php echo get_option('programa_bloque_d_enlace_boton_dos'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
      </table>

      <hr>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar bloque E</th>
          <td>
          <?php $options = get_option( "programa_bloque_e_visibilidad" ); ?>
          <input type="checkbox" name="programa_bloque_e_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el bloque E</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título</th>
          <td><input type="text" name="programa_bloque_e_titulo" size="40" value="<?php echo get_option('programa_bloque_e_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Primer botón</th>
          <td><input type="text" name="programa_bloque_e_texto_boton_uno" size="40" value="<?php echo get_option('programa_bloque_e_texto_boton_uno'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_e_enlace_boton_uno" size="40" value="<?php echo get_option('programa_bloque_e_enlace_boton_uno'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
        <tr valign="top">
          <th scope="row">Segundo botón</th>
          <td><input type="text" name="programa_bloque_e_texto_boton_dos" size="40" value="<?php echo get_option('programa_bloque_e_texto_boton_dos'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_bloque_e_enlace_boton_dos" size="40" value="<?php echo get_option('programa_bloque_e_enlace_boton_dos'); ?>" />
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
          <?php $options = get_option( "programa_callout_visibilidad" ); ?>
          <input type="checkbox" name="programa_callout_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el callout completo</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título del callout</th>
          <td><input type="text" name="programa_callout_titulo" size="40" value="<?php echo get_option('programa_callout_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Texto del callout</th>
          <td><textarea name="programa_callout_texto" cols="37" rows="10"><?php echo get_option('programa_callout_texto'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Botón del callout</th>
          <td><input type="text" name="programa_callout_texto_boton" size="40" value="<?php echo get_option('programa_callout_texto_boton'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="programa_callout_enlace_boton" size="40" value="<?php echo get_option('programa_callout_enlace_boton'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
      </table>

      <p class="submit">
      	<input name="programa_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>