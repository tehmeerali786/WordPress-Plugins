<?php

     /**
     * Plugin Name: G.M.Paryani Paypal Secure.
     * Description: Get the Paypal code for secure buttons. You simply pass the button's ID.
     * Version: 1.0
     * Author: Tehmeer Ali Paryani.
     **/


     add_filter('the_content', array('GMParyani_Paypal_Button_Code', 'get_paypal'));

     class GMParyani_Paypal_Button_Code {


        function paypal_button_code($id) {

            $paypal_code = ("

            <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
            <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
            <input type=\"hidden\" name=\"hosted_button_id\" value=\"$id\">
            <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
            <img alt=\"\" border=\"0\" src=\"https://www.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
            </form>

            ");

            return $paypal_code;

        }


        function get_paypal($content) {

            $content = ereg_replace('paypal_([A-Z0-9]+)', GMParyani_Paypal_Button_Code::paypal_button_code('\\1'), $content);

            return "$content";

        }



     }




 ?>
