<?php
// Asegurarse de que $data está disponible y contiene la información necesaria
if (!isset($data) || !is_array($data)) {
    return;
}
?>
<h1>Aviso Legal y Condiciones Generales de Uso</h1>

<h2>I. INFORMACIÓN GENERAL</h2>
<p>En cumplimiento con el deber de información dispuesto en la Ley 34/2002 de Servicios de la Sociedad de la Información y el Comercio Electrónico (LSSI-CE) de 11 de julio, se facilitan a continuación los siguientes datos de información general de este sitio web:</p>

<p>La titularidad de este sitio web, <?php echo esc_html($data['url']); ?>, (en adelante, Sitio Web) la ostenta: <?php echo esc_html($data['responsable_tipo'] === 'persona_fisica' ? $data['responsable_nombre'] : $data['titulo']); ?>, con NIF: <?php echo esc_html($data['nif']); ?>, y cuyos datos de contacto son:</p>

<p>
Dirección: <?php echo esc_html($data['direccion']); ?><br>
Teléfono de contacto: <?php echo esc_html($data['telefono']); ?><br>
Email de contacto: <?php echo esc_html($data['email']); ?>
</p>

<h2>II. TÉRMINOS Y CONDICIONES GENERALES DE USO</h2>

<h3>El objeto de las condiciones: El Sitio Web</h3>
<p>El objeto de las presentes Condiciones Generales de Uso (en adelante, Condiciones) es regular el acceso y la utilización del Sitio Web. A los efectos de las presentes Condiciones se entenderá como Sitio Web: la apariencia externa de los interfaces de pantalla, tanto de forma estática como de forma dinámica, es decir, el árbol de navegación; y todos los elementos integrados tanto en los interfaces de pantalla como en el árbol de navegación (en adelante, Contenidos) y todos aquellos servicios o recursos en línea que en su caso ofrezca a los Usuarios (en adelante, Servicios).</p>

<p><?php echo esc_html($data['titulo']); ?> se reserva la facultad de modificar, en cualquier momento, y sin aviso previo, la presentación y configuración del Sitio Web y de los Contenidos y Servicios que en él pudieran estar incorporados. El Usuario reconoce y acepta que en cualquier momento <?php echo esc_html($data['titulo']); ?> pueda interrumpir, desactivar y/o cancelar cualquiera de estos elementos que se integran en el Sitio Web o el acceso a los mismos.</p>

<h3>El Usuario</h3>
<p>El acceso, la navegación y uso del Sitio Web, confiere la condición de Usuario, por lo que se aceptan, desde que se inicia la navegación por el Sitio Web, todas las Condiciones aquí establecidas, así como sus ulteriores modificaciones, sin perjuicio de la aplicación de la correspondiente normativa legal de obligado cumplimiento según el caso. Dada la relevancia de lo anterior, se recomienda al Usuario leerlas cada vez que visite el Sitio Web.</p>

<p>El Sitio Web de <?php echo esc_html($data['titulo']); ?> proporciona gran diversidad de información, servicios y datos. El Usuario asume su responsabilidad para realizar un uso correcto del Sitio Web. Esta responsabilidad se extenderá a:</p>

<ul>
    <li>Un uso de la información, Contenidos y/o Servicios y datos ofrecidos por <?php echo esc_html($data['titulo']); ?> sin que sea contrario a lo dispuesto por las presentes Condiciones, la Ley, la moral o el orden público, o que de cualquier otro modo puedan suponer lesión de los derechos de terceros o del mismo funcionamiento del Sitio Web.</li>
    <li>La veracidad y licitud de las informaciones aportadas por el Usuario en los formularios extendidos por <?php echo esc_html($data['titulo']); ?> para el acceso a ciertos Contenidos o Servicios ofrecidos por el Sitio Web. En todo caso, el Usuario notificará de forma inmediata a <?php echo esc_html($data['titulo']); ?> acerca de cualquier hecho que permita el uso indebido de la información registrada en dichos formularios, tales como, pero no solo, el robo, extravío, o el acceso no autorizado a identificadores y/o contraseñas, con el fin de proceder a su inmediata cancelación.</li>
</ul>

<p><?php echo esc_html($data['titulo']); ?> se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren la ley, el respeto a la dignidad de la persona, que sean discriminatorios, xenófobos, racistas, pornográficos, spamming, que atenten contra la juventud o la infancia, el orden o la seguridad pública o que, a su juicio, no resultaran adecuados para su publicación.</p>

<p>En cualquier caso, <?php echo esc_html($data['titulo']); ?> no será responsable de las opiniones vertidas por los Usuarios a través de comentarios u otras herramientas de blogging o de participación que pueda haber.</p>

<p>El mero acceso a este Sitio Web no supone entablar ningún tipo de relación de carácter comercial entre <?php echo esc_html($data['titulo']); ?> y el Usuario.</p>

<p>El Usuario declara ser mayor de edad y disponer de la capacidad jurídica suficiente para vincularse por las presentes Condiciones. Por lo tanto, este Sitio Web de <?php echo esc_html($data['titulo']); ?> no se dirige a menores de edad. <?php echo esc_html($data['titulo']); ?> declina cualquier responsabilidad por el incumplimiento de este requisito.</p>

<h2>III. ACCESO Y NAVEGACIÓN EN EL SITIO WEB: EXCLUSIÓN DE GARANTÍAS Y RESPONSABILIDAD</h2>

<p><?php echo esc_html($data['titulo']); ?> no garantiza la continuidad, disponibilidad y utilidad del Sitio Web, ni de los Contenidos o Servicios. <?php echo esc_html($data['titulo']); ?> hará todo lo posible por el buen funcionamiento del Sitio Web, sin embargo, no se responsabiliza ni garantiza que el acceso a este Sitio Web no vaya a ser ininterrumpido o que esté libre de error.</p>

<p>Tampoco se responsabiliza o garantiza que el contenido o software al que pueda accederse a través de este Sitio Web, esté libre de error o cause un daño al sistema informático (software y hardware) del Usuario. En ningún caso <?php echo esc_html($data['titulo']); ?> será responsable por las pérdidas, daños o perjuicios de cualquier tipo que surjan por el acceso, navegación y el uso del Sitio Web, incluyéndose, pero no limitándose, a los ocasionados a los sistemas informáticos o los provocados por la introducción de virus.</p>

<p><?php echo esc_html($data['titulo']); ?> tampoco se hace responsable de los daños que pudiesen ocasionarse a los usuarios por un uso inadecuado de este Sitio Web. En particular, no se hace responsable en modo alguno de las caídas, interrupciones, falta o defecto de las telecomunicaciones que pudieran ocurrir.</p>

<h2>IV. POLÍTICA DE ENLACES</h2>

<p>El Usuario o tercero que realice un hipervínculo desde una página web de otro, distinto, sitio web al Sitio Web de <?php echo esc_html($data['titulo']); ?> deberá saber que:</p>

<p>No se permite la reproducción —total o parcialmente— de ninguno de los Contenidos y/o Servicios del Sitio Web sin autorización expresa de <?php echo esc_html($data['titulo']); ?>.</p>

<p>No se permite tampoco ninguna manifestación falsa, inexacta o incorrecta sobre el Sitio Web de <?php echo esc_html($data['titulo']); ?>, ni sobre los Contenidos y/o Servicios del mismo.</p>

<p>A excepción del hipervínculo, el sitio web en el que se establezca dicho hiperenlace no contendrá ningún elemento, de este Sitio Web, protegido como propiedad intelectual por el ordenamiento jurídico español, salvo autorización expresa de <?php echo esc_html($data['titulo']); ?>.</p>

<p>El establecimiento del hipervínculo no implicará la existencia de relaciones entre <?php echo esc_html($data['titulo']); ?> y el titular del sitio web desde el cual se realice, ni el conocimiento y aceptación de <?php echo esc_html($data['titulo']); ?> de los contenidos, servicios y/o actividades ofrecidas en dicho sitio web, y viceversa.</p>

<h2>V. PROPIEDAD INTELECTUAL E INDUSTRIAL</h2>

<p><?php echo esc_html($data['titulo']); ?> por sí o como parte cesionaria, es titular de todos los derechos de propiedad intelectual e industrial del Sitio Web, así como de los elementos contenidos en el mismo (a título enunciativo y no exhaustivo, imágenes, sonido, audio, vídeo, software o textos, marcas o logotipos, combinaciones de colores, estructura y diseño, selección de materiales usados, programas de ordenador necesarios para su funcionamiento, acceso y uso, etc.). Serán, por consiguiente, obras protegidas como propiedad intelectual por el ordenamiento jurídico español, siéndoles aplicables tanto la normativa española y comunitaria en este campo, como los tratados internacionales relativos a la materia y suscritos por España.</p>

<p>Todos los derechos reservados. En virtud de lo dispuesto en la Ley de Propiedad Intelectual, quedan expresamente prohibidas la reproducción, la distribución y la comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o parte de los contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio técnico, sin la autorización de <?php echo esc_html($data['titulo']); ?>.</p>

<p>El Usuario se compromete a respetar los derechos de propiedad intelectual e industrial de <?php echo esc_html($data['titulo']); ?>. Podrá visualizar los elementos del Sitio Web o incluso imprimirlos, copiarlos y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, exclusivamente, para su uso personal. El Usuario, sin embargo, no podrá suprimir, alterar, o manipular cualquier dispositivo de protección o sistema de seguridad que estuviera instalado en el Sitio Web.</p>

<p>En caso de que el Usuario o tercero considere que cualquiera de los Contenidos del Sitio Web suponga una violación de los derechos de protección de la propiedad intelectual, deberá comunicarlo inmediatamente a <?php echo esc_html($data['titulo']); ?> a través de los datos de contacto del apartado de INFORMACIÓN GENERAL de este Aviso Legal y Condiciones Generales de Uso.</p>

<h2>VI. ACCIONES LEGALES, LEGISLACIÓN APLICABLE Y JURISDICCIÓN</h2>

<p><?php echo esc_html($data['titulo']); ?> se reserva la facultad de presentar las acciones civiles o penales que considere necesarias por la utilización indebida del Sitio Web y Contenidos, o por el incumplimiento de las presentes Condiciones.</p>

<p>La relación entre el Usuario y <?php echo esc_html($data['titulo']); ?> se regirá por