<?php

    /*
     * Plugin Name: Display Featured Image Centered
     * Description: This plugin will display the featured image of any post or page.
     * Version: 1.0
     * Author: Bruce C
     * Author URI: www.google.com
     */

     add_filter('the_content', 'center_featured_image');

     function center_featured_image($content)

      {

          // Retrieve post information

          $id = get_the_ID();
          $title = get_the_title();

          // Retrieve our featured image
          $featured_image = get_the_post_thumbnail($id, array(575, 575), array('alt' => $title, 'id' => 'featured-image', 'class' => 'tb-images'));

          // Return new content
          return  '<div style=" width:100%; text-align:center;" >'. $featured_image. '</div>' . $content;
      }


 ?>
