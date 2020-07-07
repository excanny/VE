<?php
/**
 * Nubia Advertise Widget
 * @package Nubia
 */

class Nubia_Medium_Rectangle_Ad extends WP_Widget {

  /* Register Widget with WordPress */
  function __construct() {
    parent::__construct(
      'nubia_medium_rectangle_ad', // Base ID
      esc_html__( 'Nubia: Advertise', 'nubia' ), // Name
      array( 'description' => esc_html__( 'Displays advertise unit.', 'nubia' ), ) // Args
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
      'title'     =>  esc_html__( 'Advertisement', 'nubia' ),
      'img_url'   =>  '',
      'dest_url'  =>  ''
    );

    $instance = wp_parse_args( (array) $instance, $defaults );
  ?>

    <p>
      <label for='<?php echo esc_attr($this->get_field_id( 'title' )); ?>'><?php esc_html_e( 'Title', 'nubia' ); ?></label>
      <input type='text' class='widefat' id='<?php echo esc_attr($this->get_field_id( 'title' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'title' )); ?>' value='<?php echo esc_attr($instance['title']); ?>'/>
    </p>
    <p>
      <label for='<?php echo esc_attr($this->get_field_id( 'img_url' )); ?>'><?php esc_html_e( 'Image URL', 'nubia' ); ?></label>
      <input type='text' class='widefat' id='<?php echo esc_attr($this->get_field_id( 'img_url' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'img_url' )); ?>' value='<?php echo esc_url($instance['img_url']); ?>'/>
    </p>
    <p>
      <label for='<?php echo esc_attr($this->get_field_id( 'dest_url' )); ?>'><?php esc_html_e( 'Destination URL', 'nubia' ); ?></label>
      <input type='text' class='widefat' id='<?php echo esc_attr($this->get_field_id( 'dest_url' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'dest_url' )); ?>' value='<?php echo esc_url($instance['dest_url']); ?>'/>
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
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    $instance[ 'img_url' ]  = $new_instance[ 'img_url' ];
    $instance[ 'dest_url' ] = $new_instance[ 'dest_url' ];
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

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Advertisement', 'nubia' );
    $img_url = ( ! empty( $instance['img_url'] ) ) ? $instance['img_url'] : '';
    $dest_url = ( ! empty( $instance['dest_url'] ) ) ? $instance['dest_url'] : '';

    echo wp_kses_post($before_widget);
    if ( ! empty($title) ) {
      echo wp_kses_post($before_title. $title . $after_title);
    }
    ?>

    <div class='nubia-medium-rectangle-widget'>
      <a href='<?php echo esc_attr($dest_url); ?>' target='_blank'>
        <img src='<?php echo esc_attr($img_url); ?>' alt='<?php echo esc_attr($title); ?>'>
      </a>
    </div>

<?php

  echo wp_kses_post($after_widget);
  }

}

/**
 * Register Ads Widget
 */
function register_nubia_medium_rectangle_ad() {
  register_widget( 'Nubia_Medium_Rectangle_Ad' );
}
add_action( 'widgets_init', 'register_nubia_medium_rectangle_ad' );