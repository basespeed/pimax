<?php
/*
Plugin Name: PiMax
Plugin URI: https://pimax.me
Description: WordPress Plugin Assistants
Version: 1.2
Author: Pitagon
Author URI: https://pitagon.io
Text Domain: pimax
*/

/**
 * Register and enqueue a custom stylesheet for Piads.
 */
function pimax_admin_style() {
    wp_register_style( 'admin_css', plugin_dir_url(__FILE__) . '/assets/css/admin.css', true, '1.0' );
    wp_enqueue_style( 'admin_css' );
}
add_action( 'admin_enqueue_scripts', 'pimax_admin_style' );

class PiMax{
    private static $instance;

    public static function getInstance(){
        if(! isset(self::$instance)){
            self::$instance = new PiMax();
            self::$instance->setup();
            self::$instance->PiAds();
            self::$instance->DashBroad();
            self::$instance->update();
        }
    }

    public function setup(){
        if(!defined('DIR')){
            define('DIR',plugin_dir_path(__FILE__));
        }

        if(defined('URL_CORE')){
            define('URL_CORE', plugin_dir_url(__FILE__));
        }
    }

    //Piads
    public function PiAds(){
        //Backend
        require_once DIR . '/inc/PiAds/setting.php';

        //FrontEnd
        require_once DIR . '/inc/PiAds/main.php';
    }

    //DashBroad
    public function DashBroad(){
        //widget
        require_once DIR . '/inc/Dashbroad/widget_intro.php';
    }

    //update plugin
    public function update(){
        require_once DIR . '/inc/update/update.php';
        $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
            'https://github.com/basespeed/pimax/',
            __FILE__,
            'pimax'
        );
    }
}

function getPiMax(){
    return PiMax::getInstance();
}

getPiMax();






