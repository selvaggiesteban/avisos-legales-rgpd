<?php

// Si no se llama desde WordPress, salir
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Eliminar opciones guardadas
delete_option('avisos_legales_rgpd_data');

// Eliminar las páginas creadas
$pages = array(
    'politica-privacidad',
    'aviso-legal',
    'politica-cookies',
    'declaracion-accesibilidad'
);

foreach ($pages as $slug) {
    $page_id = get_option('avisos_legales_rgpd_' . $slug . '_page_id');
    if ($page_id) {
        wp_delete_post($page_id, true);
        delete_option('avisos_legales_rgpd_' . $slug . '_page_id');
    }
}