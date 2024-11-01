<?php
/**
 * Plugin Name: Simple Redirector
 * Plugin URI: https://mastarachef.org/
 * Description: All 404 Pages to Homepage
 * Version: 1.0
 * Author: MastaraChef
 * Author URI: 
 */


if( !function_exists('redirect_all_404_pages_to_homepage') ){

    add_action( 'template_redirect', 'redirect_all_404_pages_to_homepage' );

    function redirect_all_404_pages_to_homepage(){
       if(is_404()):
            wp_safe_redirect( home_url('/') );
            exit;
        endif;
    }
}
