<?php /* Template Name: Portada */ ?>
<?php include('/options/variables.php'); ?>
<?php get_header(); ?>

	<!-- CONTENIDO DESTACADO | CARRUSEL DE NOTICIAS -->
  <?php 
    if ($carrusel_ver == 1) {
    ?>    
    <div class="row">
      <div class="large-12 columns">
        <div class="-carrusel-un-item--sin-controles">
          <div><a href="#"><img src="http://placehold.it/1200x450" alt=""></a></div>
          <div><a href="#"><img src="http://placehold.it/1200x450" alt=""></a></div>
          <div><a href="#"><img src="http://placehold.it/1200x450" alt=""></a></div>
        </div>
      </div>
    </div>
  <?php } ?>

  <!-- CONTENIDO DESTACADO | CAMPAÑA DESTACADA -->

  <?php 
    if ($destacado_ver == 1) {
    ?>  
    <div class="row texto-centrado">
      <div class="small-12 columns">
        <h2>Lorem ipsum dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eligendi officia tenetur suscipit asperiores eos perferendis aspernatur amet non assumenda repellendus necessitatibus, laboriosam corporis sequi voluptatem dolorum nam porro, atque.</p>
      </div>
    </div>
    <div class="row small-up-1 medium-up-3">
      <div class="column">
        <!-- <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/test/ley_dos5_1.png" class="thumbnail small-centered" alt=""></a> -->
        <img src="http://placehold.it/350x300" alt="imagen">
      </div>
      <div class="column">
        <!-- <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/test/ley_dos5_dos.jpg" class="thumbnail small-centered" alt=""></a> -->
        <img src="http://placehold.it/350x300" alt="imagen">
      </div>
      <div class="column">
        <!-- <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/test/ley_dos5_tres.jpg" class="thumbnail small-centered" alt=""></a> -->
        <img src="http://placehold.it/350x300" alt="imagen">
      </div>
    </div>
  <?php } ?>

  <!-- CONTENIDO DESTACADO | ACCESO PORTALES -->

  <?php 
  	if ($portales_ver == 1) {
		?>
	  <div class="franja fondo-gris--claro">
	    <div class="row sin-margen--abajo texto-centrado">
	      <div class="small-12 large-6 columns">
	        <h4><?php echo $portales_titulo_izq ?></h4>
	        <p><?php echo $portales_texto_izq ?></p>
	        <a href="<?php echo $portales_enlace_btn_izq ?>" class="small button"><?php echo $portales_texto_btn_izq ?></a>
	      </div>
	      <div class="small-12 large-6 columns">
	        <h4><?php echo $portales_titulo_der ?></h4>
          <p><?php echo $portales_texto_der ?></p>
          <a href="<?php echo $portales_enlace_btn_der ?>" class="small button"><?php echo $portales_texto_btn_der ?></a>
	      </div>
	    </div>
	  </div>
  <?php	} ?>

  <!-- CONTENIDO PRINCIPAL | ACTUALIDAD -->

  <div class="row">
    <div class="small-12 large-8 columns contenido-principal">
      <h5 class="titulo">Actualidad</h5>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>

      <a href="#" class="articulo stack-for-small">
        <div class="articulo-seccion">
          <div class="thumbnail">
            <img class="articulo-imagen" src="http://placehold.it/350x200" alt="">
          </div>
        </div>
        <div class="articulo-seccion">
          <h4 class="articulo-titulo">Lorem ipsum dolor sit amet</h4>
          <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum, laudantium ratione itaque dolorum iure dignissimos dicta, quisquam neque aliquid cumque laboriosam!</p>
        </div>
      </a>
      <div class="row">
        <div class="small-12 columns">
          <hr>
          <a href="" class="tiny button">Ver toda la actualidad</a>
        </div>
      </div>
    </div>
    

    <!-- BARRA LATERAL | AGENDA -->

    <div class="small-12 large-4 columns barra-lateral">
      
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-uno') ) : ?>
      	<div class="modulo modulo-agenda">
        	<h5 class="titulo">Eventos</h5>
          <div class="modulo-agenda-lista">
            <article class="evento">
              <div class="evento-fecha">
                <p class="evento-mes">Sept</p>
                <p class="evento-dia">18</p>
              </div>
              <div class="evento-descripcion">
                <h6 class="evento-descripcion-cabecera">
                  <a href="#" title="Day in the Life of Foundation for Apps">Day in the Life of Foundation for Apps</a>
                </h6>
                <p class="evento-descripcion-detalles"><span class="evento-descripcion-hora"></span>BDConf - Altlanta</p>
              </div>
            </article>
            <hr>
            <article class="evento">
              <div class="evento-fecha">
                <p class="evento-mes">Sept</p>
                <p class="evento-dia">18</p>
              </div>
              <div class="evento-descripcion">
                <h6 class="evento-descripcion-cabecera">
                  <a href="#" title="Day in the Life of Foundation for Apps">Day in the Life of Foundation for Apps</a>
                </h6>
                <p class="evento-descripcion-detalles"><span class="evento-descripcion-hora"></span>BDConf - Altlanta</p>
              </div>
            </article>
            <hr>
            <article class="evento">
              <div class="evento-fecha">
                <p class="evento-mes">Sept</p>
                <p class="evento-dia">18</p>
              </div>
              <div class="evento-descripcion">
                <h6 class="evento-descripcion-cabecera">
                  <a href="#" title="Day in the Life of Foundation for Apps">Day in the Life of Foundation for Apps</a>
                </h6>
                <p class="evento-descripcion-detalles"><span class="evento-descripcion-hora"></span>BDConf - Altlanta</p>
              </div>
            </article>
            <hr>
          </div>
          <div class="modulo-controles">
            <a href="#" class="tiny button">Ver agenda completa</a>
          </div>
      	</div>
      <?php endif; ?>

      <!-- BARRA LATERAL | REDES -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-dos') ) : ?>
	      <div class="modulo modulo-twitter">
	        <h5 class="titulo">Redes</h5>
	        <a class="twitter-timeline"  href="https://twitter.com/hectorasencio" data-widget-id="701706379107680256">Tweets por @hectorasencio.</a>
	        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	        </script>
	      </div>
	    <?php endif; ?>

      <!-- BARRA LATERAL | MÓDULOS -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-tres') ) : ?>
	      <div class="modulo modulo-destacado">
	        <h5 class="titulo">Contenido destacado</h5>
	        <p class="destacado-descripcion">5/2/2016 Rueda de prensa de Pablo Iglesias tras su encuentro con Pedro Sánchez</p>
	        <div class="destacado-media flex-video">
	          <iframe width="853" height="480" src="https://www.youtube.com/embed/1teJ9Ux-0ok?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
	        </div>
	      </div>
	      <div class="modulo modulo-destacado">
	        <h5 class="titulo">Contenido destacado</h5>
	        <p class="destacado-descripcion">
	          Sigue en directo la comparecencia de Esperanza Aguirre en la Comisión de Corrupción de la Asamblea de Madrid
	        </p>
	        <div class="destacado-media flex-video">
	          <img class="thumbnail" src="http://placehold.it/350x300" alt="imagen">
	        </div>
	      </div>
			<?php endif; ?>
    </div>
  </div>

  <!-- CONTENIDO DESTACADO | CANAL YOUTUBE -->

  <?php 
  	if ($video_ver == 1) {
  	?>	
	  <div class="row">
	    <div class="small-12 columns">
	      <h5 class="titulo texto-centrado">Videos</h5>
	    </div>
	    <div class="small-12 large-4 columns">
	      <div class="destacado-media flex-video">
					<?php echo $video_uno ?>
	      </div>
	    </div>
	    <div class="small-12 large-4 columns">
	      <div class="destacado-media flex-video">
	      	<?php echo $video_dos ?>
	      </div>
	    </div>
	    <div class="small-12 large-4 columns">
	      <div class="destacado-media flex-video">
	      	<?php echo $video_tres ?>
	      </div>
	    </div>
	  </div>
	<?php } ?>


  <!-- CONTENIDO DESTACADO | COLABORACIÓN -->

	<?php 
  	if ($colabora_ver == 1) {
  	?>
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
	<?php } ?>

  <!-- CONTENIDO | RECORDATORIO -->

  <?php 
  if ($callout_home_ver == 1) { ?>
    <div class="row">
      <div class="small-12 columns">
        <div class="large callout texto-centrado fondo-gris--claro">
          <h4><?php echo $callout_home_titulo ?></h4>
          <p><?php echo $callout_home_texto ?></p>
          
          <?php 
          if ($callout_home_boton !== '' && $callout_home_enlace !== '') { ?>
            <a href="<?php echo $callout_home_enlace ?>" class="button">
              <?php echo $callout_home_boton ?>
            </a>
          <?php } ?>

        </div>
      </div>
    </div>
  <?php } ?>

<?php get_footer(); ?>