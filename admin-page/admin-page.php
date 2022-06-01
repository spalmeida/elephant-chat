<?php

/*
*   Plugin Name: Elephant Chat
*   Author: Samuel Prado Almeida
*   Version: 1.0.0
*/


class Elephant_Chat_settings_Plugin {

    public function __construct() {
        add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ) );
        add_action( 'admin_init', array( $this, 'setup_sections' ) );
        add_action( 'admin_init', array( $this, 'setup_fields' ) );
    }

    public function create_plugin_settings_page() {
        $page_title = 'Elephant Chat Settings Page';
        $menu_title = 'Elephant Chat';
        $capability = 'manage_options';
        $slug = 'elephant_chat_setting';
        $callback = array( $this, 'plugin_settings_page_content' );
        $icon = 'dashicons-format-chat';
        $position = 20;

        add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
    }

    public function plugin_settings_page_content() {
        return require_once 'template/index.php';
    }

    public function admin_notice() { ?>
        <?php 

        ?>
        <div class="notice notice-success is-dismissible">
            <p>Configurações atualizadas com sucesso!</p>
            </div><?php
        }

        public function setup_sections() {
            add_settings_section( 'our_first_section', 'Configurações<br><br>', array(), 'elephant_chat_setting' );
            add_settings_section( 'section_whatsapp', '<hr>Whatasapp', array(), 'elephant_chat_setting' );
            add_settings_section( 'section_contato', '<hr>Contato', array(), 'elephant_chat_setting' );
            add_settings_section( 'section_blipchat', '<hr>Blip Chat', array(), 'elephant_chat_setting' );
            add_settings_section( 'section_telefone', '<hr>Telefone', array(), 'elephant_chat_setting' );
            add_settings_section( 'section_link', '<hr>Link', array(), 'elephant_chat_setting' );
        }

        public function setup_fields() {
            $fields = array(

                /*
                |--------------------------------------------------------------------------
                | CHAT
                |--------------------------------------------------------------------------
                */
                array(
                    'uid' => 'elephant_chat_mensagem',
                    'label' => __('Chat Mensagem', 'elephant_chat'),
                    'section' => 'our_first_section',
                    'type' => 'text',
                    'placeholder' => __('Chat Mensagem', 'elephant_chat'),
                    'default' => __('Em que posso te ajudar?', 'elephant_chat'),
                ),

                /*
                |--------------------------------------------------------------------------
                | Whatsapp
                |--------------------------------------------------------------------------
                */
                array(
                    'uid' => 'elephant_chat_whatsapp',
                    'label' => __('Número', 'elephant_chat'),
                    'section' => 'section_whatsapp',
                    'type' => 'text',
                    'placeholder' => __('Número whatasapp', 'elephant_chat'),
                ),
                array(
                    'uid' => 'elephant_chat_whatsapp_text',
                    'label' => __('Texto', 'elephant_chat'),
                    'section' => 'section_whatsapp',
                    'type' => 'text',
                    'placeholder' => __('Texto a ser exibido', 'elephant_chat'),
                    'default' => __('Whatsapp', 'elephant_chat')
                ),
                array(
                    'uid' => 'elephant_chat_whatsapp_icon',
                    'label' => __('WhatsApp Icon', 'elephant_chat'),
                    'section' => 'section_whatsapp',
                    'type' => 'text',
                    'supplimental' => __('<a href="https://fontawesome.com/v6/search?m=free&s=solid%2Cbrands" target="_blank">icon fontawesome</a>'),
                    'placeholder' => __('icon'),
                    'default' => _('fa-brands fa-whatsapp-square')
                ),

                /*
                |--------------------------------------------------------------------------
                | Contato
                |--------------------------------------------------------------------------
                */
                array(
                    'uid' => 'elephant_chat_contato',
                    'label' => __('Contato', 'elephant_chat'),
                    'section' => 'section_contato',
                    'type' => 'text',
                    'placeholder' => __('Informe o endereço da página de contato'),
                    'default' => _('https://')
                ),
                array(
                    'uid' => 'elephant_chat_contato_text',
                    'label' => __('Texto', 'elephant_chat'),
                    'section' => 'section_contato',
                    'type' => 'text',
                    'placeholder' => __('Texto a ser exibido'),
                    'default' => _('Inscreva-se!')
                ),
                array(
                    'uid' => 'elephant_chat_contato_icon',
                    'label' => __('Contato Icon', 'elephant_chat'),
                    'section' => 'section_contato',
                    'type' => 'text',
                    'supplimental' => __('<a href="https://fontawesome.com/v6/search?m=free&s=solid%2Cbrands" target="_blank">icon fontawesome</a>'),
                    'placeholder' => __('icon'),
                    'default' => _('fa-solid fa-envelope')
                ),

                /*
                |--------------------------------------------------------------------------
                | Blip Chat
                |--------------------------------------------------------------------------
                */
                array(
                    'uid' => 'elephant_chat_blip_chat',
                    'label' => __('AppKey', 'elephant_chat'),
                    'section' => 'section_blipchat',
                    'type' => 'text'
                ),
                array(
                    'uid' => 'elephant_chat_blip_chat_text',
                    'label' => __('Texto', 'elephant_chat'),
                    'section' => 'section_blipchat',
                    'type' => 'text',
                    'placeholder' => __('Texto a ser exibido'),
                    'default' => _('Atendimento ao aluno')
                ),
                array(
                    'uid' => 'elephant_chat_blip_chat_icon',
                    'label' => __('Blip Chat Icon', 'elephant_chat'),
                    'section' => 'section_blipchat',
                    'type' => 'text',
                    'supplimental' => __('<a href="https://fontawesome.com/v6/search?m=free&s=solid%2Cbrands" target="_blank">icon fontawesome</a>'),
                    'placeholder' => __('icon'),
                    'default' => _('fa-solid fa-comment-dots')
                ),


                /*
                |--------------------------------------------------------------------------
                | Telefone
                |--------------------------------------------------------------------------
                */
                array(
                    'uid' => 'elephant_chat_phone',
                    'label' => __('Telefone', 'elephant_chat'),
                    'section' => 'section_telefone',
                    'type' => 'text',
                    'placeholder' => __('Informe o seu telefone')
                ),
                array(
                    'uid' => 'elephant_chat_phone_text',
                    'label' => __('Texto', 'elephant_chat'),
                    'section' => 'section_telefone',
                    'type' => 'text',
                    'placeholder' => __('Texto a ser exibido'),
                    'default' => _('Telefone')
                ),
                array(
                    'uid' => 'elephant_chat_phone_icon',
                    'label' => __('Telefone Icon', 'elephant_chat'),
                    'section' => 'section_telefone',
                    'type' => 'text',
                    'supplimental' => __('<a href="https://fontawesome.com/v6/search?m=free&s=solid%2Cbrands" target="_blank">icon fontawesome</a>'),
                    'placeholder' => __('icon'),
                    'default' => _('fa-solid fa-phone')
                ),

                /*
                |--------------------------------------------------------------------------
                | Link
                |--------------------------------------------------------------------------
                */
                array(
                    'uid' => 'elephant_chat_link',
                    'label' => __('Link Url', 'elephant_chat'),
                    'section' => 'section_link',
                    'type' => 'text',
                    'placeholder' => __('Informe o seu endereço'),
                    'default' => _('https://')
                ),
                array(
                    'uid' => 'elephant_chat_link_text',
                    'label' => __('Texto', 'elephant_chat'),
                    'section' => 'section_link',
                    'type' => 'text',
                    'placeholder' => __('Texto a ser exibido')
                ),
                array(
                    'uid' => 'elephant_chat_link_icon',
                    'label' => __('Link Icon', 'elephant_chat'),
                    'section' => 'section_link',
                    'type' => 'text',
                    'supplimental' => __('<a href="https://fontawesome.com/v6/search?m=free&s=solid%2Cbrands" target="_blank">icon fontawesome</a>'),
                    'placeholder' => __('icon'),
                    'default' => _('fa-solid fa-pen-to-square')
                ),


            );
foreach( $fields as $field ){

    add_settings_field( 
        $field['uid'], 
        $field['label'], 
        array( 
            $this, 
            'field_callback' 
        ), 
        'elephant_chat_setting', 
        $field['section'], 
        $field 
    );
    register_setting( 'elephant_chat_setting', $field['uid'] );
}
}

public function field_callback( $arguments ) {

    $value = get_option( $arguments['uid'] );

    if( ! $value ) {
        $value = $arguments['default'];
    }

    switch( $arguments['type'] ){
        case 'text':
        printf( '<input name="%1$s" id="%1$s" type="%2$s" class="form-control rounded border" placeholder="%3$s" value="%4$s" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value );
        break;
    }

    if( $supplimental = $arguments['supplimental'] ){
        printf( '<p class="description"> %s </p>', $supplimental);
    }

}

}
new Elephant_Chat_settings_Plugin();