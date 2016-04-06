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
* 	- Soporte para fondo personalizado
* 	- Soporte para el plugin JetPack
* 	- Soporte para OpenGraph
* 	- Registro de sidebars para widgets
* 	- Soporte para breadcrumbs
* 	- Páginas de opciones
* 	- Soporte para logotipo personalizado
* 	- Control de longitud de extractos de posts
* 	- Logotipo personalizado en la zona de admin
* 	- Creditos personalizados en la zona de admin
* 	- Restricción de los resultados de la búsqueda a posts
* 	- Contador de visualizaciones de posts
* 	- Campos extra en los perfiles de usuario
* 	- Lista personalizada de categorias
* 	- Reescritura de URLS de categorias
* 	- Exclusión de categorias del blogroll
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
	// SOPORTE PARA IMÁGENES DESTACADA
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
* SOPORTE PARA JETPACK
**********************************************************************************************************************/
function prefix_kill_all_the_jetpacks( $modules ) {
	$whitelist = array(
		'after-the-deadline',
		'carousel',
		'comments',
		'contact-form',
		'custom-css',
		'enhanced-distribution',
		'gplus-authorship',
		'gravatar-hovercards',
		'infinite-scroll',
		'json-api',
		'latex',
		'likes',
		'minileven',
		'mobile-push',
		'monitor',
		'notes',
		'omnisearch',
		'photon',
		'post-by-email',
		'publicize',
		'sharedaddy',
		'shortcodes',
		'shortlinks',
		'sso',
		'stats',
		'subscriptions',
		'tiled-gallery',
		'vaultpress',
		'videopress',
		'widget-visibility',
		'widgets',
	);
	$modules = array_intersect_key( $modules, array_flip( $whitelist ) );
	return $modules;
}
add_filter( 'jetpack_get_available_modules', 'prefix_kill_all_the_jetpacks' );

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
* SIDEBARS Y AREAS DE WIDGETS
**********************************************************************************************************************/ 
if ( function_exists( 'register_sidebar' ) ) {
	// Home
	register_sidebar( array(
		'name' => 'Home lateral Uno',
		'id' => 'home-lateral-uno',
		'before_widget' => '<div id="%1$s" class="widget-contenedor %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Home lateral Dos',
		'id' => 'home-lateral-dos',
		'before_widget' => '<div id="%1$s" class="widget-contenedor %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Home lateral Tres',
		'id' => 'home-lateral-tres',
		'before_widget' => '<div id="%1$s" class="widget-contenedor %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Footer
	register_sidebar( array(
		'name' => 'Footer Uno',
		'id' => 'footer-uno',
		'before_widget' => '<div id="%1$s" class="widget-contenedor %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Footer Dos',
		'id' => 'footer-dos',
		'before_widget' => '<div id="%1$s" class="widget-contenedor %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
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
*	PÁGINAS DE OPCIONES 
**********************************************************************************************************************/ 
require_once('options/opciones-configuracion.php');
require_once('options/opciones-inicio.php');
require_once('options/opciones-miembros.php');
require_once('options/opciones-organizacion.php');
require_once('options/opciones-participacion.php');

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

/**
* CAMPOS DE CONTACTO EN EL PERFIL DE USUARIO
* http://code.tutsplus.com/articles/show-yourself-off-with-a-custom-author-box--wp-30009
**********************************************************************************************************************/
function contactos_usuario( $contactmethods ) {
    // Quitamos campos obsoletos de la ficha de usuario
    unset( $contactmethods[ 'aim' ] );
    unset( $contactmethods[ 'yim' ] );
    unset( $contactmethods[ 'jabber' ] );
    // Añadimos nuestros campos personalizados
    $contactmethods[ 'email_alt' ] 	= 'Email público';
    $contactmethods[ 'twitter' ] 	= 'Perfil de Twitter';
    $contactmethods[ 'facebook' ] 	= 'Perfil de Facebook';
    $contactmethods[ 'linkedin' ] 	= 'Perfil público de LinkedIn';
    $contactmethods[ 'googleplus' ] = 'Perfil de Google+';
    $contactmethods[ 'pinterest' ] 	= 'Perfil de Pinterest';
    $contactmethods[ 'flickr' ] 	= 'Perfil de Flickr';
    $contactmethods[ 'instagram' ] 	= 'Perfil de Instagram';
    $contactmethods[ 'youtube' ] 	= 'Perfil de Youtube';
    $contactmethods[ 'vimeo' ] 		= 'Perfil de Vimeo';
    $contactmethods[ 'tumblr' ] 	= 'Perfil de Tumblr';
    return $contactmethods;
}
add_filter( 'user_contactmethods', 'contactos_usuario' );

/**
* CONTADOR DE LECTURAS DE POSTS
* Por Boutros AbiChedid
* http://bacsoftwareconsulting.com/blog/index.php/wordpress-cat/how-to-track-and-display-post-views-count-in-wordpress-without-a-plugin/
*
* Lo renderizamos usando:
* <?php echo '(' . get_PostViews(get_the_ID()) .')'; ?>
**********************************************************************************************************************/
function PostViews($post_ID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($post_ID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($post_ID, $count_key);
        add_post_meta($post_ID, $count_key, '0');
        return $count . ' Visualizaciones';
    }else{
        $count++;
        update_post_meta($post_ID, $count_key, $count);
        if($count == '1'){
        return $count . ' lectura';
        }
        else {
        return $count . ' lecturas';
        }
    }
}
// Añadimos una columna con el número de lecturas de cada post en el Dashboard
function get_PostViews($post_ID){
    $count_key = 'post_views_count';
    $count = get_post_meta($post_ID, $count_key, true);
    return $count;
}
function post_column_views($newcolumn){
    $newcolumn['post_views'] = __('Visualizaciones');
    return $newcolumn;
}
function post_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo get_PostViews(get_the_ID());
    }
}
add_filter('manage_posts_columns', 'post_column_views');
add_action('manage_posts_custom_column', 'post_custom_column_views',10,2);

/**
* LISTA PERSONALIZADA DE CATEGORIAS
**********************************************************************************************************************/
function get_my_category_list( $separator = '', $parents='', $post_id = false ) {
	global $wp_rewrite;
	$categories = get_the_category( $post_id );
	if ( !is_object_in_taxonomy( get_post_type( $post_id ), 'category' ) )
		return apply_filters( 'the_category', '', $separator, $parents );
	if ( empty( $categories ) )
		return apply_filters( 'the_category', __( 'Uncategorized' ), $separator, $parents );
	$rel = ( is_object( $wp_rewrite ) && $wp_rewrite->using_permalinks() ) ? 'rel="category tag"' : 'rel="category"';
	$thelist = '';
	if ( '' == $separator ) {
		$thelist .= '<ul class="post-categories">';
		foreach ( $categories as $category ) {
			$thelist .= "\n\t<li>";
			switch ( strtolower( $parents ) ) {
				case 'multiple':
					if ( $category->parent )
						$thelist .= get_category_parents( $category->parent, true, $separator );
						$thelist .= '<a class="category-'.$category->category_nicename.'" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a></li>';
					break;
				case 'single':
					$thelist .= '<a class="category-'.$category->category_nicename.'" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>';
					if ( $category->parent )
						$thelist .= get_category_parents( $category->parent, false, $separator );
					$thelist .= $category->name.'</a></li>';
					break;
				case '':
				default:
					$thelist .= '<a class="category-'.$category->category_nicename.'" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a></li>';
			}
		}
		$thelist .= '</ul>';
	} else {
		$i = 0;
		foreach ( $categories as $category ) {
			if ( 0 < $i )
				$thelist .= $separator;
			switch ( strtolower( $parents ) ) {
				case 'multiple':
					if ( $category->parent )
						$thelist .= get_category_parents( $category->parent, true, $separator );
						$thelist .= '<a class="category-'.$category->category_nicename.'" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a>';
					break;
				case 'single':
					$thelist .= '<a class="category-'.$category->category_nicename.'" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>';
					if ( $category->parent )
						$thelist .= get_category_parents( $category->parent, false, $separator );
						$thelist .= "$category->name</a>";

					break;
				case '':
				default:
					$thelist .= '<a class="category-'.$category->category_nicename.'" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a>';
			}
			++$i;
		}
	}
	return apply_filters( 'the_category', $thelist, $separator, $parents );
}

/**
* REESCRIBE LAS URLS DE CATEGORÍAS
* Plugin Name: WP No Category Base
* Plugin URI: http://blinger.org/wordpress-plugins/no-category-base/
* Description: Removes '/category' from your category permalinks.
* Version: 1.1.1
* Author: iDope
* Author URI: http://efextra.com/
* License: GNU General Public License
* Copyright 2008  Saurabh Gupta  (email : saurabh0@gmail.com)
*/
// Refresh rules on activation/deactivation/category changes
register_activation_hook(__FILE__, 'no_category_base_refresh_rules');
add_action('created_category', 'no_category_base_refresh_rules');
add_action('edited_category', 'no_category_base_refresh_rules');
add_action('delete_category', 'no_category_base_refresh_rules');
function no_category_base_refresh_rules() {
	global $wp_rewrite;
	$wp_rewrite -> flush_rules();
}
register_deactivation_hook(__FILE__, 'no_category_base_deactivate');
function no_category_base_deactivate() {
	remove_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
	// We don't want to insert our custom rules again
	no_category_base_refresh_rules();
}
// Remove category base
add_action('init', 'no_category_base_permastruct');
function no_category_base_permastruct() {
	global $wp_rewrite, $wp_version;
	if (version_compare($wp_version, '3.4', '<')) {
		// For pre-3.4 support
		$wp_rewrite -> extra_permastructs['category'][0] = '%category%';
	} else {
		$wp_rewrite -> extra_permastructs['category']['struct'] = '%category%';
	}
}
// Add our custom category rewrite rules
add_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
function no_category_base_rewrite_rules($category_rewrite) {
	//var_dump($category_rewrite); // For Debugging
	$category_rewrite = array();
	$categories = get_categories(array('hide_empty' => false));
	foreach ($categories as $category) {
		$category_nicename = $category -> slug;
		if ($category -> parent == $category -> cat_ID)// recursive recursion
			$category -> parent = 0;
		elseif ($category -> parent != 0)
			$category_nicename = get_category_parents($category -> parent, false, '/', true) . $category_nicename;
		$category_rewrite['(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
		$category_rewrite['(' . $category_nicename . ')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
		$category_rewrite['(' . $category_nicename . ')/?$'] = 'index.php?category_name=$matches[1]';
	}
	// Redirect support from Old Category Base
	global $wp_rewrite;
	$old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
	$old_category_base = trim($old_category_base, '/');
	$category_rewrite[$old_category_base . '/(.*)$'] = 'index.php?category_redirect=$matches[1]';
	//var_dump($category_rewrite); // For Debugging
	return $category_rewrite;
}
// For Debugging
//add_filter('rewrite_rules_array', 'no_category_base_rewrite_rules_array');
//function no_category_base_rewrite_rules_array($category_rewrite) {
//	var_dump($category_rewrite); // For Debugging
//}
// Add 'category_redirect' query variable
add_filter('query_vars', 'no_category_base_query_vars');
function no_category_base_query_vars($public_query_vars) {
	$public_query_vars[] = 'category_redirect';
	return $public_query_vars;
}
// Redirect if 'category_redirect' is set
add_filter('request', 'no_category_base_request');
function no_category_base_request($query_vars) {
	//print_r($query_vars); // For Debugging
	if (isset($query_vars['category_redirect'])) {
		$catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
		status_header(301);
		header("Location: $catlink");
		exit();
	}
	return $query_vars;
}

/**
* EXCLUYE CATEGORIAS DE LA HOME
* Name: Remove Posts in Category From Homepage
* Description: Hides certain categories from apearing on the main loop using a checkbox on edit/create category page.
* Author: David Walsh
* Author URI: http://davidwalsh.name/wordpress-plugin-homepage
* Version: 1.1
* GNU General Public License
*/
$RCFH_LOOP_LABEL = 'Ocultar en la home';
$RCFH_LOOP_DESCRIPTION = 'Activa esta opción si quieres que esta categoría sea excluida de la página principal.';
$RCFH_LOOP_OPTION_KEY = 'remove-loop-cats';
// Add the extra field to the EDIT category page
	add_action('category_edit_form_fields', 'rcfh_loop_field_edit');
	function rcfh_loop_field_edit($term) {
		global $RCFH_LOOP_LABEL, $RCFH_LOOP_DESCRIPTION, $RCFH_LOOP_OPTION_KEY;
		$value = get_option($RCFH_LOOP_OPTION_KEY);
		if(!$value) {
			$value = array();
		}
		$checked = in_array($term->term_id, $value);
?>
	<tr class="form-field">
		<th scope="row" valign="top"><?php _e($RCFH_LOOP_LABEL); ?></label></th>
		<td>
			<label for="removeMainLoop"><input type="checkbox" style="width:1%;float:left;" name="remove-loop" id="removeMainLoop"<?php echo $checked ? ' checked="checked"' : ''; ?> value="1" /><span class="description"><?php _e($RCFH_LOOP_DESCRIPTION); ?></span>
		</td>
	</tr>
<?php }
	// Add the extra field to the ADD category page
	add_action('category_add_form_fields', 'rcfh_loop_field_create');
	function rcfh_loop_field_create() {
	global $RCFH_LOOP_LABEL, $RCFH_LOOP_DESCRIPTION;
?>
	<div class="form-field">
		<label for="removeMainLoop"><input type="checkbox" style="width:5%;float:left;" name="remove-loop" id="removeMainLoop" value="1" /><?php _e($RCFH_LOOP_LABEL); ?></label>
		<p><?php _e($RCFH_LOOP_DESCRIPTION); ?></p>
	</div>
<?php }
// Add action for saving extra category information
add_action('edit_category', 'rcfh_save_loop_value');
add_action('create_category', 'rcfh_save_loop_value');
function rcfh_save_loop_value($id) {
	global $RCFH_LOOP_OPTION_KEY;
	$value = get_option($RCFH_LOOP_OPTION_KEY);
	if(!$value) {
		$value = array();
	}
	// Add or remove the value
	if(isset($_POST['remove-loop'])) {
		array_push($value, $id);
	}
	else {
		$value = array_diff($value, array($id));
	}
	// Ensure no duplicates, just for cleanliness
	$value = array_unique(array_values($value));
	// Save
	update_option($RCFH_LOOP_OPTION_KEY, $value);
}
// Filter for removing said category posts from main loop
add_action('pre_get_posts', 'rcfh_prevent_posts');
function rcfh_prevent_posts($query) {
	global $RCFH_LOOP_OPTION_KEY;

	// Only remove categories if it's the main query/homepage
	if($query->is_home() && $query->is_main_query()) {
		$value = get_option($RCFH_LOOP_OPTION_KEY);

		// Modify query to remove posts which shouldn't be shown
		if(count($value)) {
			$query->set('cat', '-'.implode(',-', $value));
		}
	}
}
?>
