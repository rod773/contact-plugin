<?php

/***
 * Plugin Name: Contact Plugin
 * Author: Rodrigo
 * Description: Contact Plugin
 * Verions: 0.0.1
 */

 if(!defined('ABSPATH')){
    die('You  can not be here');
 }


 if(!class_exists('ContactPlugin')){

    class ContactPlugin{

      public function __construct(){
         require_once(plugin_dir_path(__FILE__));
      }
        
    }


    new ContactPlugin;
 }