<?php 
class bloque_destacado extends WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'bloque_destacado', 'description' => 'Bloque destacado de información' );
    $this->WP_Widget('bloque_destacado', 'Bloque Destacado', $widget_ops);
	}

	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
		$title = $instance['title'];
		$text = $instance['text'];
		$button = $instance['button'];
		$link = $instance['link'];   

		?>

		<?php
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}
?>