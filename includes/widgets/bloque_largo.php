<?php 
class bloque_destacado_largo extends WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'bloque_destacado_largo', 'description' => 'Bloque destacado que ocupa el 100% del ancho' );
    parent::__construct('bloque_destacado_largo', 'Bloque Destacado Largo', $widget_ops);
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'titulo' => '','texto' => '', 'boton' => '', 'link' => '' ) );
		$titulo = esc_attr($instance['titulo']);
		$texto = esc_attr($instance['texto']);
		$boton = esc_attr($instance['boton']);
		$link = esc_attr($instance['link']);

		?>
		<p>
    	<label for="<?php echo $this->get_field_id('titulo'); ?>"><?php _e('Título del bloque:'); ?> 
      	<input class="widefat" 
      				id="<?php echo $this->get_field_id('titulo'); ?>" 
            	name="<?php echo $this->get_field_name('titulo'); ?>" 
            	type="text" 
            	value="<?php echo esc_attr($titulo); ?>" />
    	</label>
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('texto'); ?>"><?php _e('Texto del bloque:'); ?>
      	<textarea class="widefat" 
        			id="<?php echo $this->get_field_id('texto'); ?>" 
        			name="<?php echo $this->get_field_name('texto'); ?>">
        				<?php echo $texto; ?>
        			</textarea>
      </label>
    </p>

    <p>
    	<label for="<?php echo $this->get_field_id('boton'); ?>"><?php _e('Texto del botón:'); ?>
      	<input class="widefat" 
      				id="<?php echo $this->get_field_id('boton'); ?>" 
             	name="<?php echo $this->get_field_name('boton'); ?>" 
             	type="text" 
             	value="<?php echo esc_attr($boton); ?>" />
    	</label>
    </p>

    <p>
    	<label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Enlace del botón:'); ?>
      	<input class="widefat" 
      				id="<?php echo $this->get_field_id('link'); ?>" 
             	name="<?php echo $this->get_field_name('link'); ?>" 
             	type="text" 
             	value="<?php echo esc_attr($link); ?>" />
    	</label>
    </p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
    $instance['titulo'] = strip_tags($new_instance['titulo']);
    $instance['texto'] = strip_tags($new_instance['texto']);
    $instance['boton'] = strip_tags($new_instance['boton']);
    $instance['link'] = strip_tags($new_instance['link']);
    return $instance;
	}

	public function widget( $args, $instance ) {
		extract( $args , EXTR_SKIP);

	    $titulo = empty($instance['titulo']) ? ' ' : apply_filters('widget_title', $instance['titulo']);
    	$texto = empty($instance['texto']) ? '' : $instance['texto'];
    	$boton = empty($instance['boton']) ? '' : $instance['boton'];
    	$link = empty($instance['link']) ? '' : $instance['link'];

	    echo $before_widget;

	    if ( !empty($titulo) ) { 
  	    echo '<div class="large callout fondo-gris--claro">';
        echo $before_title;
  	    echo '<h4>';
  	    echo $titulo;
  	    echo '</h4>';
        echo $after_title;
  	    echo '<p>';
  	    echo $texto;
  	    echo '</p>'; 
  	    echo '<a class="small button" href="';
  	    echo $link . '">';
  	    echo $boton;
  	    echo '</a>';
  	    echo '</div>';
	    }
      
	    echo $after_widget;
	}
}
add_action('widgets_init', create_function('', 'return register_widget("bloque_destacado_largo");'));
?>