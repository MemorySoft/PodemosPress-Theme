<?php /* Template Name: Participación */ ?>
<?php include('/options/variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('participacion-arriba') ) : ?>

    <?php endif; ?>
  </div>
</div>

<!-- CONTENIDO | CAMPAÑA -->

<?php
if ($destacado_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 medium-6 columns">
	    <div class="destacado-media flex-video">
	      <?php echo $destacado_media ?>
	    </div>
	  </div>
	  <div class="small-12 medium-6 columns">
	    <img class="destacado-logo" src="<?php echo $destacado_logo ?>" alt="">
	    <h4><?php echo $destacado_titulo ?></h4>
	    <p><?php echo $destacado_texto ?></p>
	    <p>
		    <?php 
				if ($destacado_enlace_btn_1 !== '' && $destacado_texto_btn_2 !== '') { ?>
		      <a href="<?php echo $destacado_enlace_btn_1 ?>" class="small success button">
		      	<?php echo $destacado_texto_btn_2 ?>
		      </a>
		    <?php } 

				if ($destacado_enlace_btn_2 !== '' && $destacado_texto_btn_2 !== '') { ?>
	      <a href="<?php echo $destacado_enlace_btn_2 ?>" class="small success button">
	      	<?php echo $destacado_texto_btn_2 ?>
	      </a>
				<?php } ?>
	    </p>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | HERRAMIENTAS -->

<?php
if ($herramientas_ver == 1) { ?>
	<div class="row">
		<div class="small-12 columns">
		  <h5 class="titulo texto-centrado">Herramientas de participación</h5>
		</div>
		<div class="small-12 medium-4 columns panel">
			<a href="<?php echo $herramientas_col_enlace_izq ?>">
			<img src="<?php echo $herramientas_col_imagen_izq ?>" alt="">
		</a>
		</div>
		<div class="small-12 medium-4 columns panel">
			<a href="<?php echo $herramientas_col_enlace_cntr ?>">
			<img src="<?php echo $herramientas_col_imagen_cntr ?>" alt="">
		</a>
		</div>
		<div class="small-12 medium-4 columns panel">
			<a href="<?php echo $herramientas_col_enlace_der ?>">
			<img src="<?php echo $herramientas_col_imagen_der ?>" alt="">
		</a>
		</div>
	</div>
<?php } ?>

<!-- CONTENIDO | WIDGETS CENTRALES -->

<div class="row" data-equalizer data-equalize-on="medium">
	<div class="small-12 medium-6 columns">
	  <div class="large callout fondo-gris--claro" data-equalizer-watch>
	    <h4>Iniciativas Ciudadanas</h4>
	    <p>La iniciativas ciudadanas son el mecanismo a través del cual las propuestas más apoyadas por los inscritos pueden llevarse a la organización y ser defendidas o aceptadas a través de votación.</p>
	    <p>
	    <a href="" class="small button">Ver iniciativas</a>
	    </p>
	  </div>
	</div>
	<div class="small-12 medium-6 columns">
	  <div class="large callout fondo-gris--claro" data-equalizer-watch>
	    <h4>Equipos de acción participativa</h4>
	    <p>Los Equipos de Acción Participativa (EAP) son grupos territoriales de gente con ganas de participar en cuestiones concretas y directas que requieren menor deliberación e implicación constante que la participación en los Círculos, quienes además tienen competencias orgánicas.</p>
	    <p><a href="" class="small button">Únete</a></p>
	  </div>
	</div>
</div>

<!-- CONTENIDO DESTACADO | COLABORACIÓN -->

<div class="row" data-equalizer data-equalize-on="medium">
  <div class="small-12 columns">
    <h5 class="titulo texto-centrado">Colabora con Podemos</h5>
  </div>
  <div class="small-12 large-3 columns">

  <?php 
  if ($colabora_enlace_uno !== '' && $colabora_titulo_uno !== '' && $colabora_texto_uno !== '') { ?>
  	<a href="<?php echo $colabora_enlace_uno ?>">
    	<div class="callout large fondo-morado texto-centrado" data-equalizer-watch>
        <h5><?php echo $colabora_titulo_uno ?></h5>
        <p><?php echo $colabora_texto_uno ?></p>
    	</div>
    </a>
  <?php } ?>

  </div>
  <div class="small-12 large-3 columns">
    <?php 
    if ($colabora_enlace_dos !== '' && $colabora_titulo_dos !== '' && $colabora_texto_dos !== '') { ?>
    	<a href="<?php echo $colabora_enlace_dos ?>">
      	<div class="callout large fondo-morado texto-centrado" data-equalizer-watch>
          <h5><?php echo $colabora_titulo_dos ?></h5>
          <p><?php echo $colabora_texto_dos ?></p>
      	</div>
      </a>
    <?php } ?>

  </div>
  <div class="small-12 large-3 columns">
    <?php 
    if ($colabora_enlace_tres !== '' && $colabora_titulo_tres !== '' && $colabora_texto_tres !== '') { ?>
    	<a href="<?php echo $colabora_enlace_tres ?>">
      	<div class="callout large fondo-morado texto-centrado" data-equalizer-watch>
          <h5><?php echo $colabora_titulo_tres ?></h5>
          <p><?php echo $colabora_texto_tres ?></p>
      	</div>
      </a>
    <?php } ?>

  </div>
  <div class="small-12 large-3 columns">
    <?php 
    if ($colabora_enlace_cuatro !== '' && $colabora_titulo_cuatro !== '' && $colabora_texto_cuatro !== '') { ?>
    	<a href="<?php echo $colabora_enlace_cuatro ?>">
      	<div class="callout large fondo-morado texto-centrado" data-equalizer-watch>
          <h5><?php echo $colabora_titulo_cuatro ?></h5>
          <p><?php echo $colabora_texto_cuatro ?></p>
      	</div>
      </a>
    <?php } ?>

  </div>
</div>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('participacion-abajo') ) : ?>

    <?php endif; ?>
  </div>
</div>

<!-- CONTENIDO | RECORDATORIO -->

<?php 
if ($callout_participa_ver == 1) { ?>
  <div class="row">
    <div class="small-12 columns">
      <div class="large callout texto-centrado fondo-gris--claro">
        <h4><?php echo $callout_participa_titulo ?></h4>
        <p><?php echo $callout_participa_texto ?></p>
        
        <?php 
        if ($callout_participa_boton !== '' && $callout_participa_enlace !== '') { ?>
          <a href="<?php echo $callout_participa_enlace ?>" class="button">
            <?php echo $callout_participa_boton ?>
          </a>
        <?php } ?>

      </div>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>