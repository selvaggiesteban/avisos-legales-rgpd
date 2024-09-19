<div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form method="post" action="">
        <?php wp_nonce_field('avisos_legales_rgpd_save', 'avisos_legales_rgpd_nonce'); ?>
        
        <table class="form-table">
            <tr>
                <th scope="row"><label for="url">Dirección del sitio (URL)</label></th>
                <td><input name="url" type="url" id="url" value="<?php echo esc_url(get_option('home')); ?>" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="titulo">Título del sitio web</label></th>
                <td><input name="titulo" type="text" id="titulo" value="<?php echo esc_attr(get_bloginfo('name')); ?>" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="responsable_tipo">Tipo de responsable</label></th>
                <td>
                    <select name="responsable_tipo" id="responsable_tipo" required>
                        <option value="persona_fisica" <?php selected($data['responsable_tipo'] ?? '', 'persona_fisica'); ?>>Persona física</option>
                        <option value="persona_juridica" <?php selected($data['responsable_tipo'] ?? '', 'persona_juridica'); ?>>Persona jurídica</option>
                    </select>
                </td>
            </tr>
            <tr id="responsable_nombre_field">
                <th scope="row"><label for="responsable_nombre">Nombre y apellidos del responsable</label></th>
                <td><input name="responsable_nombre" type="text" id="responsable_nombre" value="<?php echo esc_attr($data['responsable_nombre'] ?? ''); ?>" class="regular-text"></td>
            </tr>
            <tr>
                <th scope="row"><label for="nif">NIF</label></th>
                <td><input name="nif" type="text" id="nif" value="<?php echo esc_attr($data['nif'] ?? ''); ?>" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="direccion">Dirección completa</label></th>
                <td><textarea name="direccion" id="direccion" class="large-text" rows="3" required><?php echo esc_textarea($data['direccion'] ?? ''); ?></textarea></td>
            </tr>
            <tr>
                <th scope="row"><label for="telefono">Número de teléfono</label></th>
                <td><input name="telefono" type="tel" id="telefono" value="<?php echo esc_attr($data['telefono'] ?? ''); ?>" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="fax">Número de fax</label></th>
                <td><input name="fax" type="tel" id="fax" value="<?php echo esc_attr($data['fax'] ?? ''); ?>" class="regular-text"></td>
            </tr>
            <tr>
                <th scope="row"><label for="email">E-mail</label></th>
                <td><input name="email" type="email" id="email" value="<?php echo esc_attr($data['email'] ?? ''); ?>" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="datos_recogidos">Tipos de datos recogidos</label></th>
                <td>
                    <select name="datos_recogidos" id="datos_recogidos" required>
                        <option value="identificativos" <?php selected($data['datos_recogidos'] ?? '', 'identificativos'); ?>>Datos identificativos</option>
                        <option value="sensibles" <?php selected($data['datos_recogidos'] ?? '', 'sensibles'); ?>>Datos identificativos y datos personales sensibles</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="tiempo_conservacion">Tiempo de conservación de datos</label></th>
                <td><input name="tiempo_conservacion" type="text" id="tiempo_conservacion" value="<?php echo esc_attr($data['tiempo_conservacion'] ?? ''); ?>" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="compartir_datos">¿Se comparten los datos?</label></th>
                <td>
                    <select name="compartir_datos" id="compartir_datos" required>
                        <option value="no" <?php selected($data['compartir_datos'] ?? '', 'no'); ?>>No</option>
                        <option value="si" <?php selected($data['compartir_datos'] ?? '', 'si'); ?>>Sí</option>
                    </select>
                </td>
            </tr>
            <tr id="empresas_compartidas_field" style="display: none;">
                <th scope="row"><label for="empresas_compartidas">Empresas con las que se comparten datos</label></th>
                <td><textarea name="empresas_compartidas" id="empresas_compartidas" class="large-text" rows="3"><?php echo esc_textarea($data['empresas_compartidas'] ?? ''); ?></textarea></td>
            </tr>
            <tr>
                <th scope="row"><label for="ssl">Certificado SSL</label></th>
                <td>
                    <input type="checkbox" name="ssl" id="ssl" value="1" <?php checked($data['ssl'] ?? 0, 1); ?>>
                    <label for="ssl">El sitio web cuenta con un certificado SSL</label>
                </td>
            </tr>
        </table>
        
        <p class="submit">
            <?php submit_button('Guardar información', 'primary', 'submit', false); ?>
            <?php submit_button('Crear páginas legales', 'secondary', 'create_pages', false); ?>
        </p>
    </form>
</div>