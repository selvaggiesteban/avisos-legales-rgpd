<?php
/**
 * Plugin Name: Avisos Legales RGPD
 * Plugin URI: http://ejemplo.com/avisos-legales-rgpd
 * Description: Plugin para crear textos legales y cumplir RGPD fácil y rápido.
 * Version: 1.0.0
 * Author: Esteban Selvaggi
 * Author URI: https://selvaggiesteban.dev
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: avisos-legales-rgpd
 * Domain Path: /languages
 */

// Si este archivo es llamado directamente, abortar.
if (!defined('WPINC')) {
    die;
}

// Definir constantes del plugin
define('AVISOS_LEGALES_RGPD_VERSION', '1.0.0');
define('AVISOS_LEGALES_RGPD_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('AVISOS_LEGALES_RGPD_PLUGIN_URL', plugin_dir_url(__FILE__));

class Avisos_Legales_RGPD {

    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
    }

    public function add_admin_menu() {
        add_menu_page(
            'Avisos Legales RGPD',
            'Avisos Legales',
            'manage_options',
            'avisos-legales-rgpd',
            array($this, 'display_admin_page'),
            'dashicons-shield',
            26
        );
    }

    public function register_settings() {
        register_setting('avisos_legales_rgpd_options', 'avisos_legales_rgpd_data');
    }

    public function enqueue_admin_scripts($hook) {
        if ('toplevel_page_avisos-legales-rgpd' !== $hook) {
            return;
        }
        wp_enqueue_style('avisos-legales-rgpd-admin', AVISOS_LEGALES_RGPD_PLUGIN_URL . 'admin/css/avisos-legales-rgpd-admin.css', array(), AVISOS_LEGALES_RGPD_VERSION);
        wp_enqueue_script('avisos-legales-rgpd-admin', AVISOS_LEGALES_RGPD_PLUGIN_URL . 'admin/js/avisos-legales-rgpd-admin.js', array('jquery'), AVISOS_LEGALES_RGPD_VERSION, true);
    }

    public function display_admin_page() {
        if (isset($_POST['avisos_legales_rgpd_nonce']) && wp_verify_nonce($_POST['avisos_legales_rgpd_nonce'], 'avisos_legales_rgpd_save')) {
            if (isset($_POST['submit'])) {
                $this->save_form_data();
                add_settings_error('avisos_legales_rgpd_messages', 'avisos_legales_rgpd_message', __('La información ha sido guardada.', 'avisos-legales-rgpd'), 'updated');
            } elseif (isset($_POST['create_pages'])) {
                $this->create_legal_pages();
            }
        }

        settings_errors('avisos_legales_rgpd_messages');

        $data = get_option('avisos_legales_rgpd_data', array());
        include AVISOS_LEGALES_RGPD_PLUGIN_DIR . 'admin/partials/avisos-legales-rgpd-admin-display.php';
    }

    private function save_form_data() {
        $data = array(
            'url' => sanitize_text_field($_POST['url']),
            'titulo' => sanitize_text_field($_POST['titulo']),
            'responsable_tipo' => sanitize_text_field($_POST['responsable_tipo']),
            'responsable_nombre' => sanitize_text_field($_POST['responsable_nombre']),
            'nif' => sanitize_text_field($_POST['nif']),
            'direccion' => sanitize_textarea_field($_POST['direccion']),
            'telefono' => sanitize_text_field($_POST['telefono']),
            'fax' => sanitize_text_field($_POST['fax']),
            'email' => sanitize_email($_POST['email']),
            'datos_recogidos' => sanitize_text_field($_POST['datos_recogidos']),
            'tiempo_conservacion' => sanitize_text_field($_POST['tiempo_conservacion']),
            'compartir_datos' => sanitize_text_field($_POST['compartir_datos']),
            'empresas_compartidas' => sanitize_textarea_field($_POST['empresas_compartidas']),
            'ssl' => isset($_POST['ssl']) ? 1 : 0,
            'pages_to_create' => isset($_POST['pages_to_create']) ? array_map('sanitize_text_field', $_POST['pages_to_create']) : [],
        );

        update_option('avisos_legales_rgpd_data', $data);
    }

    public function create_legal_pages() {
        $data = get_option('avisos_legales_rgpd_data');
        if (empty($data)) {
            add_settings_error('avisos_legales_rgpd_messages', 'avisos_legales_rgpd_message', __('Por favor, guarde la información antes de crear las páginas legales.', 'avisos-legales-rgpd'), 'error');
            return;
        }

        $pages = array(
            'politica-privacidad' => 'Política de Privacidad',
            'aviso-legal' => 'Aviso Legal',
            'politica-cookies' => 'Política de Cookies',
            'declaracion-accesibilidad' => 'Declaración de Accesibilidad'
        );

        $created_pages = [];

        foreach ($pages as $slug => $title) {
            if (in_array($slug, $data['pages_to_create'])) {
                $content = $this->get_page_content($slug, $data);
                $page_id = $this->create_or_update_page($slug, $title, $content);
                update_option('avisos_legales_rgpd_' . $slug . '_page_id', $page_id);
                $created_pages[] = $title;
            }
        }

        if (!empty($created_pages)) {
            $message = sprintf(__('Se han creado o actualizado las siguientes páginas: %s', 'avisos-legales-rgpd'), implode(', ', $created_pages));
            add_settings_error('avisos_legales_rgpd_messages', 'avisos_legales_rgpd_message', $message, 'updated');
        } else {
            add_settings_error('avisos_legales_rgpd_messages', 'avisos_legales_rgpd_message', __('No se ha seleccionado ninguna página para crear.', 'avisos-legales-rgpd'), 'error');
        }
    }

    private function get_page_content($slug, $data) {
        ob_start();
        include AVISOS_LEGALES_RGPD_PLUGIN_DIR . 'templates/' . $slug . '.php';
        return ob_get_clean();
    }

    private function create_or_update_page($slug, $title, $content) {
        $page = get_page_by_path($slug);

        if (!$page) {
            return wp_insert_post(array(
                'post_title' => $title,
                'post_name' => $slug,
                'post_content' => $content,
                'post_status' => 'publish',
                'post_type' => 'page',
            ));
        } else {
            return wp_update_post(array(
                'ID' => $page->ID,
                'post_content' => $content,
            ));
        }
    }
}

// Inicializar el plugin
function run_avisos_legales_rgpd() {
    $plugin = new Avisos_Legales_RGPD();
}
run_avisos_legales_rgpd();