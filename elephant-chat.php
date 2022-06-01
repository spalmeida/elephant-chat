<?php

/**
 * Plugin Name: Elephant Chat
 * Plugin URI: https://github.com/worldvisual/elephant-chat
 * Description: WordPress plugin to chat
 * Version: 1.0.0
 * Author: Samuel Almeida
 * Author URI: https://github.com/worldvisual
 */


function elephant_assets() {
    wp_register_style('style', plugins_url('assets/style.css',__FILE__ ));
    wp_enqueue_style('style');
}
add_action( 'init', 'elephant_assets' );

function start_elephant_chat(){
    require_once 'admin-page/admin-page.php';
}
start_elephant_chat();

function elephant_chat(){
    require_once plugin_dir_path( __FILE__ ).'admin-page/template/parts/chat.php';
}
add_shortcode('elephant_chat', 'elephant_chat', 10, 2);