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

         define('MY_PLUGIN_PATH',plugin_dir_path( __FILE__ ));

         require_once(plugin_dir_path(__FILE__).'/vendor/autoload.php');
      }

      public function initialize(){
         include_once MY_PLUGIN_PATH.'/includes/utilities.php';
      }
        
    }


    $contactPlugin = new ContactPlugin;


    $contactPlugin->initialize();
 }