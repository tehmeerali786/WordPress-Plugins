<?php

/*

Plugin Name: G.M.Payrani Shortcode Library
Description: Create a central palce for your shortcodes
Author: Tehmeer Ali Paryani
Version: 1.0
*/

add_shortcode('wdm-hello', 'say_hello');

function say_hello() {

 return 'G.M.Paryani says, "Hello!"';

}



add_shortcode('wdm-whatsup', 'say_whatsup');

function say_whatsup() {

    return 'Farkhanda Akhtar Paryani says, "Whats Up!"';


}
?>
