<?php 

/**
 *  COMUNES
 *  -------
 */
// Globales
$ambito 															= get_option('delegacion_ambito');
$region 															= get_option('delegacion_region');

/**
 *  INICIO
 *  ------
 */
// Breadcrumb
$breadcrumb_ver                   		= get_option("home_breadcrumb_visibilidad");
// Carrusel
$carrusel_ver                     		= get_option("home_carrusel_visibilidad");
// Destacado
$destacado_ver                    		= get_option("home_destacado_visibilidad");
// Portales
$portales_ver                         = get_option("home_portales_visibilidad");
$portales_titulo_izq                  = get_option("home_portales_titulo_izquierda");
$portales_texto_izq                   = get_option("home_portales_texto_izquierda");
$portales_texto_btn_izq               = get_option("home_portales_texto_boton_izquierda");
$portales_enlace_btn_izq              = get_option("home_portales_enlace_boton_izquierda");
$portales_titulo_der                  = get_option("home_portales_titulo_derecha");
$portales_texto_der                   = get_option("home_portales_texto_derecha");
$portales_texto_btn_der               = get_option("home_portales_texto_boton_derecha");
$portales_enlace_btn_der              = get_option("home_portales_enlace_boton_derecha");
// Videos
$video_ver                        		= get_option("home_videos_visibilidad");
$video_uno                        		= get_option("home_video_uno");
$video_dos                        		= get_option("home_video_dos");
$video_tres                       		= get_option("home_video_tres");
// Colaboracion
$colabora_ver                        	= get_option("home_colaboracion_visibilidad");
$colabora_titulo_uno                 	= get_option("home_colaboracion_titulo_uno");
$colabora_texto_uno                  	= get_option("home_colaboracion_texto_uno");
$colabora_enlace_uno                 	= get_option("home_colaboracion_enlace_uno");
$colabora_titulo_dos                 	= get_option("home_colaboracion_titulo_dos");
$colabora_texto_dos                  	= get_option("home_colaboracion_texto_dos");
$colabora_enlace_dos                 	= get_option("home_colaboracion_enlace_dos");
$colabora_titulo_tres                	= get_option("home_colaboracion_titulo_tres");
$colabora_texto_tres                 	= get_option("home_colaboracion_texto_tres");
$colabora_enlace_tres                	= get_option("home_colaboracion_enlace_tres");
$colabora_titulo_cuatro              	= get_option("home_colaboracion_titulo_cuatro");
$colabora_texto_cuatro               	= get_option("home_colaboracion_texto_cuatro");
$colabora_enlace_cuatro              	= get_option("home_colaboracion_enlace_cuatro");
// Callout
$callout_home_ver                 		= get_option('home_callout_visibilidad');
$callout_home_titulo              		= get_option('home_callout_titulo');
$callout_home_texto               		= get_option('home_callout_texto');
$callout_home_boton               		= get_option('home_callout_texto_boton');
$callout_home_enlace              		= get_option('home_callout_enlace_boton');

/**
 *  ORGANIZACIÓN
 *  ------------
 */
// Intro
$intro_ver 														= get_option('organizacion_intro_visibilidad');
$intro_texto 													= get_option('organizacion_intro_texto');
$intro_media													= get_option('organizacion_intro_media');
// Asamblea Ciudadana
$boton_politico_texto 								= get_option('organizacion_asamblea_texto_documento_politico');
$boton_politico_enlace 								= get_option('organizacion_asamblea_enlace_documento_politico');
$boton_organizativo_texto 						= get_option('organizacion_asamblea_texto_documento_organizativo');
$boton_organizativo_enlace 						= get_option('organizacion_asamblea_enlace_documento_organizativo');
$boton_codigo_etico_texto 						= get_option('organizacion_asamblea_texto_documento_codigo_etico');
$boton_codigo_etico_enlace 						= get_option('organizacion_asamblea_enlace_documento_codigo_etico');
// Organos Internos
$ac_descripcion 											= get_option('organizacion_asamblea_descripcion');
$sg_descripcion 											= get_option('organizacion_secretaria_descripcion');
$sg_texto_boton 											= get_option('organizacion_secretaria_texto_boton');
$sg_enlace_boton 											= get_option('organizacion_secretaria_enlace_boton');
$cc_descripcion 											= get_option('organizacion_consejo_descripcion');
$cc_texto_boton 											= get_option('organizacion_consejo_texto_boton');
$cc_enlace_boton 											= get_option('organizacion_consejo_enlace_boton');
$cg_descripcion 											= get_option('organizacion_comision_descripcion');
$cg_texto_boton 											= get_option('organizacion_comision_texto_boton');
$cg_enlace_boton 											= get_option('organizacion_comision_enlace_boton');
// Circulos
$circulos_ver 												= get_option('organizacion_circulos_visibilidad');
$circulos_texto 											= get_option('organizacion_circulos_texto');
$circulos_media 											= get_option('organizacion_circulos_media');
$circulos_boton_derecho 							= get_option('organizacion_circulos_texto_boton_derecho');
$circulos_enlace_boton_derecho 				= get_option('organizacion_circulos_enlace_boton_derecho');
$circulos_boton_izquierdo 						= get_option('organizacion_circulos_texto_boton_izquierdo');
$circulos_enlace_boton_izquierdo 			= get_option('organizacion_circulos_enlace_boton_izquierdo');
// Areas
$areas_ver 														= get_option('organizacion_areas_visibilidad');
// Callout
$callout_organizacion_ver 						= get_option('organizacion_callout_visibilidad');
$callout_organizacion_titulo					= get_option('organizacion_callout_titulo');
$callout_organizacion_texto 					= get_option('organizacion_callout_texto');
$callout_organizacion_boton 					= get_option('organizacion_callout_texto_boton');
$callout_organizacion_enlace 					= get_option('organizacion_callout_enlace_boton');

/**
 *  MIEMBROS
 *  --------
 */
// Secretaría General
$sg_bio 															= get_option("miembros_secretaria_bio");
$sg_imagen 														= get_option("miembros_secretaria_imagen");
$sg_texto_boton 											= get_option("miembros_secretaria_texto_boton");
$sg_enlace_boton 											= get_option("miembros_secretaria_enlace_boton");
$sg_twitter 													= get_option("miembros_secretaria_twitter");
$sg_facebook 													= get_option("miembros_secretaria_facebook");
$sg_email 														= get_option("miembros_secretaria_email");
// Consejo Ciudadano
$cc_ver 															= get_option("miembros_consejo_visibilidad");
$cc_descripcion 											= get_option("miembros_consejo_descripcion");
$cc_texto_boton_actas 								= get_option("miembros_consejo_texto_boton_actas");
$cc_enlace_boton_actas 								= get_option("miembros_consejo_enlace_boton_actas");
$cc_texto_boton_reglamento 						= get_option("miembros_consejo_texto_boton_reglamento");
$cc_enlace_boton_reglamento 					= get_option("miembros_consejo_enlace_boton_reglamento");
// Comisión de Garantias
$cg_ver 															= get_option("miembros_comision_visibilidad");
$cg_descripcion 											= get_option("miembros_comision_descripcion");
$cg_texto_boton_actas 								= get_option("miembros_comision_texto_boton_actas");
$cg_enlace_boton_actas 								= get_option("miembros_comision_enlace_boton_actas");
$cg_texto_boton_reglamento 						= get_option("miembros_comision_texto_boton_reglamento");
$cg_enlace_boton_reglamento 					= get_option("miembros_comision_enlace_boton_reglamento");  
// Callout
$callout_miembros_ver 								= get_option('miembros_callout_visibilidad');
$callout_miembros_titulo							= get_option('miembros_callout_titulo');
$callout_miembros_texto 							= get_option('miembros_callout_texto');
$callout_miembros_boton 							= get_option('miembros_callout_texto_boton');
$callout_miembros_enlace 							= get_option('miembros_callout_enlace_boton');

/**
 *  PARTICIPACION
 *  -------------
 */
$destacado_ver 												= get_option("participacion_destacado_visibilidad");
$destacado_titulo 										= get_option("participacion_destacado_titulo");
$destacado_logo 											= get_option("participacion_destacado_logo");
$destacado_texto 											= get_option("participacion_destacado_texto");
$destacado_media 											= get_option("participacion_destacado_media");
$destacado_texto_btn_1 								= get_option("participacion_destacado_texto_boton_uno");
$destacado_enlace_btn_1 							= get_option("participacion_destacado_enlace_boton_uno");
$destacado_texto_btn_2 								= get_option("participacion_destacado_texto_boton_dos");
$destacado_enlace_btn_2 							= get_option("participacion_destacado_enlace_boton_dos");
// Herramientas
$herramientas_ver 										= get_option("participacion_herramientas_visibilidad");
$herramientas_col_enlace_izq 					= get_option("participacion_herramientas_enlace_columna_izquierda");
$herramientas_col_imagen_izq 					= get_option("participacion_herramientas_imagen_columna_izquierda");
$herramientas_col_enlace_cntr 				= get_option("participacion_herramientas_enlace_columna_central");
$herramientas_col_imagen_cntr 				= get_option("participacion_herramientas_imagen_columna_central");
$herramientas_col_enlace_der 					= get_option("participacion_herramientas_enlace_columna_derecha");
$herramientas_col_imagen_der 					= get_option("participacion_herramientas_imagen_columna_derecha");
// Callout
$callout_participa_ver 								= get_option('participacion_callout_visibilidad');
$callout_participa_titulo							= get_option('participacion_callout_titulo');
$callout_participa_texto 							= get_option('participacion_callout_texto');
$callout_participa_boton 							= get_option('participacion_callout_texto_boton');
$callout_participa_enlace 						= get_option('participacion_callout_enlace_boton');
?>