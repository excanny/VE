<?php
/**
 * Nubia Recent Posts Widget
 * @package Nubia
 */

class Nubia_Widget_Recent_Posts extends WP_Widget {

  /**
   * Sets up a new Recent Posts widget instance.
   */
  public function __construct() {
    $widget_ops = array('classname' => 'nubia-recent-posts', 'description' => esc_html__( 'Recent Posts with images.', 'nubia') );
    parent::__construct('nubia-recent-posts', esc_html__('Nubia: Recent Posts', 'nubia'), $widget_ops);
    $this->alt_option_name = 'nubia_widget_recent_entries';
  }

  /**
   * Outputs the content for the current Recent Posts widget instance.
   * @param array $args     Display arguments including 'before_title', 'after_title',
   *                        'before_widget', and 'after_widget'.
   * @param array $instance Settings for the current Recent Posts widget instance.
   */
  public function widget( $args, $instance ) {
    if ( ! isset( $args['widget_id'] ) ) {
      $args['widget_id'] = $this->id;
    }

    $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent Posts', 'nubia' );

    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

    $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
    if ( ! $number )
      $number = 5;

    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @see WP_Query::get_posts()
     *
     * @param array $args An array of arguments used to retrieve the recent posts.
     */
    $r = new WP_Query( apply_filters( 'widget_posts_args', array(
      'posts_per_page'      => $number,
      'no_found_rows'       => true,
      'post_status'         => 'publish',
      'ignore_sticky_posts' => true
    ) ) );

    if ($r->have_posts()) :
    ?>
    <?php echo wp_kses_post($args['before_widget']); ?>
    <?php if ( $title ) {
      echo wp_kses_post($args['before_title'] . $title . $args['after_title']);
    } ?>
    <?php while ( $r->have_posts() ) : $r->the_post(); ?>
      <a href='<?php the_permalink(); ?>' class='c-teaser'>
        <div class='c-teaser__content'>
          <h3 class='c-teaser__title'><?php the_title(); ?></h3>
          <time class='c-teaser__date' datetime='<?php the_time( 'c' ); ?>' title='<?php the_time( 'c' ); ?>'><?php echo get_the_date(get_option( 'date_format' )); ?></time>
        </div>
        <div class='c-teaser__media'>
          <div class='c-teaser__image js-fadein' style="background-image: url(<?php esc_url( nubia_entry_feature_image_path('medium') ) ?>)" aria-label="<?php the_title(); ?>"></div>
        </div>
      </a>

    <?php endwhile; ?>
    <?php echo wp_kses_post($args['after_widget']); ?>
    <?php
    // Reset the global $the_post as this query will have stomped on it
    wp_reset_postdata();

    endif;
  }

  /**
   * Handles updating the settings for the current Recent Posts widget instance.
   *
   * @param array $new_instance New settings for this instance as input by the user via
   *                            WP_Widget::form().
   * @param array $old_instance Old settings for this instance.
   * @return array Updated settings to save.
   */
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = sanitize_text_field( $new_instance['title'] );
    $instance['number'] = (int) $new_instance['number'];
    return $instance;
  }

  /**
   * Outputs the settings form for the Recent Posts widget.
   *
   * @param array $instance Current settings.
   */
  public function form( $instance ) {
    $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
    $number = isset( $instance['number'] ) ? absint( $instance['number'] ) : 3;
?>
    <p><label for='<?php echo esc_attr($this->get_field_id( 'title' )); ?>'><?php esc_html_e( 'Title', 'nubia' ); ?></label>
    <input class='widefat' id='<?php echo esc_attr($this->get_field_id( 'title' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'title' )); ?>' type='text' value='<?php echo esc_attr($title); ?>' /></p>

    <p><label for='<?php echo esc_attr($this->get_field_id( 'number' )); ?>'><?php esc_html_e( 'Number of posts to show', 'nubia' ); ?></label>
    <input class='tiny-text' id='<?php echo esc_attr($this->get_field_id( 'number' )); ?>' name='<?php echo esc_attr($this->get_field_name( 'number' )); ?>' type='number' step='1' min='1' value='<?php echo esc_attr($number); ?>' size='3' /></p>
<?php
  }
}

/**
 * Register the recent posts widget
 */
function nubia_widget_recent_posts_registration() {
  register_widget( 'Nubia_Widget_Recent_Posts' );
}
add_action( 'widgets_init', 'nubia_widget_recent_posts_registration' );