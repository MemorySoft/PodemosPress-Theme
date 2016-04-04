<?php
/**
 *	PÁGINA DE INICIO
 * 	----------------
 */
add_action('admin_menu', 'CreaMenuInicio');
add_action('admin_init', 'RegistraOpcionesInicio');

function CreaMenuInicio() {
  add_submenu_page(
    "configuracion-global",
  	__("Página de inicio"), 
  	__("Página de inicio"), 
  	"manage_options", 
  	"home", 
  	"PaginaInicio"
  	);
}

function RegistraOpcionesInicio() {
  
  add_option("home_breadcrumb_visibilidad","","","yes");
  add_option("home_carrusel_visibilidad","","","yes");
  add_option("home_destacado_visibilidad","","","yes");

  add_option("home_portales_visibilidad","","","yes");
  add_option("home_portales_titulo_izquierda","","","yes");
  add_option("home_portales_texto_izquierda","","","yes");
  add_option("home_portales_texto_boton_izquierda","","","yes");
  add_option("home_portales_enlace_boton_izquierda","","","yes");
  add_option("home_portales_titulo_derecha","","","yes");
  add_option("home_portales_texto_derecha","","","yes");
  add_option("home_portales_texto_boton_derecha","","","yes");
  add_option("home_portales_enlace_boton_derecha","","","yes");

  add_option("home_videos_visibilidad","","","yes");
  add_option("home_video_uno","","","yes");
  add_option("home_video_dos","","","yes");
  add_option("home_video_tres","","","yes");

  add_option("home_colaboracion_visibilidad","","","yes");
  add_option("home_colaboracion_titulo_uno","","","yes");
  add_option("home_colaboracion_texto_uno","","","yes");
  add_option("home_colaboracion_enlace_uno","","","yes");
  add_option("home_colaboracion_titulo_dos","","","yes");
  add_option("home_colaboracion_texto_dos","","","yes");
  add_option("home_colaboracion_enlace_dos","","","yes");
  add_option("home_colaboracion_titulo_tres","","","yes");
  add_option("home_colaboracion_texto_tres","","","yes");
  add_option("home_colaboracion_enlace_tres","","","yes");
  add_option("home_colaboracion_titulo_cuatro","","","yes");
  add_option("home_colaboracion_texto_cuatro","","","yes");
  add_option("home_colaboracion_enlace_cuatro","","","yes");


  register_setting("opciones_home", "home_breadcrumb_visibilidad");
  register_setting("opciones_home", "home_carrusel_visibilidad");
  register_setting("opciones_home", "home_destacado_visibilidad");

  register_setting("opciones_home", "home_portales_visibilidad");
  register_setting("opciones_home", "home_portales_titulo_izquierda");
  register_setting("opciones_home", "home_portales_texto_izquierda");
  register_setting("opciones_home", "home_portales_texto_boton_izquierda");
  register_setting("opciones_home", "home_portales_enlace_boton_izquierda");
  register_setting("opciones_home", "home_portales_titulo_derecha");
  register_setting("opciones_home", "home_portales_texto_derecha");
  register_setting("opciones_home", "home_portales_texto_boton_derecha");
  register_setting("opciones_home", "home_portales_enlace_boton_derecha");

  register_setting("opciones_home", "home_videos_visibilidad");
  register_setting("opciones_home", "home_video_uno");
  register_setting("opciones_home", "home_video_dos");
  register_setting("opciones_home", "home_video_tres");

  register_setting("opciones_home", "home_colaboracion_visibilidad");
  register_setting("opciones_home", "home_colaboracion_titulo_uno");
  register_setting("opciones_home", "home_colaboracion_texto_uno");
  register_setting("opciones_home", "home_colaboracion_enlace_uno");
  register_setting("opciones_home", "home_colaboracion_titulo_dos");
  register_setting("opciones_home", "home_colaboracion_texto_dos");
  register_setting("opciones_home", "home_colaboracion_enlace_dos");
  register_setting("opciones_home", "home_colaboracion_titulo_tres");
  register_setting("opciones_home", "home_colaboracion_texto_tres");
  register_setting("opciones_home", "home_colaboracion_enlace_tres");
  register_setting("opciones_home", "home_colaboracion_titulo_cuatro");
  register_setting("opciones_home", "home_colaboracion_texto_cuatro");
  register_setting("opciones_home", "home_colaboracion_enlace_cuatro");

  register_setting("opciones_home", "home_callout_visibilidad");
  register_setting("opciones_home", "home_callout_titulo");
  register_setting("opciones_home", "home_callout_texto");
  register_setting("opciones_home", "home_callout_texto_boton");
  register_setting("opciones_home", "home_callout_enlace_boton");
}

function PaginaInicio() {
  if (!current_user_can('manage_options'))
      wp_die(__("No tienes acceso a esta página."));

  ?>

  <div class="wrap">
    <h1><span class="dashicons dashicons-admin-home" style="font-size: 2rem; margin-right: 1rem;"></span> Página de Inicio <small>- Opciones de configuración</small></h1>
    <hr>

    <form method="post" action="options.php">
      <?php settings_fields('opciones_home'); ?>

      <h2>Breadcrumb</h2>
      <p>Este es el navegador que te muestra la ruta según la pagina que estás.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar breadcrumb</th>
          <td>
          <?php $options = get_option( "home_breadcrumb_visibilidad" ); ?>
          <input type="checkbox" name="home_breadcrumb_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el bread crumb en portada</span>
        </tr>
      </table>

      <hr>

      <h2>Carrusel de portada</h2>
      <p>Esta es la sección donde aparecen los post que tienen la categoria "Portada".</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar carrusel</th>
          <td>
          <?php $options = get_option( "home_carrusel_visibilidad" ); ?>
          <input type="checkbox" name="home_carrusel_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el carrusel</span>
        </tr>
      </table>

      <hr>

      <h2>Campaña destacada</h2>
      <p>Esta es la sección donde aparece la campaña destacada de portada. Para añadir contenido debes crear un post en "Contenido destacado".</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar campaña</th>
          <td>
          <?php $options = get_option( "home_destacado_visibilidad" ); ?>
          <input type="checkbox" name="home_destacado_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la campaña</span>
        </tr>
      </table>

      <hr>

			<h2>Portales</h2>
      <p>Esta es la sección que da acceso a los portales de transparencia y participación, pero puede tener otros valores si lo consideras necesario.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar Portales</th>
          <td>
          <?php $options = get_option( "home_portales_visibilidad" ); ?>
          <input type="checkbox" name="home_portales_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar los Portales</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título de la columna izquierda</th>
          <td><input type="text" name="home_portales_titulo_izquierda" size="40" value="<?php echo get_option('portales_titulo_izquierda'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Texto de la columna izquierda</th>
          <td><textarea name="home_portales_texto_izquierda" cols="37" rows="10"><?php echo get_option('portales_texto_izquierda'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Botón izquierdo</th>
          <td><input type="text" name="home_portales_texto_boton_izquierda" size="40" value="<?php echo get_option('portales_texto_boton_izquierda'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="home_portales_enlace_boton_izquierda" size="40" value="<?php echo get_option('portales_enlace_boton_izquierda'); ?>" />
          <span class="description">Enlace del botón</span></td>
        </tr>
      </table>
      <hr>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título de la columna derecha</th>
          <td><input type="text" name="home_portales_titulo_derecha" size="40" value="<?php echo get_option('portales_titulo_derecha'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Texto de la columna derecha</th>
          <td><textarea name="home_portales_texto_derecha" cols="37" rows="10"><?php echo get_option('portales_texto_derecha'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Botón derecho</th>
          <td><input type="text" name="home_portales_texto_boton_derecha" size="40" value="<?php echo get_option('portales_texto_boton_derecha'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="home_portales_enlace_boton_derecha" size="40" value="<?php echo get_option('portales_enlace_boton_derecha'); ?>" />
          <span class="description">Enlace del botón</span></td>
        </tr>
      </table>

      <hr>

      <h2>Videos destacados</h2>
      <p>Pega aquí el código de YouTube de los videos que quieres que salgan en portada.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar Videos</th>
          <td>
          <?php $options = get_option( "home_videos_visibilidad" ); ?>
          <input type="checkbox" name="home_videos_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar los videos</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Video 2</th>
          <td><textarea name="home_video_uno" cols="37" rows="5"><?php echo get_option('home_video_uno'); ?></textarea>
          <p class="description">Pega aquí el código de YouTube</p></td>
        </tr>
        <tr valign="top">
          <th scope="row">Video 2</th>
          <td><textarea name="home_video_dos" cols="37" rows="5"><?php echo get_option('home_video_dos'); ?></textarea>
          <p class="description">Pega aquí el código de YouTube</p></td>
        </tr>
        <tr valign="top">
          <th scope="row">Video 3</th>
          <td><textarea name="home_video_tres" cols="37" rows="5"><?php echo get_option('home_video_tres'); ?></textarea>
          <p class="description">Pega aquí el código de YouTube</p></td>
        </tr>
      </table>

      <hr>

      <h2>Colaboraciones</h2>
      <p>Esta es la sección que contiene los enlaces para las colaboraciones económicas.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar Colaboración</th>
          <td>
          <?php $options = get_option( "home_colaboracion_visibilidad" ); ?>
          <input type="checkbox" name="home_colaboracion_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar Colaboraciones</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Bloque 1</th>
          <td><input type="text" name="home_colaboracion_titulo_uno" size="40" value="<?php echo get_option('home_colaboracion_titulo_uno'); ?>" />
          <span class="description">Título</span>
          <br>
          <input type="text" name="home_colaboracion_texto_uno" size="40" value="<?php echo get_option('home_colaboracion_texto_uno'); ?>" />
          <span class="description">Texto</span>
          <br>
          <input type="text" name="home_colaboracion_enlace_uno" size="40" value="<?php echo get_option('home_colaboracion_enlace_uno'); ?>" />
          <span class="description">Enlace</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Bloque 2</th>
          <td><input type="text" name="home_colaboracion_titulo_dos" size="40" value="<?php echo get_option('home_colaboracion_titulo_dos'); ?>" />
          <span class="description">Título</span>
          <br>
          <input type="text" name="home_colaboracion_texto_dos" size="40" value="<?php echo get_option('home_colaboracion_texto_dos'); ?>" />
          <span class="description">Texto</span>
          <br>
          <input type="text" name="home_colaboracion_enlace_dos" size="40" value="<?php echo get_option('home_colaboracion_enlace_dos'); ?>" />
          <span class="description">Enlace</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Bloque 3</th>
          <td><input type="text" name="home_colaboracion_titulo_tres" size="40" value="<?php echo get_option('home_colaboracion_titulo_tres'); ?>" />
          <span class="description">Título</span>
          <br>
          <input type="text" name="home_colaboracion_texto_tres" size="40" value="<?php echo get_option('home_colaboracion_texto_tres'); ?>" />
          <span class="description">Texto</span>
          <br>
          <input type="text" name="home_colaboracion_enlace_tres" size="40" value="<?php echo get_option('home_colaboracion_enlace_tres'); ?>" />
          <span class="description">Enlace</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Bloque 4</th>
          <td><input type="text" name="home_colaboracion_titulo_cuatro" size="40" value="<?php echo get_option('home_colaboracion_titulo_cuatro'); ?>" />
          <span class="description">Título</span>
          <br>
          <input type="text" name="home_colaboracion_texto_cuatro" size="40" value="<?php echo get_option('home_colaboracion_texto_cuatro'); ?>" />
          <span class="description">Texto</span>
          <br>
          <input type="text" name="home_colaboracion_enlace_cuatro" size="40" value="<?php echo get_option('home_colaboracion_enlace_cuatro'); ?>" />
          <span class="description">Enlace</span>
        </tr>
      </table>

      <hr>

      <h2>Callout</h2>
      <p>Esta es la sección a pie de página que sirve para insertar mensajes destacados con título, texto y enlace opcionales.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar callout</th>
          <td>
          <?php $options = get_option( "home_callout_visibilidad" ); ?>
          <input type="checkbox" name="home_callout_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el callout completo</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título del callout</th>
          <td><input type="text" name="home_callout_titulo" size="40" value="<?php echo get_option('home_callout_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Texto del callout</th>
          <td><textarea name="home_callout_texto" cols="37" rows="10"><?php echo get_option('home_callout_texto'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Botón del callout</th>
          <td><input type="text" name="home_callout_texto_boton" size="40" value="<?php echo get_option('home_callout_texto_boton'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="home_callout_enlace_boton" size="40" value="<?php echo get_option('home_callout_enlace_boton'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
      </table>

      <p class="submit">
      	<input name="home_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>