<?php

/*

  Plugin Name: Fix WordPress
  Description: Change the spelling of WordPress to Capital
  Version: 1.0
  Author: Bruce Chamoff of Hot Web Ideas

*/

// Filter Hook

add_filter('the_content', array('hotwebideas_fix_wordpress', 'fix_spelling'));


class hotwebideas_fix_wordpress {

        function fix_spelling($content) {

              $content = str_replace('Wordpress', 'WordPress', $content);
              $content = $content . "<hr/>Thank you for watching this video tutorial.";
              return $content;


        }

}

?>
