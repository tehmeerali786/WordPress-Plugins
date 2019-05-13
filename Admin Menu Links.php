<?php

    /**
    * Plugin Name: Admin Menu Links
    * Description: Custom Settings For Your Back End Control Panel
    * Author: Tehmeer Ali Paryani
    */


    add_action('admin_menu', 'set_custom_fields');

    function set_custom_fields(){
      add_menu_page('custom menu title', 'Website Options', 'manage_options', 'tioptions', 'save_custom_fields', '25.2');
      add_submenu_page('tioptions', 'Quick Links', 'Quick Links' , 'manage_options','tioptions_quicklinks', 'get_quick_links');
    }


    function save_custom_fields() {

      echo "<h3>Home Page Content</h3>";
      echo "<form method='post'>";
      echo("<table>");

      $fields = array('Website Address', 'phone','footer_copyright_line', 'blurb');
      $textarea = array('blurb');


      $option = array();

      foreach($fields as $field) {

          if(isset($_POST[$field]))
          {
            update_option($field, $_POST[$field]);
          }

            $value = stripslashes(get_option($field));
            $label = ucwords(strtolower($field));



            if(in_array($field, $textarea))

            {
                echo("

                    <p>
                      <label>$label</label><br/>
                      <textarea col='75' rows='5' name='$field' >$value</textarea>
                    </p>

                ");

            } else {

              echo("

                  <p>
                    <label>$label</label><br/>
                    <input size='75' name='$field' value='$value'>
                  </p>

              ");

            }
      }

      echo("

            <input type='submit'>
            </table>
            </form>


      ");

    }


    function get_quick_links(){

          echo "<h3>Quick Links</h3>";
          echo "<form method='post'>";
          echo "<table>";

          $fields = array('home_page_quick_links');
          $textarea = array('home_page_quick_links');


          $option = array();

          foreach($fields as $field)

          {

              if(isset($_POST[$field]))
              {
                update_option($field, $_POST[$field]);
              }

              $value = stripslashes(get_option($field));
              $label = ucwords(str_replace('_', '', strtolower($field)));

              if(in_array($field, $textarea))

              {

                echo("

                <p>
                  <label>$label</label><br/>
                  <textarea col='75' rows='5' name='$field' >$value</textarea>
                </p>

                <input type='submit'>
                </table>
                </form>
                ");



              }


                  }


              }

?>
