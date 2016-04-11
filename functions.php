<?php
/**
*		FUNCIONES DE PODEMOSPRESS
*  	----------------------------
* 	Configuración básica para el funcionamiento 
* 	de PodemosPress que incluye soporte y registro 
* 	para algunas de las funciones de WordPress y funciones
* 	extra personalizadas:
*
* 	- Soporte para menús
* 	- Soporte para traducciones
* 	- Soporte imágenes destacadas
* 	- Soporte para post formats
* 	- Soporte para RSS
* 	- Soporte para color de fondo personalizado
* 	- Registro de sidebars para widgets
* 	- Páginas de opciones
* 	- Lista personalizada, reescritura de URLS y exclusión de categorias del blogroll
* 	- Soporte para OpenGraph
* 	- TODO: Soporte para breadcrumbs
* 	- TODO: Soporte para logotipo personalizado 
* 	- Control de longitud de extractos de posts
* 	- Logotipo personalizado en la zona de admin
* 	- Creditos personalizados en la zona de admin
* 	- Restricción de los resultados de la búsqueda a posts
*
* 	Creado por: Hector Asencio @MemorySoft
* 	
*/

/**
* SOPORTE VITAL
**********************************************************************************************************************/
function podemospress_setup() {

	// SOPORTE PARA MENUS
	add_theme_support( 'menus' );
	register_nav_menus(array(
		'menu-principal'			=> __( 'Menú principal' ),
		'menu-secundario' 		=> __( 'Menú secundario' ),
		'menu-noticias' 			=> __( 'Menú noticias' ),
		'menu-superior' 			=> __( 'Menú superior' ),
		'menu-subdelegaciones'=> __( 'Menú subdelegaciones' ),
		'menu-inferior'				=> __( 'Menú inferior' ),
	));
	function menu_principal() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-principal',
			'container'       	=> 'nav',
			'container_class'		=> 'top-bar-menu',
			'menu_class' 				=> 'menu',
			'menu_id'         	=> 'menu-primario',
			'depth'							=> '0',
			'fallback_cb' 			=> false
		));
	}
	function menu_secundario() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-secundario',
			'menu_class' 				=> 'menu-secundario lista--simple lista--entre-lineas'
		));
	}
	function menu_noticias() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-noticias',
			'menu_class' 				=> 'menu-noticias lista--simple lista--entre-lineas'
		));
	}
	function menu_superior() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-superior',
			'menu_class' 				=> 'menu-superior menu-horizontal'
		));
	}
	function menu_subdelegaciones() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-subdelegaciones',
			'menu_class' 				=> 'menu menu-subdelegaciones'
		));
	}
	function menu_inferior() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-inferior',
			'menu_class' 				=> 'menu-inferior lista--simple menu-horizontal'
		));
	}
	
	// SOPORTE PARA TRADUCCIONES
	load_theme_textdomain( 'podemospress', get_template_directory() . '/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
	require_once( $locale_file );

	// SOPORTE PARA IMÁGENES DESTACADAS
	add_theme_support( 'post-thumbnails' );

	// SOPORTE PARA FORMATOS DE ENTRADAS
	add_theme_support( 'post-formats', array( 'audio','gallery','video'.'link','quote','image','status' ) );

	// SOPORTE PARA RSS DE LAS ENTRADAS
	add_theme_support( 'automatic-feed-links' );

	// SOPORTE PARA FONDO PERSONALIZADO
	add_theme_support( 'custom-background' );

}
add_action( 'after_setup_theme', 'podemospress_setup' );

/**
*	PÁGINAS DE OPCIONES 
**********************************************************************************************************************/ 
require_once('options/opciones-configuracion.php');
require_once('options/opciones-delegacion.php');
require_once('options/opciones-inicio.php');
require_once('options/opciones-programa.php');
require_once('options/opciones-organizacion.php');
require_once('options/opciones-miembros.php');
require_once('options/opciones-instituciones.php');
require_once('options/opciones-actualidad.php');
require_once('options/opciones-participacion.php');
require_once('options/opciones-contacto.php');

/**
* SIDEBARS
**********************************************************************************************************************/ 
require_once('includes/sidebars.php');

/**
* WIDGETS
**********************************************************************************************************************/ 
require_once('includes/destacado-widget.php');

/**
* CATEGORIAS
**********************************************************************************************************************/ 
require_once('includes/categorias.php');

/**
* SOPORTE FACEBOOK OPEN GRAPH
**********************************************************************************************************************/ 
add_action( 'wp_head', 'add_fb_open_graph_tags'	);
function add_fb_open_graph_tags() {
	if ( is_single() ) {
		global $post;
		if(get_the_post_thumbnail( $post->ID, 'thumbnail') ) {
			$thumbnail_id = get_post_thumbnail_id( $post->ID );
			$thumbnail_object = get_post( $thumbnail_id );
			$image = $thumbnail_object->guid;
		} else {	
			// Inserta aquí la URL del logo que quieres que salga al lado de tus enlaces en Facebook
			$image = ''; 
		}
		$description = get_bloginfo( 'description' );
		$description = my_excerpt( $post->post_content, $post->post_excerpt );
		$description = strip_tags( $description );
		$description = str_replace( "\"", "'", $description );
?>
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php echo $image; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="400" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:description" content="<?php echo $description ?>" />
	<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
	<!-- No olvides el ID de la app de Facebook! -->
	<meta property="fb:app_id" content="" /> 
<?php 	}
}

/**
* BREADCRUMBS
* http://wp-snippets.com/breadcrumbs-without-plugin/
**********************************************************************************************************************/ 
function breadcrumb() {
	echo '<ul class="breadcrumbs">';
	if ( !is_home() ) {
		echo '<li><a href="';
		echo get_option( 'home' );
		echo '">';
		echo 'Inicio'; 
		echo "</a></li>";
		if ( is_category() || is_single() ) {
			echo '<li>';
			the_category(' </li><li> ');
			if ( is_single() ) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif ( is_page() ) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		}
	}
	elseif ( is_tag() ) {single_tag_title();}
	elseif ( is_day() ) {echo"<li>Archivo del "; the_time('F jS, Y'); echo'</li>';} 
	elseif ( is_month() ) {echo"<li>Archivo de "; the_time( 'F, Y' ); echo'</li>';}
	elseif ( is_year() ) {echo"<li>Archivo de "; the_time( 'Y' ); echo'</li>';} 
	elseif ( is_author() ) {echo"<li>Archivo de"; echo'</li>';}
	elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) {echo "<li>Archivo de artículos"; echo'</li>';}
	elseif ( is_search() ) {echo"<li>Resultados de la busqueda"; echo'</li>';} 
	echo '</ul>';
}

/**
* CONTROLAMOS LOS EXCERPTS
**********************************************************************************************************************/
// Podemos personalizar la salida usando 
// $customLength=30; echo get_the_excerpt(); y 
// $customLength=0; entre etiquetas php
function custom_excerpt_length( $length ) {
	global $customLength;
	if( $customLength ) {
		return $customLength;
	} else {
		return 30;
	}
}
// Generamos el botón la elipsis al final de los artículos
function new_excerpt_more( $more ) {
	return ' <a class="leer-mas" href="'. get_permalink( get_the_ID() ) . '">' . __(' … ', '') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
* DASHBOARD PERSOLNALIZADO
**********************************************************************************************************************/
// Insertamos el logo del cliente en el panel de administración
function podemospress_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login.css" />';
}
add_action('login_head', 'podemospress_custom_login');
// Pie de pagina del panel de Administración
function change_footer_admin() {  
    echo '&copy;2016 PODEMOS. Todos los derechos reservados - Creado por <a href="http://memorysoft.es">Memory Soft</a>';  
}  
add_filter('admin_footer_text', 'change_footer_admin');

/**
* RESTRINGE LOS RESULTADOS DE LAS BÚSQUEDAS A LOS POSTS
**********************************************************************************************************************/
function filter_search($query) {
     if ($query->is_search) {
          $query->set('post_type', 'post');
     }
     return $query;
}
add_filter('pre_get_posts', 'filter_search');

?>
