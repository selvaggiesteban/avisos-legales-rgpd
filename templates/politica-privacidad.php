<?php
// Asegurarse de que $data está disponible y contiene la información necesaria
if (!isset($data) || !is_array($data)) {
    return;
}
?>
<h1>Política de Privacidad</h1>

<p>En cumplimiento con el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos (RGPD), <?php echo esc_html($data['titulo']); ?> informa a los usuarios de lo siguiente:</p>

<h2>Responsable del tratamiento</h2>
<p>
    <?php if ($data['responsable_tipo'] === 'persona_fisica'): ?>
        <?php echo esc_html($data['responsable_nombre']); ?><br>
    <?php else: ?>
        <?php echo esc_html($data['titulo']); ?><br>
    <?php endif; ?>
    NIF: <?php echo esc_html($data['nif']); ?><br>
    Dirección: <?php echo esc_html($data['direccion']); ?><br>
    Teléfono: <?php echo esc_html($data['telefono']); ?><br>
    <?php if (!empty($data['fax'])): ?>
        Fax: <?php echo esc_html($data['fax']); ?><br>
    <?php endif; ?>
    Email: <?php echo esc_html($data['email']); ?>
</p>

<h2>Finalidad del tratamiento</h2>
<p>Los datos personales proporcionados se utilizarán para <?php echo esc_html($data['datos_recogidos'] === 'identificativos' ? 'fines de identificación y contacto' : 'fines de identificación, contacto y otros fines específicos relacionados con los datos sensibles proporcionados'); ?>.</p>

<h2>Legitimación</h2>
<p>La base legal para el tratamiento de sus datos es el consentimiento del usuario al proporcionar sus datos.</p>

<h2>Conservación de datos</h2>
<p>Los datos personales proporcionados se conservarán durante un periodo de <?php echo esc_html($data['tiempo_conservacion']); ?> desde su última confirmación de interés.</p>

<h2>Destinatarios</h2>
<?php if ($data['compartir_datos'] === 'si'): ?>
    <p>Sus datos podrán ser compartidos con las siguientes entidades:</p>
    <p><?php echo nl2br(esc_html($data['empresas_compartidas'])); ?></p>
<?php else: ?>
    <p>Sus datos no serán compartidos con terceros.</p>
<?php endif; ?>

<h2>Derechos</h2>
<p>Usted tiene derecho a obtener confirmación sobre si estamos tratando sus datos personales y, en tal caso, acceder a los mismos, rectificarlos, solicitar su supresión, oponerse o limitar su tratamiento, así como solicitar su portabilidad.</p>

<h2>Información adicional</h2>
<p>Puede consultar información adicional y detallada sobre Protección de Datos en nuestra página web: <?php echo esc_url($data['url']); ?></p>

<?php if ($data['ssl']): ?>
    <p>Este sitio web cuenta con un certificado SSL que garantiza que los datos se transmiten de forma segura y confidencial.</p>
<?php endif; ?>