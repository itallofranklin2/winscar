<?php
/**
 * WordPress Sample city selector class
 *
 * Creates a sample widget "My City" with a title and city selector output
 * http://wp-dreams.com/wordpress-widget-select-box/  
 *
 * @author Ernest Marcinko <ernest.marcinko@wp-dreams.com>
 * @version 1.0
 * @link http://wp-dreams.com, http://codecanyon.net/user/anago/portfolio
 * @copyright Copyright (c) 2014, Ernest Marcinko
 */

class My_City extends WP_Widget {
 
  public function __construct() {
      $widget_ops = array('classname' => 'My_City', 'description' => 'Displays a city!' );
      $this->WP_Widget('My_City', 'My city', $widget_ops);
  }
  
  function widget($args, $instance) {
    // PART 1: Extracting the arguments + getting the values
    extract($args, EXTR_SKIP);
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
    $city = empty($instance['city']) ? '' : $instance['city'];

    // Before widget code, if any
    echo (isset($before_widget)?$before_widget:'');
   
    // PART 2: The title and the text output
    if (!empty($title))
      echo $before_title . $title . $after_title;;
    if (!empty($city))
      echo $city;
   
    // After widget code, if any  
    echo (isset($after_widget)?$after_widget:'');
  }
 
  public function form( $instance ) {
   
     // PART 1: Extract the data from the instance variable
     $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
     $title = $instance['title'];
     $city = $instance['city'];   
   
     // PART 2-3: Display the fields
     ?>
     <!-- PART 2: Widget Title field START -->
     <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title: 
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
               name="<?php echo $this->get_field_name('title'); ?>" type="text" 
               value="<?php echo attribute_escape($title); ?>" />
      </label>
      </p>
      <!-- Widget Title field END -->
   
     <!-- PART 3: Widget City field START -->
     <p>
      <label for="<?php echo $this->get_field_id('text'); ?>">City: 
        <select class='widefat' id="<?php echo $this->get_field_id('city'); ?>"
                name="<?php echo $this->get_field_name('city'); ?>" type="text">
          <option value='New York'<?php echo ($city=='New York')?'selected':''; ?>>
            New York
          </option>
          <option value='Los Angeles'<?php echo ($city=='Los Angeles')?'selected':''; ?>>
            Los Angeles
          </option> 
          <option value='Boston'<?php echo ($city=='Boston')?'selected':''; ?>>
            Boston
          </option> 
        </select>                
      </label>
     </p>
     <!-- Widget City field END -->
     <?php
   
  }
 
  function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    $instance['city'] = $new_instance['city'];
    return $instance;
  }
  
}

add_action( 'widgets_init', create_function('', 'return register_widget("My_City");') );
?>