<?php
// Asegurarse de que $data está disponible y contiene la información necesaria
if (!isset($data) || !is_array($data)) {
    return;
}
?>
<h1>Declaración de Accesibilidad</h1>

<h2>Situación de cumplimiento</h2>

<p><?php echo esc_html($data['titulo']); ?> (en adelante, también Sitio Web) es parcialmente conforme con el Real Decreto 1112/2018, de 7 de septiembre, debido a la falta de conformidad de los aspectos que se indican a continuación.</p>

<h2>Contenido no accesible</h2>

<p>El contenido que se recoge a continuación no es accesible por los siguientes motivos:</p>

<ol type="a">
    <li>Falta de conformidad con el RD 1112/2018: No aplica. Cumple el 100% de los criterios de accesibilidad web.</li>
    <li>Carga desproporcionada: No aplica.</li>
    <li>Contenido no entra dentro del ámbito de la legislación aplicable:
        <ul>
            <li>Pueden existir archivos de ofimática en PDF y otros formatos publicados antes del 20 de septiembre de 2018 que no cumplan en su totalidad todos los requisitos de accesibilidad. Aunque se ha procurado que la mayoría de ellos sí lo cumplan.</li>
            <li>Puede haber contenidos de terceros que no estén desarrollados en esta Unidad ni bajo su control como imágenes, mapas interactivos, videos, documentos, reproductores, etc.</li>
            <li>Pueden existir archivos pregrabados publicados antes del 20 de septiembre de 2018 que no cumplan en su totalidad todos los requisitos de accesibilidad.</li>
            <li>Partes o la totalidad del sitio web puede estar creado con un CMS (WordPress, Shopify, PrestaShop, etc), por lo que debido a alguna actualización o cambio en los sistemas, puede que no todo el contenido generado o autogenerado cumpla con todas las normativas de accesibilidad.</li>
        </ul>
    </li>
</ol>

<h2>Preparación de la presente declaración de accesibilidad</h2>

<p>La presente declaración fue preparada el día <?php echo date('d/m/Y'); ?></p>

<p>El método empleado para preparar la declaración ha sido una autoevaluación llevada a cabo por la propia empresa.</p>

<p>Última revisión de la declaración: <?php echo date('d/m/Y'); ?></p>

<h2>Observaciones y datos de contacto</h2>

<p>Puede realizar comunicaciones sobre requisitos de accesibilidad (artículo 10.2.a del Real Decreto 1112/2018, de 7 de septiembre) como, por ejemplo:</p>

<ul>
    <li>Informar sobre cualquier posible incumplimiento por parte de este sitio web.</li>
    <li>Transmitir otras dificultades de acceso al contenido.</li>
    <li>Formular cualquier otra consulta o sugerencia de mejora relativa a la accesibilidad del sitio web.</li>
</ul>

<p>A través de las siguientes vías:</p>

<p>Correo electrónico: <?php echo esc_html($data['email']); ?></p>

<h2>Procedimiento de aplicación</h2>

<p>Acorde al artículo 10.2.b del RD 1112/2018, también puedes presentar:</p>

<ul>
    <li>Una queja relativa al cumplimiento de los requisitos del RD 1112/2018.</li>
    <li>Una solicitud de información accesible relativa a:
        <ul>
            <li>Contenidos que están excluidos del ámbito de aplicación del RD 1112/2018 según lo establecido por el artículo 3, apartado 4.</li>
            <li>Contenidos que están exentos del cumplimiento de los requisitos de accesibilidad por imponer una carga desproporcionada.</li>
        </ul>
    </li>
</ul>

<p>En la Solicitud de información accesible, se debe concretar, con toda claridad, los hechos, razones y petición que permitan constatar que se trata de una solicitud razonable y legítima.</p>

<p>Las comunicaciones serán recibidas y tratadas por la dirección de la empresa, como unidad responsable de los contenidos de este sitio web.</p>

<h2>Contenido opcional</h2>

<p>La versión actualmente visible de este sitio web es del día <?php echo date('d/m/Y'); ?> y en esa fecha se hizo la revisión del nivel de accesibilidad vigente en aquel momento.</p>

<p>A partir de dicha fecha se llevan a cabo revisiones parciales diarias del contenido web nuevo o modificado, tanto de las plantillas como de las páginas y documentos finales publicados, a fin de asegurar el cumplimiento de los requerimientos de accesibilidad de la Norma UNE-EN 301549:2022, considerando las excepciones del Real Decreto 1112/2018, de 7 de septiembre.</p>

<h2>Medidas para facilitar la accesibilidad</h2>

<p>Entre otras se adoptan las siguientes medidas para facilitar la accesibilidad:</p>

<ul>
    <li>Utilización de texto alternativo en las imágenes.</li>
    <li>Los enlaces ofrecen detalles de la función o destino del hipervínculo.</li>
    <li>Uso de los estándares del W3C: XHTML 1.0, CSS 3.0, WAI AA.</li>
</ul>

<h2>Compatibilidad</h2>

<p>El sitio web:</p>

<ul>
    <li>Se ha diseñado adaptándose a los estándares y normativas vigentes en relación a la accesibilidad, cumpliendo con los puntos de verificación de prioridad 2 (AA) definidos en la especificación de Pautas de Accesibilidad al Contenido en la Web (WCAG 2.1)</li>
    <li>Está optimizado para las últimas versiones vigentes de Chrome, Edge, Firefox, Safari y Opera</li>
    <li>Está diseñado para su correcta visualización en cualquier resolución y dispositivo de escritorio, tabletas o móviles (diseño responsive)</li>
    <li>Se ha realizado utilizando HTML5 como lenguaje de marcado y hojas de estilo CSS 3 para su diseño.</li>
</ul>

<p>Además, se realiza un trabajo continuo de auditoría y revisión de contenidos para facilitar su interpretación y mejorar la navegación por el portal web.</p>