<?php 
/**
*		ÁREAS DE WIDGETS PARA PODEMOSPRESS
*  	----------------------------------
* 	Registro de zonas habilitadas para widgets.
*
* 	Creado por: Hector Asencio @MemorySoft
* 	
*/

if ( function_exists( 'register_sidebar' ) ) {
	// Global
	register_sidebar( array(
		'name' => 'Top bar',
		'id' => 'top-bar',
		'description'   => 'DESACTIVADO - Inserta contenido en la barra superior de todo el sitio',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Inicio
	register_sidebar( array(
		'name' => 'Inicio Carrusel',
		'id' => 'home-carrusel',
		'description'   => 'ATENCIÓN: Asignar widgets a este contenedor desactivará el carrusel de la página de inicio!',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Inicio Bajo Actualidad',
		'id' => 'home-enmedio',
		'description'   => 'Inserta contenido bajo la sección de Actualidad de la página de inicio',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Inicio Lateral Arriba',
		'id' => 'home-lateral-uno',
		'description'   => 'ATENCIÓN: Asignar widgets a este contenedor desactivará la Agenda de la página de inicio!',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Inicio Lateral Medio',
		'id' => 'home-lateral-dos',
		'description'   => 'Inserta contenido debajo de la Agenda de la página de inicio',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Inicio Lateral Abajo',
		'id' => 'home-lateral-tres',
		'description'   => 'ATENCIÓN: Asignar widgets a este contenedor desactivará los widgets de Redes Sociales de la página de inicio!',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Pograma
	register_sidebar( array(
		'name' => 'Programa Arriba',
		'id' => 'programa-arriba',
		'description'   => 'Inserta contenido arriba de la página de Programa',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Programa Bajo Objetivos',
		'id' => 'programa-abajo',
		'description'   => 'Inserta contenido debajo de la sección Objetivos de la página de Programa',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Organización
	register_sidebar( array(
		'name' => 'Organizacion Arriba',
		'id' => 'organizacion-arriba',
		'description'   => 'Inserta contenido arriba de la página de Organización',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Organizacion Bajo Areas',
		'id' => 'organizacion-abajo',
		'description'   => 'Inserta contenido debajo de la sección Áreas de la página de Organización',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Miembros
	register_sidebar( array(
		'name' => 'Miembros Arriba',
		'id' => 'miembros-arriba',
		'description'   => 'Inserta contenido arriba de la página de Miembros',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Miembros Abajo',
		'id' => 'miembros-abajo',
		'description'   => 'Inserta contenido abajo de la página de Miembros',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Instituciones
	register_sidebar( array(
		'name' => 'Instituciones Arriba',
		'id' => 'instituciones-arriba',
		'description'   => 'Inserta contenido arriba de la página de Instituciones',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Instituciones Bajo Actividad',
		'id' => 'instituciones-enmedio',
		'description'   => 'Inserta contenido debajo de la sección Actividad de la página de Instituciones',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Instituciones Calendario',
		'id' => 'instituciones-calendario',
		'description'   => 'Ajustado para mostrar el calendario de eventos',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Instituciones Abajo',
		'id' => 'instituciones-abajo',
		'description'   => 'Inserta contenido junto al calendario',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Actualidad
	register_sidebar( array(
		'name' => 'Actualidad Arriba',
		'id' => 'actualidad-arriba',
		'description'   => 'Inserta contenido arriba de la página de Actualidad',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Actualidad Abajo',
		'id' => 'actualidad-abajo',
		'description'   => 'Inserta contenido abajo de la página de Actualidad',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Participación
	register_sidebar( array(
		'name' => 'Participación Arriba',
		'id' => 'participacion-arriba',
		'description'   => 'Inserta contenido arriba de la página de Participación',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Participación Bajo Herramientas',
		'id' => 'participacion-enmedio',
		'description'   => 'Inserta contenido bajo la sección Herramientas de la página de Participación',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Participación Abajo',
		'id' => 'participacion-abajo',
		'description'   => 'Inserta contenido debajo de la sección Áreas de la página de Participación',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Contacto
	register_sidebar( array(
		'name' => 'Contacto Arriba',
		'id' => 'contacto-arriba',
		'description'   => 'Inserta contenido arriba de la página de Contacto',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Contacto Bajo Directorio',
		'id' => 'contacto-abajo',
		'description'   => 'Inserta contenido debajo de la sección Directorio de la página de Contacto',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Footer
	register_sidebar( array(
		'name' => 'Footer Uno',
		'id' => 'footer-uno',
		'description'   => 'Inserta contenido en la columna central del pie de página',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => 'Footer Dos',
		'id' => 'footer-dos',
		'description'   => 'Inserta contenido en la columna derecha del pie de página',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
	// Blog
	register_sidebar( array(
		'name' => 'Sidebar Blog',
		'id' => 'sidebar',
		'description'   => 'Inserta contenido en la columna izquierda de las páginas de artículos',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="titulo">',
		'after_title' => '</h5>',
	) );
}
?>