<?php
class inserta_imagen extends WP_Widget
{
    public function __construct() {
        $widget_ops = array(
            'classname' => 'inserta_imagen', 'description' => 'Inserta una imagen usando la biblioteca de medios de WordPress.');
        parent::__construct( 'inserta_imagen', 'Inserta una imagen', $widget_ops );
        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
    }

    public function upload_scripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        // wp_enqueue_script('upload_media_widget', plugin_dir_url(__FILE__) . 'upload-media.js', array('jquery'));
        wp_enqueue_style('thickbox');
    }

    public function form( $instance ) {
        $image = '';
        if(isset($instance['image'])) {
            $image = $instance['image'];
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Imagen:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image' ); ?>" 
                  id="<?php echo $this->get_field_id( 'image' ); ?>" 
                  class="widefat" 
                  type="text" 
                  size="36"  
                  value="<?php echo esc_url( $image ); ?>" /><br><br>
            <input class="upload_image_button" type="button" value="Subir imagen" />
        </p>
        <script type="text/javascript">
          jQuery(document).ready(function($) {
            $(document).on("click", ".upload_image_button", function() {
              jQuery.data(document.body, 'prevElement', $(this).prev());
              window.send_to_editor = function(html) {
                  var imgurl = jQuery('img',html).attr('src');
                  var inputText = $(this).siblings('.img');
                  if(inputText != undefined && inputText != '') {
                      inputText.val(imgurl);
                  }
                  tb_remove();
              };
              tb_show('', 'media-upload.php?type=image&TB_iframe=true');
              return false;
            });
          });
        </script>
    <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['image'] = strip_tags($new_instance['image']);
        return $instance;
    }

    public function widget( $args, $instance ) {
      extract( $args , EXTR_SKIP);
      $image = empty($instance['image']) ? '' : $instance['image'];

      echo $before_widget;

      if ( !empty($image) ) {
        echo '<img src="' . $image . '" alt"" />';
      }

      echo $after_widget;
    }
}
add_action( 'widgets_init', create_function( '', 'register_widget("inserta_imagen");' ) );
?>