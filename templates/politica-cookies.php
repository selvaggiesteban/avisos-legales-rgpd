<?php
// Asegurarse de que $data está disponible y contiene la información necesaria
if (!isset($data) || !is_array($data)) {
    return;
}
?>
<h1>Política de Cookies</h1>

<p>El acceso a este Sitio Web puede implicar la utilización de cookies. Las cookies son pequeñas cantidades de información que se almacenan en el navegador utilizado por cada Usuario —en los distintos dispositivos que pueda utilizar para navegar— para que el servidor recuerde cierta información que posteriormente y únicamente el servidor que la implementó leerá. Las cookies facilitan la navegación, la hacen más amigable, y no dañan el dispositivo de navegación.</p>

<h2>Información sobre el tipo de cookies que se utilizan</h2>

<p>Las cookies son procedimientos automáticos de recogida de información relativa a las preferencias determinadas por el Usuario durante su visita al Sitio Web con el fin de reconocerlo como Usuario, y personalizar su experiencia y el uso del Sitio Web, y pueden también, por ejemplo, ayudar a identificar y resolver errores.</p>

<p>La información recabada a través de las cookies puede incluir la fecha y hora de visitas al Sitio Web, las páginas visionadas, el tiempo que ha estado en el Sitio Web y los sitios visitados justo antes y después del mismo. Sin embargo, ninguna cookie permite que esta misma pueda contactarse con el número de teléfono del Usuario o con cualquier otro medio de contacto personal. Ninguna cookie puede extraer información del disco duro del Usuario o robar información personal.</p>

<h2>Cómo gestionar las cookies en el navegador</h2>

<p>El Usuario tiene la opción de permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador. Al deshabilitar las cookies, algunos de los servicios disponibles podrían dejar de estar operativos. La forma de deshabilitar las cookies es diferente para cada navegador, pero normalmente puede hacerse desde el menú Herramientas u Opciones.</p>

<h2>Tipos de cookies que utilizamos</h2>

<p>Este Sitio Web utiliza las siguientes tipos de cookies:</p>

<ul>
    <li><strong>Cookies técnicas:</strong> Son aquéllas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan.</li>
    <li><strong>Cookies de análisis:</strong> Son aquéllas que permiten al responsable de las mismas, el seguimiento y análisis del comportamiento de los usuarios de los sitios web a los que están vinculadas.</li>
    <li><strong>Cookies de personalización:</strong> Son aquéllas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario.</li>
</ul>

<h2>Aceptación de la Política de cookies</h2>

<p><?php echo esc_html($data['titulo']); ?> asume que usted acepta el uso de cookies. No obstante, muestra información sobre su Política de cookies en la parte inferior o superior de cualquier página del portal con cada inicio de sesión con el objeto de que usted sea consciente.</p>

<p>Ante esta información es posible llevar a cabo las siguientes acciones:</p>

<ul>
    <li>Aceptar cookies: No se volverá a visualizar este aviso al acceder a cualquier página del portal durante la presente sesión.</li>
    <li>Modificar la configuración: Podrá obtener más información sobre qué son las cookies, conocer la Política de cookies de <?php echo esc_html($data['titulo']); ?> y modificar la configuración de su navegador.</li>
</ul>