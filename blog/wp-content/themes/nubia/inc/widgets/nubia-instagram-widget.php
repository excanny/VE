<?php
/**
 * Nubia Instagram Widget
 * @package Nubia
 */

class Nubia_Instagram_Widget extends WP_Widget {

  /* Register Widget with WordPress */
  function __construct() {
    parent::__construct(
      'nubia_instagram_widget', // Base ID
      esc_html__( 'Nubia: Instagram', 'nubia' ), // Name
      array( 'description' => esc_html__( 'Displays Instagram user photos.', 'nubia' ), ) // Args
    );
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */

  public function form( $instance ) {
    $defaults = array(
      'title' => esc_html__( 'Instagram', 'nubia' ),
      'limit' => 3,
      'userId' => '',
      'accessToken' => '',
    );

    $instance = wp_parse_args( (array) $instance, $defaults );
  ?>

    <p>
      <label for='<?php echo esc_attr($this->get_field_id( 'title' )); ?>'><?php esc_html_e( 'Title', 'nubia' ); ?></label>
      <input type='text' class='widefat' id='<?php echo esc_attr($this->get_field_id( 'title' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'title' )); ?>' value='<?php echo esc_attr($instance['title']); ?>'/>
    </p>

    <p>
      <label for='<?php echo esc_attr($this->get_field_id( 'limit' )); ?>'><?php esc_html_e( 'Photos Limit', 'nubia' ); ?></label>
      <input class='tiny-text' id='<?php echo esc_attr($this->get_field_id( 'limit' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'limit' )); ?>' type='number' step='1' min='1' value='<?php echo absint($instance['limit']); ?>' size='3'/>
    </p>

    <p>
      <label for='<?php echo esc_attr($this->get_field_id( 'userId' )); ?>'><?php esc_html_e( 'User ID', 'nubia' ); ?></label>
      <input type='text' class='widefat' id='<?php echo esc_attr($this->get_field_id( 'userId' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'userId' )); ?>' value='<?php echo esc_attr($instance['userId']); ?>'/>
    </p>

    <p>
      <label for='<?php echo esc_attr($this->get_field_id( 'accessToken' )); ?>'><?php esc_html_e( 'Access Token', 'nubia' ); ?></label>
      <input type='text' class='widefat' id='<?php echo esc_attr($this->get_field_id( 'accessToken' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'accessToken' )); ?>' value='<?php echo esc_attr($instance['accessToken']); ?>'/>
    </p>

  <?php

  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
    $instance[ 'limit' ] = (int) $new_instance[ 'limit' ];
    $instance[ 'userId' ] = $new_instance[ 'userId' ];
    $instance[ 'accessToken' ] = $new_instance[ 'accessToken' ];
    return $instance;
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */

  public function widget( $args, $instance ) {
    extract($args);

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Instagram', 'nubia' );
    $limit = ( ! empty( $instance['limit'] ) ) ? $instance['limit'] : '';
    $userId = ( ! empty( $instance['userId'] ) ) ? $instance['userId'] : '';
    $accessToken = ( ! empty( $instance['accessToken'] ) ) ? $instance['accessToken'] : '';

    echo wp_kses_post($before_widget);
    if ( ! empty($title) ) {
      echo wp_kses_post($before_title. $title . $after_title);
    }

    wp_localize_script( 'nubia-main-script', 'nubia_instagram_widget_config', array(
      'limit' => $limit,
      'userId' => $userId,
      'accessToken' => $accessToken,
    ) );
    ?>

    <div id='instafeed-<?php echo explode("-", $args["id"])[0] ;?>' class='c-widget-instagram'></div>

<?php

  echo wp_kses_post($after_widget);
  }

}

/**
 * Register Instagram Widget
 */
function register_instagram_widget() {
  register_widget( 'Nubia_Instagram_Widget' );
}
add_action( 'widgets_init', 'register_instagram_widget' );