<?php
class Avisos_Legales_RGPD_Admin {
    private $plugin_name;
    private $version;

    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    // Encola los estilos del admin
    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name, AVISOS_LEGALES_RGPD_PLUGIN_URL . 'admin/css/avisos-legales-rgpd-admin.css', array(), $this->version, 'all');
    }

    // Encola los scripts del admin
    public function enqueue_scripts() {
        wp_enqueue_script($this->plugin_name, AVISOS_LEGALES_RGPD_PLUGIN_URL . 'admin/js/avisos-legales-rgpd-admin.js', array('jquery'), $this->version, false);
    }

    // Agrega el menú del plugin en el panel de administración
    public function add_plugin_admin_menu() {
        add_menu_page(
            'Avisos Legales RGPD', 
            'Avisos Legales', 
            'manage_options', 
            $this->plugin_name, 
            array($this, 'display_plugin_admin_page'),
            'dashicons-shield',
            26
        );
    }

    // Muestra la página de administración del plugin
    public function display_plugin_admin_page() {
        require_once AVISOS_LEGALES_RGPD_PLUGIN_DIR . 'admin/partials/avisos-legales-rgpd-admin-display.php';
    }

    // Guarda los datos del formulario
    public function save_form_data() {
        if (isset($_POST['avisos_legales_rgpd_nonce']) && wp_verify_nonce($_POST['avisos_legales_rgpd_nonce'], 'avisos_legales_rgpd_form')) {
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
            );
            update_option('avisos_legales_rgpd_data', $data);
            $this->generate_legal_pages();
        }
    }

    // Genera las páginas legales
    private function generate_legal_pages() {
        $data = get_option('avisos_legales_rgpd_data');
        $pages = array(
            'politica-privacidad' => 'Política de Privacidad',
            'aviso-legal' => 'Aviso Legal',
            'politica-cookies' => 'Política de Cookies',
            'declaracion-accesibilidad' => 'Declaración de Accesibilidad'
        );

        foreach ($pages as $slug => $title) {
            $page_id = $this->create_legal_page($slug, $title, $data);
            update_option('avisos_legales_rgpd_' . $slug . '_page_id', $page_id);
        }
    }

    // Crea una página legal individual
    private function create_legal_page($slug, $title, $data) {
        $content = $this->get_legal_page_content($slug, $data);
        $page = get_page_by_path($slug);

        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title' => $title,
                'post_name' => $slug,
                'post_content' => $content,
                'post_status' => 'publish',
                'post_type' => 'page',
            ));
        } else {
            $page_id = wp_update_post(array(
                'ID' => $page->ID,
                'post_content' => $content,
            ));
        }

        return $page_id;
    }

    // Obtiene el contenido de una página legal
    private function get_legal_page_content($slug, $data) {
        ob_start();
        include AVISOS_LEGALES_RGPD_PLUGIN_DIR . 'templates/' . $slug . '.php';
        return ob_get_clean();
    }
}