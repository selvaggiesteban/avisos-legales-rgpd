<?php
class Avisos_Legales_RGPD_Public {
    private $plugin_name;
    private $version;

    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    // Encola los estilos públicos
    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name, AVISOS_LEGALES_RGPD_PLUGIN_URL . 'public/css/avisos-legales-rgpd-public.css', array(), $this->version, 'all');
    }

    // Encola los scripts públicos
    public function enqueue_scripts() {
        wp_enqueue_script($this->plugin_name, AVISOS_LEGALES_RGPD_PLUGIN_URL . 'public/js/avisos-legales-rgpd-public.js', array('jquery'), $this->version, false);
    }
}